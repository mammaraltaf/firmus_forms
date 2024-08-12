<?php
error_reporting(E_ALL);
require '../../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

// Capture the HTML content
ob_start();
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            html, body {
                font-family: Arial, sans-serif;
                font-size: 10px;
                margin: 0;
                padding: 0;
                /*height: 100%;*/
            }
            /*.form-container {*/
            /*flex: 1;*/
            /*}*/
            .header {
                text-align: center;
                margin-top: 50px;
            }
            .form-header {
                background-color: #0072bc;
                color: white;
                padding: 2px;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                margin-top: 5px;
            }
            .form-subheader {
                background-color: #2596be;
                color: white;
                font-size: 12px;
                padding: 1px 20px 1px 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 0;
                padding-top: 5px;
                padding-left: 20px;
                padding-right: 20px;
            }
            .form-section {
                background-color: #f0f0f0;
                font-weight: normal;
            }
            .form-section-first-row-td {
                padding-top: 6px;
            }
            .form-section-second-row-td {
                /*padding-top: -10px;*/
                display: inline-block;
                margin-top: -10px;
                position: relative;
                top: -10px;
            }
            .checkbox-up-span {
                display: inline-block;
                /*width: 10px;*/
            }
            .checkbox-below-span {
                vertical-align: middle;
            }
            .below-span {
                display: block;
                border-bottom: 1px solid #5c84a4;
                height: 20px;
                background-color: #f4f6fc;
            }

            td {
                /*padding: 8px;*/
                vertical-align: top;
            }
            .input-field {
                width: 100%;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .checkbox-field {
                margin-right: 10px;
            }
            .full-width {
                width: 100%;
            }
            .row1 {
                border-bottom: 2px solid #e5eaf7;
                padding: 10px;
                font-weight: normal;
            }
            .table2-row1 {
                /*border-bottom: 2px solid #e5eaf7;*/
                padding: 5px;
                font-weight: normal;
            }
            .footer {
                text-align: center;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                border-top: 3px solid #000;
                /*padding: 10px 20px;*/
                box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
                line-height: 0.2;
                font-size: 8px !important;
                margin-top: 3px;
            }
            .footer-content {
                text-align: center;
                font-size: 12px;
                color: #000;
            }
            .footer-bottom {
                /*display: flex;*/
                /*justify-content: space-between;*/
                /*position: relative;*/
                font-size: 10px;
                color: #666;
                /*margin-top: -20px;*/
                background-color: #f0f0f0;
            }
            .page-number:after {
                content: counter(page);
            }


            /* second page */
            .para-one {
                background-color: #f0f0f0;
                padding: 5px 20px 5px 20px;
            }
            .si-no {
                width: 10%; padding-top: 10px; padding-left: 7px
            }
            .row-background-style {
                background-color: #f0f0f0;
                /*position: relative;*/
                /*padding-right: -20px;*/
            }
            .signature-box {
                width: 330px;
                height: 70px;
                border: 1px solid #878787;
                background-color: #f7f7f7;
            }
            .signature-label {
                text-align: center;
                margin-top: 5px;
            }    </style>
        <title>DOCUMENT</title>
    </head>
    <body>
    <div class="container">
        <div class="header">
            <svg>
                <img src="<?php echo $base64; ?>" alt="logo" style="width: 150px;">
            </svg>
        </div>

        <div class="form-container">
            <div class="form-header">Apertura de Cuenta Persona Natural</div>
            <div class="form-subheader">Datos Generales Completar todos los campos de este formulario, de no aplicar colocar
                N/A
            </div>

            <table style=" background-color: #f0f0f0;">
                <tr class="form-section">
                    <td class="form-section-first-row-td" style="width: 20%">Tipo de Cuenta o Contrato:</td>
                    <td class="form-section-first-row-td" style="width: 20%">
                        <span class="checkbox-up-span" style=""></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span">No Discrecional</span>
                    </td>
                    <td class="form-section-first-row-td" style="width: 20%">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Discrecional</span>
                    </td>
                    <td class="row1" style="width: 40%">
                        <label>Explique por qué se considera parte relacionada:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
                <tr class="form-section">
                    <td class="form-section-second-row-td" style="margin-top: -15px; padding-bottom: -10px">Parte
                        Relacionada:
                    </td>
                    <td>
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;"></span>
                        <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -15px; padding-bottom: -10px; position: relative; top: -15px;">
                        <span class="checkbox-below-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;">Sí</span>
                    </td>
                    <td>
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;"></span>
                        <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -15px; padding-bottom: -10px; position: relative; top: -15px;">
                        <span class="checkbox-below-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;">No</span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre(s):</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 30%" class="table2-row1">
                        <label>Apellido(s):</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Nacionalidad:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Estado Civil:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 20%" class="table2-row1">
                        <label>Tipo de Documento (ID):</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>No. de Documento (ID):</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Fecha de Vencimiento (ID):</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Fecha de Nacimiento:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Lugar de Nacimiento:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 60%" class="table2-row1">
                        <label>Correo Electrónico:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Profesión u Oficio:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Ocupación Actual:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%" class="table2-row1">
                        <label>Domicilio Personal:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Nº de Domicilio / Casa:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Dirección Postal:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Fax:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%" class="table2-row1">
                        <label>Domicilio Laboral:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Nº de Oficina:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Dirección Postal:</label>
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Fax:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%" class="table2-row1">Empleado con Salario:</td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Independiente</span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Jubilado</span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Pensionado</span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Fijo</span>

                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle; padding-left: 30px">
                        <span class="checkbox-below-span">Variable</span>
                    </td>
                    <td style="width: 4%; padding-top: 5px">Otro:</td>
                    <td style="width: 56%">
                        <span class="below-span"></span>
                    </td>
                </tr>

            </table>
            <div class="form-subheader" style="margin-top: -5px">Origen de Fondos</div>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td colspan="6" class="label">Jurisdicciones principales de donde recibe/envía:</td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 5px">1-</td>
                    <td style="width: 32%; margin-right: 3px">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe sus Títulos </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía sus Títulos </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 5px">2-</td>
                    <td style="width: 32%; margin-right: 3px">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe sus Títulos </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía sus Títulos </span>
                    </td>
                </tr>
            </table>
            <div class="form-subheader" style="margin-top: -5px">Fuente de los Recursos o Patrimonio</div>
            <table style="margin-left: -5px !important;">
                <td style="width: 25%; padding-top: 5px">Nombre del Empleador / Independiente:</td>
                <td style="width: 40%;">
                    <span class="below-span" style="margin-right: 4px"></span>
                </td>
                <td style="width: 14%; padding-top: 5px">Ingreso Anual: (USD):</td>
                <td style="width: 15%; margin-right: 3px">
                    <span class="below-span"></span>
                </td>
            </table>
            <table style="margin-left: -5px !important;">
                <td style="width: 13%; padding-top: 5px">Salario Anual: (USD):</td>
                <td style="width: 15%;">
                    <span class="below-span" style="margin-right: 4px"></span>
                </td>
                <td style="width: 13%; padding-top: 5px">Años en la Empresa:</td>
                <td style="width: 5%; margin-right: 3px">
                    <span class="below-span"></span>
                </td>
                <td style="width: 10%; padding-top: 8px; padding-left: 30%">Actividad:</td>
                <td style="width: 20%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                    <span class="checkbox-below-span"> Honorarios Profesionales </span>
                </td>
                <td style="width: 15%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                    <span class="checkbox-below-span"> Negocio Propio </span>
                </td>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 12%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Ahorro </span>
                    </td>
                    <td style="width: 12%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Pensión </span>
                    </td>
                    <td style="width: 12%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Salario </span>
                    </td>
                    <td style="width: 15%; padding-top: 5px">Dividendos de Inversión:</td>
                    <td style="width: 15%; margin-right: 3px">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 5%; padding-top: 5px; padding-left: 20%">Otros:</td>
                    <td style="width: 15%; margin-right: 3px">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="font-weight: bold">Referencia Bancaria</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="width: 40%">Referencia Bancaria:</td>
                    <td style="width: 0%"></td>
                    <td style="width: 20%; padding-left: 5px">País:</td>
                    <td style="width: 20%; padding-left: 5px">Persona Contacto:</td>
                    <td style="width: 20%; padding-left: 5px">Teléfono:</td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 2%; padding-top: 10px">1-</td>
                    <td style="width: 38%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 10px">2-</td>
                    <td style="width: 38%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 10px">3-</td>
                    <td style="width: 38%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <div class="form-subheader" style="margin-top: 10px">Depósito Inicial</div>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%">Usted estará depositando o transfiriendo:</td>
                    <td style="width: 60%"> Indique el Monto (USD):</td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 14%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Efectivo </span>
                    </td>
                    <td style="width: 14%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Títulos Valores </span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Ambos </span>
                    </td>
                    <td style="width: 10%; padding-top: 10px">Efectivo:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 15%; padding-top: 10px">Títulos Valores:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 70%">Institución de donde Provienen los Fondos:</td>
                    <td style="width: 30%"> Tiempo de Relación con la Institución:</td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 2%; padding-top: 10px">1-</td>
                    <td style="width: 48%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Efectivo </span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Títulos </span>
                    </td>
                    <td style="width: 30%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 10px">2-</td>
                    <td style="width: 48%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Efectivo </span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Títulos </span>
                    </td>
                    <td style="width: 30%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <p style="font-weight: bold">PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol,
                    Ciudad de Panamá.</p>
                <p style="font-weight: bold">Teléfono: + 507 310 0625 | WhatsApp Empresa : +507-6777-9766 |
                    www.firmus-financial.com</p>
                <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá
                    bajo Resolución No. 630-2014</p>
            </div>
            <table class="footer-bottom">
                <tr>
                    <td>
                        <p style="color: #1a202c"> FFAPNES.V01 </p>
                    </td>
                    <td>
                        <p class="page-number"></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- second page -->
    <div class="container">
        <div class="header">
            <svg>
                <img src="<?php echo $base64; ?>" alt="logo" style="width: 150px;">
            </svg>
        </div>

        <div class="form-subheader" style="margin-top: 10px">Persona Políticamente Expuesta</div>
        <div class="para-one">
            <p>
                El cliente debe indicar expresamente si es Persona Políticamente Expuesta (PEP).
                Persona Políticamente Expuesta incluye, entre otros, una persona
                que desempeña o ha desempeñado funciones públicas prominentes dentro o fuera del país,
                tales como jefes de Estado o de Gobierno, políticos de alto
                nivel, funcionarios gubernamentales, judiciales u oficiales militares de alto nivel,
                ejecutivos de alto nivel de corporaciones que pertenecen al Estado,
                funcionarios importantes de partidos políticos. (En base a la definición establecida
                en Articulo 4 Ley 23/2015).
            </p>
        </div>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 80%; padding-top: 10px"></td>
                <td class="si-no">Si</td>
                <td class="si-no">No</td>
            </tr>
            <tr class="row-background-style">
                <td style="width: 80%; padding-top: 10px">¿Es Ud. Una Persona Políticamente Expuesta (PEP)?</td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
            </tr>
            <tr>
                <td style="width: 80%; padding-top: 10px">¿Es Ud. Familiar Cercano (cónyuge o 1er grado consanguinidad)
                    de PEP?
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
            </tr>
            <tr class="row-background-style">
                <td style="width: 80%; padding-top: 10px; padding-left: -20px">¿Declara que en los últimos 5 años (según
                    la definición) se considera como PEP?
                </td>
                <td style="width: 10%;" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
            </tr>
        </table>
        <div class="form-subheader" style="margin-top: 10px">Comunicación Seleccionar uno o varios campos</div>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 50%; padding-bottom: -15px"></td>
                <td style="padding-bottom: -15px">Titular</td>
                <td style="padding-bottom: -15px">Cotitular</td>
                <td style="padding-bottom: -15px">Firmante (s)</td>
                <td style="padding-bottom: -15px">Apoderado</td>
                <td style="padding-bottom: -15px">Beneficiario Accionista</td>
            </tr>
            <tr class="row-background-style">
                <td style="padding-top: 10px">Personas autorizadas para instruir órdenes</td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
            </tr>
            <tr>
                <td style="padding-top: 10px">Autorizado a dar instrucción de envío y recepción de tìtulos y efectivo
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 40%; padding-bottom: -15px"></td>
                <td style="padding-bottom: -15px">Correo</td>
                <td style="padding-bottom: -15px">Documentos Correo Escritos</td>
                <td style="padding-bottom: -15px">Vía Telefónica</td>
                <td style="padding-bottom: -15px">Plataformas de Texto</td>
                <td style="padding-bottom: -15px">Directamente por el Cliente en el Sistema</td>
                <td style="padding-bottom: -15px">Todas las Anteriores</td>
            </tr>
            <tr class="row-background-style">
                <td style="padding-top: 10px">Las órdenes podrán ser colocadas por</td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="vertical-align: middle;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 20%">Confirmar las instrucciones
                    emitidas (compra y venta de
                    títulos y valores)
                </td>
                <td style="width: 20%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative;">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        ">Sí</span>
                </td>
                <td style="width: 60%; font-style: italic;">De ser afirmativa completar:</td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 20%"></td>
                <td style="width: 20%">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                    <span class="checkbox-below-span" style="display: inline-block; margin-top: -10px; padding-bottom: -10px;
                        position: relative; top: -10px;">No</span>
                </td>
                <td style="width: 10%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
                <td style="width: 10%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
                <td style="width: 10%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
                <td style="width: 30%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr class="row-background-style">
                <td style="padding-top: 10px" width="80%">Es voluntad del cliente que los Estados de Cuenta
                    de su cuenta de inversión reposen en las oficinas
                    de Firmus-Octogone Inc. a su disposicion y solicitud
                </td>
                <td style="padding-top: 10px; padding-left: 7px" width="10%">Si</td>
                <td style="padding-top: 10px; padding-left: 7px" width="10%">No</td>
            </tr>
            <tr class="row-background-style">
                <td width="80%" style="position: relative; margin-top: -20px"></td>
                <td class="table2-row1" style="position: relative; margin-top: -20px">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="position: relative; margin-top: -20px; vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" style="position: relative; margin-top: -20px; vertical-align: middle;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="padding-top: 10px; font-style: italic" width="50%">Si su respuesta es No indique como
                    desea recibir los Estados de Cuenta:
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Correo</span>
                </td>
                <td style="width: 40%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Apartado Postal </span>
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr class="row-background-style">
                <td style="padding-top: 10px; font-style: italic" width=40%">Desea recibirlos con periodicidad
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Mensual</span>
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Trimestral</span>
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Semestral</span>
                </td>
                <td style="width: 30%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input type="checkbox" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Anual</span>
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="padding-top: 10px; width: 50%">Firmus-Octogone Inc. tomará como correo autorizado el declarado en
                    Datos Generales, de ser diferente suministrar el mismo:
                </td>
                <td class="table2-row1" style="width: 50%">
                    <span class="below-span" style="margin-top: 8px; position: relative; "></span>
                </td>
            </tr>
        </table>
        <div class="form-subheader" style="margin-top: 10px;">Declaración</div>
        <div class="para-one" style=" margin-bottom: 130px">
            <p>
                Confirmo (Confirmamos) que he (hemos) comprendido los términos del acuerdo de cuenta de inversión,
                incluyendo los modos de comunicación,
                acceso en línea, notificaciones y demás términos. <br><br>
                Actuando en mi propio nombre y de manera voluntaria, declaro (declaramos) que hemos comprendido a cabalidad
                la información que se ha solicitado
                y respondiendo los campos de forma veraz y correcta en todo su alcance de forma plena e irrevocable;
                autorizando a Firmus-Octogone Inc. para la
                verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso
                que implique modificación de la información
                aquí declarada, de las circunstancias económicas, financieras y/o personales, del titular de la cuenta,
                firmantes autorizados, propietario efectivo o
                beneficiario finales. <br><br>
                Confirmo (Confirmamos) estar anuente que las condiciones generales entregadas forman parte de la relación
                contractual presente.
            </p>
        </div>
        <!-- Footer -->
        <div class="footer" style="margin-top: 100px">
            <div class="footer-content">
                <p style="font-weight: bold">PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol,
                    Ciudad de Panamá.</p>
                <p style="font-weight: bold">Teléfono: + 507 310 0625 | WhatsApp Empresa : +507-6777-9766 |
                    www.firmus-financial.com</p>
                <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá
                    bajo Resolución No. 630-2014</p>
            </div>
            <table class="footer-bottom">
                <tr>
                    <td>
                        <p style="color: #1a202c"> FFAPNES.V01 </p>
                    </td>
                    <td>
                        <p class="page-number"></p>
                    </td>
                </tr>
            </table>
        </div>
<?php
$path = '../../images/logo.svg'; // Adjust the path to your image
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>

        <!-- third page -->

        <div class="container">
            <div class="header">
                <svg>
                    <img src="<?php echo $base64; ?>" alt="logo" style="width: 150px;">
                </svg>
            </div>
            <div class="form-subheader" style="margin-top: 10px">Firma (s) Cliente (s</div>
            <table style=" background-color: #f0f0f0;">
                <tr class="form-section">
                    <td class="form-section-first-row-td" style="width: 10%">Tipo de Firma:</td>
                    <td class="form-section-first-row-td" style="width: 10%">
                        <span class="checkbox-up-span" style="position: relative; margin-bottom: 10px"></span>
                        <input type="checkbox" style="vertical-align: middle;
                    position: relative; top: -1px; margin-top: -1px">
                        <span class="checkbox-below-span" style=" position: relative;
                    top: -2px; margin-top: -2px">Conjunta</span>
                    </td>
                    <td class="form-section-first-row-td" style="width: 80%">
                        <span class="checkbox-up-span" style="position: relative; margin-bottom: 10px"></span>
                        <input type="checkbox" style="vertical-align: middle;
                    position: relative; top: -1px; margin-top: -1px">
                        <span class="checkbox-below-span" style=" position: relative;
                    top: -2px; margin-top: -2px">Indistinta</span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 45%" class="table2-row1">
                        <label>Nombre completo (en imprenta):</label>
                        <span class="below-span"></span>
                    </td>
                    <td width="10%"></td>
                    <td style="width: 45%" class="table2-row1">
                        <label>Nombre completo (en imprenta):</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width: 15%; padding-top: 10px">No. de Documento (ID):</td>
                    <td style="width: 30%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td width="10%"></td>
                    <
                    <td style="width: 15%; padding-top: 10px">No. de Documento (ID):</td>
                    <td style="width: 30%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="25%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td width="10%"></td>
                    <td width="25%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-top: 15px">
                <tr>
                    <td class="signature-section">
                        <div class="signature-box"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                    <td width="10%"></td>
                    <td class="signature-section">
                        <div class="signature-box"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                </tr>
            </table>
            <div class="form-subheader" style="margin-top: 15px">Firma (s) Cliente (s</div>
            <table style="margin-left: -5px !important; margin-top: 15px">
                <tr>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre del Corredor:</label>
                        <span class="below-span"></span>
                    </td>
                    <td width="5%"></td>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre del Oficial de Cumplimiento:</label>
                        <span class="below-span"></span>
                    </td>
                    <td width="5%"></td>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre del Ejecutivo Principal:</label>
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="10%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td width="5%"></td>
                    <td width="15%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                    <td width="5%"></td>
                    <td width="15%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span"></span>
                    </td>
                </tr>
            </table>
            <table style="margin-top: 15px">
                <tr>
                    <td class="signature-section">
                        <div class="signature-box" style="width: 215px;"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                    <td width="5%"></td>
                    <td class="signature-section">
                        <div class="signature-box" style="width: 215px;"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                    <td width="5%"></td>
                    <td class="signature-section">
                        <div class="signature-box" style="width: 215px;"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                </tr>
            </table>


        </div>


        <!-- Footer -->
        <div class="footer" style="margin-top: 100px">
            <div class="footer-content">
                <p style="font-weight: bold">PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol,
                    Ciudad de Panamá.</p>
                <p style="font-weight: bold">Teléfono: + 507 310 0625 | WhatsApp Empresa : +507-6777-9766 |
                    www.firmus-financial.com</p>
                <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá
                    bajo Resolución No. 630-2014</p>
            </div>
            <table class="footer-bottom">
                <tr>
                    <td>
                        <p style="color: #1a202c"> FFAPNES.V01 </p>
                    </td>
                    <td>
                        <p class="page-number"></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </body>
    </html>

<?php
$html = ob_get_clean();

// Load HTML to Dompdf
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dynamic_data.pdf", array("Attachment" => 1));
?>