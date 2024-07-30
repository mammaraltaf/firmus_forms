<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style_pdf.css" rel="stylesheet">
	<link href="../favicon.png" rel="shortcut icon" type="image/x-icon" />
    <title>Firmus Financial Inc.</title>
<!----html2pdf.js------>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.js" integrity="sha512-VqCeCECsaE2fYTxvPQk+OJ7+SQxzI1xZ6IqxuWd0GPKaJoeSFqeakVqNpMbx1AArieciBF71poL0dYTMiNgVxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.js" integrity="sha512-liPvfWpzKp7bXBAK05m+Uqrv5ATN4kCeUh64IygMoo98oEcTELOrymzU8omW2mEZszHHJ+qPOSkEzJLs2QqwQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.min.js" integrity="sha512-2ziYH4Qk1Cs0McWDB9jfPYzvRgxC8Cj62BUC2fhwrP/sUBkkfjYk3142xTKyuCyGWL4ooW8wWOzMTX86X1xe3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
<!----/html2pdf.js------>	
  </head>
<?PHP
error_reporting(0);
include "../dbclass.php";
include "../functions.php";
$db = new database('');
$db->connect();
$id=$_GET['id'];
$db->query("select * from FOR_FF_PNA_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E_Name=$data['E_Name'];
$E_surname=$data['E_surname'];
$E_Country=$data['E_Country'];
$E_ID_type=$data['E_ID_type'];
$E_ID_No=$data['E_ID_No'];
$E_ID_Expire_Date=$data['E_ID_Expire_Date'];
$E_Birth_Date=$data['E_Birth_Date'];
$E_Birth_Place=$data['E_Birth_Place'];
$E_Home_Adress=$data['E_Home_Adress'];
$E_Home_Adress_Number=$data['E_Home_Adress_Number'];
$RF_a_FATCA_USA=$data['RF_a_FATCA_USA'];
$RF_a_FATCA_NA=$data['RF_a_FATCA_NA'];
$RF_a_CRS_Panama=$data['RF_a_CRS_Panama'];
$RF_a_CRS_Other=$data['RF_a_CRS_Other'];
$RF_b_FATCA_USA=$data['RF_b_FATCA_USA'];
$RF_b_FATCA_NA=$data['RF_b_FATCA_NA'];
$RF_b_CRS_Panama=$data['RF_b_CRS_Panama'];
$RF_b_CRS_Other=$data['RF_b_CRS_Other'];
$RF_c_FATCA_USA=$data['RF_c_FATCA_USA'];
$RF_c_FATCA_NA=$data['RF_c_FATCA_NA'];
$RF_c_CRS_Panama=$data['RF_c_CRS_Panama'];
$RF_c_CRS_Other=$data['RF_c_CRS_Other'];
$RF_d_FATCA_USA=$data['RF_d_FATCA_USA'];
$RF_d_FATCA_NA=$data['RF_d_FATCA_NA'];
$RF_d_CRS_Panama=$data['RF_d_CRS_Panama'];
$RF_d_CRS_Other=$data['RF_d_CRS_Other'];
$RF_e_FATCA_USA=$data['RF_e_FATCA_USA'];
$RF_e_FATCA_NA=$data['RF_e_FATCA_NA'];
$RF_e_CRS_Panama=$data['RF_e_CRS_Panama'];
$RF_e_CRS_Other=$data['RF_e_CRS_Other'];
$CRF_Country1=$data['CRF_Country1'];
$CRF_City1=$data['CRF_City1'];
$CRF_RequireIF1=$data['CRF_RequireIF1'];
$CRF_TIN_No1=$data['CRF_TIN_No1'];
$CRF_Adress1=$data['CRF_Adress1'];
$CRF_Country2=$data['CRF_Country2'];
$CRF_City2=$data['CRF_City2'];
$CRF_RequireIF2=$data['CRF_RequireIF2'];
$CRF_TIN_No2=$data['CRF_TIN_No2'];
$CRF_Adress2=$data['CRF_Adress2'];
$CRF_Country3=$data['CRF_Country3'];
$CRF_City3=$data['CRF_City3'];
$CRF_RequireIF3=$data['CRF_RequireIF3'];
$CRF_TIN_No3=$data['CRF_TIN_No3'];
$CRF_Adress3=$data['CRF_Adress3'];
$NOTIN1_A=$data['NOTIN1_A'];
$NOTIN1_B=$data['NOTIN1_B'];
$NOTIN1_R=$data['NOTIN1_R'];
$NOTIN2_A=$data['NOTIN2_A'];
$NOTIN2_B=$data['NOTIN2_B'];
$NOTIN2_R=$data['NOTIN2_R'];
$NOTIN3_A=$data['NOTIN3_A'];
$NOTIN3_B=$data['NOTIN3_B'];
$NOTIN3_R=$data['NOTIN3_R'];
$Person_Name_CtrlFE1=$data['Person_Name_CtrlFE1'];
$Person_Name_CtrlFE2=$data['Person_Name_CtrlFE2'];
$Person_Name_CtrlFE3=$data['Person_Name_CtrlFE3'];

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
$Signature_Date=datetofrench($Signature_Date);

$Runners_Date=datetofrench($Runners_Date);
$Compliance_Officer_Date=datetofrench($Compliance_Officer_Date);
$Chief_Executive_Date=datetofrench($Chief_Executive_Date);
//---------------------




?>  
  
  <body>
  <input class="active5" name="btn_pdf" value="Download as PDF File " type="button" onclick="html2pdf(document.body)">   
    <form name="form1" method="POST" action="modif.php">
	<?PHP echo "<input type=hidden name=id value=$id>"; ?>
	<section class="wrapper">
      <div class="top-logo">
		<img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid" />
        <input type="text" name="account_number" placeholder="Número de cuenta" style="float: right;margin-top: 20px;" />
      </div>
      <div class="pdf-type-text">
        <h6>Autocertificación Persona que ejerce control </h6>
      </div>
      <div class="gray-paragraph">
        <p>Firmus Financial Inc., se basará en la información proporcionada en este documento para cumplir con las obligaciones en virtud de la Ley 47 del 2016 (cumplimiento impositivo Fiscal de cuentas  Extranjeras-  FATCA) y la Ley No. 51 del 2016 (Intercambio de Información para Fines Fiscales) y así como con los correspondientes acuerdos de intercambio de información tributaria suscritos por  Panamá con los Estados Unidos de América y  otros gobiernos). <br><br>
        Por favor, si usted es un cliente individual o una Persona Controladora de una entidad, complete un Formulario de auto-certificación individual</p>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Datos Generales</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input name="E_Name" type="text" value="<?PHP echo $E_Name ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input name="E_surname" type="text" value="<?PHP echo $E_surname ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nacionalidad:</p>
              <input name ="E_Country" type="text" value="<?PHP echo $E_Country ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input name="E_ID_type" type="text" value="<?PHP echo $E_ID_type ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input name ="E_ID_No" type="text" value="<?PHP echo $E_ID_No ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input name="E_ID_Expire_Date" type="text"  value="<?PHP echo $E_ID_Expire_Date ; ?>" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input  name="E_Birth_Date" type="text" value="<?PHP echo $E_Birth_Date ; ?>" class="form-control" id="datepicker1" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input name="E_Birth_Place" type="text" value="<?PHP echo $E_Birth_Place ; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-80">
            <div class="vertical-form-field">
              <p>Domicilio Personal:</p>
              <input type="text" name="E_Home_Adress" value="<?PHP echo $E_Home_Adress ; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nº de Domicilio / Casa:</p>
              <input type="text" name="E_Home_Adress_Number" value="<?PHP echo $E_Home_Adress_Number ; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Residencia Fiscal</b></p>
      </div>
      <div class="fields-block-wrapper m-0">
        <div class="d-flex">
          <div class="single-field flex-30">
            <p>&nbsp;</p>
          </div>
          <div class="single-field flex-40">
            <b>FATCA</b>
          </div>
          <div class="single-field flex-10">
            <b>AEIO (CRS)</b>
          </div>
          <div class="single-field flex-20">
            <p>&nbsp;</p>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30">
            <p>a) Usted es ciudadano de: </p>
          </div>
          <div class="single-field flex-40">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_a_FATCA_USA"  value="1" type="checkbox" <?php if ($RF_a_FATCA_USA==1) echo 'checked'; ?> id="Estados-Unidos">
                <label for="Estados-Unidos">Estados Unidos</label>
              </div>
              <div class="checkbox-block">
                <input name="RF_a_FATCA_NA"   value="1" <?php if ($RF_a_FATCA_NA==1) echo 'checked'; ?> type="checkbox" id="N/A">
                <label for="N/A">N/A</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_a_CRS_Panama"  value="1" type="checkbox" <?php if ($RF_a_CRS_Panama==1) echo 'checked'; ?> id="Panamá">
                <label for="Panamá">Panamá</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <p>Otro</p>
              <input name="RF_a_CRS_Other" type="text" value="<?php echo $RF_a_CRS_Other; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30">
            <p>b)  Poseo nacionalidad de: </p>
          </div>
          <div class="single-field flex-40">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_b_FATCA_USA" value="1" type="checkbox" <?php if ($RF_b_FATCA_USA==1) echo 'checked'; ?> id="Estados-Unidos2">
                <label for="Estados-Unidos2">Estados Unidos</label>
              </div>
              <div class="checkbox-block">
                <input name="RF_b_FATCA_NA"  value="1" type="checkbox" <?php if ($RF_b_FATCA_NA==1) echo 'checked'; ?>  id="N/A2">
                <label for="N/A2">N/A</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_b_CRS_Panama" value="1" type="checkbox" <?php if ($RF_b_CRS_Panama==1) echo 'checked'; ?> id="Panamá">
                <label for="Panamá">Panamá</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <p>Otro</p>
              <input name="RF_b_CRS_Other" type="text" value="<?php echo $RF_b_CRS_Other; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30">
            <p>c) Soy residente de: </p>
          </div>
          <div class="single-field flex-40">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_c_FATCA_USA"  value="1" type="checkbox" <?php if ($RF_c_FATCA_USA==1) echo 'checked'; ?> id="Estados-Unidos3">
                <label for="Estados-Unidos3">Estados Unidos</label>
              </div>
              <div class="checkbox-block">
                <input name="RF_c_FATCA_NA"  value="1" type="checkbox" <?php if ($RF_c_FATCA_NA==1) echo 'checked'; ?> id="N/A3">
                <label for="N/A3">N/A</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_c_CRS_Panama" value="1" type="checkbox"  <?php if ($RF_c_CRS_Panama==1) echo 'checked'; ?> id="Panamá">
                <label for="Panamá">Panamá</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <p>Otro</p>
              <input name="RF_c_CRS_Other" type="text" value="<?php echo $RF_c_CRS_Other; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30">
            <p>d) Mi residencia fisca es en: </p>
          </div>
          <div class="single-field flex-40">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_d_FATCA_USA" value="1" type="checkbox" <?php if ($RF_d_FATCA_USA==1) echo 'checked'; ?> id="Estados-Unidos4">
                <label for="Estados-Unidos4">Estados Unidos</label>
              </div>
              <div class="checkbox-block">
                <input name="RF_d_FATCA_NA" value="1" type="checkbox" <?php if ($RF_d_FATCA_NA==1) echo 'checked'; ?> id="N/A4">
                <label for="N/A4">N/A</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="RF_d_CRS_Panama" value="1" type="checkbox" <?php if ($RF_d_CRS_Panama==1) echo 'checked'; ?> id="Panamá">
                <label for="Panamá">Panamá</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field">
              <p>Otro</p>
              <input name="RF_d_CRS_Other" type="text" value="<?php echo $RF_d_CRS_Other; ?>" class="form-control">
            </div>
          </div>
        </div>
      
      <div class="pdf-type-subtext">
        <p><b>Confirmación de Residencia Fiscal</b></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-25">
            <b>País y Dirección</b>
          </div>
          <div class="single-field flex-25">
            <p>&nbsp;</p>
          </div>
          <div class="single-field flex-25">
            <b>País emite o requiere
              No. de identificación fiscal  </b>
          </div>
          <div class="single-field flex-25">
            <b>TIN / Número de identificación Fiscal </b>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>País / Estado</p>
              <input name="CRF_Country1"  type="text" value="<?php echo $CRF_Country1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>Ciudad</p>
              <input name="CRF_City1"  type="text" value="<?php echo $CRF_City1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="CRF_RequireIF1" value="1" type="radio" <?php if ($CRF_RequireIF1==1) echo 'checked'; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="CRF_RequireIF1" value="0" type="radio" <?php if ($CRF_RequireIF1==0) echo 'checked'; ?> id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>TIN No.</p>
              <input name="CRF_TIN_No1"  type="text" value="<?php echo $CRF_TIN_No1; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-16">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Calle, Casa, Apartamento</p>
              <input name="CRF_Adress1"  type="text" value="<?php echo $CRF_Adress1; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>País / Estado</p>
              <input name="CRF_Country2"  type="text" value="<?php echo $CRF_Country2; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>Ciudad</p>
              <input name="CRF_City2"  type="text" value="<?php echo $CRF_City2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="CRF_RequireIF2" value="1" type="radio" <?php if ($CRF_RequireIF2==1) echo 'checked'; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="CRF_RequireIF2" value="0" type="radio" <?php if ($CRF_RequireIF2==0) echo 'checked'; ?> id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>TIN No.</p>
              <input name="CRF_TIN_No2"  type="text" value="<?php echo $CRF_TIN_No2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-16">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Calle, Casa, Apartamento</p>
              <input name="CRF_Adress2"  type="text" value="<?php echo $CRF_Adress2; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>País / Estado</p>
              <input name="CRF_Country3"  type="text" value="<?php echo $CRF_Country3; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>Ciudad</p>
              <input name="CRF_City3"  type="text" value="<?php echo $CRF_City3; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="CRF_RequireIF3" value="1" type="radio" <?php if ($CRF_RequireIF3==1) echo 'checked'; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="CRF_RequireIF3" value="0" type="radio" <?php if ($CRF_RequireIF3==0) echo 'checked'; ?> id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>TIN No.</p>
              <input name="CRF_TIN_No3"  type="text" value="<?php echo $CRF_TIN_No3; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-16">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Calle, Casa, Apartamento</p>
              <input name="CRF_Adress3"  type="text" value="<?php echo $CRF_Adress3; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper m-0 bg-gray">
        <div class="d-flex">
          <div class="single-field flex-50">
            <p>En caso de no contar con TIN / Número de identificación Fiscal; por favor escoger entre los motivos listados:</p>
          </div>
          <div class="single-field flex-25">
            <p><b>Razón A:</b> El país en el cual poseo residencia fiscal no proporciona un código a sus residentes fiscales.</p>
          </div>
          <div class="single-field flex-25">
            <p><b>Razón B:</b> No puede obtener el TIN / Número de identificación Fiscal, explique</p>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <b>1.</b>
              <div class="checkbox-block">
                <input name="NOTIN1_A" value="1" type="checkbox" <?php if ($NOTIN1_A==1) echo 'checked'; ?> id="A">
                <label for="A">A</label>
              </div>
              <div class="checkbox-block">
                <input name="NOTIN1_B"  value="1" type="checkbox" <?php if ($NOTIN1_B==1) echo 'checked'; ?>  id="B">
                <label for="B">B</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-80">
            <div class="horizontal-form-field">
              <p>(explicar)</p>
              <input name="NOTIN1_R"  type="text" value="<?php echo $NOTIN1_R; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <b>2.</b>
              <div class="checkbox-block">
                <input name="NOTIN2_A" value="1" type="checkbox" <?php if ($NOTIN2_A==1) echo 'checked'; ?> id="A2">
                <label for="A2">A</label>
              </div>
              <div class="checkbox-block">
                <input name="NOTIN2_B" value="1"  type="checkbox" <?php if ($NOTIN2_B==1) echo 'checked'; ?> id="B2">
                <label for="B2">B</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-80">
            <div class="horizontal-form-field">
              <p>(explicar)</p>
              <input name="NOTIN2_R"  type="text" value="<?php echo $NOTIN2_R; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <b>3.</b>
              <div class="checkbox-block">
                <input name="NOTIN3_A"  value="1" type="checkbox" <?php if ($NOTIN3_A==1) echo 'checked'; ?> id="A2">
                <label for="A2">A</label>
              </div>
              <div class="checkbox-block">
                <input name="NOTIN3_B"  value="1" type="checkbox" <?php if ($NOTIN3_B==1) echo 'checked'; ?> id="B2">
                <label for="B2">B</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-80">
            <div class="horizontal-form-field">
              <p>(explicar)</p>
              <input name="NOTIN3_R"  type="text" value="<?php echo $NOTIN3_R; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Persona que ejerce el control <br></b><i>Si usted es la persona que controla una o más entidades en Firmus-Octogone Inc.,  ingrese el nombre de las entidades en la que ejerce control</i></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-end">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p><b>1. </b>Nombre de la entidad:</p>
              <input name="Person_Name_CtrlFE1"  type="text" value="<?php echo $Person_Name_CtrlFE1; ?>" class="form-control">
            </div>
          </div>
          
        </div>
        <div class="d-flex align-items-end">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p><b>2. </b>Nombre de la entidad:</p>
              <input name="Person_Name_CtrlFE2"  type="text" value="<?php echo $Person_Name_CtrlFE2; ?>" class="form-control">
            </div>
          </div>
          
        </div>
        <div class="d-flex align-items-end">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p><b>3. </b>Nombre de la entidad:</p>
              <input name="Person_Name_CtrlFE3"  type="text" value="<?php echo $Person_Name_CtrlFE3; ?>" class="form-control">
            </div>
          </div>
          
        </div>
      </div>      <div class="pdf-type-subtext">
        <p><b>Declaración</b></p>
      </div>
      <div class="gray-paragraph">
        <p>Declaro bajo juramento que las informaciones brindadas son a mi leal saber y entender, correctas y completas, asumiendo las responsabilidades legales por toda falsedad, omisión o declaración inexacta. Los flujos de ingreso y salida que efectuaré en Firmus Financial Inc. cumplen y cumplirán con las obligaciones tributarias del país o países de residencia fiscal(es) declarados. <br><br>
        Reconozco que la información provista en este formulario será suministrada a las autoridades fiscales de Panamá y puede intercambiarse  con autoridades fiscales de otros países en el marco de las nomas de FATCA y AEIO (CRS). <br><br>
        Cómo titular de la cuenta me comprometo a que si hay un cambio en las circunstancias que afecten a la residencia fiscal, entiendo que estoy obligado a informar de ello a la casa de valores de tal cambio en el plazo de 30 días a partir de su ocurrencia y proporcionar una versión actualizada de auto certificación como corresponde. <br><br>
        Confirmo estar anuente que las condiciones generales entregadas forman parte de la relación contractual presente.</p>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Firma</b> <br><i>Si usted no es titular de la cuenta, indique bajo qué carácter está firmando. (Adjunte copia certificada del poder y su identificación, podrá seleccionar más de una opción).</i></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-25">
          </div>
          <div class="single-field flex-50">
            <div class="vertical-form-field">
              <p>Nombre completo (en imprenta):</p>
              <input name="Full_name"  type="text" value="<?php echo $Full_name; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-25">
          </div>
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>No. de Documento (ID):</p>
              <input name="Document_ID"  type="text" value="<?php echo $Document_ID; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-25">
          </div>
          <div class="single-field flex-25">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Signature_Date"  type="text" value="<?php echo $Signature_Date; ?>" class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-25">
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-25">
          </div>
          <div class="single-field signature flex-50">
            <div class="signature-block"></div>
            <p>Firma</p>
          </div>
          <div class="single-field flex-25">
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
              <input name="Runners_Date"  type="text" value="<?php echo $Runners_Date; ?>" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Compliance_Officer_Date"  type="text" value="<?php echo $Compliance_Officer_Date; ?>" class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Chief_Executive_Date"  type="text" value="<?php echo $Chief_Executive_Date; ?>" class="form-control" id="datepicker5" placeholder="DD/MM/AAAA..">
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
