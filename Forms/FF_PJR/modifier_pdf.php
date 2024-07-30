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
$db->query("select * from FOR_FF_PJR_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E1_Type_Beneficiary=$data['E1_Type_Beneficiary'];
$E1_Type_Legal_Representative=$data['E1_Type_Legal_Representative'];
$E1_Type_Director=$data['E1_Type_Director'];
$E1_Type_Protective=$data['E1_Type_Protective'];
$E1_Type_Other=$data['E1_Type_Other'];

$E1_Name=$data['E1_Name'];
$E1_surname=$data['E1_surname'];
$E1_Country=$data['E1_Country'];
$E1_C_Status=$data['E1_C_Status'];
$E1_ID_type=$data['E1_ID_type'];
$E1_ID_No=$data['E1_ID_No'];
$E1_ID_Expire_Date=$data['E1_ID_Expire_Date'];
$E1_Birth_Date=$data['E1_Birth_Date'];
$E1_Birth_Place=$data['E1_Birth_Place'];
$E1_Email=$data['E1_Email'];
$E1_Profession=$data['E1_Profession'];
$E1_Profession_Current=$data['E1_Profession_Current'];
$E1_Home_Adress=$data['E1_Home_Adress'];
$E1_Home_Adress_Number=$data['E1_Home_Adress_Number'];
$E1_Home_Postal_Adress=$data['E1_Home_Postal_Adress'];
$E1_Home_Fax=$data['E1_Home_Fax'];
$E1_Phone=$data['E1_Phone'];
$E1_Part_Rel=$data['E1_Part_Rel'];
$E1_Part_Rel_Raison=$data['E1_Part_Rel_Raison'];
$E1_Type_Beneficiary=$data['E1_Type_Beneficiary'];
$E1_Type_Legal_Representative=$data['E1_Type_Legal_Representative'];
$E1_Type_Director=$data['E1_Type_Director'];
$E1_Type_Protective=$data['E1_Type_Protective'];
$E1_Type_Other=$data['E1_Type_Other'];

$E2_Type_Beneficiary=$data['E2_Type_Beneficiary'];
$E2_Type_Legal_Representative=$data['E2_Type_Legal_Representative'];
$E2_Type_Director=$data['E2_Type_Director'];
$E2_Type_Protective=$data['E2_Type_Protective'];
$E2_Type_Other=$data['E2_Type_Other'];
$E2_Name=$data['E2_Name'];
$E2_surname=$data['E2_surname'];
$E2_Country=$data['E2_Country'];
$E2_C_Status=$data['E2_C_Status'];
$E2_ID_type=$data['E2_ID_type'];
$E2_ID_No=$data['E2_ID_No'];
$E2_ID_Expire_Date=$data['E2_ID_Expire_Date'];
$E2_Birth_Date=$data['E2_Birth_Date'];
$E2_Birth_Place=$data['E2_Birth_Place'];
$E2_Email=$data['E2_Email'];
$E2_Profession=$data['E2_Profession'];
$E2_Profession_Current=$data['E2_Profession_Current'];
$E2_Home_Adress=$data['E2_Home_Adress'];
$E2_Home_Adress_Number=$data['E2_Home_Adress_Number'];
$E2_Home_Postal_Adress=$data['E2_Home_Postal_Adress'];
$E2_Home_Fax=$data['E2_Home_Fax'];
$E2_Phone=$data['E2_Phone'];
$E2_Part_Rel=$data['E2_Part_Rel'];
$E2_Part_Rel_Raison=$data['E2_Part_Rel_Raison'];
$E2_Type_Beneficiary=$data['E2_Type_Beneficiary'];
$E2_Type_Legal_Representative=$data['E2_Type_Legal_Representative'];
$E2_Type_Director=$data['E2_Type_Director'];
$E2_Type_Protective=$data['E2_Type_Protective'];
$E2_Type_Other=$data['E2_Type_Other'];

$E3_Type_Beneficiary=$data['E3_Type_Beneficiary'];
$E3_Type_Legal_Representative=$data['E3_Type_Legal_Representative'];
$E3_Type_Director=$data['E3_Type_Director'];
$E3_Type_Protective=$data['E3_Type_Protective'];
$E3_Type_Other=$data['E3_Type_Other'];
$E3_Name=$data['E3_Name'];
$E3_surname=$data['E3_surname'];
$E3_Country=$data['E3_Country'];
$E3_C_Status=$data['E3_C_Status'];
$E3_ID_type=$data['E3_ID_type'];
$E3_ID_No=$data['E3_ID_No'];
$E3_ID_Expire_Date=$data['E3_ID_Expire_Date'];
$E3_Birth_Date=$data['E3_Birth_Date'];
$E3_Birth_Place=$data['E3_Birth_Place'];
$E3_Email=$data['E3_Email'];
$E3_Profession=$data['E3_Profession'];
$E3_Profession_Current=$data['E3_Profession_Current'];
$E3_Home_Adress=$data['E3_Home_Adress'];
$E3_Home_Adress_Number=$data['E3_Home_Adress_Number'];
$E3_Home_Postal_Adress=$data['E3_Home_Postal_Adress'];
$E3_Home_Fax=$data['E3_Home_Fax'];
$E3_Phone=$data['E3_Phone'];
$E3_Part_Rel=$data['E3_Part_Rel'];
$E3_Part_Rel_Raison=$data['E3_Part_Rel_Raison'];
$E3_Type_Beneficiary=$data['E3_Type_Beneficiary'];
$E3_Type_Legal_Representative=$data['E3_Type_Legal_Representative'];
$E3_Type_Director=$data['E3_Type_Director'];
$E3_Type_Protective=$data['E3_Type_Protective'];
$E3_Type_Other=$data['E3_Type_Other'];
};

