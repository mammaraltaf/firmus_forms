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
error_reporting(E_ALL);
include "../dbclass.php";
include "../functions.php";
$db = new database('');
$db->connect();
$id=$_GET['id'];
$db->query("select * from FOR_FF_VAC_ES where id=$id");
while( $data = $db->fetch_array() )
{
$Account_Name=$data['Account_Name'];
$Client_Name=$data['Client_Name'];
$Custody_Account=$data['Custody_Account'];
$Person_Natural=$data['Person_Natural'];
$Person_Legal=$data['Person_Legal'];
$Opening_Date=$data['Opening_Date'];
$Presented_by=$data['Presented_by'];
$Presented_Date=$data['Presented_Date'];
$Verified_by=$data['Verified_by'];
$Verified_Date=$data['Verified_Date'];
$Approved_by=$data['Approved_by'];
$Approved_Date=$data['Approved_Date'];
$account_number=$data['account_number'];
};

//------Change Dates from YYYY-MM-DD to DD/MM/YYYY format 

$Opening_Date=datetofrench($Opening_Date);
$Presented_Date=datetofrench($Presented_Date);
$Verified_Date=datetofrench($Verified_Date);
$Approved_Date=datetofrench($Approved_Date);

//---------------------




?>  
  
  <body>
    <form name="form1" method="POST" action="modif.php">
	<?PHP echo "<input type=hidden name=id value=$id>"; ?>
    <section class="wrapper">
      <div class="top-logo">
        <div class="flex-container">
          <img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid" style="margin-left: 400px;margin-right: 200;">
          <label for="account_number" style="margin-left: 120px;">Número de cuenta:</label>
          <input type="text" name="account_number" value= "<?php echo $account_number; ?>" placeholder="Número de cuenta" />
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Verificación y Aprobación de Cuentas </b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="single-field flex-100">
          <div class="horizontal-form-field">
            <p>Nombre de la Cuenta:</p>
            <input name="Account_Name"  value="<?PHP echo $Account_Name ; ?>" type="text" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>Cliente:</p>
              <input name="Client_Name"  type="text" value="<?PHP echo $Client_Name ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>Cuenta Custodia:</p>
              <input name="Custody_Account" type="text" value="<?PHP echo $Custody_Account ; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="single-field flex-20">
            <p>Tipo de Persona:</p>
          </div>
          <div class="single-field flex-80">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input  name="Person_Natural" type="checkbox" value="1" <?PHP if ($Person_Natural ==1) echo "checked" ; ?> id="Natural">
                <label for="Natural">Natural</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="Person_Legal" type="checkbox" value="1"  <?PHP if ($Person_Legal ==1) echo "checked" ; ?> id="Jurídica">
                <label for="Jurídica">Jurídica</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field">
            <p>Fecha de Apertura:</p>
          </div>
          <div class="single-field">
            <div class="vertical-form-field">
              <input type="text" name="Opening_Date"  value="<?PHP echo $Opening_Date ; ?>" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="pdf-type-subtext">
        <p><b>De uso interno</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Presentado por:</p>
              <input type="text"  name="Presented_by"  value="<?PHP echo $Presented_by ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Verificado por::</p>
              <input type="text"  name="Verified_by"  value="<?PHP echo $Verified_by ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Aprobado por:</p>
              <input name="Approved_by" type="text" value="<?PHP echo $Approved_by ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Presented_Date" type="text" class="form-control" value="<?PHP echo $Presented_Date ; ?>" id="datepicker1" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Verified_Date" type="text" class="form-control" id="datepicker2" value="<?PHP echo $Verified_Date ; ?>" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Approved_Date" type="text" class="form-control" id="datepicker3" value="<?PHP echo $Approved_Date ; ?>" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field signature flex-33">
            <div class="signature-block"></div>
            <p>Firma del Corredor de Valores</p>
          </div>
          <div class="single-field signature flex-33">
            <div class="signature-block"></div>
            <p>Firma del Oficial de Cumplimiento</p>
          </div>
          <div class="single-field signature flex-33">
            <div class="signature-block"></div>
            <p>Firma del Ejecutivo Principal</p>
          </div>
        </div>
      </div>
	  	  <center><input class="active5" name="btn_submit" value=" Save Data " type="submit"></center> 
<br>
<br>
</form>
      <div class="border"></div>
      <div class="pdf-address">
        <h6>PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol, Ciudad de Panamá.</h6>
        <ul>
          <li><a href="tel:+ 507 310 062">+ 507 310 0625</a></li>
          <li><a href="www.firmus-financial.com"> www.firmus-financial.com</a></li>
        </ul>
        <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá bajo Resolución No. 630-2014</p>
      </div>
    </section>
    <script>
      // Elements
const numberCodeForm = document.querySelector('[data-number-code-form]');
const numberCodeInputs = [...numberCodeForm.querySelectorAll('[data-number-code-input]')];

// Event callbacks
const handleInput = ({target}) => {
  if (!target.value.length) { return target.value = null; }
  
  const inputLength = target.value.length;
  let currentIndex = Number(target.dataset.numberCodeInput);
  
  if (inputLength > 1) {
    const inputValues = target.value.split('');
    
    inputValues.forEach((value, valueIndex) => {
      const nextValueIndex = currentIndex + valueIndex;
      
      if (nextValueIndex >= numberCodeInputs.length) { return; }
      
      numberCodeInputs[nextValueIndex].value = value;
    });
    
    currentIndex += inputValues.length - 2;
  }
 
  const nextIndex = currentIndex + 1;
  
  if(nextIndex < numberCodeInputs.length) {
    numberCodeInputs[nextIndex].focus();
  }
}

const handleKeyDown = e => {
  const {code, target} = e;
  
  const currentIndex = Number(target.dataset.numberCodeInput);
  const previousIndex = currentIndex - 1;
  const nextIndex = currentIndex + 1;
  
  const hasPreviousIndex = previousIndex >= 0;
  const hasNextIndex = nextIndex <= numberCodeInputs.length - 1
  
  switch(code) {
    case 'ArrowLeft':
    case 'ArrowUp':
      if (hasPreviousIndex) {
        numberCodeInputs[previousIndex].focus();
      }
      e.preventDefault();
      break;
      
    case 'ArrowRight':
    case 'ArrowDown':
      if (hasNextIndex) {
        numberCodeInputs[nextIndex].focus();
      }
      e.preventDefault();
      break;
    case 'Backspace':
      if (!e.target.value.length && hasPreviousIndex) {
        numberCodeInputs[previousIndex].value = null;
        numberCodeInputs[previousIndex].focus();
      }
      break;
    default:
      break;
  }
}

// Event listeners
numberCodeForm.addEventListener('input', handleInput);
numberCodeForm.addEventListener('keydown', handleKeyDown);
    </script>
  </body>
</html>