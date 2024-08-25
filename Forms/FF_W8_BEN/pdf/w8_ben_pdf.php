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
    $claim_of_tax_1=$data['claim_of_tax_1'];
    $claim_of_tax_2=$data['claim_of_tax_2'];
    $claim_of_tax_3=$data['claim_of_tax_3'];
    $claim_of_tax_4=$data['claim_of_tax_4'];
    $claim_of_tax_5=$data['claim_of_tax_5'];
    $treaty_country_residence=$data['treaty_country_residence'];
    $special_rates_conditions=$data['special_rates_conditions'];
    $certification_signature=$data['certification_signature'];
    $certification_date=$data['certification_date'];
    $signer_name=$data['signer_name'];
    $accept_certification = $data['accept_certification'];
};
//------Change Dates from YYYY-MM-DD to DD/MM/YYYY format
$date_of_birth=datetofrench($date_of_birth);
$certification_date=datetofrench($certification_date);
//---------------------
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

            .header {
                text-align: center;
                margin-top: 50px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin: 0;
                /*padding-top: 5px;*/
                padding-left: 20px;
                padding-right: 20px;
            }

            td {
                /*padding: 8px;*/
                vertical-align: top;
            }
        </style>
        <title>FF_W8</title>
    </head>
    <body>
    <form name="form1">
        <div class="container">
            <div class="form-container">
                <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid black;">
                    <tr>
                        <!-- Left Column -->
                        <td style="width: 20%; vertical-align: top; font-size: 12px; line-height: 1.2; border-right: 1px solid black; padding-right: 10px;">
                            <div style="display: flex; align-items: baseline;">
                                <strong style="font-size: 12px; margin-right: 5px;">Form</strong>
                                <h1 style="margin: 0; font-size: 24px; display: inline;">W-8BEN</h1>
                            </div>
                            <br>
                            <p style="margin: 0; font-size: 10px;">(Rev. October 2021)</p>
                            <br>
                            <p style="margin: 0; font-size: 10px;">Department of the Treasury</p>
                            <p style="margin: 0; font-size: 10px;">Internal Revenue Service</p>
                        </td>

                        <!-- Middle Column -->
                        <td style="width: 60%; vertical-align: top; text-align: center; font-size: 14px; line-height: 1.5; border-right: 1px solid black; padding-left: 10px; padding-right: 10px;">
                            <h2 style="margin: 0; font-size: 15px;">
                                Certificate of Foreign Status of Beneficial Owner for United States Tax Withholding and Reporting (Individuals)
                            </h2>
                            <div style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-bottom: 5px solid transparent; border-left: 8px solid black;"></div>
                            <span style="margin: 0; font-size: 11px;"><b>For use by individuals. Entities must use Form W-8BEN-E.</b></span>
                            <br>
                            <div style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-bottom: 5px solid transparent; border-left: 8px solid black;"></div>
                            <span style="margin: 0; font-size: 11px;"><b>Go to <i>www.irs.gov/FormW8BEN</i> for instructions and the latest information.</b></span>
                            <br>
                            <div style="display: inline-block; width: 0; height: 0; border-top: 5px solid transparent; border-bottom: 5px solid transparent; border-left: 8px solid black;"></div>
                            <span style="margin: 0; font-size: 11px;"><b>Give this form to the withholding agent or payer. Do not send to the IRS.</b></span>
                        </td>

                        <!-- Right Column -->
                        <td style="width: 20%; vertical-align: middle; text-align: center; font-size: 12px; padding-left: 10px;">
                            <p style="margin: 0; line-height: 1.5;">OMB No. 1545-1621</p>
                        </td>
                    </tr>
                </table>



                <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid black;">
                    <tr>
                        <td style="font-weight: bold; padding-bottom: 8px;">Do NOT use this form if:<span style="float: right;">Instead, use Form:</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0; white-space: nowrap;">
                            <span style="margin-right: 8px; font-weight: bold; font-size: 12px;">•</span>
                            You are NOT an individual
                            <span>&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;</span>
                            <span style="float: right;">W-8BEN-E</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0; white-space: nowrap;">
                            <span style="margin-right: 8px; font-weight: bold; font-size: 12px;">•</span>
                            You are a U.S. citizen or other U.S. person, including a resident alien individual
                            <span>&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;</span>
                            <span style="float: right;">W-9</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0; white-space: nowrap;">
                            <span style="margin-right: 8px; font-weight: bold; font-size: 12px;">•</span>
                            You are a beneficial owner claiming that income is effectively connected with the conduct of trade or business within the United States <br style="margin-right: 8px;">(other than personal services)
                            <span>&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;</span>
                            <span style="float: right;">W-8ECI</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0; white-space: nowrap;">
                            <span style="margin-right: 8px; font-weight: bold; font-size: 12px;">•</span>
                            You are a beneficial owner who is receiving compensation for personal services performed in the United States
                            <span>&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;</span>
                            <span style="float: right;">8233 or W-4</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px 0; white-space: nowrap;">
                            <span style="margin-right: 8px; font-weight: bold; font-size: 12px;">•</span>
                            You are a person acting as an intermediary
                            <span>&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;</span>
                            <span style="float: right;">W-8IMY</span>
                        </td>
                    </tr>
                </table>


                <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid black;">
                    <tr>
                        <td style="font-size: 11px;"><b>Note: </b>If you are resident in a FATCA partner jurisdiction (that is, a Model 1 IGA jurisdiction
                            with reciprocity), certain tax account information may be
                            provided to your jurisdiction of residence.
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; border-collapse: collapse; ">

                    <!-- Part I Header -->
                    <tr>
                        <td colspan="1" style="font-weight: bold; font-size:12px; background-color: #000; color: #fff;border-bottom: 1px solid black; padding-left: 5px;">Part I</td>
                        <td colspan="9" style="font-weight: bold; font-size:12px; border-bottom: 1px solid black; padding-left: 10px;">
                            Identification of Beneficial Owner (see instructions)
                        </td>
                    </tr>

                    <!-- Row 1 -->
                    <tr>
                        <td colspan="5" ><b>1</b> Name of individual who is the beneficial owner</td>
                        <td colspan="5" style="border-left: 1px solid black"><b>2</b> Country of citizenship</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="border-bottom: 1px solid black;"><span><b><?PHP echo $beneficial_owner_name; ?></b></span></td>
                        <td colspan="5" style="border-bottom: 1px solid black;border-left: 1px solid black; "><span><b><?PHP echo $country_of_citizenship; ?></b></span></td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td colspan="10" >
                            <b>3</b> Permanent residence address (street, apt. or suite no., or rural route). <b>Do not use a P.O. box or in-care-of address.</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="10" style="border-bottom: 1px solid black;"><span><b><?PHP echo $permanent_residence_address; ?></b></span></td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td colspan="8">City or town, state or province. Include postal code where appropriate.</td>
                        <td colspan="2" style="border-left: 1px solid black;">Country</td>
                    </tr>
                    <tr>
                        <td colspan="8" style="border-bottom: 1px solid black;"><span><b><?PHP echo $permanent_residence_city_state_province; ?></b></span></td>
                        <td colspan="2" style="border-bottom: 1px solid black; border-left: 1px solid black;"><span><b><?PHP echo $permanent_residence_country; ?></b></span></td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td colspan="10" ><b>4</b> Mailing address (if different from above)</td>
                    </tr>
                    <tr>
                        <td colspan="10" style="border-bottom: 1px solid black;"><span><b><?PHP echo $mailing_address; ?></b></span></td>
                    </tr>
                    <tr>
                        <td colspan="8" >City or town, state or province. Include postal code where appropriate.</td>
                        <td colspan="2" style="border-left: 1px solid black;">Country</td>
                    </tr>
                    <tr>
                        <td colspan="8" style="border-bottom: 1px solid black;"><span><b><?PHP echo $mailing_address_city_state_province; ?></b></span></td>
                        <td colspan="2" style="border-bottom: 1px solid black; border-left: 1px solid black;"><span><b><?PHP echo $mailing_address_country; ?></b></span></td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td colspan="10" ><b>5</b> U.S. taxpayer identification number (SSN or ITIN), if required (see instructions)</td>
                    </tr>
                    <tr>
                        <td colspan="10" style="border-bottom: 1px solid black;"><span><b><?PHP echo $us_taxpayer_identification_number; ?></b></span></td>
                    </tr>

                    <!-- Row 6 -->
                    <tr>
                        <td colspan="5"><b>6a</b> Foreign tax identifying number (see instructions)</td>
                        <td colspan="4" style="border-left: 1px solid black;"><b>6b</b> Check if FTIN not legally required
                            <span>&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;</span>
                        </td>
                        <td colspan="1">
                            <input type="checkbox" <?PHP if($ftin_not_legally_required ==1) echo "checked" ; ?> style="vertical-align: middle;" />
                        </td>
                    </tr>


                    <tr>
                        <td colspan="5" style="border-bottom: 1px solid black;"><span><b><?PHP echo $foreign_tax_identifying_number; ?></b></span></td>
                        <td colspan="5" style="border-bottom: 1px solid black; border-left: 1px solid black;"><span></span></td>
                    </tr>

                    <!-- Row 7 -->
                    <tr>
                        <td colspan="5" ><b>7</b> Reference number(s) (see instructions)</td>
                        <td colspan="5" style="border-left: 1px solid black;" ><b>8</b> Date of birth (MM-DD-YYYY) (see instructions)</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="border-bottom: 1px solid black;"><span><b><?PHP echo $reference_numbers; ?></b></span></td>
                        <td colspan="5" style="border-bottom: 1px solid black;border-left: 1px solid black;"><span><b><?PHP echo $date_of_birth; ?></b></span></td>
                    </tr>
                </table>

                <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid black;">
                    <!-- Part II Header -->
                    <tr>
                        <td colspan="1" style="font-weight: bold; font-size:12px; background-color: #000; color: #fff;border-bottom: 1px solid black; padding-left: 5px;">Part II</td>
                        <td colspan="9" style="font-weight: bold; font-size:12px; border-bottom: 1px solid black; padding-left: 10px;">
                            Claim of Tax Treaty Benefits (for chapter 3 purposes only) (see instructions)
                        </td>
                    </tr>

                    <!-- Row 1 -->
                    <tr>
                        <td colspan="10" style="padding: 8px;">
                            9 I certify that the beneficial owner is a resident of
                            <span style="border-bottom: 1px solid black;  width: 150px;"><b><?PHP echo $claim_of_tax_1 ?></b></span>
                            within the meaning of the income tax treaty between the United States and that country.
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td colspan="10" style="padding: 8px;">
                            10 <b>Special rates and conditions</b> (if applicable—see instructions): The beneficial owner is claiming the provisions of Article and paragraph
                            <span style="border-bottom: 1px solid black;  width: 50px;"><b><?PHP echo $claim_of_tax_2 ?></b></span>
                            of the treaty identified on line 9 above to claim a
                            <span style="border-bottom: 1px solid black;  width: 50px;"><b><?PHP echo $claim_of_tax_3 ?></b></span>% rate of withholding on (specify type of income):
                            <span style="border-bottom: 1px solid black;  width: 250px;"><b><?PHP echo $claim_of_tax_4 ?></b></span>.
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td colspan="10" style="padding: 8px;">
                            Explain the additional conditions in the Article and paragraph the beneficial owner meets to be eligible for the rate of withholding:
                            <span style="width: 100%; height: 50px;"><b><?PHP echo $claim_of_tax_5 ?></b></span>
                        </td>
                    </tr>
                </table>


                <table style="width: 100%; border-collapse: collapse;">
                    <!-- Part III Header -->
                    <tr>
                        <td width="10%"  style="font-weight: bold; font-size:12px; background-color: #000; color: #fff;border-bottom: 1px solid black; padding-left: 5px;">
                            Part III
                        </td>
                        <td width="90%" style="font-weight: bold; font-size: 12px;  padding-left: 5px; border-bottom: 1px solid black;">
                            Certification
                        </td>
                    </tr>

                    <!-- Certification Text -->
                    <tr>
                        <td colspan="10" style="font-size: 8px">
                            Under penalties of perjury, I declare that I have examined the information on this form and to the best of my knowledge and belief it is true, correct, and complete. I further certify under penalties of perjury that:
                        </td>
                    </tr>
                    <tr>
                        <td colspan="10" style="font-size: 8.5px;">
                            • I am the individual that is the beneficial owner (or am authorized to sign for the individual that is the beneficial owner) of all the income or proceeds to which this form relates or am using this form to document myself for chapter 4 purposes;
                            <br>• The person named on line 1 of this form is not a U.S. person;
                            <br>• This form relates to:
                            <br>
                            <div style="margin-left: 20px;">(a) income not effectively connected with the conduct of a trade or business in the United States;</div>
                            <br>
                            <div style="margin-left: 20px;">(b) income effectively connected with the conduct of a trade or business in the United States but is not subject to tax under an applicable income tax treaty;</div>
                            <br>
                            <div style="margin-left: 20px;">(c) the partner’s share of a partnership’s effectively connected taxable income; or</div>
                            <br>
                            <div style="margin-left: 20px;">(d) the partner’s amount realized from the transfer of a partnership interest subject to withholding under section 1446(f);</div>

                            • The person named on line 1 of this form is a resident of the treaty country listed on line 9 of the form (if any) within the meaning of the income tax treaty between the United States and that country; and
                            <br>• For broker transactions or barter exchanges, the beneficial owner is an exempt foreign person as defined in the instructions.
                            <br><br>Furthermore, I authorize this form to be provided to any withholding agent that has control, receipt, or custody of the income of which I am the beneficial owner or any withholding agent that can disburse or make payments of the income of which I am the beneficial owner. <b>I agree that I will submit a new form within 30 days if any certification made on this form becomes incorrect.</b>
                        </td>
                    </tr>
                </table>
                <br>
                <br>

                <!-- Sign Here Section -->
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <!-- Left Arrow and Sign Here -->
                        <td colspan="4" style="width: 15%; vertical-align: top; padding-right: 10px; padding-top: 30px;">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="text-align: left; font-size: 14px; vertical-align: middle;">
                                        <strong>Sign Here</strong>
                                    </td>
                                    <td style="vertical-align: middle; text-align: right;">
                                        <div style="width: 0; height: 0; border-top: 16px solid transparent; border-bottom: 16px solid transparent; border-left: 10px solid black;"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>



                        <!-- Certification and Signature -->
                        <td colspan="8" style="width: 85%;">
                            <div style="margin-bottom: 10px;">
                                <label style="display: inline-block; vertical-align: middle;">
                                    <input type="checkbox" <?PHP IF($accept_certification==1) echo 'checked'?> style="margin-right: 10px; vertical-align: middle;">
                                </label>
                                <span style="display: inline-block; vertical-align: middle;">
                                I certify that I have the capacity to sign for the person identified on line 1 of this form.
                            </span>
                            </div>

                            <div>
                                <table style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td colspan="6" style="height: 40px; vertical-align: bottom; text-align: center;">
                                            <div style="border-top: 1px solid black; padding-top: 2px;">
                                                <span style="font-size: 10px;">Signature of beneficial owner (or individual authorized to sign for beneficial owner)</span>
                                            </div>
                                        </td>
                                        <td colspan="1"></td>
                                        <td colspan="3" style="height: 40px; vertical-align: bottom; text-align: center;">
                                            <b><?PHP echo $date_of_birth?></b>
                                            <div style="border-top: 1px solid black; padding-top: 2px;">
                                                <span style="font-size: 10px;">Date (MM-DD-YYYY)</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="height: 40px; vertical-align: bottom;">
                                            <b><?PHP echo $signer_name?></b>
                                            <div style="border-top: 1px solid black; padding-top: 2px;">
                                                <span style="font-size: 10px;">Print name of signer</span>
                                            </div>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                </table>

                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>

                <!-- Footer Section -->
                <table style="border-top: 1px solid black">
                    <tr>
                        <td colspan="4">
                            <span><strong>For Paperwork Reduction Act Notice, see separate instructions.</strong></span>
                        </td>
                        <td colspan="3">
                            <span>Cat. No. 25047Z</span>
                        </td>
                        <td colspan="3">
                            <span style="float: right">Form <strong><span style="font-size: 14px">W-8BEN</span></strong> (Rev. 10-2021)</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
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
$dompdf->stream("ff_w8_ben.pdf", array("Attachment" => 1));
?>