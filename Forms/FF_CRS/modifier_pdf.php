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
$db->query("select * from FOR_FF_CRS_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E_Name=$data['E_Name'];
$E_Country=$data['E_Country'];
$E_Tax_Adress_Reg=$data['E_Tax_Adress_Reg'];
$E_Local_Number=$data['E_Local_Number'];
$E_City=$data['E_City'];
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



$CRS_1=$data['CRS_1'];
$CRS_2=$data['CRS_2'];

$CRS_B=$data['CRS_B'];
$CRS_C=$data['CRS_C'];
$CRS_C_Details1=$data['CRS_C_Details1'];
$CRS_C_Details2=$data['CRS_C_Details2'];
$CRS_D=$data['CRS_D'];
$CRS_E=$data['CRS_E'];
$CRS_F=$data['CRS_F'];
$CRS_G=$data['CRS_G'];
$Person_Name_CtrlFE1=$data['Person_Name_CtrlFE1'];
$Person_Name_CtrlFE2=$data['Person_Name_CtrlFE2'];
$Person_Name_CtrlFE3=$data['Person_Name_CtrlFE3'];
$FATCA_3_1=$data['FATCA_3_1'];
$FATCA_3_2=$data['FATCA_3_2'];

$FATCA_3_2_GIIN=$data['FATCA_3_2_GIIN'];

$FATCA_3_3=$data['FATCA_3_3'];
$FATCA_3_4=$data['FATCA_3_4'];
$FATCA_3_4_1=$data['FATCA_3_4_1'];
$FATCA_3_4_2=$data['FATCA_3_4_2'];
$FATCA_3_4_3=$data['FATCA_3_4_3'];
$FATCA_3_5=$data['FATCA_3_5'];

$FATCA_3_5_Detail=$data['FATCA_3_5_Detail'];

$FATCA_3_6=$data['FATCA_3_6'];
$Trustee_Name=$data['Trustee_Name'];
$Trustee_GIIN=$data['Trustee_GIIN'];
$FATCA_3_7=$data['FATCA_3_7'];
$FATCA_3_8=$data['FATCA_3_8'];
$FATCA_3_9=$data['FATCA_3_9'];
$FATCA_a=$data['FATCA_a'];
$FATCA_b=$data['FATCA_b'];
$GIIN_1=$data['GIIN_1'];
$GIIN_2=$data['GIIN_2'];
$GIIN_3=$data['GIIN_3'];
$GIIN_4=$data['GIIN_4'];
$GIIN_5=$data['GIIN_5'];
$GIIN_6=$data['GIIN_6'];
$GIIN_7=$data['GIIN_7'];
$GIIN_8=$data['GIIN_8'];
$GIIN_9=$data['GIIN_9'];
$GIIN_10=$data['GIIN_10'];
$GIIN_11=$data['GIIN_11'];
$GIIN_12=$data['GIIN_12'];
$GIIN_13=$data['GIIN_13'];
$GIIN_14=$data['GIIN_14'];
$GIIN_15=$data['GIIN_15'];
$GIIN_16=$data['GIIN_16'];
$E_Sponsor_Name=$data['E_Sponsor_Name'];
$E_Sponsor_GIIN=$data['E_Sponsor_GIIN'];
$Person_Name_PNFFE1=$data['Person_Name_PNFFE1'];
$Person_Name_PNFFE2=$data['Person_Name_PNFFE2'];
$Person_Name_PNFFE3=$data['Person_Name_PNFFE3'];
$Person_Name_PNFFE4=$data['Person_Name_PNFFE4'];
$Person_Name_PNFFE5=$data['Person_Name_PNFFE5'];
$Person_Name_PNFFE6=$data['Person_Name_PNFFE6'];
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
$Signature_Date=datetofrench($Signature_Date);
$Runners_Date=datetofrench($Runners_Date);
$Compliance_Officer_Date=datetofrench($Compliance_Officer_Date);
$Chief_Executive_Date=datetofrench($Chief_Executive_Date);
//---------------------




?>  
 
<input class="active5 no-print" name="btn_pdf" value="Download as PDF File" type="button" onclick="window.print();">
 <body>
    <form name="form1" method="POST" action="modif.php">
<?PHP echo "<input type=hidden name=id value=$id>"; ?>	  
    <section class="wrapper">
        <div class="top-logo">
            <div class="flex-container">
                <img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid" style="margin-left: 400px;margin-right: 200;">
                <label for="account_number" style="margin-left: 120px;">Número de cuenta:</label>
                <input type="text" name="account_number" placeholder="Número de cuenta" />
            </div>
        </div>
      <div class="pdf-type-text">
        <h6>Autocertificación  de Residencia Fiscal Para Entidades</h6>
      </div>
      <div class="gray-paragraph">
        <p>Firmus Financial Inc., se basará en la información proporcionada en este documento para cumplir con las obligaciones en virtud de la Ley 47 del 2016 (cumplimiento impositivo Fiscal de cuentas  Extranjeras-  FATCA) y la Ley No. 51 del 2016 (Intercambio de Información para Fines Fiscales) y así como con los correspondientes acuerdos de intercambio de información tributaria suscritos por  Panamá con los Estados Unidos de América y  otros gobiernos). <br><br>
        Por favor, si usted es un cliente individual o una Persona Controladora de una entidad, complete un Formulario de auto-certificación individual.</p>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Datos Generales</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-60">
            <div class="vertical-form-field">
              <p>Razón Social o Nombre Legal Completo:</p>
              <input name="E_Name" value= "<?php echo $E_Name; ?>"  type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>País de Constitución:</p>
              <input name="E_Country" value= "<?php echo $E_Country; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-60">
            <div class="vertical-form-field">
              <p>Dirección Fiscal (Según Registro Fiscal):</p>
              <input name="E_Tax_Adress_Reg"  value= "<?php echo $E_Tax_Adress_Reg; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Número de Apto. / Local:</p>
              <input name="E_Local_Number" value= "<?php echo $E_Local_Number; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Ciudad/Provincia/Estado:</p>
              <input name="E_City"  value= "<?php echo $E_City; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Confirmación de Residencia Fiscal </b></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-50">
            <p><b>País y Dirección:</b></p>
          </div>
          <div class="single-field flex-25">
            <p><b>País emite o requiere
