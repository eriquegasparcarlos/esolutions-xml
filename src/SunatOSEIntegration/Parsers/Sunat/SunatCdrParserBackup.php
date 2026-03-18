<?php

namespace App\ESolutions\SunatOSEIntegration\Parsers\Sunat;

use App\ESolutions\SunatOSEIntegration\Xml\XmlExtractor;
use App\ESolutions\SunatOSEIntegration\Xml\XmlHelper;
use App\ESolutions\SunatOSEIntegration\Parsers\CdrResponseParserInterface;
use App\Models\User;
use DOMXPath;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class SunatCdrParserBackup implements CdrResponseParserInterface
{
    public function parseBill(array $result): array
    {
        $this->saveLog($result, 'parseBill-1');

        $raw = $result['raw'] ?? '';
        $hasCdr = false;
        $codeNumeric = null;
        $errors = [];
        if (!empty($raw)) {
            $dom = XmlHelper::loadDom($raw);
            $xpath = new \DOMXPath($dom);

            // Busca el applicationResponse (CDR)
            $cdrBase64 = XmlHelper::getNodeValue($xpath, "//*[local-name()='applicationResponse']");
            if ($cdrBase64 && base64_decode($cdrBase64, true)) {
                $hasCdr = true;
            }

            if ($hasCdr) {
                // Respuesta exitosa, parsea CDR
                $cdrZip = base64_decode($cdrBase64);
                $xmlCdr = (new XmlExtractor())->extractXmlFromZip($cdrZip);
                $domCdr = XmlHelper::loadDom($xmlCdr);
                $xpathCdr = new \DOMXPath($domCdr);
                $xpathCdr->registerNamespace('cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2');
                $responseCode = XmlHelper::getNodeValue($xpathCdr, '//cbc:ResponseCode') ?? 'UNKNOWN';
                $rawMessage = XmlHelper::getNodeValue($xpathCdr, '//cbc:Description') ?? 'Sin descripción.';
                $description = Redis::hget('sunat:codes', $responseCode) ?: $rawMessage;
                $notes = XmlHelper::getNodeValues($xpathCdr, '//cbc:Note');
                $resData = [
                    'success' => true,
                    'sunat_success' => $responseCode === '0',
                    'message' => $description,
                    'code' => $responseCode,
                    'ticket' => null,
                    'cdr' => $xmlCdr,
                    'notes' => $notes ?: null,
                    'errors' => null,
                ];
                $this->saveLog($resData, 'parseBill-2');

                return $resData;
            } else {
                // Respuesta de error
                $code = XmlHelper::getNodeValue($xpath, "//*[local-name()='faultcode']");
                $msg = XmlHelper::getNodeValue($xpath, "//*[local-name()='faultstring']");
                $errors[] = $msg;

                if (preg_match('/(\d{3,4})$/', $code, $matches)) {
                    $codeNumeric = $matches[1];
                }

                $description = $codeNumeric
                    ? (Redis::hget('sunat:codes', $codeNumeric) ?: $msg)
                    : ($msg ?: $code);

                $resData = [
                    'success' => true,
                    'sunat_success' => false,
                    'message' => $description ?? 'No se recibió CDR.',
                    'code' => $codeNumeric ?? $code,
                    'ticket' => null,
                    'cdr' => null,
                    'notes' => null,
                    'errors' => array_filter($errors),
                ];
                $this->saveLog($resData, 'parseBill-3');

                return $resData;
            }
        }

        // Si no hay raw...
        $resData = [
            'success' => false,
            'sunat_success' => false,
            'message' => 'No se recibió respuesta válida de SUNAT.',
            'code' => null,
            'ticket' => null,
            'cdr' => null,
            'notes' => null,
            'errors' => ['No se recibió respuesta SOAP'],
        ];
        $this->saveLog($resData, 'parseBill-4');

        return $resData;
    }

    public function parseSummary(array $result): array
    {
        $this->saveLog($result, 'parseSummary-1');
        $ticket = null;
        $code = null;
        $errors = [];

        if (!empty($result['raw'])) {
            $dom = XmlHelper::loadDom($result['raw']);
            $xpath = new DOMXPath($dom);

            $ticket = XmlHelper::getNodeValue($xpath, "//*[local-name()='ticket']");

            if (!$ticket) {
                $code = XmlHelper::getNodeValue($xpath, "//*[local-name()='faultcode']");
                $msg = XmlHelper::getNodeValue($xpath, "//*[local-name()='faultstring']");
                $errors[] = $msg;

                // Extraer solo el código numérico para Redis
                $codeNumeric = null;
                if (preg_match('/(\d{3,4})$/', $code, $matches)) {
                    $codeNumeric = $matches[1];
                }

                $description = $codeNumeric ? (Redis::hget('sunat:codes', $codeNumeric) ?: $msg) : ($msg ?: $code);
            }
        }

        $resData = [
            'success' => true,
            'sunat_success' => (bool)$ticket,
            'message' => $ticket ? 'Ticket recibido correctamente.' : ($description ?? 'No se recibió ticket.'),
            'code' => $ticket ? null : ($codeNumeric ?? $code),
            'ticket' => $ticket,
            'cdr' => null,
            'errors' => $ticket ? null : array_filter($errors),
        ];
        $this->saveLog($resData, 'parseSummary-1');

        return $resData;
    }

    public function parseGetStatus(array $result): array
    {
        $this->saveLog($result, 'parseGetStatus-1');

        $raw = $result['raw'] ?? '';
        if (empty($raw)) {
            $resData = [
                'success' => false,
                'sunat_success' => false,
                'message' => 'No se recibió respuesta válida de SUNAT.',
                'code' => null,
                'ticket' => null,
                'cdr' => null,
                'notes' => null,
                'errors' => ['No se recibió respuesta SOAP'],
            ];
            $this->saveLog($result, 'parseGetStatus-2');

            return $resData;
        }

        try {
            $dom = XmlHelper::loadDom($raw);
            $xpath = new \DOMXPath($dom);

            // 1) Intentar leer el formato de getStatus de SUNAT: <status><content>...</content><statusCode>...</statusCode></status>
            $statusCode = XmlHelper::getNodeValue($xpath, "//*[local-name()='statusCode']");
            $content = XmlHelper::getNodeValue($xpath, "//*[local-name()='content']");

            // 1.a) Si hay <Fault>, retornar error mapeado
            $faultCode = XmlHelper::getNodeValue($xpath, "//*[local-name()='faultcode']");
            $faultStr = XmlHelper::getNodeValue($xpath, "//*[local-name()='faultstring']");
            if ($faultCode || $faultStr) {
                // Extrae código numérico final (e.g., soap-env:Client.2220 -> 2220)
                $numeric = null;
                if ($faultCode && preg_match('/(\d{3,4})$/', $faultCode, $m)) {
                    $numeric = $m[1];
                }
                // Descripción preferente desde Redis
                $desc = $numeric ? (Redis::hget('sunat:codes', $numeric) ?: $faultStr) : ($faultStr ?: $faultCode);

                $resData = [
                    'success' => true,    // hubo respuesta
                    'sunat_success' => false,   // rechazo/observación
                    'message' => $desc ?? 'Error en getStatus.',
                    'code' => $numeric ?? $faultCode,
                    'ticket' => null,
                    'cdr' => null,
                    'notes' => null,
                    'errors' => array_filter([$faultCode, $faultStr]),
                ];
                $this->saveLog($result, 'parseGetStatus-3');

                return $resData;
            }

            // 2) Si vino statusCode/control de estado sin Fault:
            if ($statusCode !== null) {
                // 2.a) statusCode = 0 -> debe venir CDR en content (base64 ZIP)
                if ($statusCode === '0') {
                    if ($content && base64_decode($content, true)) {
                        // NO hagas base64_decode aquí: XmlExtractor ya lo hace.
                        $cdrZip = base64_decode($content);
                        $xmlCdr = (new XmlExtractor())->extractXmlFromZip($cdrZip);

                        $domCdr = XmlHelper::loadDom($xmlCdr);
                        $xpCdr = new \DOMXPath($domCdr);
                        $xpCdr->registerNamespace('cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2');

                        $respCode = XmlHelper::getNodeValue($xpCdr, '//cbc:ResponseCode') ?? 'UNKNOWN';
                        $rawMsg = XmlHelper::getNodeValue($xpCdr, '//cbc:Description') ?? 'Sin descripción.';
                        $desc = Redis::hget('sunat:codes', $respCode) ?: $rawMsg;
                        $notes = XmlHelper::getNodeValues($xpCdr, '//cbc:Note');

                        $resData = [
                            'success' => true,
                            'sunat_success' => ($respCode === '0'),
                            'message' => $desc,
                            'code' => $respCode,
                            'ticket' => null,
                            'cdr' => $xmlCdr,
                            'notes' => $notes ?: null,
                            'errors' => null,
                        ];
                        $this->saveLog($result, 'parseGetStatus-4');

                        return $resData;
                    }

                    // statusCode=0 pero content no es base64 válido
                    $resData = [
                        'success' => true,
                        'sunat_success' => false,
                        'message' => 'SUNAT respondió estado OK pero no entregó un CDR válido.',
                        'code' => 'NO_CDR',
                        'ticket' => null,
                        'cdr' => null,
                        'notes' => null,
                        'errors' => ['Content no es base64 ZIP válido.'],
                    ];
                    $this->saveLog($result, 'parseGetStatus-5');

                    return $resData;
                }

                // 2.b) statusCode = 98 -> en proceso
                if ($statusCode === '98') {
                    $resData = [
                        'success' => true,
                        'sunat_success' => false,
                        'message' => 'El ticket aún está en procesamiento (98).',
                        'code' => '98',
                        'ticket' => null,
                        'cdr' => null,
                        'notes' => null,
                        'errors' => null,
                    ];
                    $this->saveLog($result, 'parseGetStatus-6');

                    return $resData;
                }

                // 2.c) Otros códigos -> error / ticket inválido / etc.
                // Algunos casos devuelven texto plano en content, p.ej. "El ticket no existe" (0127)
                $desc = $content ?: Redis::hget('sunat:codes', $statusCode) ?: 'Error de estado en SUNAT.';

                $resData = [
                    'success' => true,
                    'sunat_success' => false,
                    'message' => $desc,
                    'code' => $statusCode,
                    'ticket' => null,
                    'cdr' => null,
                    'notes' => null,
                    'errors' => $content ? [$content] : null,
                ];
                $this->saveLog($result, 'parseGetStatus-7');

                return $resData;
            }

            // 3) No hay ni Fault ni statusCode/content -> respuesta inesperada
            $resData = [
                'success' => true,
                'sunat_success' => false,
                'message' => 'Estructura de respuesta getStatus no reconocida.',
                'code' => 'UNEXPECTED_STATUS_FORMAT',
                'ticket' => null,
                'cdr' => null,
                'notes' => null,
                'errors' => null,
            ];
            $this->saveLog($result, 'parseGetStatus-8');

            return $resData;
        } catch (\Exception $e) {
            $resData = [
                'success' => false,
                'sunat_success' => false,
                'message' => 'Error al procesar respuesta de getStatus: ' . $e->getMessage(),
                'code' => 'GETSTATUS_PARSE_ERROR',
                'ticket' => null,
                'cdr' => null,
                'notes' => null,
                'errors' => [$e->getMessage()],
            ];
            $this->saveLog($result, 'parseGetStatus-9');

            return $resData;
        }
    }

    private function saveLog($data, $indicate): void
    {
        Log::build([
            'driver' => 'daily',
            'path' => storage_path('logs/user-' . auth()->id() . '.log'),
            'level' => 'debug',
            'days' => 3,
        ])->info('Resultado SUNAT', [
            'data' => $data,
            'indicate' => $indicate
        ]);
    }
}