//------Change Dates from YYYY-MM-DD to DD/MM/YYYY format 
$E1_ID_Expire_Date=datetofrench($E1_ID_Expire_Date);
$E2_ID_Expire_Date=datetofrench($E2_ID_Expire_Date);
$E3_ID_Expire_Date=datetofrench($E3_ID_Expire_Date);
$E1_Birth_Date=datetofrench($E1_Birth_Date);
$E2_Birth_Date=datetofrench($E2_Birth_Date);
$E3_Birth_Date=datetofrench($E3_Birth_Date);
//---------------------

?>  
  
  <body>
<input class="active5" name="btn_pdf" value="Download as PDF File " type="button" onclick="html2pdf(document.body)">     
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
        <h6>Identificación de Beneficiario, Director, Representante Legal, Protector u Otros</h6>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="single-field flex-60">
            <div class="checkboxes-group m-0">
              <div class="checkbox-block">
                <input type="checkbox" name="E1_Type_Beneficiary" value="1"  <?PHP if ($E1_Type_Beneficiary==1) echo "checked"  ; ?> id="Beneficiario">
                <label for="Beneficiario">Beneficiario</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E1_Type_Director" value="1" <?PHP if ($E1_Type_Director==1) echo "checked"  ; ?> id="Director">
                <label for="Director">Director</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E1_Type_Legal_Representative" value="1" <?PHP if ($E1_Type_Legal_Representative==1) echo "checked"  ; ?> id="Representante-Legal">
                <label for="Representante-Legal">Representante Legal</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E1_Type_Protective"  value="1" <?PHP if ($E1_Type_Protective==1) echo "checked"  ; ?> id="Protector">
                <label for="Protector">Protector</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="horizontal-form-field">
              <p>Otro:</p>
              <input type="text" name="E1_Type_Other"  value="<?PHP echo $E1_Type_Other ; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input type="text"  name="E1_Name"  value="<?PHP echo $E1_Name ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input type="text" name="E1_surname"  value="<?PHP echo $E1_surname ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nacionalidad:</p>
              <input type="text" name="E1_Country" value="<?PHP echo $E1_Country ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Estado Civil:</p>
              <input type="text" name="E1_C_Status"  value="<?PHP echo $E1_C_Status ; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input type="text" name="E1_ID_type" value="<?PHP echo $E1_ID_type; ?>"    class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input type="text" name="E1_ID_No"  value="<?PHP echo $E1_ID_No; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input type="text" name="E1_ID_Expire_Date" value="<?PHP echo $E1_ID_Expire_Date; ?>"  class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input type="text" name="E1_Birth_Date"   value="<?PHP echo $E1_Birth_Date; ?>" class="form-control" id="datepicker1" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input type="text" name="E1_Birth_Place" value="<?PHP echo $E1_Birth_Place; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-60">
            <div class="vertical-form-field">
              <p>Correo Electrónico:</p>
              <input type="text" name="E1_Email"  value="<?PHP echo $E1_Email; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Profesión u Oficio:</p>
              <input type="text" name="E1_Profession"  value="<?PHP echo $E1_Profession; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Ocupación Actual:</p>
              <input type="text" name="E1_Profession_Current" value="<?PHP echo $E1_Profession_Current; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Domicilio Personal:</p>
              <input type="text" name="E1_Home_Adress"  value="<?PHP echo $E1_Home_Adress; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nº de Domicilio / Casa:</p>
              <input type="text" name="E1_Home_Adress_Number" value="<?PHP echo $E1_Home_Adress_Number; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Dirección Postal:</p>
              <input type="text" name="E1_Home_Postal_Adress"  value="<?PHP echo $E1_Home_Postal_Adress; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fax</p>
              <input type="text" name="E1_Home_Fax"   value="<?PHP echo $E1_Home_Fax; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>No. de Teléfóno:</p>
              <input type="text" name="E1_Phone"  value="<?PHP echo $E1_Phone; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">Parte Relacionada:
                <input type="radio" name="E1_Part_Rel" value="1" <?PHP if ($E1_Part_Rel==1) echo "checked"  ; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input type="radio" name="E1_Part_Rel" value="0"  <?PHP if ($E1_Part_Rel==0) echo "checked"  ; ?>   id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>De ser afirmativa su respuesta, explique:</p>
              <input type="text" name="E1_Part_Rel_Raison"  value="<?PHP echo $E1_Part_Rel_Raison; ?>"   class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-text">
        <h6>Identificación de Beneficiario, Director, Representante Legal, Protector u Otros</h6>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="single-field flex-60">
            <div class="checkboxes-group m-0">
              <div class="checkbox-block">
                <input type="checkbox" name="E2_Type_Beneficiary" value="1"  <?PHP if ($E2_Type_Beneficiary==1) echo "checked"  ; ?> id="Beneficiario">
                <label for="Beneficiario">Beneficiario</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E2_Type_Director" value="1" <?PHP if ($E2_Type_Director==1) echo "checked"  ; ?> id="Director">
                <label for="Director">Director</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E2_Type_Legal_Representative" value="1" <?PHP if ($E2_Type_Legal_Representative==1) echo "checked"  ; ?> id="Representante-Legal">
                <label for="Representante-Legal">Representante Legal</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E2_Type_Protective"  value="1" <?PHP if ($E2_Type_Protective==1) echo "checked"  ; ?> id="Protector">
                <label for="Protector">Protector</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="horizontal-form-field">
              <p>Otro:</p>
              <input type="text" name="E2_Type_Other"  value="<?PHP echo $E2_Type_Other ; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input type="text"  name="E2_Name"  value="<?PHP echo $E2_Name ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input type="text" name="E2_surname"  value="<?PHP echo $E2_surname ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nacionalidad:</p>
              <input type="text" name="E2_Country" value="<?PHP echo $E2_Country ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Estado Civil:</p>
              <input type="text" name="E2_C_Status"  value="<?PHP echo $E2_C_Status ; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input type="text" name="E2_ID_type" value="<?PHP echo $E2_ID_type; ?>"    class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input type="text" name="E2_ID_No"  value="<?PHP echo $E2_ID_No; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input type="text" name="E2_ID_Expire_Date" value="<?PHP echo $E2_ID_Expire_Date; ?>"  class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input type="text" name="E2_Birth_Date"   value="<?PHP echo $E2_Birth_Date; ?>" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input type="text" name="E2_Birth_Place" value="<?PHP echo $E2_Birth_Place; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-60">
            <div class="vertical-form-field">
              <p>Correo Electrónico:</p>
              <input type="text" name="E2_Email"  value="<?PHP echo $E2_Email; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Profesión u Oficio:</p>
              <input type="text" name="E2_Profession"  value="<?PHP echo $E2_Profession; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Ocupación Actual:</p>
              <input type="text" name="E2_Profession_Current" value="<?PHP echo $E2_Profession_Current; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Domicilio Personal:</p>
              <input type="text" name="E2_Home_Adress"  value="<?PHP echo $E2_Home_Adress; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nº de Domicilio / Casa:</p>
              <input type="text" name="E2_Home_Adress_Number" value="<?PHP echo $E2_Home_Adress_Number; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Dirección Postal:</p>
              <input type="text" name="E2_Home_Postal_Adress"  value="<?PHP echo $E2_Home_Postal_Adress; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fax</p>
              <input type="text" name="E2_Home_Fax"   value="<?PHP echo $E2_Home_Fax; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>No. de Teléfóno:</p>
              <input type="text" name="E2_Phone"  value="<?PHP echo $E2_Phone; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">Parte Relacionada:
                <input type="radio" name="E2_Part_Rel" value="1" <?PHP if ($E2_Part_Rel==1) echo "checked"  ; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input type="radio" name="E2_Part_Rel" value="0"  <?PHP if ($E2_Part_Rel==0) echo "checked"  ; ?>   id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>De ser afirmativa su respuesta, explique:</p>
              <input type="text" name="E2_Part_Rel_Raison"  value="<?PHP echo $E2_Part_Rel_Raison; ?>"   class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-text">
        <h6>Identificación de Beneficiario, Director, Representante Legal, Protector u Otros</h6>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="single-field flex-60">
            <div class="checkboxes-group m-0">
              <div class="checkbox-block">
                <input type="checkbox" name="E3_Type_Beneficiary" value="1"  <?PHP if ($E3_Type_Beneficiary==1) echo "checked"  ; ?> id="Beneficiario">
                <label for="Beneficiario">Beneficiario</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E3_Type_Director" value="1" <?PHP if ($E3_Type_Director==1) echo "checked"  ; ?> id="Director">
                <label for="Director">Director</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E3_Type_Legal_Representative" value="1" <?PHP if ($E3_Type_Legal_Representative==1) echo "checked"  ; ?> id="Representante-Legal">
                <label for="Representante-Legal">Representante Legal</label>
              </div>
              <div class="checkbox-block">
                <input type="checkbox" name="E3_Type_Protective"  value="1" <?PHP if ($E3_Type_Protective==1) echo "checked"  ; ?> id="Protector">
                <label for="Protector">Protector</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="horizontal-form-field">
              <p>Otro:</p>
              <input type="text" name="E3_Type_Other"  value="<?PHP echo $E3_Type_Other ; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Nombre(s):</p>
              <input type="text"  name="E3_Name"  value="<?PHP echo $E3_Name ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="vertical-form-field">
              <p>Apellido(s):</p>
              <input type="text" name="E3_surname"  value="<?PHP echo $E3_surname ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nacionalidad:</p>
              <input type="text" name="E3_Country" value="<?PHP echo $E3_Country ; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Estado Civil:</p>
              <input type="text" name="E3_C_Status"  value="<?PHP echo $E3_C_Status ; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Tipo de Documento (ID):</p>
              <input type="text" name="E3_ID_type" value="<?PHP echo $E3_ID_type; ?>"    class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>No. de Documento (ID):</p>
              <input type="text" name="E3_ID_No"  value="<?PHP echo $E3_ID_No; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Vencimiento (ID):</p>
              <input type="text" name="E3_ID_Expire_Date" value="<?PHP echo $E3_ID_Expire_Date; ?>"  class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fecha de Nacimiento:</p>
              <input type="text" name="E3_Birth_Date"   value="<?PHP echo $E3_Birth_Date; ?>" class="form-control" id="datepicker5" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Lugar de Nacimiento:</p>
              <input type="text" name="E3_Birth_Place" value="<?PHP echo $E3_Birth_Place; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-60">
            <div class="vertical-form-field">
              <p>Correo Electrónico:</p>
              <input type="text" name="E3_Email"  value="<?PHP echo $E3_Email; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Profesión u Oficio:</p>
              <input type="text" name="E3_Profession"  value="<?PHP echo $E3_Profession; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Ocupación Actual:</p>
              <input type="text" name="E3_Profession_Current" value="<?PHP echo $E3_Profession_Current; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>Domicilio Personal:</p>
              <input type="text" name="E3_Home_Adress"  value="<?PHP echo $E3_Home_Adress; ?>"   class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Nº de Domicilio / Casa:</p>
              <input type="text" name="E3_Home_Adress_Number" value="<?PHP echo $E3_Home_Adress_Number; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Dirección Postal:</p>
              <input type="text" name="E3_Home_Postal_Adress"  value="<?PHP echo $E3_Home_Postal_Adress; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="vertical-form-field">
              <p>Fax</p>
              <input type="text" name="E3_Home_Fax"   value="<?PHP echo $E3_Home_Fax; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>No. de Teléfóno:</p>
              <input type="text" name="E3_Phone"  value="<?PHP echo $E3_Phone; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">Parte Relacionada:
                <input type="radio" name="E3_Part_Rel" value="1" <?PHP if ($E3_Part_Rel==1) echo "checked"  ; ?> id="Si">
                <label for="Si">Si</label>
              </div>
              <div class="checkbox-block">
                <input type="radio" name="E3_Part_Rel" value="0"  <?PHP if ($E3_Part_Rel==0) echo "checked"  ; ?>   id="No">
                <label for="No">No</label>
              </div>
            </div>
          </div>
          <div class="single-field flex-40">
            <div class="vertical-form-field">
              <p>De ser afirmativa su respuesta, explique:</p>
              <input type="text" name="E3_Part_Rel_Raison"  value="<?PHP echo $E3_Part_Rel_Raison; ?>"   class="form-control">
            </div>
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
