<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../favicon.png" rel="shortcut icon" type="image/x-icon" />
    <title>Firmus Financial Inc.</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link  href="../css/jquery-ui.css" rel="stylesheet" type="text/css"/>
<!-- script -->
	<script src="../js/jquery-1.10.2.js" type="text/javascript"></script> 
	<script src="../js/jquery-ui.js" type="text/javascript"></script>
	<script src="../js/jquery.ui.datepicker-fr.js" type="text/javascript"></script>
<script type ="text/javascript">
$(document).ready(function() {
// Datepicker Popups calender to Choose date.
    $(function() {
        $("#datepicker").datepicker();
        $("#datepicker1").datepicker();
		$("#datepicker2").datepicker();
		$("#datepicker3").datepicker();
		$("#datepicker4").datepicker();
		$("#datepicker5").datepicker();
		$("#datepicker6").datepicker();
// Pass the user selected date format.
        $("#format").change(function() {
            $("#datepicker").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker1").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker2").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker3").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker4").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker5").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker6").datepicker("option", "dateFormat", $(this).val());
        });
    });
});
</script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.dataTables.js" type="text/javascript"></script>
     
        <script type="text/javascript">
            
                $(document).ready(function() {
                        $('#example').dataTable( {
                                "language": {
								  "url": "../js/French.json"
                               }
                          } );
                          } );
						  
	</script>

	
	
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
?>
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
                    <td><input name="date_of_birth" type="date" class="form-control"></td>
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
                    <td><input name="certification_date" value= "<?php echo $certification_date; ?>"  type="date" class="form-control"></td>
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
    </html></html>