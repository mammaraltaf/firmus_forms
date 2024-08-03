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
		$("#datepicker7").datepicker();
// Pass the user selected date format.
        $("#format").change(function() {
            $("#datepicker").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker1").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker2").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker3").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker4").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker5").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker6").datepicker("option", "dateFormat", $(this).val());
			$("#datepicker7").datepicker("option", "dateFormat", $(this).val());
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
$db->query("select * from FOR_FF_PEP_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E_Name=$data['E_Name'];
$E_Surname=$data['E_Surname'];
$E_Country=$data['E_Country'];
$E_ID_type=$data['E_ID_type'];
$E_ID_No=$data['E_ID_No'];
$E_ID_Expire_Date=$data['E_ID_Expire_Date'];
$E_Birth_Date=$data['E_Birth_Date'];
$E_Birth_Place=$data['E_Birth_Place'];
$PEP_Link_Explain1=$data['PEP_Link_Explain1'];
$PEP_Link_Explain2=$data['PEP_Link_Explain2'];
$Account_Purpose=$data['Account_Purpose'];
$PEP_Relationship_Direct=$data['PEP_Relationship_Direct'];
$Funds_From_GED=$data['Funds_From_GED'];
$Funds_From_GCE=$data['Funds_From_GCE'];
$Funds_From_GC=$data['Funds_From_GC'];
$Funds_From_GCLTH=$data['Funds_From_GCLTH'];
$Funds_From_MultiNat=$data['Funds_From_MultiNat'];
$Funds_From_Others=$data['Funds_From_Others'];
$Funds_Person_Autorised=$data['Funds_Person_Autorised'];
$PEP_Name=$data['PEP_Name'];
$PEP_Surname=$data['PEP_Surname'];
$PEP_Country=$data['PEP_Country'];
$PEP_ID_type=$data['PEP_ID_type'];
$PEP_ID_No=$data['PEP_ID_No'];
$PEP_ID_Expire_Date=$data['PEP_ID_Expire_Date'];
$PEP_Birth_Date=$data['PEP_Birth_Date'];
$PEP_Birth_Place=$data['PEP_Birth_Place'];
$Institution_Name=$data['Institution_Name'];
$PEP_LPP_Pos_Name=$data['PEP_LPP_Pos_Name'];
$PEP_LPP_parctice=$data['PEP_LPP_parctice'];
$PEP_LPPT_year=$data['PEP_LPPT_year'];
$PEP_Exerc_Aut=$data['PEP_Exerc_Aut'];
$PEP_Exerc_Aut_Detail=$data['PEP_Exerc_Aut_Detail'];
$PEP_Manage_PA=$data['PEP_Manage_PA'];
$PEP_Manage_PA_Detail=$data['PEP_Manage_PA_Detail'];
$PEP_Reput=$data['PEP_Reput'];
$PEP_Reput_Detail=$data['PEP_Reput_Detail'];
$PEP_Reput_News=$data['PEP_Reput_News'];
$PEP_Reput_News_Detail=$data['PEP_Reput_News_Detail'];
$Full_name=$data['Full_name'];
$Document_ID=$data['Document_ID'];
$Signature_Date=$data['Signature_Date'];
$Signature=$data['Signature'];
$Runners_Name=$data['Runners_Name'];
$Runners_Date=$data['Runners_Date'];
$Compliance_Officer_Name=$data['Compliance_Officer_Name'];
$Compliance_Officer_Date=$data['Compliance_Officer_Date'];
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
$PEP_ID_Expire_Date=datetofrench($PEP_ID_Expire_Date);
$PEP_Birth_Date=datetofrench($PEP_Birth_Date);
$Signature_Date=datetofrench($Signature_Date);
$Runners_Date=datetofrench($Runners_Date);
$Compliance_Officer_Date=datetofrench($Compliance_Officer_Date);
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
        <h6>Persona Políticamente Expuesta (PEP)</h6>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Datos Generales Completar todos los campos de este formulario, de no aplicar colocar N/A</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input name="E_Name" type="text" value="<?php echo $E_Name; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input name="E_Surname"  type="text" value="<?php echo $E_Surname; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nacionalidad</p>
              <input name="E_Country"  type="text" value="<?php echo $E_Country; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input name="E_ID_type"  type="text" value="<?php echo $E_ID_type; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input name="E_ID_No"  type="text" value="<?php echo $E_ID_No; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input name="E_ID_Expire_Date"  value="<?php echo $E_ID_Expire_Date; ?>" type="text" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input name="E_Birth_Date" value="<?php echo $E_Birth_Date; ?>"   type="text" class="form-control" id="datepicker1" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input name="E_Birth_Place" value="<?php echo $E_Birth_Place; ?>"  type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Cuál es el vínculo con la Persona Políticamente Expuesta (en caso de que sea familiar o estrecho colaborador, explique cuál es su relación con esa persona)</p>
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-100">
            <input name="PEP_Link_Explain1"  value="<?php echo $PEP_Link_Explain1; ?>" type="text" class="form-control">
          </div>
          
        </div>
        <div class="d-flex">
          <div class="single-field flex-100">
            <input name="PEP_Link_Explain2" value="<?php echo $PEP_Link_Explain2; ?>"  type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Información sobre la cuenta que está solicitando aperturar</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-40">
            <div class="horizontal-form-field m-0">
              <p>Propósito de la cuenta:</p>
              <input name="Account_Purpose"  type="text" value="<?php echo $Account_Purpose; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-40">
            <p>Su relación con la Persona Políticamente Expuesta es:</p>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <div class="checkboxes-group m-0">
                <div class="checkbox-block">
                  <input name="PEP_Relationship_Direct"  value="1"  <?php if ($PEP_Relationship_Direct==1) echo 'checked'; ?> type="radio"  value="1" id="HDirecta">
                  <label for="HDirecta">Directa</label>
                </div>
                <div class="checkbox-block">
                  <input name="PEP_Relationship_Direct"  value="0"  <?php if ($PEP_Relationship_Direct==0) echo 'checked'; ?>  type="radio" value="0" id="Indirecta">
                  <label for="Indirecta">Indirecta</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Los fondos a ser depositados en la cuenta provienen de:</b></p>
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
              <p>Una entidad gubernamental directamente
              </p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GED"  type="radio" value="1"  <?php if ($Funds_From_GED==1) echo 'checked'; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GED"  type="radio" value="0" <?php if ($Funds_From_GED==0) echo 'checked'; ?> id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>Una entidad controlada por el gobierno
              </p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GCE"  type="radio" value="1" <?php if ($Funds_From_GCE==1) echo 'checked'; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GCE"  type="radio" value="0" <?php if ($Funds_From_GCE==0) echo 'checked'; ?> id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>¿Una empresa gubernamental
              </p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GC"  type="radio" value="1" <?php if ($Funds_From_GC==1) echo 'checked'; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GC"  type="radio" value="0" <?php if ($Funds_From_GC==0) echo 'checked'; ?> id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>Una empresa gubernamental ubicada en un paraíso fiscal
              </p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GCLTH"  type="radio"  value="1" <?php if ($Funds_From_GCLTH==1) echo 'checked'; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_GCLTH"  type="radio" value="0" <?php if ($Funds_From_GCLTH==0) echo 'checked'; ?> id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="tc-row single-field flex-80">
              <p>Una empresa multinacional</p>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_MultiNat"  type="radio" value="1" <?php if ($Funds_From_MultiNat==1) echo 'checked'; ?> id="Salario">
              </div>
            </div>
            <div class="tc-row single-field flex-10">
              <div class="checkbox-block">
                <input name="Funds_From_MultiNat"  type="radio" value="0" <?php if ($Funds_From_MultiNat==0) echo 'checked'; ?> id="Salario">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="single-field flex-100">
              <div class="horizontal-form-field">
                <p>Otros  (explique):</p>
                <input name="Funds_From_Others"  type="text" value="<?php echo $Funds_From_Others; ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="single-field flex-100">
              <div class="horizontal-form-field">
                <p>Quiénes de sus familiares directos, relacionados o socios, tendrán autorización para movilizar los fondos de la cuenta:</p>
                <input name="Funds_Person_Autorised"  type="text" value="<?php echo $Funds_Person_Autorised; ?>" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pdf-type-subtext">
        <p><b>Información de Persona Políticamente Expuesta</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input name="PEP_Name"  type="text" value="<?php echo $PEP_Name; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input name="PEP_Surname"  type="text" value="<?php echo $PEP_Surname; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nacionalidad:</p>
              <input name="PEP_Country"  type="text" value="<?php echo $PEP_Country; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input name="PEP_ID_type"  type="text" value="<?php echo $PEP_ID_type; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input name="PEP_ID_No"  type="text" value="<?php echo $PEP_ID_No; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input name="PEP_ID_Expire_Date"  type="text" value="<?php echo $PEP_ID_Expire_Date; ?>" class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input name="PEP_Birth_Date"  type="text" value="<?php echo $PEP_Birth_Date; ?>" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input name="PEP_Birth_Place"  type="text" value="<?php echo $PEP_Birth_Place; ?>" class="form-control">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Nombre de la institución o empresa a través de la cual se vincula como Persona Políticamente Expuesta: </p>
              <input name="Institution_Name"  type="text" value="<?php echo $Institution_Name; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-16">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>En caso que la Persona Políticamente Expuesta esté vinculada a un cargo público, favor indicar el nombre de dicho cargo: </p>
              <input name="PEP_LPP_Pos_Name"  type="text" value="<?php echo $PEP_LPP_Pos_Name; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-16">
          <div class="single-field flex-35">
            <div class="horizontal-form-field">
              <p>En la actualidad se encuentra ejerciendo el mismo? </p>
            </div>
          </div>
          <div class="single-field flex-15">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="PEP_LPP_parctice"  type="radio" value="1" <?php if ($PEP_LPP_parctice==1) echo 'checked'; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="PEP_LPP_parctice"  type="radio" value="0" <?php if ($PEP_LPP_parctice==0) echo 'checked'; ?> id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>De ser negativa su respuesta favor indicar el año de terminación:</p>
              <input name="PEP_LPPT_year"  type="text" value="<?php echo $PEP_LPPT_year; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-16">
          <div class="single-field flex-90">
          </div>
          <div class="single-field flex-5">
            <p>Si</p>
          </div>
          <div class="single-field flex-5">
            <p>No</p>
          </div>
          

        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-90">
            <p>Es de su conocimiento si la Persona Políticamente Expuesta ejerce o ejercía autoridad sobre otros funcionarios públicos?</p>
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Exerc_Aut"  type="radio" value="1" <?php if ($PEP_Exerc_Aut==1) echo 'checked'; ?>  id="Títulos2">
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Exerc_Aut"  type="radio"  value="0" <?php if ($PEP_Exerc_Aut==0) echo 'checked'; ?> id="Títulos2">
          </div>
        </div>
		<div class="d-flex align-items-center">
          <div class="single-field flex-90">
            <div class="horizontal-form-field">
              <p><i>De ser afirmativa su respuesta, explique: </i></p>
              <input name="PEP_Exerc_Aut_Detail"  type="text" value="<?php echo $PEP_Exerc_Aut_Detail; ?>" class="form-control">
            </div>
          </div>
        </div>
		<div class="d-flex mt-16">
          <div class="single-field flex-90">
            <p>Es de su conocimiento si la Persona Políticamente Expuesta tiene o tenía acceso al manejo de bienes / fondos públicos?</p>
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Manage_PA"   value="1" type="radio" <?php if ($PEP_Manage_PA==1) echo 'checked'; ?> id="Títulos2">
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Manage_PA"  value="0" type="radio" <?php if ($PEP_Manage_PA==0) echo 'checked'; ?> id="Títulos2">
          </div>
        </div>
		<div class="d-flex align-items-center">
          <div class="single-field flex-90">
            <div class="horizontal-form-field">
              <p><i>De ser afirmativa su respuesta, explique: </i></p>
              <input name="PEP_Manage_PA_Detail"  type="text" value="<?php echo $PEP_Manage_PA_Detail; ?>" class="form-control">
            </div>
          </div>
        </div>
		<div class="d-flex mt-16">
         		
      </div>
      <div class="pdf-type-subtext">
        <p><b>Información Reputacional de la Persona Políticamente Expuesta</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-90">
          </div>
          <div class="single-field flex-5">
            <p>Si</p>
          </div>
          <div class="single-field flex-5">
            <p>No</p>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-90">
            <p>Es de su conocimiento si la Persona Políticamente Expuesta o alguno de sus familiares, relacionados o socios, han sido investigados por violación de la regulación contra el lavado de dinero o por corrupción en jurisdicción alguna?</p>
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Reput"  type="radio" value="1"  <?php if ($PEP_Reput==1) echo 'checked'; ?> id="Títulos2">
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Reput"  type="radio" value="0" <?php if ($PEP_Reput==0) echo 'checked'; ?>  id="Títulos2">
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-90">
            <div class="horizontal-form-field">
              <p><i>De ser afirmativa su respuesta, explique: </i></p>
              <input name="PEP_Reput_Detail"  type="text" value="<?php echo $PEP_Reput_Detail; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-90">
            <p>Es de su conocimiento la existencia de alguna noticia negativa en algún medio de comunicación o red social que vincule a la Persona Políticamente Expuesta o alguno de  sus familiares, relacionados o socios, con hechos de violación de regulación contra el lavado de dinero  o por corrupción en jurisdicción alguna?</p>
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Reput_News"  type="radio" value="1"  <?php if ($PEP_Reput_News==1) echo 'checked'; ?> id="Títulos2">
          </div>
          <div class="single-field flex-5">
            <input name="PEP_Reput_News"  type="radio" value="0"  <?php if ($PEP_Reput_News==0) echo 'checked'; ?> id="Títulos2">
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-90">
            <div class="horizontal-form-field">
              <p><i>De ser afirmativa su respuesta, explique: </i></p>
              <input name="PEP_Reput_News_Detail"  type="text" value="<?php echo $PEP_Reput_News_Detail; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Declaración</b></p>
      </div>
      <div class="gray-paragraph">
        <p>Actuando en mi propio nombre y de manera voluntaria, declaro que he comprendido a cabalidad la información que se ha solicitado, respondiendo los campos de forma veraz y correcta en todo su alcance de forma plena e irrevocable; autorizando a Firmus Financial Inc. para la verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso que implique modificación de la información aquí declarada, de las circunstancias: Económicas, financieras y/o personales del titular de la cuenta, firmantes autorizados, propietario efectivo o beneficiarios finales. <br><br>
        Confirmo estar anuente que las condiciones generales entregadas forman parte de la relación contractual presente.</p>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Firma</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre completo (en imprenta):</p>
              <input name="Full_name"  type="text" value="<?php echo $Full_name; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="horizontal-form-field">
              <p>No. de Documento (ID):</p>
              <input name="Document_ID"  type="text" value="<?php echo $Document_ID; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Signature_Date"  type="text" value="<?php echo $Signature_Date; ?>" class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field signature flex-33">
            <div class="signature-block"></div>
            <p>Firma</p>
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
              <input name="Runners_Name"  type="text" value="<?php echo $Runners_Name; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Oficial de Cumplimiento:</p>
              <input name="Compliance_Officer_Name"  type="text" value="<?php echo $Compliance_Officer_Name; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Ejecutivo Principal:</p>
              <input name="Chief_Executive_Name"  type="text" value="<?php echo $Chief_Executive_Name; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Runners_Date"  type="text" value="<?php echo $Runners_Date; ?>" class="form-control" id="datepicker5" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Compliance_Officer_Date"  type="text" value="<?php echo $Compliance_Officer_Date; ?>" class="form-control" id="datepicker6" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Chief_Executive_Date"  type="text" value="<?php echo $Chief_Executive_Date; ?>" class="form-control" id="datepicker7" placeholder="DD/MM/AAAA..">
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
	<center><input name=""  name="btn_submit"  class="active5" name="btn_submit" value=" Save Data " type="submit"></center> 
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
const numberCode<input name="" s = [...numberCodeForm.querySelectorAll('[data-number-code-<input name="" ]')];

// Event callbacks
const handle<input name=""  = ({target}) => {
  if (!target.value.length) { return target.value = null; }
  
  const <input name="" Length = target.value.length;
  let currentIndex = Number(target.dataset.numberCode<input name="" );
  
  if (<input name="" Length > 1) {
    const <input name="" Values = target.value.split('');
    
    <input name="" Values.forEach((value, valueIndex) => {
      const nextValueIndex = currentIndex + valueIndex;
      
      if (nextValueIndex >= numberCode<input name="" s.length) { return; }
      
      numberCode<input name="" s[nextValueIndex].value = value;
    });
    
    currentIndex += <input name="" Values.length - 2;
  }
 
  const nextIndex = currentIndex + 1;
  
  if(nextIndex < numberCode<input name="" s.length) {
    numberCode<input name="" s[nextIndex].focus();
  }
}

const handleKeyDown = e => {
  const {code, target} = e;
  
  const currentIndex = Number(target.dataset.numberCode<input name="" );
  const previousIndex = currentIndex - 1;
  const nextIndex = currentIndex + 1;
  
  const hasPreviousIndex = previousIndex >= 0;
  const hasNextIndex = nextIndex <= numberCode<input name="" s.length - 1
  
  switch(code) {
    case 'ArrowLeft':
    case 'ArrowUp':
      if (hasPreviousIndex) {
        numberCode<input name="" s[previousIndex].focus();
      }
      e.preventDefault();
      break;
      
    case 'ArrowRight':
    case 'ArrowDown':
      if (hasNextIndex) {
        numberCode<input name="" s[nextIndex].focus();
      }
      e.preventDefault();
      break;
    case 'Backspace':
      if (!e.target.value.length && hasPreviousIndex) {
        numberCode<input name="" s[previousIndex].value = null;
        numberCode<input name="" s[previousIndex].focus();
      }
      break;
    default:
      break;
  }
}

// Event listeners
numberCodeForm.addEventListener('<input name="" ', handle<input name="" );
numberCodeForm.addEventListener('keydown', handleKeyDown);
    </script>
  </body>
</html>
