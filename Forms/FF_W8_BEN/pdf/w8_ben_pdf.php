<?php
error_reporting(E_ALL);
require '../../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
include "../../dbclass.php";
include "../../functions.php";
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);
$db = new database('');
$db->connect();
$id=$_GET['id'];
$db->query("select * from FOR_FF_W8_BEN where id=$id");
while( $data = $db->fetch_array() )
{
    $beneficial_owner_name=$data['beneficial_owner_name'];
    $country_of_citizenship=$data['country_of_citizenship'];
    $permanent_residence_address=$data['permanent_residence_address'];
    $permanent_residence_city_state_province=$data['permanent_residence_city_state_province'];
    $permanent_residence_country=$data['permanent_residence_country'];
    $mailing_address=$data['mailing_address'];
    $mailing_address_city_state_province=$data['mailing_address_city_state_province'];
    $mailing_address_country=$data['mailing_address_country'];
    $us_taxpayer_identification_number=$data['us_taxpayer_identification_number'];
    $foreign_tax_identifying_number=$data['foreign_tax_identifying_number'];
    $ftin_not_legally_required=$data['ftin_not_legally_required'];
    $reference_numbers=$data['reference_numbers'];
    $date_of_birth=$data['date_of_birth'];
    $treaty_country_residence=$data['treaty_country_residence'];
    $special_rates_conditions=$data['special_rates_conditions'];
    $certification_signature=$data['certification_signature'];
    $certification_date=$data['certification_date'];
    $signer_name=$data['signer_name'];
};
//------Change Dates from YYYY-MM-DD to DD/MM/YYYY format
$date_of_birth=datetofrench($date_of_birth);
$certification_date=datetofrench($certification_date);
//---------------------
// Capture the HTML content
//ob_start();
?>
<?php
$base64='http://localhost/firmus_forms/Forms/images/logo.svg';
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
                background-color: #358ccb;
                color: white;
                padding: 2px;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                margin-top: 5px;
            }
            .form-subheader {
                background-color: #8ab5e1;
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
        <title>FF_APN</title>
    </head>
    <body>
    <body>
    <form name="form1" method="POST" action="modif.php">
        <?PHP echo "<input type=hidden name=id value=$id>"; ?>
        <section class="wrapper">
            <div class="pdf-type-subtext">
                <p><b>Form W-8BEN - Certificate of Foreign Status of Beneficial Owner for United States Tax Withholding and Reporting (Individuals)</b></p>
            </div>

            <!-- Part I: Identification of Beneficial Owner -->
            <div class="fields-block-wrapper">
                <h3>Part I: Identification of Beneficial Owner</h3>

                <table class="form-table">
                    <tr>
                        <td><p>Name of individual who is the beneficial owner:</p></td>
                        <td><input name="beneficial_owner_name" value= "<?php echo $beneficial_owner_name; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Country of citizenship:</p></td>
                        <td><input name="country_of_citizenship" value= "<?php echo $country_of_citizenship; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Permanent residence address (street, apt. or suite no., or rural route):</p></td>
                        <td><input name="permanent_residence_address" value= "<?php echo $country_of_citizenship; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>City or town, state or province (include postal code where appropriate):</p></td>
                        <td><input name="permanent_residence_city_state_province" value= "<?php echo $country_of_citizenship; ?> " type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Country:</p></td>
                        <td><input name="permanent_residence_country" value= "<?php echo $permanent_residence_country; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Mailing address (if different from above):</p></td>
                        <td><input name="mailing_address" value= "<?php echo $mailing_address; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>City or town, state or province (include postal code where appropriate):</p></td>
                        <td><input name="mailing_address_city_state_province" value= "<?php echo $mailing_address_city_state_province; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Country:</p></td>
                        <td><input name="mailing_address_country" value= "<?php echo $mailing_address_country; ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>U.S. taxpayer identification number (SSN or ITIN), if required:</p></td>
                        <td><input name="us_taxpayer_identification_number" value= "<?php echo $us_taxpayer_identification_number; ?>"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Foreign tax identifying number:</p></td>
                        <td><input name="foreign_tax_identifying_number" value= "<?php echo $foreign_tax_identifying_number; ?>"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="checkbox-block">
                                <input type="checkbox" name="ftin_not_legally_required" <?PHP if ($ftin_not_legally_required==1) echo "checked"  ; ?> id="ftin_not_legally_required" value="1">
                                <label for="ftin_not_legally_required">Check if FTIN not legally required</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Reference number(s):</p></td>
                        <td><input name="reference_numbers" value= "<?php echo $reference_numbers; ?>"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Date of birth (MM-DD-YYYY):</p></td>
                        <td><input name="date_of_birth" type="text" value= "<?php echo $date_of_birth; ?>"  class="form-control" id="datepicker" placeholder="DD/MM/AAAA.." required></td>
                    </tr>
                </table>
            </div>

            <!-- Part II: Claim of Tax Treaty Benefits -->
            <div class="fields-block-wrapper bg-gray">
                <h3>Part II: Claim of Tax Treaty Benefits</h3>

                <table class="form-table">
                    <tr>
                        <td><p>I certify that the beneficial owner is a resident of:</p></td>
                        <td><input name="treaty_country_residence" value= "<?php echo $treaty_country_residence; ?>"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>The beneficial owner is claiming the provisions of Article and paragraph:</p></td>
                        <td><input name="special_rates_conditions" value= "<?php echo $special_rates_conditions; ?>" type="text" class="form-control"></td>
                    </tr>
                </table>
            </div>

            <!-- Part III: Certification -->
            <div class="fields-block-wrapper">
                <h3>Part III: Certification</h3>

                <table class="form-table">
                    <tr>
                        <td><p>Signer Name:</p></td>
                        <td><input name="signer_name" value= "<?php echo $signer_name; ?>"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Certification Signature:</p></td>
                        <td><input name="certification_signature" value= "<?php echo $certification_signature; ?>"  type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><p>Certification Date (MM-DD-YYYY):</p></td>
                        <td>
                            <input name="certification_date" type="text" value= "<?php echo $certification_date; ?>"  class="form-control" id="datepicker1" placeholder="DD/MM/AAAA.." required>
                        </td>
                    </tr>
                </table>
            </div>

            <center><input class="active5" name="btn_submit" value="Save Data" type="submit"></center>
        </section>
    </form>
    <div class="border"></div>
    <div class="pdf-address">
        <h6>PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol, Ciudad de Panamá.</h6>
        <ul>
            <li><a href="tel:+5073100625">+ 507 310 0625</a></li>
            <li><a href="http://www.firmus-financial.com">www.firmus-financial.com</a></li>
        </ul>
        <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá bajo Resolución No. 630-2014</p>
    </div>
    </body>
</html>
<?php
//$html = ob_get_clean();
//
//// Load HTML to Dompdf
//$dompdf->loadHtml($html);
//
//// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'portrait');
//
//// Render the HTML as PDF
//$dompdf->render();
//
//// Output the generated PDF to Browser
//$dompdf->stream("dynamic_data.pdf", array("Attachment" => 1));
?>