<!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style_pdf.css" rel="stylesheet">
        <link href="../favicon.png" rel="shortcut icon" type="image/x-icon" />
        <title>Firmus Financial Inc.</title>
        </script>
    <!----html2pdf.js------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.js" integrity="sha512-VqCeCECsaE2fYTxvPQk+OJ7+SQxzI1xZ6IqxuWd0GPKaJoeSFqeakVqNpMbx1AArieciBF71poL0dYTMiNgVxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.js" integrity="sha512-liPvfWpzKp7bXBAK05m+Uqrv5ATN4kCeUh64IygMoo98oEcTELOrymzU8omW2mEZszHHJ+qPOSkEzJLs2QqwQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.min.js" integrity="sha512-2ziYH4Qk1Cs0McWDB9jfPYzvRgxC8Cj62BUC2fhwrP/sUBkkfjYk3142xTKyuCyGWL4ooW8wWOzMTX86X1xe3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!----/html2pdf.js------>
          <style>
              @media print {
                  .no-print {
                      display: none;
                  }
                  .flex-container {
                      /*text-align: left;*/
                      /*padding: 25px 50px 0px 0px;*/
                  }

                  /*i want to make image on center of the page*/
                  .flex-container img {
                      margin-left: 400px;
                      margin-right: 200px;
                      margin-left: auto;
                      margin-right: auto;
                      /*max-width: 100%; !* Ensure the logo scales with the container *!*/
                      /*height: auto;*/

                  }
              }

          </style>
      </head>
      <?PHP
error_reporting(0);
include "../dbclass.php";
include "../functions.php";
$db = new database('');
$db->connect();
$id=$_GET['id'];
$db->query("select * from for_ff_w8_ben where id=$id");
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
?>
<body>
      <form name="form1" method="POST" action="modif.php">
          <?PHP echo "<input type=hidden name=id value=$id>"; ?>
          <input type="hidden" id="idInput" value="<?php echo $id; ?>">
          <!--<input class="active5 no-print" name="btn_pdf" value="Download as PDF File" type="button" onclick="window.print();">-->
          <input class="active5 no-print" name="btn_pdf" value="Download as PDF File" type="button" onclick="openPDF();">
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
                    <td>
                        <input name="date_of_birth" value= "<?php echo $date_of_birth; ?>"  type="text" class="form-control" id="datepicker" placeholder="DD/MM/AAAA.." required>
                </tr>
            </table>
        </div>

        

        <!-- Part II: Claim of Tax Treaty Benefits -->
        <div class="fields-block-wrapper">
            <h3>Part II: Claim of Tax Treaty Benefits (for chapter 3 purposes only) (see instructions)</h3>
        </div>
        <div style="font-family: Arial, sans-serif; margin: 20px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 5%; font-weight: bold; padding: 10px 5px;">9</td>
                    <td style="padding: 10px;">
                        <span style="font-weight: bold;">I certify that the beneficial owner is a resident of</span>
                        <input type="text" name="claim_of_tax_1" value="<?PHP echo $claim_of_tax_1 ?>"
                               style="border: none; border-bottom: 1px solid #000; width: 200px; margin-left: 5px;"/>
                        <span>within the meaning of the income tax treaty between the United States and that country.</span>

                        <!--                            <input type="text" style="border: none; border-bottom: 1px solid #000; width: 50px; margin-left: 5px; margin-right: 50px;" />-->
                    </td>
                </tr>
                <tr>
                    <td style="width: 5%; font-weight: bold; padding: 10px 5px;">10</td>
                    <td style="padding: 10px;">
                        <span style="font-weight: bold;">Special rates and conditions</span> (if applicable—see
                        instructions):
                        The beneficial owner is claiming the provisions of Article and paragraph
                        <input type="text" name="claim_of_tax_3" value="<?PHP echo $claim_of_tax_2 ?>"
                               style="border: none; border-bottom: 1px solid #000; width: 50px; margin-left: 5px; margin-right: 5px;"/>
                        <span>of the treaty identified on line 9 above to claim a</span>
                        <input type="text" name="claim_of_tax_4" value="<?PHP echo $claim_of_tax_3 ?>"
                               style="border: none; border-bottom: 1px solid #000; width: 50px; margin-left: 5px;"/>
                        <span>% rate of withholding on (specify type of income):</span>
                        <input type="text" name="claim_of_tax_5" value="<?PHP echo $claim_of_tax_4 ?>"
                               style="border: none; border-bottom: 1px solid #000; width: 100%; margin-top: 10px;"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding: 10px;">
                        <span style="font-weight: bold;">Explain the additional conditions in the Article and paragraph the beneficial owner meets to be eligible for the rate of withholding:</span>
                        <input type="text" name="claim_of_tax_6" value="<?PHP echo $claim_of_tax_5 ?>"
                               style="border: none; border-bottom: 1px solid #000; width: 100%; margin-top: 10px;"/>
                    </td>
                </tr>
            </table>
        </div>


        <!-- Part III: Certification -->
        <div class="fields-block-wrapper">
            <h3>Part III: Certification</h3>

            <div class="single-field">
                <div class="horizontal-form-field">
                    <input type="checkbox" name="accept_certification" value="1" <?PHP if ($accept_certification ==1) echo "checked" ; ?> />
                    <span>I certify that I have the capacity to sign for the person identified on line 1 of this form</span>
                </div>
            </div>
            <br>
            <div class="single-field signature flex-33">
                <div class="signature-block"></div>
                <p>Signature of beneficial owner (or individual authorized to sign for beneficial owner)</p>
            </div>
        </div>

        <div class="single-field">
            <div class="horizontal-form-field">
                <p>Signer Name:</p>
                <input name="signer_name" type="text" class="form-control" value="<?PHP echo $signer_name ?>">
                <p>Certification Date (MM-DD-YYYY):</p>
                <input name="certification_date" type="text" class="form-control" id="datepicker1" value="<?PHP echo $certification_date?>"
                       placeholder="DD/MM/AAAA.." required>
            </div>
        </div>

<!--        <center><input class="active5" name="btn_submit" value="Save Data" type="submit"></center>-->
    </section>
          <br>
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
<script>
    // Elements
    const numberCodeForm = document.querySelector('[data-number-code-form]');
    const numberCodeInputs = [...numberCodeForm.querySelectorAll('[data-number-code-input]')];
    function openPDF() {
        var id = document.getElementById('idInput').value; // or any way you get the id
        window.open(`../FF_W8_BEN/pdf/w8_ben_pdf.php?id=${id}`, '_blank');
    }
</script>