No. de identificación fiscal</b></p>
          </div>
          <div class="single-field flex-25">
            <p><b>TIN / Número de identificación Fiscal </b></p>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper m-0">
        <div class="d-flex align-items-center">
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>País / Estado</p>
              <input name="CRF_Country1" value= "<?php echo $CRF_Country1; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>Ciudad</p>
              <input name="CRF_City1" value= "<?php echo $CRF_City1; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="CRF_RequireIF1" value="1"  <?php if ($CRF_RequireIF1==1) echo 'checked'; ?> type="radio" id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="CRF_RequireIF1" value="0" <?php if ($CRF_RequireIF1==0) echo 'checked'; ?> type="radio" id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>TIN No.</p>
              <input name="CRF_TIN_No1" value= "<?php echo $CRF_TIN_No1; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Calle, Casa, Apartamento</p>
              <input name="CRF_Adress1" value= "<?php echo $CRF_Adress1; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper m-0 bg-gray">
        <div class="d-flex align-items-center">
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>País / Estado</p>
              <input name="CRF_Country2" value= "<?php echo $CRF_Country2; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>Ciudad</p>
              <input name="CRF_City2" value= "<?php echo $CRF_City2; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="CRF_RequireIF2" value="1" <?php if ($CRF_RequireIF2==1) echo 'checked'; ?> type="radio" id="Si2">
                <label for="Si2">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="CRF_RequireIF2" value="0"  <?php if ($CRF_RequireIF2==0) echo 'checked'; ?>  type="radio" id="No2">
                <label for="No2">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>TIN No.</p>
              <input name="CRF_TIN_No2"  value= "<?php echo $CRF_TIN_No2; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Calle, Casa, Apartamento</p>
              <input name="CRF_Adress2" value= "<?php echo $CRF_Adress2; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper m-0">
        <div class="d-flex align-items-center">
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>País / Estado</p>
              <input name="CRF_Country3" value= "<?php echo $CRF_Country3; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>Ciudad</p>
              <input name="CRF_City3" value= "<?php echo $CRF_City3; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="CRF_RequireIF3" value="1" <?php if ($CRF_RequireIF3==1) echo 'checked'; ?> type="radio" id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input name="CRF_RequireIF3" value="0" <?php if ($CRF_RequireIF3==0) echo 'checked'; ?> type="radio" id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-25">
            <div class="horizontal-form-field">
              <p>TIN No.</p>
              <input name="CRF_TIN_No3"  value= "<?php echo $CRF_TIN_No3; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Calle, Casa, Apartamento</p>
              <input name="CRF_Adress3"  value= "<?php echo $CRF_Adress3; ?>" type="text" class="form-control">
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
                <input name="NOTIN1_A" value="1" <?php if ($NOTIN1_A==1) echo 'checked'; ?>  type="checkbox" id="A">
                <label for="A">A</label>
              </div>
              <div class="checkbox-block">
                <input name="NOTIN1_B" value="1" <?php if ($NOTIN1_B==1) echo 'checked'; ?> type="checkbox" id="B">
                <label for="B">B</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-80">
            <div class="horizontal-form-field">
              <p>(explicar)</p>
              <input name="NOTIN1_R" value= "<?php echo $NOTIN1_R; ?>"  type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <b>2.</b>
              <div class="checkbox-block">
                <input name="NOTIN2_A" value="1" <?php if ($NOTIN2_A==1) echo 'checked'; ?> type="checkbox" id="A2">
                <label for="A2">A</label>
              </div>
              <div class="checkbox-block">
                <input name="NOTIN2_B" value="1"  <?php if ($NOTIN2_B==1) echo 'checked'; ?> type="checkbox" id="B2">
                <label for="B2">B</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-80">
            <div class="horizontal-form-field">
              <p>(explicar)</p>
              <input name="NOTIN2_R"  value= "<?php echo $NOTIN2_R; ?>"  type="text" class="form-control">
            </div>
          </div>
        </div>
		<div class="d-flex">
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <b>3.</b>
              <div class="checkbox-block">
                <input name="NOTIN3_A" value="1" <?php if ($NOTIN3_A==1) echo 'checked'; ?> type="checkbox" id="A2">
                <label for="A2">A</label>
              </div>
              <div class="checkbox-block">
                <input name="NOTIN3_B" value="1" <?php if ($NOTIN3_B==1) echo 'checked'; ?> type="checkbox" id="B2">
                <label for="B2">B</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-80">
            <div class="horizontal-form-field">
              <p>(explicar)</p>
              <input name="NOTIN3_R" value="<?php echo $NOTIN3_R; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
	  
      <div class="pdf-type-text">
        <h6>AEOI (CRS)</h6>
      </div>
      <div class="pdf-type-subtext">
        <p><b>2. Tipo de Entidad, de acuerdo a las reglas del Intercambio Automático de Información - CRS</b> <br><i>(Por favor proporcione el estatus seleccionando la casilla que corresponda) </i></p>
      </div>
      <div class="fields-block-wrapper m-0">
        <div class="bulleted-check-heading">
          <p><b>A. Institución Financiera.</b></p>
        </div>
        <div class="checkbox-bullet-points ps-45">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <p>i.</p>
            <div class="checkbox-block">
              <input name="CRS_1" value="1" <?php if ($CRS_1==1) echo 'checked'; ?> type="checkbox" id="entidad">
              <label for="entidad">Una entidad de inversión localizada en una jurisdicción no participante y administrada por otra institución financiera.  (Nota: si selecciona esta casilla, por favor también complete la Parte 2.1)</label>
            </div>
          </div>

          <div class="checkboxes-group checkbox-bullet-points-block">
            <p>ii.</p>
            <div class="checkbox-block">
              <input name="CRS_2" value="1" <?php if ($CRS_2==1) echo 'checked'; ?> type="checkbox" id="Otra">
              <label for="Otra">Otra entidad de inversión</label>
            </div>
          </div>  
        </div>
        <div class="checkbox-bullet-points">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>B.</b>
            
              <input name="CRS_B" value="1" <?php if ($CRS_B==1) echo 'checked'; ?> type="checkbox" id="localizada">
              <label for="localizada"><b>Institución Financiera.</b> Institución de Depósito, Institución de Custodia o Compañía de Seguros específica.</label>
            </div>
          </div>

          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>C.</b>
			<input name="CRS_C" value="1" <?php if ($CRS_C==1) echo 'checked'; ?> type="checkbox" id="Empresas">
            <div class="checkbox-block">
              
              <label for="Empresas">ENF Activa. Empresas cuyas acciones sean regularmente comercializadas en una bolsa de valores establecida o una empresa relacionada de una entidad cuyas acciones se comercializan en un mercado de valores establecido. <br><br>* En caso de haber seleccionado la “C”, por favor proporcione el nombre de la bolsa de valores establecida en la que la entidad comercializa sus acciones:</label>
            </div>
            </div>
         
        
        <div class="d-flex">
          <div class="single-field flex-8">
          </div>
          <div class="single-field flex-92">
            <input name="CRS_C_Details1" value="<?php echo $CRS_C_Details1; ?>"  type="text" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-8">
          </div>
          <div class="single-field flex-92">
            <p>En caso de seleccionar la “C”, y ser una Entidad Relacionada de una entidad cuyas acciones se comercializan regularmente en un mercado de valores establecido, por favor proporcione el nombre:</p>
            <input name="CRS_C_Details2" value="<?php echo $CRS_C_Details2; ?>" type="text" class="form-control">
          </div>
        </div>
        <div class="checkbox-bullet-points">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>D.</b>
            <div class="checkbox-block">
              <input name="CRS_D" value="1" <?php if ($CRS_D==1) echo 'checked'; ?> type="checkbox" id="Gubernamental">
              <label for="Gubernamental">ENF Activa, una Entidad Gubernamental o Banco Central.</label>
            </div>
          </div>
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>E.</b>
            <div class="checkbox-block">
              <input name="CRS_E" value="1" <?php if ($CRS_E==1) echo 'checked'; ?> type="checkbox" id="Empresas">
              <label for="Empresas">ENF Activa, una Organización Internacional (organización intergubernamental o supranacional).</label>
            </div>
            
          </div>  
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>F.</b>
            <div class="checkbox-block">
              <input name="CRS_F" value="1" <?php if ($CRS_F==1) echo 'checked'; ?> type="checkbox" id="Empresas">
              <label for="Empresas">ENF Activa, distinta de (C) </label>
            </div>
            
          </div> 
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>G.</b>
            <div class="checkbox-block">
              <input name="CRS_G" value="1" <?php if ($CRS_G==1) echo 'checked'; ?> type="checkbox" id="Empresas">
              <label for="Empresas">ENF Pasiva (Nota: si selecciona esta casilla, por favor también complete la Parte 2.1).</label>
            </div>
            
          </div> 
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>2.1 Persona(s) que ejerce(n) Control de Entidades No Financieras
        </b> <br><i>Si usted seleccionó la letra (A) parte (i) o la letra (G) de la sección de arriba, entonces debe completar:</i></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-100">
            <p>(a) Indique el (los) nombre(s) de cualquier persona(s) que ejerce(n) el control del Titular de la Cuenta:</p>
          </div>
          
        </div>
        <div class="d-flex align-items-end">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <b>1-</b>
              <input name="Person_Name_CtrlFE1" value="<?php echo $Person_Name_CtrlFE1; ?>"  type="text" class="form-control">
            </div>
          </div>
          
        </div>
        <div class="d-flex mt-16 align-items-end">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <b>2-</b>
              <input name="Person_Name_CtrlFE2" value="<?php echo $Person_Name_CtrlFE2; ?>" type="text" class="form-control">
            </div>
          </div>
          
        </div>
        <div class="d-flex mt-16 align-items-end">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <b>3-</b>
              <input name="Person_Name_CtrlFE3" value="<?php echo $Person_Name_CtrlFE3; ?>" type="text" class="form-control">
            </div>
          </div>
          
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-100">
            <p>(b) Debe llenar el formulario llamado “Autocertificación de Residencia Fiscal -Individuo que Ejerce Control”. Aplica para cada uno de los individuos que ejerzan el control de la  entidad </p>
          </div>
        </div>
        <div class="gray-paragraph mt-16">
          <p>En el caso del CRS, si no hay personas naturales que ejercen el control de la Entidad, entonces la(s) Persona(s) que ejerce el control(s) serán quienes ocupan el cargo de gerente. (Consulte la Definición de “Persona que ejerce el control” en el Anexo)</p>
        </div>
      </div>
      <div class="pdf-type-text">
        <h6>FATCA</h6>
      </div>
      <div class="pdf-type-subtext">
        <p><b>3. Clasificación de la Organización bajo las Regulaciones Fiscales FATCA IGAl
        <br>Tipo de Entidad FATCA*</b> </p>
      </div>
      <div class="fields-block-wrapper m-0">
        <div class="checkbox-bullet-points">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.1</b>
            <div class="checkbox-block">
              <input name="FATCA_3_1" value="1" <?php if ($FATCA_3_1==1) echo 'checked'; ?> type="checkbox" id="Jurisdicción">
              <label for="Jurisdicción">Institución Financiera de Jurisdicción Asociada FATCA IGA</label>
            </div>
          </div>
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.2</b>
            <div class="checkbox-block align-items-center">
              <input name="FATCA_3_2" <?php if ($FATCA_3_2==1) echo 'checked'; ?> value="1" type="checkbox" id="Participante">
              <div class="single-field flex-90">
                <div class="horizontal-form-field">
                  <p>SInstitución Financiera Extranjera Participante (PFFI, en inglés). Escriba su GIIN a continuación</p>
                  <input name="FATCA_3_2_GIIN" value="<?php echo $FATCA_3_2_GIIN; ?>"  type="text" class="form-control m-0">
                </div>
              </div>
            </div>
          </div>  
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.3</b>
            <div class="checkbox-block">
              <input name="FATCA_3_3" value="1" <?php if ($FATCA_3_3==1) echo 'checked'; ?> type="checkbox" id="EEUU">
              <label for="EEUU">Institución Financiera Extranjera No Participante (N-PFFI, en inglés)
              </label>
            </div>
          </div> 
		  <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.4</b>
            <div class="checkbox-block">
              <input name="FATCA_3_4" value="1" <?php if ($FATCA_3_4==1) echo 'checked'; ?> type="checkbox" id="EEUU">
              <label for="EEUU">Entidad de EEUU – usted también debe suministrar un Formulario de Impuestos de EEUU
              </label>
            </div>
          </div> 
        </div>
        <div class="checkbox-bullet-points ps-45">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.4.1</b>
            <div class="checkbox-block">
              <input name="FATCA_3_4_1" value="1" <?php if ($FATCA_3_4_1==1) echo 'checked'; ?> type="checkbox" id="específica">
              <label for="específica">Una persona específica de EEUU</label>
            </div>
          </div>
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.4.2</b>
            <div class="checkbox-block">
              <input name="FATCA_3_4_2" value="1" <?php if ($FATCA_3_4_2==1) echo 'checked'; ?> type="checkbox" id="de">
              <label for="de">Una persona no específica de EEUU </label>
            </div>
          </div>  
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.4.3</b>
            <div class="checkbox-block">
              <input name="FATCA_3_4_3" value="1" <?php if ($FATCA_3_4_3==1) echo 'checked'; ?> type="checkbox" id="Considerada">
              <label for="Considerada">Entidad No Considerada de EEUU 
              </label>
            </div>
          </div> 
        </div>
        <div class="checkbox-bullet-points">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.5</b>
            <div class="checkbox-block align-items-center">
              <input name="FATCA_3_5" value="1" <?php if ($FATCA_3_5==1) echo 'checked'; ?> type="checkbox" id="Participante">
              <div class="single-field flex-90">
                <div class="horizontal-form-field">
                  <p>Entidad Financiera Extranjera Considerada en Cumplimiento (además de aquellas enumeradas con anterioridad)</p>
                  <input name="FATCA_3_5_Detail" value="<?php echo $FATCA_3_5_Detail; ?>" type="text" class="form-control m-0">
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="checkbox-bullet-points">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.6</b>
            <div class="checkbox-block align-items-center">
              <input name="FATCA_3_6" value="1" <?php if ($FATCA_3_6==1) echo 'checked'; ?> type="checkbox" id="Participante">
              <div class="single-field flex-90">
                <div class="horizontal-form-field">
                  <p>Trusted Documented Trust</p>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-8">
          </div>
          <div class="single-field flex-92">
            <div class="horizontal-form-field">
              <p>Nombre del Fideicomisario:</p>
              <input name="Trustee_Name" value="<?php echo $Trustee_Name; ?>"  type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-8">

          </div>
          <div class="single-field flex-92">
            <div class="horizontal-form-field">
              <p>GIIN del Fideisomisario:</p>
              <input name="Trustee_GIIN" value="<?php echo $Trustee_GIIN; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="checkbox-bullet-points">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.7</b>
            <div class="checkbox-block">
              <input name="FATCA_3_7" value="1"  <?php if ($FATCA_3_7==1) echo 'checked'; ?> type="checkbox" id="Jurisdicción">
              <p for="Jurisdicción">Beneficiario Exento</p>
            </div>
          </div>
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.8</b>
            <div class="checkbox-block align-items-center">
              <input name="FATCA_3_8" value="1" <?php if ($FATCA_3_8==1) echo 'checked'; ?> type="checkbox" id="Participante">
              <div class="single-field flex-90">
                <div class="horizontal-form-field">
                  <p>Entidad Extranjera No Financiera Activa (“Active NFFE” en inglés)</p>
                </div>
              </div>
            </div>
          </div>  
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>3.9</b>
            <div class="checkbox-block">
              <input name="FATCA_3_9" value="1" <?php if ($FATCA_3_9==1) echo 'checked'; ?> type="checkbox" id="EEUU">
              <p for="EEUU">Entidad Extranjera No Financiera Pasiva (“Passive NFFE” en inglés)
              </p>
            </div>
          </div> 
        </div>
        <div class="checkbox-bullet-points ps-45">
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>a.</b>
            <div class="checkbox-block">
              <input name="FATCA_a" value="1" <?php if ($FATCA_a==1) echo 'checked'; ?> type="checkbox" id="Jurisdicción">
              <p for="Jurisdicción">La NFFE Pasiva no tiene Personas de EEUU que Ejercen el Control</p>
            </div>
          </div>
          <div class="checkboxes-group checkbox-bullet-points-block">
            <b>b.</b>
            <div class="checkbox-block align-items-center">
              <input name="FATCA_b" value="1"  <?php if ($FATCA_b==1) echo 'checked'; ?> type="checkbox" id="Participante">
              <div class="single-field flex-90">
                <div class="horizontal-form-field">
                  <p>Las Personas de EEUU que Ejercen el Control y su información fiscal se han incluido en la Sección 3A a continuación.</p>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <div class="gray-paragraph">
        <b class="text-center">Por favor incluya, si se tiene, el Número de Identificación de Intermediario Global (“GIIN” en inglés) obtenido con fines FATCA.</b>
        <table border="1">
		<tr>
		<td><input name="GIIN_1" type="text" size="1" value="<?php echo $GIIN_1; ?>" ></td>
		<td><input name="GIIN_2" type="text" size="1" value="<?php echo $GIIN_2; ?>"></td>
		<td><input name="GIIN_3" type="text" size="1" value="<?php echo $GIIN_3; ?>"></td>
		<td><input name="GIIN_4" type="text" size="1" value="<?php echo $GIIN_4; ?>"></td>
		<td><input name="GIIN_5" type="text" size="1" value="<?php echo $GIIN_5; ?>"></td>
		<td><input name="GIIN_6" type="text" size="1" value="<?php echo $GIIN_6; ?>"></td>
		<td><input name="GIIN_7" type="text" size="1" value="<?php echo $GIIN_7; ?>"></td>
		<td><input name="GIIN_8" type="text" size="1" value="<?php echo $GIIN_8; ?>"></td>
		<td><input name="GIIN_9" type="text" size="1" value="<?php echo $GIIN_9; ?>"></td>
		<td><input name="GIIN_10" type="text" size="1" value="<?php echo $GIIN_10; ?>"></td>
		<td><input name="GIIN_11" type="text" size="1" value="<?php echo $GIIN_11; ?>"></td>
		<td><input name="GIIN_12" type="text" size="1" value="<?php echo $GIIN_12; ?>"></td>
		<td><input name="GIIN_13" type="text" size="1" value="<?php echo $GIIN_13; ?>"></td>
		<td><input name="GIIN_14" type="text" size="1" value="<?php echo $GIIN_14; ?>"></td>
		<td><input name="GIIN_15" type="text" size="1" value="<?php echo $GIIN_15; ?>"></td>
		<td><input name="GIIN_16" type="text" size="1" value="<?php echo $GIIN_16; ?>"></td>
		</tr>
		</table>
		
	
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-100">
            <b>Si la Entidad es una Institución Financiera Patrocinada ésta debe proporcionar su GIIN, si lo tiene. Por favor, incluya a continuación el nombre de la Entidad de Patrocinio y el GIIN</b>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Nombre de la Entidad de Patrocinio:</p>
              <input name="E_Sponsor_Name" value="<?php echo $E_Sponsor_Name; ?>"  type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>GIIN de la Entidad de Patrocinio:</p>
              <input name="E_Sponsor_GIIN" value="<?php echo $E_Sponsor_GIIN; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>3.A Personas Estadounidenses que Ejercen el Control de NFFE Pasivas
        </b> <br><i>Por favor, incluya los detalles de todas las Personas Estadounidenses que ejercen el control (si se requiere, use una hoja de papel por separado)</i></p>
      </div>
      <div class="fields-block-wrapper">
	  <p>a. Indique el (los) nombre(s) de cualquier persona(s) que ejerce(n) el control del Titular de la Cuenta:</p>
        <div class="d-flex mt-16">
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>1-</p>
              <input name="Person_Name_PNFFE1" value="<?php echo $Person_Name_PNFFE1; ?>" type="text" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <p>2-</p>
              <input name="Person_Name_PNFFE2" value="<?php echo $Person_Name_PNFFE2; ?>" type="text" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <p>3-</p>
              <input name="Person_Name_PNFFE3" value="<?php echo $Person_Name_PNFFE3; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>4-</p>
              <input name="Person_Name_PNFFE4" value="<?php echo $Person_Name_PNFFE4; ?>" type="text" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <p>5-</p>
              <input name="Person_Name_PNFFE5"  value="<?php echo $Person_Name_PNFFE5; ?>" type="text" class="form-control">
            </div>
            <div class="horizontal-form-field">
              <p>6-</p>
              <input name="Person_Name_PNFFE6" value="<?php echo $Person_Name_PNFFE6; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field">
            <p>(b) Debe llevar el formulario  “Autocertificación de Residencia Fiscal - Individuo que ejerce control”. Aplica para cada uno de los individuos que ejerzan el control de la  entidad</p>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Declaración</b></p>
      </div>
      <div class="gray-paragraph">
        <p>Declaro bajo juramento que las informaciones brindadas son a mi leal saber y entender, correctas y completas, asumiendo las responsabilidades legales por toda falsedad, omisión o declaración inexacta. Los flujos de ingreso y salida que efectuaré en Firmus  Financial Inc. cumplen y cumplirán con las obligaciones tributarias del país o países de residencia fiscal(es) declarados. <br><br>
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
              <input name="Full_name" value="<?php echo $Full_name; ?>"  type="text" class="form-control">
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
              <input name="Document_ID" value="<?php echo $Document_ID; ?>"  type="text" class="form-control">
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
              <input name="Signature_Date" value="<?php echo $Signature_Date; ?>" type="text" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
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
              <input name="Runners_Name" value="<?php echo $Runners_Name; ?>"  type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Oficial de Cumplimiento:</p>
              <input name="Compliance_Officer_Name" value="<?php echo $Compliance_Officer_Name; ?>" type="text" class="form-control">
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Nombre del Ejecutivo Principal:</p>
              <input name="Chief_Executive_Name" value="<?php echo $Chief_Executive_Name; ?>" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Runners_Date" value="<?php echo $Runners_Date; ?>" type="text" class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Compliance_Officer_Date" value="<?php echo $Compliance_Officer_Date; ?>" type="text" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Chief_Executive_Date" value="<?php echo $Chief_Executive_Date; ?>" type="text" class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
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
 
  </body>
</html>
