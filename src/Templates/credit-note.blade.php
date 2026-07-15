<?php

use ESolutions\Xml\Support\XmlTpl;

echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' . "\n";

?>
<CreditNote xmlns="urn:oasis:names:specification:ubl:schema:xsd:CreditNote-2"
            xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2"
            xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2"
            xmlns:ccts="urn:un:unece:uncefact:documentation:2"
            xmlns:ds="http://www.w3.org/2000/09/xmldsig#"
            xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2"
            xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2"
            xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2"
            xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">

    <ext:UBLExtensions>
        @if(!empty($ublExtensionsXml))
            {!! $ublExtensionsXml !!}
        @endif
    </ext:UBLExtensions>

    <cbc:UBLVersionID>2.1</cbc:UBLVersionID>
    <cbc:CustomizationID>2.0</cbc:CustomizationID>

    <cbc:ID>{{ $doc['id'] ?? '' }}</cbc:ID>
    <cbc:IssueDate>{{ $doc['issueDate'] ?? '' }}</cbc:IssueDate>
    <cbc:IssueTime>{{ $doc['issueTime'] ?? '' }}</cbc:IssueTime>

    <cbc:CreditNoteTypeCode listAgencyName="PE:SUNAT"
                            listName="Tipo de Documento"
                            listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01">07</cbc:CreditNoteTypeCode>

    @foreach(($notes ?? []) as $note)
        <cbc:Note languageLocaleID="{{ $note['code'] ?? '' }}"><![CDATA[{!! XmlTpl::cdata($note['text'] ?? '') !!}]]></cbc:Note>
    @endforeach

    <cbc:DocumentCurrencyCode listID="ISO 4217 Alpha"
                              listName="Currency"
                              listAgencyName="United Nations Economic Commission for Europe">{{ $currency }}</cbc:DocumentCurrencyCode>

    {{-- DiscrepancyResponse --}}
    @foreach(($discrepancies ?? []) as $disc)
        <cac:DiscrepancyResponse>
            <cbc:ReferenceID>{{ $disc['referenceId'] ?? '' }}</cbc:ReferenceID>
            <cbc:ResponseCode>{{ $disc['reasonCode'] ?? '' }}</cbc:ResponseCode>
            <cbc:Description><![CDATA[{!! XmlTpl::cdata($disc['description'] ?? '') !!}]]></cbc:Description>
        </cac:DiscrepancyResponse>
    @endforeach

    {{-- BillingReference --}}
    @foreach(($billingReferences ?? []) as $br)
        <cac:BillingReference>
            <cac:InvoiceDocumentReference>
                <cbc:ID>{{ $br['id'] ?? '' }}</cbc:ID>
                <cbc:DocumentTypeCode listAgencyName="PE:SUNAT"
                                      listName="Tipo de Documento"
                                      listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01">{{ $br['documentTypeCode'] ?? '' }}</cbc:DocumentTypeCode>
            </cac:InvoiceDocumentReference>
        </cac:BillingReference>
    @endforeach

    {{-- Related documents --}}
    @foreach(($relatedDocuments ?? []) as $rel)
        @php
            $ind = (string)($rel['ind'] ?? '');
            $tip = (string)($rel['docType'] ?? '');
        @endphp

        @if($ind === '3')
            <cac:OrderReference>
                <cbc:ID>{{ $rel['docNumber'] ?? '' }}</cbc:ID>
            </cac:OrderReference>
        @endif

        @if($ind === '1')
            <cac:DespatchDocumentReference>
                <cbc:ID>{{ $rel['docNumber'] ?? '' }}</cbc:ID>
                <cbc:DocumentTypeCode listAgencyName="PE:SUNAT"
                                      listName="Tipo de Documento"
                                      listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo01">{{ $tip }}</cbc:DocumentTypeCode>
            </cac:DespatchDocumentReference>
        @endif

        @if($ind === '99')
            <cac:AdditionalDocumentReference>
                <cbc:ID>{{ $rel['docNumber'] ?? '' }}</cbc:ID>
                <cbc:DocumentTypeCode listAgencyName="PE:SUNAT"
                                      listName="Identificador de documento relacionado"
                                      listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo12">{{ $tip }}</cbc:DocumentTypeCode>
            </cac:AdditionalDocumentReference>
        @endif
    @endforeach

    {{-- Signature --}}
    <cac:Signature>
        <cbc:ID>{{ $signature['ruc'] ?? ($supplier['documentNumber'] ?? '') }}</cbc:ID>
        <cbc:Note>{{ $signature['facturerId'] ?? '' }}</cbc:Note>
        <cac:SignatoryParty>
            <cac:PartyIdentification>
                <cbc:ID>{{ $signature['ruc'] ?? ($supplier['documentNumber'] ?? '') }}</cbc:ID>
            </cac:PartyIdentification>
            <cac:PartyName>
                <cbc:Name><![CDATA[{!! XmlTpl::cdata($signature['socialReason'] ?? ($supplier['legalName'] ?? '')) !!}]]></cbc:Name>
            </cac:PartyName>
        </cac:SignatoryParty>
        <cac:DigitalSignatureAttachment>
            <cac:ExternalReference>
                <cbc:URI>{{ $signature['signatureUri'] ?? '' }}</cbc:URI>
            </cac:ExternalReference>
        </cac:DigitalSignatureAttachment>
    </cac:Signature>

    {{-- Supplier --}}
    <cac:AccountingSupplierParty>
        <cac:Party>
            <cac:PartyIdentification>
                <cbc:ID schemeID="{{ $supplier['documentType'] ?? '6' }}"
                        schemeName="Documento de Identidad"
                        schemeAgencyName="PE:SUNAT"
                        schemeURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06">{{ $supplier['documentNumber'] ?? '' }}</cbc:ID>
            </cac:PartyIdentification>

            <cac:PartyName>
                <cbc:Name><![CDATA[{!! XmlTpl::cdata($supplier['commercialName'] ?? '') !!}]]></cbc:Name>
            </cac:PartyName>

            <cac:PartyLegalEntity>
                <cbc:RegistrationName><![CDATA[{!! XmlTpl::cdata($supplier['legalName'] ?? '') !!}]]></cbc:RegistrationName>

                @php $sAddr = $supplier['address'] ?? null; @endphp
                @if(is_array($sAddr))
                    <cac:RegistrationAddress>
                        <cbc:AddressTypeCode>{{ $sAddr['addressTypeCode'] ?? '-' }}</cbc:AddressTypeCode>
                        <cbc:CitySubdivisionName><![CDATA[{!! XmlTpl::cdata($sAddr['urbanization'] ?? '-') !!}]]></cbc:CitySubdivisionName>
                        <cbc:CityName><![CDATA[{!! XmlTpl::cdata($sAddr['province'] ?? '-') !!}]]></cbc:CityName>
                        <cbc:CountrySubentity><![CDATA[{!! XmlTpl::cdata($sAddr['department'] ?? '-') !!}]]></cbc:CountrySubentity>
                        <cbc:CountrySubentityCode><![CDATA[{!! XmlTpl::cdata($sAddr['ubigeo'] ?? '-') !!}]]></cbc:CountrySubentityCode>
                        <cbc:District><![CDATA[{!! XmlTpl::cdata($sAddr['district'] ?? '-') !!}]]></cbc:District>
                        <cac:AddressLine>
                            <cbc:Line><![CDATA[{!! XmlTpl::cdata($sAddr['line'] ?? '-') !!}]]></cbc:Line>
                        </cac:AddressLine>
                        <cac:Country>
                            <cbc:IdentificationCode>{{ $sAddr['countryCode'] ?? 'PE' }}</cbc:IdentificationCode>
                        </cac:Country>
                    </cac:RegistrationAddress>
                @endif
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:AccountingSupplierParty>

    {{-- Customer --}}
    <cac:AccountingCustomerParty>
        <cac:Party>
            <cac:PartyIdentification>
                <cbc:ID schemeID="{{ $customer['documentType'] ?? '' }}"
                        schemeName="Documento de Identidad"
                        schemeAgencyName="PE:SUNAT"
                        schemeURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo06">{{ $customer['documentNumber'] ?? '' }}</cbc:ID>
            </cac:PartyIdentification>

            <cac:PartyLegalEntity>
                <cbc:RegistrationName><![CDATA[{!! XmlTpl::cdata($customer['legalName'] ?? '-') !!}]]></cbc:RegistrationName>

                @php $cAddr = $customer['address'] ?? null; @endphp
                @if(is_array($cAddr) && !empty($cAddr['line']) && ($cAddr['ubigeo'] ?? '-') !== '-')
                    <cac:RegistrationAddress>
                        <cbc:AddressTypeCode>{{ $cAddr['addressTypeCode'] ?? '-' }}</cbc:AddressTypeCode>
                        <cbc:CitySubdivisionName>{{ $cAddr['urbanization'] ?? '-' }}</cbc:CitySubdivisionName>
                        <cbc:CityName>{{ $cAddr['province'] ?? '-' }}</cbc:CityName>
                        <cbc:CountrySubentity>{{ $cAddr['department'] ?? '-' }}</cbc:CountrySubentity>
                        <cbc:CountrySubentityCode><![CDATA[{!! XmlTpl::cdata($cAddr['ubigeo'] ?? '-') !!}]]></cbc:CountrySubentityCode>
                        <cbc:District>{{ $cAddr['district'] ?? '-' }}</cbc:District>
                        <cac:AddressLine>
                            <cbc:Line><![CDATA[{!! XmlTpl::cdata($cAddr['line'] ?? '-') !!}]]></cbc:Line>
                        </cac:AddressLine>
                        <cac:Country>
                            <cbc:IdentificationCode>{{ $cAddr['countryCode'] ?? 'PE' }}</cbc:IdentificationCode>
                        </cac:Country>
                    </cac:RegistrationAddress>
                @endif

            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:AccountingCustomerParty>

    {{-- Delivery --}}
    @if(is_array($delivery) && !empty($delivery['address']) && is_array($delivery['address']))
        @php $dAddr = $delivery['address']; @endphp
        @if(!empty($dAddr['line']) && ($dAddr['ubigeo'] ?? '-') !== '-')
            <cac:DeliveryTerms>
                <cac:DeliveryLocation>
                    <cac:Address>
                        <cbc:StreetName>{{ $dAddr['line'] ?? '' }}</cbc:StreetName>
                        <cbc:CitySubdivisionName/>
                        <cbc:CityName/>
                        <cbc:CountrySubentity/>
                        <cbc:CountrySubentityCode>{{ $dAddr['ubigeo'] ?? '' }}</cbc:CountrySubentityCode>
                        <cbc:District/>
                        <cac:Country>
                            <cbc:IdentificationCode listID="ISO 3166-1"
                                                    listAgencyName="United Nations Economic Commission for Europe"
                                                    listName="Country">{{ $dAddr['countryCode'] ?? 'PE' }}</cbc:IdentificationCode>
                        </cac:Country>
                    </cac:Address>
                </cac:DeliveryLocation>
            </cac:DeliveryTerms>
        @endif
    @endif

    {{-- Detraction --}}
    @if(is_array($detraction) && !empty($detraction['bankAccount']) && $detraction['bankAccount'] !== '-')
        <cac:PaymentMeans>
            <cbc:ID>Detraccion</cbc:ID>
            <cbc:PaymentMeansCode listName="Medio de pago"
                                  listAgencyName="PE:SUNAT"
                                  listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo59">{{ $detraction['paymentMeansCode'] ?? '' }}</cbc:PaymentMeansCode>
            <cac:PayeeFinancialAccount>
                <cbc:ID>{{ $detraction['bankAccount'] ?? '' }}</cbc:ID>
            </cac:PayeeFinancialAccount>
        </cac:PaymentMeans>

        <cac:PaymentTerms>
            <cbc:ID>Detraccion</cbc:ID>
            <cbc:PaymentMeansID schemeName="Codigo de detraccion"
                                schemeAgencyName="PE:SUNAT"
                                schemeURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo54">{{ $detraction['detractionCode'] ?? '' }}</cbc:PaymentMeansID>
            <cbc:PaymentPercent>{{ $detraction['percent'] ?? '0' }}</cbc:PaymentPercent>
            <cbc:Amount currencyID="{{ $detraction['currency'] ?? 'PEN' }}">{{ $detraction['amount'] ?? '0.00' }}</cbc:Amount>
        </cac:PaymentTerms>
    @endif

    {{-- Payment terms --}}
    @if(is_array($paymentTerms) && !empty($paymentTerms['paymentMeansId']))
        <cac:PaymentTerms>
            <cbc:ID>{{ $paymentTerms['id'] ?? 'FormaPago' }}</cbc:ID>
            <cbc:PaymentMeansID>{{ $paymentTerms['paymentMeansId'] }}</cbc:PaymentMeansID>
            @if(isset($paymentTerms['amount']) && $paymentTerms['amount'] !== null && !empty($paymentTerms['currency']))
                <cbc:Amount currencyID="{{ $paymentTerms['currency'] }}">{{ $paymentTerms['amount'] }}</cbc:Amount>
            @endif
        </cac:PaymentTerms>
    @endif

    @foreach(($installments ?? []) as $inst)
        <cac:PaymentTerms>
            <cbc:ID>{{ $inst['id'] ?? 'FormaPago' }}</cbc:ID>
            <cbc:PaymentMeansID>{{ $inst['paymentMeansId'] ?? '' }}</cbc:PaymentMeansID>
            @if(isset($inst['amount']) && $inst['amount'] !== null && !empty($inst['currency']))
                <cbc:Amount currencyID="{{ $inst['currency'] }}">{{ $inst['amount'] }}</cbc:Amount>
            @endif
            @if(!empty($inst['dueDate']))
                <cbc:PaymentDueDate>{{ $inst['dueDate'] }}</cbc:PaymentDueDate>
            @endif
        </cac:PaymentTerms>
    @endforeach

    {{-- Retention --}}
    @if(is_array($retention) && (string)($doc['retentionEnabled'] ?? '0') === '1')
        <cac:AllowanceCharge>
            <cbc:ChargeIndicator>{{ $retention['chargeIndicator'] ? 'true' : 'false' }}</cbc:ChargeIndicator>
            <cbc:AllowanceChargeReasonCode listAgencyName="PE:SUNAT"
                                           listName="Cargo/descuento"
                                           listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo53">{{ $retention['reasonCode'] ?? '' }}</cbc:AllowanceChargeReasonCode>
            <cbc:MultiplierFactorNumeric>{{ $retention['multiplierFactorNumeric'] ?? '0' }}</cbc:MultiplierFactorNumeric>
            <cbc:Amount currencyID="{{ $retention['currency'] ?? $currency }}">{{ $retention['amount'] ?? '0.00' }}</cbc:Amount>
            <cbc:BaseAmount currencyID="{{ $retention['currency'] ?? $currency }}">{{ $retention['baseAmount'] ?? '0.00' }}</cbc:BaseAmount>
        </cac:AllowanceCharge>
    @endif

    {{-- Prepaid payments --}}
    @foreach(($prepaidPayments ?? []) as $pp)
        <cac:PrepaidPayment>
            <cbc:ID schemeAgencyName="PE:SUNAT" schemeName="Anticipo">{{ $pp['id'] ?? '' }}</cbc:ID>
            <cbc:PaidAmount currencyID="{{ $pp['currency'] ?? $currency }}">{{ $pp['paidAmount'] ?? '0.00' }}</cbc:PaidAmount>
        </cac:PrepaidPayment>
    @endforeach

    {{-- Global AllowanceCharge --}}
    @foreach(($globalAllowances ?? []) as $ac)
        @if(!empty($ac['reasonCode']) && $ac['reasonCode'] !== '-')
            <cac:AllowanceCharge>
                <cbc:ChargeIndicator>{{ !empty($ac['chargeIndicator']) ? 'true' : 'false' }}</cbc:ChargeIndicator>
                <cbc:AllowanceChargeReasonCode>{{ $ac['reasonCode'] }}</cbc:AllowanceChargeReasonCode>
                <cbc:MultiplierFactorNumeric>{{ $ac['multiplierFactorNumeric'] ?? '0' }}</cbc:MultiplierFactorNumeric>
                <cbc:Amount currencyID="{{ $ac['currency'] ?? $currency }}">{{ $ac['amount'] ?? '0.00' }}</cbc:Amount>
                <cbc:BaseAmount currencyID="{{ $ac['currency'] ?? $currency }}">{{ $ac['baseAmount'] ?? '0.00' }}</cbc:BaseAmount>
            </cac:AllowanceCharge>
        @endif
    @endforeach

    {{-- Header taxes --}}
    @if(is_array($taxTotal))
        <cac:TaxTotal>
            <cbc:TaxAmount currencyID="{{ $taxTotal['currency'] ?? $currency }}">{{ $taxTotal['taxAmount'] ?? '0.00' }}</cbc:TaxAmount>
            @foreach(($taxTotal['subtotals'] ?? []) as $t)
                <cac:TaxSubtotal>
                    @if((string)($t['schemeId'] ?? '') !== '7152' && $t['taxableAmount'] !== null)
                        <cbc:TaxableAmount currencyID="{{ $taxTotal['currency'] ?? $currency }}">{{ $t['taxableAmount'] }}</cbc:TaxableAmount>
                    @endif
                    <cbc:TaxAmount currencyID="{{ $taxTotal['currency'] ?? $currency }}">{{ $t['taxAmount'] ?? '0.00' }}</cbc:TaxAmount>
                    <cac:TaxCategory>
                        <cac:TaxScheme>
                            <cbc:ID schemeID="UN/ECE 5153"
                                    schemeName="Codigo de tributos"
                                    schemeAgencyName="PE:SUNAT">{{ $t['schemeId'] ?? '' }}</cbc:ID>
                            <cbc:Name>{{ $t['schemeName'] ?? '' }}</cbc:Name>
                            <cbc:TaxTypeCode>{{ $t['taxTypeCode'] ?? '' }}</cbc:TaxTypeCode>
                        </cac:TaxScheme>
                    </cac:TaxCategory>
                </cac:TaxSubtotal>
            @endforeach
        </cac:TaxTotal>
    @endif

    {{-- Totals --}}
    @if(is_array($monetaryTotal))
        <cac:LegalMonetaryTotal>
            <cbc:LineExtensionAmount currencyID="{{ $monetaryTotal['currency'] ?? $currency }}">{{ $monetaryTotal['lineExtensionAmount'] ?? '0.00' }}</cbc:LineExtensionAmount>

            @if(isset($monetaryTotal['taxInclusiveAmount']) && $monetaryTotal['taxInclusiveAmount'] !== null)
                <cbc:TaxInclusiveAmount currencyID="{{ $monetaryTotal['currency'] ?? $currency }}">{{ $monetaryTotal['taxInclusiveAmount'] }}</cbc:TaxInclusiveAmount>
            @endif

            <cbc:AllowanceTotalAmount currencyID="{{ $monetaryTotal['currency'] ?? $currency }}">{{ $monetaryTotal['allowanceTotalAmount'] ?? '0.00' }}</cbc:AllowanceTotalAmount>
            <cbc:ChargeTotalAmount currencyID="{{ $monetaryTotal['currency'] ?? $currency }}">{{ $monetaryTotal['chargeTotalAmount'] ?? '0.00' }}</cbc:ChargeTotalAmount>

            @if(isset($monetaryTotal['prepaidAmount']) && $monetaryTotal['prepaidAmount'] !== null)
                <cbc:PrepaidAmount currencyID="{{ $monetaryTotal['currency'] ?? $currency }}">{{ $monetaryTotal['prepaidAmount'] }}</cbc:PrepaidAmount>
            @endif

            <cbc:PayableAmount currencyID="{{ $monetaryTotal['currency'] ?? $currency }}">{{ $monetaryTotal['payableAmount'] ?? '0.00' }}</cbc:PayableAmount>
        </cac:LegalMonetaryTotal>
    @endif

    {{-- Lines --}}
    @foreach(($lines ?? []) as $line)
        @php
            $lineId = (string)($line['id'] ?? '');
            $pv01 = (float)($line['priceAmount01'] ?? 0);
            $pv02 = (float)($line['priceAmount02'] ?? 0);

            $lineTax = $line['taxTotal'] ?? null;
            $lineAllowances = $line['allowances'] ?? [];
            $item = $line['item'] ?? [];
            $price = $line['price'] ?? [];
        @endphp

        <cac:CreditNoteLine>
            <cbc:ID>{{ $lineId }}</cbc:ID>

            <cbc:CreditedQuantity unitCode="{{ $line['unitCode'] ?? '' }}"
                                  unitCodeListID="UN/ECE rec 20"
                                  unitCodeListAgencyName="United Nations Economic Commission for Europe">{{ $line['quantity'] ?? '0' }}</cbc:CreditedQuantity>

            <cbc:LineExtensionAmount currencyID="{{ $line['currency'] ?? $currency }}">{{ $line['lineExtensionAmount'] ?? '0.00' }}</cbc:LineExtensionAmount>

            {{-- PricingReference 01/02 --}}
            @if($pv01 > 0)
                <cac:PricingReference>
                    <cac:AlternativeConditionPrice>
                        <cbc:PriceAmount currencyID="{{ $line['currency'] ?? $currency }}">{{ $line['priceAmount01'] }}</cbc:PriceAmount>
                        <cbc:PriceTypeCode listName="Tipo de Precio"
                                           listAgencyName="PE:SUNAT"
                                           listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo16">01</cbc:PriceTypeCode>
                    </cac:AlternativeConditionPrice>
                </cac:PricingReference>
            @endif
            @if($pv02 > 0)
                <cac:PricingReference>
                    <cac:AlternativeConditionPrice>
                        <cbc:PriceAmount currencyID="{{ $line['currency'] ?? $currency }}">{{ $line['priceAmount02'] }}</cbc:PriceAmount>
                        <cbc:PriceTypeCode listName="Tipo de Precio"
                                           listAgencyName="PE:SUNAT"
                                           listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo16">02</cbc:PriceTypeCode>
                    </cac:AlternativeConditionPrice>
                </cac:PricingReference>
            @endif

            {{-- Line AllowanceCharge --}}
            @foreach(($lineAllowances ?? []) as $ac)
                @php $cod = (string)($ac['reasonCode'] ?? ''); @endphp
                @if(in_array($cod, ['00','01','47','48'], true))
                    <cac:AllowanceCharge>
                        <cbc:ChargeIndicator>{{ !empty($ac['chargeIndicator']) ? 'true' : 'false' }}</cbc:ChargeIndicator>
                        <cbc:AllowanceChargeReasonCode>{{ $cod }}</cbc:AllowanceChargeReasonCode>
                        <cbc:MultiplierFactorNumeric>{{ $ac['multiplierFactorNumeric'] ?? '0' }}</cbc:MultiplierFactorNumeric>
                        <cbc:Amount currencyID="{{ $ac['currency'] ?? ($line['currency'] ?? $currency) }}">{{ $ac['amount'] ?? '0.00' }}</cbc:Amount>
                        <cbc:BaseAmount currencyID="{{ $ac['currency'] ?? ($line['currency'] ?? $currency) }}">{{ $ac['baseAmount'] ?? '0.00' }}</cbc:BaseAmount>
                    </cac:AllowanceCharge>
                @endif
            @endforeach

            {{-- Line taxes --}}
            @if(is_array($lineTax))
                <cac:TaxTotal>
                    <cbc:TaxAmount currencyID="{{ $lineTax['currency'] ?? ($line['currency'] ?? $currency) }}">{{ $lineTax['taxAmount'] ?? '0.00' }}</cbc:TaxAmount>

                    @foreach(($lineTax['subtotals'] ?? []) as $t)
                        @php $schemeId = (string)($t['schemeId'] ?? ''); @endphp
                        <cac:TaxSubtotal>
                            @if($schemeId !== '7152' && $t['taxableAmount'] !== null)
                                <cbc:TaxableAmount currencyID="{{ $lineTax['currency'] ?? ($line['currency'] ?? $currency) }}">{{ $t['taxableAmount'] }}</cbc:TaxableAmount>
                            @endif
                            <cbc:TaxAmount currencyID="{{ $lineTax['currency'] ?? ($line['currency'] ?? $currency) }}">{{ $t['taxAmount'] ?? '0.00' }}</cbc:TaxAmount>

                            @if($schemeId === '7152' && !empty($t['baseUnitMeasure']))
                                <cbc:BaseUnitMeasure unitCode="NIU">{{ $t['baseUnitMeasure'] }}</cbc:BaseUnitMeasure>
                            @endif

                            <cac:TaxCategory>
                                @if(isset($t['percent']) && $t['percent'] !== null && $schemeId !== '7152')
                                    <cbc:Percent>{{ $t['percent'] }}</cbc:Percent>
                                @endif

                                @if(!empty($t['exemptionReasonCode']) && $schemeId !== '7152')
                                    <cbc:TaxExemptionReasonCode listAgencyName="PE:SUNAT"
                                                                listName="Afectacion del IGV"
                                                                listURI="urn:pe:gob:sunat:cpe:see:gem:catalogos:catalogo07">{{ $t['exemptionReasonCode'] }}</cbc:TaxExemptionReasonCode>
                                @endif

                                @if(!empty($t['tierRange']) && $schemeId === '2000')
                                    <cbc:TierRange>{{ $t['tierRange'] }}</cbc:TierRange>
                                @endif

                                @if($schemeId === '7152' && isset($t['perUnitAmount']) && $t['perUnitAmount'] !== null)
                                    <cbc:PerUnitAmount currencyID="{{ $lineTax['currency'] ?? ($line['currency'] ?? $currency) }}">{{ $t['perUnitAmount'] }}</cbc:PerUnitAmount>
                                @endif

                                <cac:TaxScheme>
                                    <cbc:ID schemeID="UN/ECE 5153"
                                            schemeName="Codigo de tributos"
                                            schemeAgencyName="PE:SUNAT">{{ $schemeId }}</cbc:ID>
                                    <cbc:Name>{{ $t['schemeName'] ?? '' }}</cbc:Name>
                                    <cbc:TaxTypeCode>{{ $t['taxTypeCode'] ?? '' }}</cbc:TaxTypeCode>
                                </cac:TaxScheme>
                            </cac:TaxCategory>
                        </cac:TaxSubtotal>
                    @endforeach
                </cac:TaxTotal>
            @endif

            {{-- Item --}}
            <cac:Item>
                <cbc:Description><![CDATA[{!! XmlTpl::cdata($item['description'] ?? '') !!}]]></cbc:Description>

                <cac:SellersItemIdentification>
                    <cbc:ID>{{ $item['sellersItemId'] ?? '' }}</cbc:ID>
                </cac:SellersItemIdentification>

                @if(!empty($item['commodityCode']) && $item['commodityCode'] !== '-')
                    <cac:CommodityClassification>
                        <cbc:ItemClassificationCode listID="UNSPSC"
                                                    listAgencyName="GS1 US"
                                                    listName="Item Classification">{{ $item['commodityCode'] }}</cbc:ItemClassificationCode>
                    </cac:CommodityClassification>
                @endif

                {{-- Item properties --}}
                @foreach(($item['properties'] ?? []) as $prop)
                    @php
                        $propCode = (string)($prop['code'] ?? '');
                        $hasPeriod = !empty($prop['period']) && is_array($prop['period']);
                        $period = $prop['period'] ?? [];
                    @endphp

                    @if(!empty($prop['name']))
                        <cac:AdditionalItemProperty>
                            <cbc:Name><![CDATA[{!! XmlTpl::cdata($prop['name'] ?? '') !!}]]></cbc:Name>
                            <cbc:NameCode listName="Propiedad del item" listAgencyName="PE:SUNAT">{{ $propCode }}</cbc:NameCode>

                            @if(!in_array($propCode, ['3005','3006'], true) && isset($prop['value']))
                                <cbc:Value>{{ $prop['value'] }}</cbc:Value>
                            @endif

                            @if(!empty($prop['valueQualifier']))
                                <cbc:ValueQualifier>{{ $prop['valueQualifier'] }}</cbc:ValueQualifier>
                            @endif

                            @if($propCode === '3006' && isset($prop['valueQuantity']))
                                <cbc:ValueQuantity>{{ $prop['valueQuantity'] }}</cbc:ValueQuantity>
                            @endif

                            @if($hasPeriod)
                                <cac:UsabilityPeriod>
                                    @if(!empty($period['startDate']))
                                        <cbc:StartDate>{{ $period['startDate'] }}</cbc:StartDate>
                                    @endif
                                    @if(!empty($period['startTime']))
                                        <cbc:StartTime>{{ $period['startTime'] }}</cbc:StartTime>
                                    @endif
                                    @if(!empty($period['endDate']))
                                        <cbc:EndDate>{{ $period['endDate'] }}</cbc:EndDate>
                                    @endif
                                    @if(!empty($period['durationDays']))
                                        <cbc:DurationMeasure unitCode="DAY">{{ $period['durationDays'] }}</cbc:DurationMeasure>
                                    @endif
                                </cac:UsabilityPeriod>
                            @endif
                        </cac:AdditionalItemProperty>
                    @endif
                @endforeach
            </cac:Item>

            <cac:Price>
                <cbc:PriceAmount currencyID="{{ $line['currency'] ?? $currency }}">{{ $price['priceAmount'] ?? '0.00' }}</cbc:PriceAmount>
            </cac:Price>

        </cac:CreditNoteLine>
    @endforeach

</CreditNote>
