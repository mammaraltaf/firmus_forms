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
$db->query("select * from FOR_FF_PJC_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E_Name=$data['E_Name'];
$E_surname=$data['E_surname'];
$E_Country=$data['E_Country'];
$E_C_Status=$data['E_C_Status'];
$E_ID_type=$data['E_ID_type'];
$E_ID_No=$data['E_ID_No'];
$E_ID_Expire_Date=$data['E_ID_Expire_Date'];
$E_Birth_Date=$data['E_Birth_Date'];
$E_Birth_Place=$data['E_Birth_Place'];
$E_Email=$data['E_Email'];
$E_Profession=$data['E_Profession'];
$E_Profession_Current=$data['E_Profession_Current'];
$E_Home_Adress=$data['E_Home_Adress'];
$E_Home_Adress_Number=$data['E_Home_Adress_Number'];
$E_Home_Postal_Adress=$data['E_Home_Postal_Adress'];
$E_Home_Fax=$data['E_Home_Fax'];
$E_Office_Adress=$data['E_Office_Adress'];
$E_Office_Number=$data['E_Office_Number'];
$E_Office_Postal_Adress=$data['E_Office_Postal_Adress'];
$E_Office_Fax=$data['E_Office_Fax'];
$E_Phone=$data['E_Phone'];
$E_Salary_Independ=$data['E_Salary_Independ'];
$E_Salary_NotRetired=$data['E_Salary_NotRetired'];
$E_Salary_NotPensioned=$data['E_Salary_NotPensioned'];
$E_Salary_Fixed=$data['E_Salary_Fixed'];
$E_Salary_Variable=$data['E_Salary_Variable'];
$E_Salary_Other=$data['E_Salary_Other'];

$Funds_Source1=$data['Funds_Source1'];
$Funds_Source1_Type_Receive_Cash=$data['Funds_Source1_Type_Receive_Cash'];
$Funds_Source1_Type_Send_Cash=$data['Funds_Source1_Type_Send_Cash'];

$Funds_Source1_Type_Receive_Titles=$data['Funds_Source1_Type_Receive_Titles'];
$Funds_Source1_Type_Submit_Titles=$data['Funds_Source1_Type_Submit_Titles'];

$Funds_Source2=$data['Funds_Source2'];
$Funds_Source2_Type_Receive_Cash=$data['Funds_Source2_Type_Receive_Cash'];
$Funds_Source2_Type_Send_Cash=$data['Funds_Source2_Type_Send_Cash'];

$Funds_Source2_Type_Receive_Titles=$data['Funds_Source2_Type_Receive_Titles'];
$Funds_Source2_Type_Submit_Titles=$data['Funds_Source2_Type_Submit_Titles'];

$RS_Employer_name=$data['RS_Employer_name'];
$RS_Annual_Income_USD=$data['RS_Annual_Income_USD'];
$RS_Annual_Salary_USD=$data['RS_Annual_Salary_USD'];
$RS_Years_in_Company=$data['RS_Years_in_Company'];
$RS_Activity_Professional_fees=$data['RS_Activity_Professional_fees'];
$RS_Activity_Own_business=$data['RS_Activity_Own_business'];
$RS_Activity_Saving=$data['RS_Activity_Saving'];
$RS_Activity_Pension=$data['RS_Activity_Pension'];
$RS_Activity_Pension1=$data['RS_Activity_Pension1'];
$RS_Investment_Dividends=$data['RS_Investment_Dividends'];
$RS_Others=$data['RS_Others'];
$Bank1_Ref_Name=$data['Bank1_Ref_Name'];
$Bank1_Ref_Country=$data['Bank1_Ref_Country'];
$Bank1_Ref_Contact=$data['Bank1_Ref_Contact'];
$Bank1_Ref_Phone=$data['Bank1_Ref_Phone'];
$Bank2_Ref_Name=$data['Bank2_Ref_Name'];
$Bank2_Ref_Country=$data['Bank2_Ref_Country'];
$Bank2_Ref_Contact=$data['Bank2_Ref_Contact'];
$Bank2_Ref_Phone=$data['Bank2_Ref_Phone'];
$Bank3_Ref_Name=$data['Bank3_Ref_Name'];
$Bank3_Ref_Country=$data['Bank3_Ref_Country'];
$Bank3_Ref_Contact=$data['Bank3_Ref_Contact'];
$Bank3_Ref_Phone=$data['Bank3_Ref_Phone'];


$PEP=$data['PEP'];
$PEP_Close=$data['PEP_Close'];
$PEP_Five=$data['PEP_Five'];

$Signature1_Permanent=isset($data['Signature1_Permanent']) ? $data['Signature1_Permanent'] : null;
$Signature1_Not_variable=isset($data['Signature1_Not_variable']) ? $data['Signature1_Not_variable'] : null;
$Full_name=$data['Full_name'];
$Document_ID=$data['Document_ID'];
$Signature_Date=$data['Signature_Date'];

$Signature=$data['Signature'];

$Runners_Name=$data['Runners_Name'];
$Runners_Date=$data['Runners_Date'];
$Compliance_Officer_Name=$data['Compliance_Officer_Name'];
$Compliance__Officer_Date=$data['Compliance__Officer_Date'];
$Chief_Executive_Name=$data['Chief_Executive_Name'];
$Chief_Executive_Date=$data['Chief_Executive_Date'];
$Stock_Broker1_Signature=$data['Stock_Broker1_Signature'];
$Stock_Broker2_Signature=$data['Stock_Broker2_Signature'];
$Chief_Executive_Signature=$data['Chief_Executive_Signature'];
$account_number=$data['account_number'];
};

//------Change Dates from YYYY-MM-DD to DD/MM/YYYY format 
$E_ID_Expire_Date=datetofrench($E_ID_Expire_Date);
$E_Birth_Date=datetofrench($E_Birth_Date);
$Signature_Date=datetofrench($Signature_Date);

$Runners_Date=datetofrench($Runners_Date);
$Compliance__Officer_Date=datetofrench($Compliance__Officer_Date);
$Chief_Executive_Date=datetofrench($Chief_Executive_Date);
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
      <div class="pdf-type-text">
        <h6> Apertura de Cuenta Persona Jurídica  - Cotitular </h6>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Datos Generales</b> <i>Completar todos los campos de este formulario, de no aplicar colocar N/A</i></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input name="E_Name" value="<?PHP echo $E_Name ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input name="E_surname" value="<?PHP echo $E_surname ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nacionalidad:</p>
              <input name ="E_Country" value="<?PHP echo $E_Country ; ?>"   type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Estado Civil:</p>
              <input name ="E_C_Status" value="<?PHP echo $E_C_Status ; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input name="E_ID_type" value="<?PHP echo $E_ID_type ; ?>"  type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input name ="E_ID_No" value="<?PHP echo $E_ID_No ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input name="E_ID_Expire_Date" type="text"   value="<?PHP echo $E_ID_Expire_Date ; ?>" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input name="E_Birth_Date" type="text" value="<?PHP echo $E_Birth_Date ; ?>" class="form-control" id="datepicker1" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input name="E_Birth_Place" value="<?PHP echo $E_Birth_Place ; ?>"  type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-60">
            <div class="vertical-form-field">
              <p>Correo Electrónico:</p>
              <input name="E_Email" value="<?PHP echo $E_Email ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Profesión u Oficio:</p>
              <input name="E_Profession" value="<?PHP echo $E_Profession ; ?>"  type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Ocupación Actual:</p>
              <input name="E_Profession_Current" value="<?PHP echo $E_Profession_Current ; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Domicilio Personal:</p>
              <input name="E_Home_Adress" value="<?PHP echo $E_Home_Adress ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nº de Domicilio / Casa:</p>
              <input name="E_Home_Adress_Number" value="<?PHP echo $E_Home_Adress_Number ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Dirección Postal:</p>
              <input name="E_Home_Postal_Adress"  value="<?PHP echo $E_Home_Postal_Adress ; ?>"  type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fax</p>
              <input name="E_Home_Fax" value="<?PHP echo $E_Home_Fax ; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Domicilio Laboral:</p>
              <input name="E_Office_Adress" value="<?PHP echo $E_Office_Adress ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nº de Oficina:</p>
              <input name="E_Office_Number" value="<?PHP echo $E_Office_Number ; ?>"  type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Dirección Postal:</p>
              <input name="E_Office_Postal_Adress" value="<?PHP echo $E_Office_Postal_Adress ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fax</p>
              <input name="E_Office_Fax"  value="<?PHP echo $E_Office_Fax ; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p> No. de Teléfóno:</p>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Empleado con Salario:</p>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="checkboxes-group m-0">
              <div class="checkbox-block">
                <input name="E_Salary_Independ" <?PHP if ($E_Salary_Independ ==1) echo "checked" ; ?> type="checkbox" value="1" id="Independiente">
                <label for="Independiente">Independiente</label>
              </div>
              <div class="checkbox-block">
                <input name="E_Salary_NotRetired" <?PHP if ($E_Salary_NotRetired ==1) echo "checked" ; ?> type="checkbox" value="1" id="Jubilado">
                <label for="Jubilado">Jubilado</label>
              </div>
              <div class="checkbox-block">
                <input name="E_Salary_NotPensioned" <?PHP if ($E_Salary_NotPensioned ==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensionado">
                <label for="Pensionado">Pensionado</label>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <input name="E_Phone" type="text" value="<?PHP echo $E_Phone; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <div class="checkboxes-group">
                <div class="checkbox-block">
                  <input name="E_Salary_Fixed" <?PHP if ($E_Salary_Fixed==1) echo "checked"; ?> type="checkbox" value="1" id="Fijo">
                  <label for="Fijo">Fijo</label>
                </div>
                <div class="checkbox-block">
                  <input name="E_Salary_Variable" <?PHP if($E_Salary_Variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable">
                  <label for="Variable">Variable</label>
                </div>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="horizontal-form-field">
              <p>Otro:</p>
              <input name="E_Salary_Other" value="<?PHP echo $E_Salary_Other ; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Origen de Fondos</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-100">
            <p>Jurisdicciones principales de donde recibe/envía:</p>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-30">
            <div class="horizontal-form-field">
              <p>1-</p>
              <input name="Funds_Source1" value="<?PHP echo $Funds_Source1 ; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-70">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Funds_Source1_Type_Receive_Cash" type="checkbox" value="1" <?PHP if($Funds_Source1_Type_Receive_Cash==1) echo "checked"  ; ?> id="Recibe-su-Efectivo">
                <p>Recibe su Efectivo</p>
              </div>
              <div class="checkbox-block">
                <input name=" Funds_Source1_Type_Send_Cash"  type="checkbox" value="1" <?PHP if($Funds_Source1_Type_Send_Cash==1) echo "checked"  ; ?> id="Títulos">
                <p>Envía su Efectivo</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Source1_Type_Receive_Titles"  type="checkbox" value="1" <?PHP if ($Funds_Source1_Type_Receive_Titles==1) echo "checked"  ; ?> id="Recibe-su-Efectivo">
                <p>Recibe sus Títulos</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Source1_Type_Submit_Titles" type="checkbox" value="1" <?PHP if ($Funds_Source1_Type_Submit_Titles==1) echo "checked"  ; ?> id="Títulos">
                <p>Envía sus Títulos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-30">
            <div class="horizontal-form-field">
              <p>2-</p>
              <input name="Funds_Source2" value="<?PHP echo $Funds_Source2 ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-70">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Funds_Source2_Type_Receive_Cash" type="checkbox" value="1" <?PHP if ($Funds_Source2_Type_Receive_Cash==1) echo "checked" ; ?>  id="Recibe-su-Efectivo">
                <p>Recibe su Efectivo</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Source2_Type_Send_Cash" type="checkbox" value="1" <?PHP if ($Funds_Source2_Type_Send_Cash==1) echo "checked  "  ; ?> id="Títulos">
                <p>Envía su Efectivo</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Source2_Type_Receive_Titles" type="checkbox" value="1" <?PHP if($Funds_Source2_Type_Receive_Titles==1) echo "checked"  ; ?> id="Recibe-su-Efectivo">
                <p>Recibe sus Títulos</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Source2_Type_Submit_Titles" type="checkbox" value="1" <?PHP if($Funds_Source2_Type_Submit_Titles==1) echo "checked"  ; ?> id="Títulos">
                <p>Envía sus Títulos</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Fuente de los Recursos o Patrimonio</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-60">
            <div class="horizontal-form-field">
              <p>Nombre del Empleador / Independiente:</p>
              <input name="RS_Employer_name" type="text" value="<?PHP echo $RS_Employer_name ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="horizontal-form-field">
              <p>Ingreso Anual: (USD):</p>
              <input name="RS_Annual_Income_USD" type="text" value="<?PHP echo $RS_Annual_Income_USD ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-30">
            <div class="horizontal-form-field">
              <p>Salario Anual: (USD):</p>
              <input name="RS_Annual_Salary_USD" type="text" value="<?PHP echo $RS_Annual_Salary_USD ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <p>Años en la Empresa:</p>
              <input name="RS_Years_in_Company" type="text" value="<?PHP echo $RS_Years_in_Company ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>Actividad:</p>
              <div class="checkboxes-group">
                <div class="checkbox-block">
                  <input name="RS_Activity_Professional_fees" type="checkbox" value="1" <?PHP if ($RS_Activity_Professional_fees==1) echo "checked"  ; ?>  id="Honorarios-Profesionales">
                  <label for="Honorarios-Profesionales">Honorarios Profesionales</label>
                </div>
                <div class="checkbox-block">
                  <input name="RS_Activity_Own_business"  type="checkbox" value="1" <?PHP if ($RS_Activity_Own_business==1) echo "checked"  ; ?>  id="Negocio-Propio">
                  <label for="Negocio-Propio">Negocio Propio</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="horizontal-form-field">
              <div class="checkboxes-group">
                <div class="checkbox-block">
                  <input name="RS_Activity_Saving" type="checkbox" value="1" <?PHP if ($RS_Activity_Saving==1) echo "checked"  ; ?> id="Honorarios-Profesionales">
                  <p>Ahorro</p>
                </div>
                <div class="checkbox-block">
                  <input name="RS_Activity_Pension" type="checkbox" value="1" <?PHP if ($RS_Activity_Pension==1) echo "checked"  ; ?> id="Negocio-Propio">
                  <p>Pensión</p>
                </div>
                <div class="checkbox-block">
                  <input name="RS_Activity_Pension1" type="checkbox" value="1" <?PHP if ($RS_Activity_Pension1==1) echo "checked"  ; ?> id="Negocio-Propio">
                  <p>Salario</p>
                </div>
              </div>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="horizontal-form-field">
              <p>Dividendos de Inversión:</p>
              <input name="RS_Investment_Dividends" type="text" value="<?PHP echo $RS_Investment_Dividends ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="horizontal-form-field">
              <p>Otros:</p>
              <input name="RS_Others" type="text" value="<?PHP echo $RS_Others ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <b>Referencia Bancaria</b>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <p>Nombre de la Institución:</p>
          </div>
          <div class="single-field flex-20">
            <p>País</p>
          </div>
          <div class="single-field flex-20">
            <p>Persona Contacto:</p>
          </div>
          <div class="single-field flex-20">
            <p>Teléfono:</p>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-40">
            <div class="horizontal-form-field">
              <p>1-</p>
              <input name="Bank1_Ref_Name" type="text" value="<?PHP echo $Bank1_Ref_Name ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <p>2-</p>
              <input name="Bank2_Ref_Name" type="text" value="<?PHP echo $Bank2_Ref_Name ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <p>3-</p>
              <input name="Bank3_Ref_Name" type="text" value="<?PHP echo $Bank3_Ref_Name ; ?>" class="form-control">
            </div>
            
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <input name="Bank1_Ref_Country" type="text" value="<?PHP echo $Bank1_Ref_Country ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <input name="Bank2_Ref_Country" type="text" value="<?PHP echo $Bank2_Ref_Country ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <input name="Bank3_Ref_Country"  type="text" value="<?PHP echo $Bank3_Ref_Country ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <input name="Bank1_Ref_Contact"  type="text" value="<?PHP echo $Bank1_Ref_Contact ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <input name="Bank2_Ref_Contact" type="text"  value="<?PHP echo $Bank2_Ref_Contact ; ?>"class="form-control">
            </div>
            <div class="horizontal-form-field">
              <input name="Bank3_Ref_Contact" type="text" value="<?PHP echo $Bank3_Ref_Contact ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <input name="Bank1_Ref_Phone"  type="text" value="<?PHP echo $Bank1_Ref_Phone ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <input name="Bank2_Ref_Phone"  type="text" value="<?PHP echo $Bank2_Ref_Phone ; ?>" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <input name="Bank3_Ref_Phone" type="text" value="<?PHP echo $Bank3_Ref_Phone ; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Persona Políticamente Expuesta</b></p>
      </div>
      <div class="gray-paragraph">
        <p>El cliente  debe indicar expresamente si es Persona Políticamente Expuesta (PEP). PEP, es una persona que desempeña o ha desempeñado funciones públicas prominentes dentro o fuera del país, tales como jefes de Estado o de Gobierno, políticos de alto nivel, funcionarios gubernamentales, judiciales u oficiales militares de alto nivel, ejecutivos de alto nivel de corporaciones que pertenecen al Estado y funcionarios importantes de partidos políticos. (Con base en la definición establecida en el Artículo 4 Ley 23/2015).</p>
      </div>
      <div class="fields-block-wrapper px-0">
        <div class="d-flex">
          <div class="single-field flex-80">
          </div>
          <div class="single-field flex-10">
            <p>Si</p>
          </div>
          <div class="single-field flex-10">
            <p>No</p>
          </div>
        </div>
        <div class="tabled-checkboxes-rows">
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>¿Es Ud. Una Persona Políticamente Expuesta (PEP)?
              </p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="PEP" type="radio" value="1" <?PHP if ($PEP==1) echo "checked"  ; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="PEP" type="radio" value="0" <?PHP if ($PEP==0) echo "checked"  ; ?>  id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>¿Es Ud. Familiar Cercano (cónyuge o 1er grado consanguinidad) de PEP?
              </p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="PEP_Close" type="radio" value="1" <?PHP if ($PEP_Close==1) echo "checked"  ; ?>  id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="PEP_Close" type="radio"  value="0" <?PHP if ($PEP_Close==0) echo "checked" ; ?>  id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>¿Declara que en los últimos 5 años (según la definición) se considera como PEP?</p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="PEP_Five" type="radio" value="1" <?PHP if ($PEP_Five==1) echo "checked"  ; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="PEP_Five" type="radio"  value="0" <?PHP if ($PEP_Five==0) echo "checked"  ; ?>  id="Salario">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Declaración</b></p>
      </div>
      <div class="gray-paragraph">
        <p>Declaro (declaramos) bajo fe de juramento que los dineros, capitales, haberes, valores o títulos utilizados en los negocios realizados con Firmus Financial Inc., no tienen relación con actividades producto del delito de legitimación de capitales, y por lo tanto no guardan vinculación ninguna con actividades ilícitas, así como tampoco emanan de ningún delito previsto en cualquier ley penal vigente. <br> <br>
        Actuando en mi propio nombre y de manera voluntaria, declaro (declaramos) que hemos comprendido a cabalidad la información que se ha solicitado, respondiendo los campos de forma veraz y correcta, en todo su alcance de forma plena e irrevocable; autorizando a Firmus Financial Inc., para la verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso que implique modificación de la información aquí declarada, de las circunstancias: Económicas, financieras y/o personales, del titular de la cuenta, firmantes autorizados, propietario efectivo o beneficiarios finales.<br> <br>
        Confirmo (Confirmamos) estar anuente que las condiciones generales entregadas forman parte de la relación contractual presente.</p>
      </div>

      
      <div class="pdf-type-subtext">
        <p><b>Firma Cliente</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre completo (en imprenta):</p>
              <input name="Full_name" type="text" value="<?PHP echo $Full_name ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="horizontal-form-field">
              <p>No. de Documento (ID):</p>
              <input name="Document_ID"  type="text" value="<?PHP echo $Document_ID ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Signature_Date" type="text" value="<?PHP echo $Signature_Date ; ?>" class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field signature flex-33">
            <div class="signature-block"></div>
            <p>Firma del Corredor de Valores</p>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Firma (s) Personal de la Casa de Valores</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Corredor:</p>
              <input name="Runners_Name" type="text" value="<?PHP echo $Runners_Name ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Oficial de Cumplimiento:</p>
              <input name="Compliance_Officer_Name" type="text" value="<?PHP echo $Compliance_Officer_Name ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Ejecutivo Principal:</p>
              <input name="Chief_Executive_Name" type="text" value="<?PHP echo $Chief_Executive_Name ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Runners_Date" type="text" value="<?PHP echo $Runners_Date ; ?>" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Compliance__Officer_Date"  type="text" value="<?PHP echo $Compliance__Officer_Date ; ?>" class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Chief_Executive_Date" type="text" value="<?PHP echo $Chief_Executive_Date ; ?>" class="form-control" id="datepicker5" placeholder="DD/MM/AAAA..">
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
