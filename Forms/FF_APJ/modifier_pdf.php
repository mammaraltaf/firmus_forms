<<<<<<< Updated upstream
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
      </head>
      <input class="active5" name="btn_pdf" value="Download as PDF File " type="button" onclick="window.location.href='pdf/generate_pdf.php?id=<?php echo $id; ?>'">
      <?PHP
error_reporting(0);
include "../dbclass.php";
include "../functions.php";
$db = new database('');
$db->connect();
$id=$_GET['id'];
$db->query("select * from FOR_FF_APJ_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E_Name=$data['E_Name'];
$E_Country=$data['E_Country'];
$E_webpage=$data['E_webpage'];
$E_Public_Deed_No=$data['E_Public_Deed_No'];
$E_Public_Deed_Date=$data['E_Public_Deed_Date'];
$E_Constitution_Date=$data['E_Constitution_Date'];
$E_Roll_Volume=$data['E_Roll_Volume'];
$E_Document=$data['E_Document'];
$E_File_Folio=$data['E_File_Folio'];
$E_Address=$data['E_Address'];
$E_Type_Corporation=$data['E_Type_Corporation'];
$E_Type_Foundation=$data['E_Type_Foundation'];
$E_Type_Escrow=$data['E_Type_Escrow'];
$E_Postal_Address=$data['E_Postal_Address'];
$E_Office_Telephone=$data['E_Office_Telephone'];
$E_Fax=$data['E_Fax'];
$E_Other=$data['E_Other'];
$E_Company_Fiscal_Presence=$data['E_Company_Fiscal_Presence'];

$E_Account_Type_Discretionary=$data['E_Account_Type_Discretionary'];

$E_Beneficiary_Name1=$data['E_Beneficiary_Name1'];
$E_Beneficiary_Name_Surname1=$data['E_Beneficiary_Name_Surname1'];
$E_Beneficiary_Name_ID1=$data['E_Beneficiary_Name_ID1'];
$E_Beneficiary_Country_Tax1=$data['E_Beneficiary_Country_Tax1'];
$E_Beneficiary_Name2=$data['E_Beneficiary_Name2'];
$E_Beneficiary_Name_Surname2=$data['E_Beneficiary_Name_Surname2'];
$E_Beneficiary_Name_ID2=$data['E_Beneficiary_Name_ID2'];
$E_Beneficiary_Country_Tax2=$data['E_Beneficiary_Country_Tax2'];
$E_Beneficiary_Name3=$data['E_Beneficiary_Name3'];
$E_Beneficiary_Name_Surname3=$data['E_Beneficiary_Name_Surname3'];
$E_Beneficiary_Name_ID3=$data['E_Beneficiary_Name_ID3'];
$E_Beneficiary_Country_Tax3=$data['E_Beneficiary_Country_Tax3'];
$E_Beneficiary_Name4=$data['E_Beneficiary_Name4'];
$E_Beneficiary_Name_Surname4=$data['E_Beneficiary_Name_Surname4'];
$E_Beneficiary_Name_ID4=$data['E_Beneficiary_Name_ID4'];
$E_Beneficiary_Country_Tax4=$data['E_Beneficiary_Country_Tax4'];
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
$Initial_Deposit_Cash=$data['Initial_Deposit_Cash'];
$Initial_Deposit_Non_Securities=$data['Initial_Deposit_Non_Securities'];
$Initial_Deposit_From1=$data['Initial_Deposit_From1'];
$Initial_Deposit_From1_Cash=$data['Initial_Deposit_From1_Cash'];
$Initial_Deposit_From1_Securities=$data['Initial_Deposit_From1_Securities'];
$Initial_Deposit_USD_Amount=$data['Initial_Deposit_USD_Amount'];
$Initial_Deposit_Securities_Amount=$data['Initial_Deposit_Securities_Amount'];
$Initial_Deposit_From2=$data['Initial_Deposit_From2'];
$Initial_Deposit_From2_Cash=$data['Initial_Deposit_From2_Cash'];
$Initial_Deposit_From2_Securities=$data['Initial_Deposit_From2_Securities'];
$Initial_Deposit_From1_Rel=$data['Initial_Deposit_From1_Rel'];
$Initial_Deposit_From2_Rel=$data['Initial_Deposit_From2_Rel'];
$PEP=$data['PEP'];
$PEP_Close=$data['PEP_Close'];
$PEP_Five=$data['PEP_Five'];
$Orders_Autorise_Owner=$data['Orders_Autorise_Owner'];
$Orders_Autorise_Co_Owner=$data['Orders_Autorise_Co_Owner'];
$Orders_Autorise_Signatory=$data['Orders_Autorise_Signatory'];
$Orders_Autorise_Attorney=$data['Orders_Autorise_Attorney'];
$Orders_Autorise_Beneficiary_Shareholder=$data['Orders_Autorise_Beneficiary_Shareholder'];
$Send_receive_cash_Autorise_Owner=$data['Send_receive_cash_Autorise_Owner'];
$Send_receive_cash_Autorise_Co_Owner=$data['Send_receive_cash_Autorise_Co_Owner'];
$Send_receive_cash_Autorise_Signatory=$data['Send_receive_cash_Autorise_Signatory'];
$Send_receive_cash_Autorise_Attorney=$data['Send_receive_cash_Autorise_Attorney'];
$Send_receive_cash_Beneficiary_Shareholder=$data['Send_receive_cash_Beneficiary_Shareholder'];
$Orders_Mail=$data['Orders_Mail'];
$Orders_Documents=$data['Orders_Documents'];
$Orders_Telephone=$data['Orders_Telephone'];
$Orders_text=$data['Orders_text'];
$Orders_Directly=$data['Orders_Directly'];
$Autorise_Give_instuctions=$data['Autorise_Give_instuctions'];
$Complete1=$data['Complete1'];
$Complete2=$data['Complete2'];
$Complete3=$data['Complete3'];
$Autorise_Firmus=$data['Autorise_Firmus'];
$Receive_AS_Mail=$data['Receive_AS_Mail'];
$Receive_AS_Postal=$data['Receive_AS_Postal'];
$Receive_Mensual=$data['Receive_Mensual'];
$Receive_Trimestral=$data['Receive_Trimestral'];
$Receive_Semestral=$data['Receive_Semestral'];
$Receive_Anual=$data['Receive_Anual'];
$General_Data=$data['General_Data'];
$Signature1_Permanent=$data['Signature1_Permanent'];
$Signature1_Not_variable=$data['Signature1_Not_variable'];
$Full_name1=$data['Full_name1'];
$Full_name2=$data['Full_name2'];
$Document1_ID=$data['Document1_ID'];
$Document2_ID=$data['Document2_ID'];
$Signature1_Date=$data['Signature1_Date'];
$Signature2_Date=$data['Signature2_Date'];
$Signature1=$data['Signature1'];
$Signature2=$data['Signature2'];
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
$E_Public_Deed_Date=datetofrench($E_Public_Deed_Date);
$E_Constitution_Date=datetofrench($E_Constitution_Date);
$Signature1_Date=datetofrench($Signature1_Date);
$Signature2_Date=datetofrench($Signature2_Date);
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
                  <table>
                      <tr>
                          <td colspan="2"><img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid"></td>
                          <td><label for="account_number">Número de cuenta:</label></td>
                          <td><input type="text" name="account_number" value= "<?php echo $account_number; ?>" placeholder="Número de cuenta" /></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-text">
                  <h6>Apertura de Cuenta Persona Jurídica</h6>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Datos Generales</b> Completar todos los campos de este formulario, de no aplicar colocar N/A</p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Razón Social (Nombre de la persona jurídica):</td>
                          <td><input name="E_Name" value= "<?php echo $E_Name; ?>" type="text" class="form-control"></td>
                          <td>Lugar de Constitución (País):</td>
                          <td><input name="E_Country" value= "<?php echo $E_Country; ?>" type="text" class="form-control"></td>
                          <td>Pagina Web:</td>
                          <td><input name="E_webpage" type="text" value= "<?php echo $E_webpage; ?>" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>No.de Escritura Pública:</td>
                          <td><input name="E_Public_Deed_No" type="text" value="<?php echo $E_Public_Deed_No; ?>" class="form-control"></td>
                          <td>Fecha de Escritura Pública:</td>
                          <td><input name="E_Public_Deed_Date" type="text" value="<?php echo $E_Public_Deed_Date; ?>" class="form-control" id="datepicker"></td>
                          <td>Fecha de Constitución:</td>
                          <td><input name="E_Constitution_Date" type="text" value="<?php echo $E_Constitution_Date ;?>" class="form-control" id="datepicker1"></td>
                      </tr>
                      <tr>
                          <td>Rollo / Tomo:</td>
                          <td><input name="E_Roll_Volume" type="text" value="<?php echo $E_Roll_Volume; ?>" class="form-control"></td>
                          <td>Documento:</td>
                          <td><input name="E_Document" type="text" value="<?php echo $E_Document; ?>" class="form-control"></td>
                          <td>Ficha / Folio:</td>
                          <td><input name="E_File_Folio" type="text" value="<?php echo $E_File_Folio; ?>" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Domicilio (Detalle exacto de su ubicación fisica (lugar donde ejecuta sus actividades):</td>
                          <td colspan="3"><input name="E_Address" type="text" value="<?php echo $E_Address; ?>" class="form-control"></td>
                          <td>Tipo de Entidad:</td>
                          <td>
                              <input name="E_Type_Corporation" type="checkbox" value="1" <?php if ($E_Type_Corporation==1) echo 'checked'; ?> id="Corporación"><label for="Corporación">Corporación</label><br>
                              <input name="E_Type_Foundation" type="checkbox" value="1" <?php if ($E_Type_Foundation==1) echo 'checked'; ?> id="Fundación"><label for="Fundación">Fundación</label><br>
                              <input name="E_Type_Escrow" type="checkbox" value="1" <?php if ($E_Type_Escrow==1) echo 'checked'; ?> id="Fideicomiso"><label for="Fideicomiso">Fideicomiso</label>
                          </td>
                      </tr>
                      <tr>
                          <td>Dirección postal:</td>
                          <td><input name="E_Postal_Address" value="<?php echo $E_Postal_Address; ?>" type="text" class="form-control"></td>
                          <td>Teléfono de Oficina:</td>
                          <td><input name="E_Office_Telephone" value="<?php echo $E_Office_Telephone; ?>" type="text" class="form-control"></td>
                          <td>Fax:</td>
                          <td><input name="E_Fax" value="<?php echo $E_Fax;?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Otro:</td>
                          <td><input name="E_Other" value="<?php echo $E_Other; ?>" type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Beneficiario(s) económico(s) de Cuenta Persona(s) o Natural(es)</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre(s):</td>
                          <td>Apellido(s):</td>
                          <td>No. de Documento (ID):</td>
                          <td>País de Residencia Fiscal:</td>
                      </tr>
                      <tr>
                          <td>
                              <input name="E_Beneficiary_Name1" value="<?php echo $E_Beneficiary_Name1;?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name2" value="<?php echo $E_Beneficiary_Name2;?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name3" value="<?php echo $E_Beneficiary_Name3;?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name4" value="<?php echo $E_Beneficiary_Name4;?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="E_Beneficiary_Name_Surname1" value="<?php echo $E_Beneficiary_Name_Surname1; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_Surname2" value="<?php echo $E_Beneficiary_Name_Surname2; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_Surname3" value="<?php echo $E_Beneficiary_Name_Surname3; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_Surname4" value="<?php echo $E_Beneficiary_Name_Surname4; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="E_Beneficiary_Name_ID1" value="<?php echo $E_Beneficiary_Name_ID1; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_ID2" value="<?php echo $E_Beneficiary_Name_ID2; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_ID3" value="<?php echo $E_Beneficiary_Name_ID3; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_ID4" value="<?php echo $E_Beneficiary_Name_ID4; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="E_Beneficiary_Country_Tax1" value="<?php echo $E_Beneficiary_Country_Tax1; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Country_Tax2" value="<?php echo $E_Beneficiary_Country_Tax2; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Country_Tax3" value="<?php echo $E_Beneficiary_Country_Tax3; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Country_Tax4" value="<?php echo $E_Beneficiary_Country_Tax4; ?>" type="text" class="form-control">
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Origen de Fondos</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Jurisdicciones principales de donde recibe/envía:</td>
                      </tr>
                      <tr>
                          <td>1-</td>
                          <td><input name="Funds_Source1" value="<?PHP echo $Funds_Source1 ; ?>" type="text" class="form-control"></td>
                          <td>
                              <input name="Funds_Source1_Type_Receive_Cash" type="checkbox" value="1" <?PHP if($Funds_Source1_Type_Receive_Cash==1) echo "checked"  ; ?> id="Recibe-su-Efectivo"><label for="Recibe-su-Efectivo">Recibe su Efectivo</label><br>
                              <input name="Funds_Source1_Type_Send_Cash" <?PHP if($Funds_Source1_Type_Send_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-su-Efectivo"><label for="Envía-su-Efectivo">Envía su Efectivo</label><br>
                              <input name="Funds_Source1_Type_Receive_Titles" <?PHP if ($Funds_Source1_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos"><label for="Recibe-sus-Títulos">Recibe sus Títulos</label><br>
                              <input name="Funds_Source1_Type_Submit_Titles" <?PHP if ($Funds_Source1_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos"><label for="Envía-sus-Títulos">Envía sus Títulos</label>
                          </td>
                      </tr>
                      <tr>
                          <td>2-</td>
                          <td><input name="Funds_Source2" value="<?PHP echo $Funds_Source2 ; ?>" type="text" class="form-control"></td>
                          <td>
                              <input name="Funds_Source2_Type_Receive_Cash" type="checkbox" value="1" <?PHP if ($Funds_Source2_Type_Receive_Cash==1) echo "checked" ; ?> id="Recibe-su-Efectivo2"><label for="Recibe-su-Efectivo2">Recibe su Efectivo</label><br>
                              <input name="Funds_Source2_Type_Send_Cash" <?PHP if ($Funds_Source2_Type_Send_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-su-Efectivo2"><label for="Envía-su-Efectivo2">Envía su Efectivo</label><br>
                              <input name="Funds_Source2_Type_Receive_Titles" <?PHP if($Funds_Source2_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos2"><label for="Recibe-sus-Títulos2">Recibe sus Títulos</label><br>
                              <input name="Funds_Source2_Type_Submit_Titles" <?PHP if($Funds_Source2_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos2"><label for="Envía-sus-Títulos2">Envía sus Títulos</label>
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Fuente de los Recursos o Patrimonio</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre del Empleador / Independiente:</td>
                          <td><input name="RS_Employer_name" value="<?PHP echo $RS_Employer_name ; ?>" type="text" class="form-control"></td>
                          <td>Ingreso Anual: (USD):</td>
                          <td><input name="RS_Annual_Income_USD" value="<?PHP echo $RS_Annual_Income_USD ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Salario Anual: (USD):</td>
                          <td><input name="RS_Annual_Salary_USD" value="<?PHP echo $RS_Annual_Salary_USD ; ?>" type="text" class="form-control"></td>
                          <td>Años en la Empresa:</td>
                          <td><input name="RS_Years_in_Company" value="<?PHP echo $RS_Years_in_Company ; ?>" type="text" class="form-control"></td>
                          <td>Actividad:</td>
                          <td>
                              <input name="RS_Activity_Professional_fees" <?PHP if ($RS_Activity_Professional_fees==1) echo "checked"  ; ?> type="checkbox" value="1" id="Honorarios-Profesionales"><label for="Honorarios-Profesionales">Honorarios Profesionales</label><br>
                              <input name="RS_Activity_Own_business" <?PHP if ($RS_Activity_Own_business==1) echo "checked"  ; ?> type="checkbox" value="1" id="Negocio-Propio"><label for="Negocio-Propio">Negocio Propio</label>
                          </td>
                      </tr>
                      <tr>
                          <td>Fuente de los Recursos:</td>
                          <td>
                              <input name="RS_Activity_Saving" <?PHP if ($RS_Activity_Saving==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ahorro"><label for="Ahorro">Ahorro</label><br>
                              <input name="RS_Activity_Pension" <?PHP if ($RS_Activity_Pension==1) echo "checked"  ; ?> type="checkbox" value="1" id="Pensión"><label for="Pensión">Pensión</label><br>
                              <input name="RS_Activity_Pension1" <?PHP if ($RS_Activity_Pension1==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Salario</label>
                          </td>
                          <td>Dividendos de Inversión:</td>
                          <td><input name="RS_Investment_Dividends" value="<?PHP echo $RS_Investment_Dividends ; ?>" type="text" class="form-control"></td>
                          <td>Otros:</td>
                          <td><input name="RS_Others" value="<?PHP echo $RS_Others ; ?>" type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Referencia Bancaria</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre de la Institución:</td>
                          <td>País:</td>
                          <td>Persona Contacto:</td>
                          <td>Teléfono:</td>
                      </tr>
                      <tr>
                          <td>
                              <input name="Bank1_Ref_Name" value="<?PHP echo $Bank1_Ref_Name ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Name" value="<?PHP echo $Bank2_Ref_Name ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Name" value="<?PHP echo $Bank3_Ref_Name ; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="Bank1_Ref_Country" value="<?PHP echo $Bank1_Ref_Country ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Country" value="<?PHP echo $Bank2_Ref_Country ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Country" value="<?PHP echo $Bank3_Ref_Country ; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="Bank1_Ref_Contact" value="<?PHP echo $Bank1_Ref_Contact ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Contact" value="<?PHP echo $Bank2_Ref_Contact ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Contact" value="<?PHP echo $Bank3_Ref_Contact ; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="Bank1_Ref_Phone" value="<?PHP echo $Bank1_Ref_Phone ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Phone" value="<?PHP echo $Bank2_Ref_Phone ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Phone" value="<?PHP echo $Bank3_Ref_Phone ; ?>" type="text" class="form-control">
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Depósito Inicial</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Usted estará depositando o transfiriendo:</td>
                          <td>
                              <input name="Initial_Deposit_Cash" <?PHP if ($Initial_Deposit_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Efectivo"><label for="Efectivo">Efectivo</label><br>
                              <input name="Initial_Deposit_Non_Securities" <?PHP if ($Initial_Deposit_Non_Securities==1) echo "checked"  ; ?> type="checkbox" value="1" id="Títulos-Valores"><label for="Títulos-Valores">No Títulos Valores</label><br>
                              <input name="Initial_Deposit_Both" <?PHP if ($Initial_Deposit_Both==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ambos"><label for="Ambos">Ambos</label>
                          </td>
                          <td>Indique el Monto (USD):</td>
                          <td><input name="Initial_Deposit_USD_Amount" value="<?PHP echo $Initial_Deposit_USD_Amount ; ?>" type="text" class="form-control"></td>
                          <td>&nbsp;</td>
                          <td><input name="Initial_Deposit_Securities_Amount" value="<?PHP echo $Initial_Deposit_Securities_Amount ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Institución de donde Provienen los Fondos:</td>
                          <td><input name="Initial_Deposit_From1" type="text" value="<?PHP echo $Initial_Deposit_From1 ; ?>" class="form-control"><br>
                              <input name="Initial_Deposit_From2" type="text" value="<?PHP echo $Initial_Deposit_From2 ; ?>" class="form-control">
                          </td>
                          <td>Tiempo de Relación con la Institución:</td>
                          <td>
                              <input name="Initial_Deposit_From1_Cash" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From1_Cash==1) echo "checked"  ; ?> id="Efectivo"><label for="Efectivo">Efectivo</label><br>
                              <input name="Initial_Deposit_From1_Securities" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From1_Securities==1) echo "checked"  ; ?> id="Títulos"><label for="Títulos">Títulos</label><br>
                              <input name="Initial_Deposit_From2_Cash" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From2_Cash==1) echo "checked" ; ?> id="Efectivo3"><label for="Efectivo3">Efectivo</label><br>
                              <input name="Initial_Deposit_From2_Securities" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From2_Securities==1) echo "checked"  ; ?> id="Títulos3"><label for="Títulos3">Títulos</label>
                          </td>
                          <td>&nbsp;</td>
                          <td>
                              <input name="Initial_Deposit_From1_Rel" type="text" value="<?PHP echo $Initial_Deposit_From1_Rel; ?>" class="form-control"><br>
                              <input name="Initial_Deposit_From2_Rel" type="text" value="<?PHP echo $Initial_Deposit_From2_Rel; ?>" class="form-control">
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Persona Políticamente Expuesta</b></p>
              </div>
              <div class="gray-paragraph">
                  <p>El cliente debe indicar expresamente si es Persona Políticamente Expuesta (PEP). Persona Políticamente Expuesta incluye, entre otros, una persona que desempeña o ha desempeñado funciones públicas prominentes dentro o fuera del país, tales como jefes de Estado o de Gobierno, políticos de alto nivel, funcionarios gubernamentales, judiciales u oficiales militares de alto nivel, ejecutivos de alto nivel de corporaciones que pertenecen al Estado, funcionarios importantes de partidos políticos. (En base a la definición establecida en Articulo 4 Ley 23/2015).</p>
              </div>
              <div class="tabled-checkboxes">
                  <table>
                      <tr>
                          <td>¿Es Ud. Una Persona Políticamente Expuesta (PEP)?</td>
                          <td><input name="PEP" <?PHP if ($PEP==1) echo "checked"  ; ?> type="radio" value="1" id="Salario"><label for="Salario">Si</label></td>
                          <td><input name="PEP" <?PHP if ($PEP==0) echo "checked"  ; ?> type="radio" value="0" id="Salario"><label for="Salario">No</label></td>
                      </tr>
                      <tr>
                          <td>¿Es Ud. Familiar Cercano (cónyuge o 1er grado consanguinidad) de PEP?</td>
                          <td><input name="PEP_Close" <?PHP if ($PEP_Close==1) echo "checked"  ; ?> type="radio" value="1" id="Salario"><label for="Salario">Si</label></td>
                          <td><input name="PEP_Close" <?PHP if ($PEP_Close==0) echo "checked" ; ?> type="radio" value="0" id="Salario"><label for="Salario">No</label></td>
                      </tr>
                      <tr>
                          <td>¿Declara que en los últimos 5 años (según la definición) se considera como PEP?</td>
                          <td><input name="PEP_Five" <?PHP if ($PEP_Five==1) echo "checked"  ; ?> type="radio" value="1" id="Salario"><label for="Salario">Si</label></td>
                          <td><input name="PEP_Five" <?PHP if ($PEP_Five==0) echo "checked"  ; ?> type="radio" value="0" id="Salario"><label for="Salario">No</label></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Comunicación Seleccionar uno o varios campos</b></p>
              </div>
              <div class="tabled-checkboxes">
                  <table>
                      <tr>
                          <td>Personas autorizadas para instruir órdenes:</td>
                          <td><input name="Orders_Autorise_Owner" <?PHP if ($Orders_Autorise_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Titular</label></td>
                          <td><input name="Orders_Autorise_Co_Owner" <?PHP if ($Orders_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Cotitular</label></td>
                          <td><input name="Orders_Autorise_Signatory" <?PHP if ($Orders_Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Firmante (s)</label></td>
                          <td><input name="Orders_Autorise_Attorney" <?PHP if ($Orders_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Apoderado</label></td>
                          <td><input name="Orders_Autorise_Beneficiary_Shareholder" <?PHP if ($Orders_Autorise_Beneficiary_Shareholder==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Beneficiario <br>Accionista</label></td>
                      </tr>
                      <tr>
                          <td>Autorizado a dar instrucción de envío y recepción de títulos y efectivo:</td>
                          <td><input name="Send_receive_cash_Autorise_Owner" <?PHP if ($Send_receive_cash_Autorise_Owner==1) echo "checked"   ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Titular</label></td>
                          <td><input name="Send_receive_cash_Autorise_Co_Owner" <?PHP if ($Send_receive_cash_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Cotitular</label></td>
                          <td><input name="Send_receive_cash_Autorise_Signatory" <?PHP if ($Send_receive_cash_Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Firmante (s)</label></td>
                          <td><input name="Send_receive_cash_Autorise_Attorney" <?PHP if ($Send_receive_cash_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Apoderado</label></td>
                          <td><input name="Send_receive_cash_Beneficiary_Shareholder" <?PHP if ($Send_receive_cash_Beneficiary_Shareholder==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Beneficiario <br>Accionista</label></td>
                      </tr>
                      <tr>
                          <td>Las órdenes podrán ser colocadas por:</td>
                          <td><input name="Orders_Mail" type="checkbox" value="1" <?PHP if ($Orders_Mail==1) echo "checked"  ; ?> id="Salario"><label for="Salario">Correo</label></td>
                          <td><input name="Orders_Documents" <?PHP if ($Orders_Documents==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Documentos Escritos</label></td>
                          <td><input name="Orders_Telephone" <?PHP if ($Orders_Telephone==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Vía Telefónica</label></td>
                          <td><input name="Orders_text" <?PHP if ($Orders_text==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Plataformas de Texto</label></td>
                          <td><input name="Orders_Directly" <?PHP if ($Orders_Directly==1) echo "checked"; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Directamente por el Cliente en el Sistema</label></td>
                          <td><input name="Orders_All_Above" <?PHP if ((($Orders_Mail==1) and ($Orders_Documents==1)) and ((($Orders_Telephone==1) and ($Orders_text==1)) and ($Orders_Directly==1))) echo "checked"; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Todas las Anteriores</label></td>
                      </tr>
                      <tr>
                          <td>Confirmar las instrucciones emitidas (compra y venta de títulos y valores):</td>
                          <td><input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==1) echo "checked" ; ?> type="radio" value="1" id="no-discrecional"><label for="no-discrecional">Si</label><br>
                              <input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==0) echo "checked" ; ?> type="radio" value="0" id="si"><label for="si">No</label></td>
                          <td>De ser afirmativa completar:</td>
                          <td><input name="Complete1" <?PHP if ($Complete1==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro"><label for="Ahorro"></label><br>
                              <input name="Complete2" <?PHP if ($Complete2==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión"><label for="Pensión"></label><br>
                              <input name="Complete3" <?PHP if ($Complete3==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario"><label for="Salario"></label></td>
                      </tr>
                      <tr>
                          <td>Es voluntad del cliente que los Estados de Cuenta de su cuenta de inversión reposen en las oficinas de Firmus Financial Inc. a su disposicion y solicitud:</td>
                          <td><input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="Si"><label for="Si">Si</label><br>
                              <input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="No"><label for="No">No</label></td>
                      </tr>
                      <tr>
                          <td>Si su respuesta es No indique como desea recibir los Estados de Cuenta:</td>
                          <td><input name="Receive_AS_Mail" <?PHP if ($Receive_AS_Mail==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro"><label for="Ahorro">Correo</label><br>
                              <input name="Receive_AS_Postal" <?PHP if ($Receive_AS_Postal==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión"><label for="Pensión">Apartado Postal</label></td>
                      </tr>
                      <tr>
                          <td>Desea recibirlos con periodicidad:</td>
                          <td><input name="Receive_Mensual" <?PHP if ($Receive_Mensual==1) echo "checked" ; ?> type="checkbox" value="1" id="Mensual"><label for="Mensual">Mensual</label><br>
                              <input name="Receive_Trimestral" <?PHP if ($Receive_Trimestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Trimestral"><label for="Trimestral">Trimestral</label><br>
                              <input name="Receive_Semestral" <?PHP if ($Receive_Semestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Semestral"><label for="Semestral">Semestral</label><br>
                              <input name="Receive_Anual" <?PHP if ($Receive_Anual==1) echo "checked" ; ?> type="checkbox" value="1" id="Anual"><label for="Anual">Anual</label></td>
                      </tr>
                  </table>
              </div>
              <div class="fields-block-wrapper m-0">
                  <table>
                      <tr>
                          <td>Firmus Financial Inc. tomará como correo autorizado el declarado en Datos Generales, de ser diferente suministrar el mismo:</td>
                          <td><input name="General_Data" value="<?PHP echo $General_Data ; ?>" type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Declaración</b></p>
              </div>
              <div class="gray-paragraph">
                  <p>Confirmo (Confirmamos) que he (hemos) comprendido los términos del acuerdo de cuenta de inversión, incluyendo los modos de comunicación, acceso en línea, notificaciones y demás términos. <br><br>
                      Actuando en mi propio nombre y de manera voluntaria, declaro (declaramos) que hemos comprendido a cabalidad la información que se ha solicitado y respondiendo los campos de forma veraz y correcta en todo su alcance de forma plena e irrevocable; autorizando a Firmus Financial Inc. para la verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso que implique modificación de la información aquí declarada, de las circunstancias económicas, financieras y/o personales, del titular de la cuenta, firmantes autorizados, propietario efectivo o beneficiario finales. <br><br>
                      Confirmo (Confirmamos) estar anuente que las condiciones generales entregadas forman parte de la relación contractual presente.</p>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Firma (s) Cliente (s)</b></p>
              </div>
              <div class="fields-block-wrapper m-0 px-0">
                  <table>
                      <tr>
                          <td>Tipo de Firma:</td>
                          <td>
                              <input name="Signature1_Permanent" <?PHP if ($Signature1_Permanent==1) echo "checked" ; ?> type="checkbox" value="1" id="fijo"><label for="fijo">Conjunta</label><br>
                              <input name="Signature1_Not_variable" <?PHP if ($Signature1_Not_variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable"><label for="Variable">Indistinta</label>
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre completo (en imprenta):</td>
                          <td><input name="Full_name1" value="<?PHP echo $Full_name1 ; ?>" type="text" class="form-control"></td>
                          <td>Nombre completo (en imprenta):</td>
                          <td><input name="Full_name2" value="<?PHP echo $Full_name2 ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>No. de Documento (ID):</td>
                          <td><input name="Document1_ID" value="<?PHP echo $Document1_ID ; ?>" type="text" class="form-control"></td>
                          <td>No. de Documento (ID):</td>
                          <td><input name="Document2_ID" value="<?PHP echo $Document2_ID ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Fecha:</td>
                          <td><input name="Signature1_Date" value="<?PHP echo $Signature1_Date ; ?>" type="text" id="datepicker2" class="form-control"><small>DD/MM/AAAA</small></td>
                          <td>Fecha:</td>
                          <td><input name="Signature2_Date" value="<?PHP echo $Signature2_Date ; ?>" type="text" id="datepicker3" class="form-control"><small>DD/MM/AAAA</small></td>
                      </tr>
                      <tr>
                          <td colspan="2"><div class="signature-block"></div><p>Firma</p></td>
                          <td colspan="2"><div class="signature-block"></div><p>Firma</p></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Firma (s) Personal de la Casa de Valores</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre del Corredor:</td>
                          <td><input name="Runners_Name" value="<?PHP echo $Runners_Name ; ?>" type="text" class="form-control"></td>
                          <td>Nombre del Oficial de Cumplimiento:</td>
                          <td><input name="Compliance_Officer_Name" value="<?PHP echo $Compliance_Officer_Name ; ?>" type="text" class="form-control"></td>
                          <td>Nombre del Ejecutivo Principal:</td>
                          <td><input name="Chief_Executive_Name" value="<?PHP echo $Chief_Executive_Name ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Fecha:</td>
                          <td><input name="Runners_Date" value="<?PHP echo $Runners_Date ; ?>" type="text" id="datepicker4" class="form-control"><small>DD/MM/AAAA</small></td>
                          <td>Fecha:</td>
                          <td><input name="Compliance_Officer_Date" value="<?PHP echo $Compliance_Officer_Date ; ?>" id="datepicker5" type="text" class="form-control"><small>DD/MM/AAAA</small></td>
                          <td>Fecha:</td>
                          <td><input name="Chief_Executive_Date" value="<?PHP echo $Chief_Executive_Date ; ?>" type="text" id="datepicker6" class="form-control"><small>DD/MM/AAAA</small></td>
                      </tr>
                      <tr>
                          <td colspan="2"><div class="signature-block"></div><p>Firma del Corredor de Valores</p></td>
                          <td colspan="2"><div class="signature-block"></div><p>Firma del Oficial de Cumplimiento</p></td>
                          <td colspan="2"><div class="signature-block"></div><p>Firma del Ejecutivo Principal</p></td>
                      </tr>
                  </table>
              </div>
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
=======
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
      </head>
<input class="active5" name="btn_pdf" value="Download as PDF File " type="button" onclick="html2pdf(document.body)">
<?PHP
error_reporting(0);
include "../dbclass.php";
include "../functions.php";
$db = new database('');
$db->connect();
$id=$_GET['id'];
$db->query("select * from FOR_FF_APJ_ES where id=$id");
while( $data = $db->fetch_array() )
{
$E_Name=$data['E_Name'];
$E_Country=$data['E_Country'];
$E_webpage=$data['E_webpage'];
$E_Public_Deed_No=$data['E_Public_Deed_No'];
$E_Public_Deed_Date=$data['E_Public_Deed_Date'];
$E_Constitution_Date=$data['E_Constitution_Date'];
$E_Roll_Volume=$data['E_Roll_Volume'];
$E_Document=$data['E_Document'];
$E_File_Folio=$data['E_File_Folio'];
$E_Address=$data['E_Address'];
$E_Type_Corporation=$data['E_Type_Corporation'];
$E_Type_Foundation=$data['E_Type_Foundation'];
$E_Type_Escrow=$data['E_Type_Escrow'];
$E_Postal_Address=$data['E_Postal_Address'];
$E_Office_Telephone=$data['E_Office_Telephone'];
$E_Fax=$data['E_Fax'];
$E_Other=$data['E_Other'];
$E_Company_Fiscal_Presence=$data['E_Company_Fiscal_Presence'];

$E_Account_Type_Discretionary=$data['E_Account_Type_Discretionary'];

$E_Beneficiary_Name1=$data['E_Beneficiary_Name1'];
$E_Beneficiary_Name_Surname1=$data['E_Beneficiary_Name_Surname1'];
$E_Beneficiary_Name_ID1=$data['E_Beneficiary_Name_ID1'];
$E_Beneficiary_Country_Tax1=$data['E_Beneficiary_Country_Tax1'];
$E_Beneficiary_Name2=$data['E_Beneficiary_Name2'];
$E_Beneficiary_Name_Surname2=$data['E_Beneficiary_Name_Surname2'];
$E_Beneficiary_Name_ID2=$data['E_Beneficiary_Name_ID2'];
$E_Beneficiary_Country_Tax2=$data['E_Beneficiary_Country_Tax2'];
$E_Beneficiary_Name3=$data['E_Beneficiary_Name3'];
$E_Beneficiary_Name_Surname3=$data['E_Beneficiary_Name_Surname3'];
$E_Beneficiary_Name_ID3=$data['E_Beneficiary_Name_ID3'];
$E_Beneficiary_Country_Tax3=$data['E_Beneficiary_Country_Tax3'];
$E_Beneficiary_Name4=$data['E_Beneficiary_Name4'];
$E_Beneficiary_Name_Surname4=$data['E_Beneficiary_Name_Surname4'];
$E_Beneficiary_Name_ID4=$data['E_Beneficiary_Name_ID4'];
$E_Beneficiary_Country_Tax4=$data['E_Beneficiary_Country_Tax4'];
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
$Initial_Deposit_Cash=$data['Initial_Deposit_Cash'];
$Initial_Deposit_Non_Securities=$data['Initial_Deposit_Non_Securities'];
$Initial_Deposit_From1=$data['Initial_Deposit_From1'];
$Initial_Deposit_From1_Cash=$data['Initial_Deposit_From1_Cash'];
$Initial_Deposit_From1_Securities=$data['Initial_Deposit_From1_Securities'];
$Initial_Deposit_USD_Amount=$data['Initial_Deposit_USD_Amount'];
$Initial_Deposit_Securities_Amount=$data['Initial_Deposit_Securities_Amount'];
$Initial_Deposit_From2=$data['Initial_Deposit_From2'];
$Initial_Deposit_From2_Cash=$data['Initial_Deposit_From2_Cash'];
$Initial_Deposit_From2_Securities=$data['Initial_Deposit_From2_Securities'];
$Initial_Deposit_From1_Rel=$data['Initial_Deposit_From1_Rel'];
$Initial_Deposit_From2_Rel=$data['Initial_Deposit_From2_Rel'];
$PEP=$data['PEP'];
$PEP_Close=$data['PEP_Close'];
$PEP_Five=$data['PEP_Five'];
$Orders_Autorise_Owner=$data['Orders_Autorise_Owner'];
$Orders_Autorise_Co_Owner=$data['Orders_Autorise_Co_Owner'];
$Orders_Autorise_Signatory=$data['Orders_Autorise_Signatory'];
$Orders_Autorise_Attorney=$data['Orders_Autorise_Attorney'];
$Orders_Autorise_Beneficiary_Shareholder=$data['Orders_Autorise_Beneficiary_Shareholder'];
$Send_receive_cash_Autorise_Owner=$data['Send_receive_cash_Autorise_Owner'];
$Send_receive_cash_Autorise_Co_Owner=$data['Send_receive_cash_Autorise_Co_Owner'];
$Send_receive_cash_Autorise_Signatory=$data['Send_receive_cash_Autorise_Signatory'];
$Send_receive_cash_Autorise_Attorney=$data['Send_receive_cash_Autorise_Attorney'];
$Send_receive_cash_Beneficiary_Shareholder=$data['Send_receive_cash_Beneficiary_Shareholder'];
$Orders_Mail=$data['Orders_Mail'];
$Orders_Documents=$data['Orders_Documents'];
$Orders_Telephone=$data['Orders_Telephone'];
$Orders_text=$data['Orders_text'];
$Orders_Directly=$data['Orders_Directly'];
$Autorise_Give_instuctions=$data['Autorise_Give_instuctions'];
$Complete1=$data['Complete1'];
$Complete2=$data['Complete2'];
$Complete3=$data['Complete3'];
$Autorise_Firmus=$data['Autorise_Firmus'];
$Receive_AS_Mail=$data['Receive_AS_Mail'];
$Receive_AS_Postal=$data['Receive_AS_Postal'];
$Receive_Mensual=$data['Receive_Mensual'];
$Receive_Trimestral=$data['Receive_Trimestral'];
$Receive_Semestral=$data['Receive_Semestral'];
$Receive_Anual=$data['Receive_Anual'];
$General_Data=$data['General_Data'];
$Signature1_Permanent=$data['Signature1_Permanent'];
$Signature1_Not_variable=$data['Signature1_Not_variable'];
$Full_name1=$data['Full_name1'];
$Full_name2=$data['Full_name2'];
$Document1_ID=$data['Document1_ID'];
$Document2_ID=$data['Document2_ID'];
$Signature1_Date=$data['Signature1_Date'];
$Signature2_Date=$data['Signature2_Date'];
$Signature1=$data['Signature1'];
$Signature2=$data['Signature2'];
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
$E_Public_Deed_Date=datetofrench($E_Public_Deed_Date);
$E_Constitution_Date=datetofrench($E_Constitution_Date);
$Signature1_Date=datetofrench($Signature1_Date);
$Signature2_Date=datetofrench($Signature2_Date);
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
                  <table>
                      <tr>
                          <td colspan="2"><img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid"></td>
                          <td><label for="account_number">Número de cuenta:</label></td>
                          <td><input type="text" name="account_number" value= "<?php echo $account_number; ?>" placeholder="Número de cuenta" /></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-text">
                  <h6>Apertura de Cuenta Persona Jurídica</h6>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Datos Generales</b> Completar todos los campos de este formulario, de no aplicar colocar N/A</p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Razón Social (Nombre de la persona jurídica):</td>
                          <td><input name="E_Name" value= "<?php echo $E_Name; ?>" type="text" class="form-control"></td>
                          <td>Lugar de Constitución (País):</td>
                          <td><input name="E_Country" value= "<?php echo $E_Country; ?>" type="text" class="form-control"></td>
                          <td>Pagina Web:</td>
                          <td><input name="E_webpage" type="text" value= "<?php echo $E_webpage; ?>" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>No.de Escritura Pública:</td>
                          <td><input name="E_Public_Deed_No" type="text" value="<?php echo $E_Public_Deed_No; ?>" class="form-control"></td>
                          <td>Fecha de Escritura Pública:</td>
                          <td><input name="E_Public_Deed_Date" type="text" value="<?php echo $E_Public_Deed_Date; ?>" class="form-control" id="datepicker"></td>
                          <td>Fecha de Constitución:</td>
                          <td><input name="E_Constitution_Date" type="text" value="<?php echo $E_Constitution_Date ;?>" class="form-control" id="datepicker1"></td>
                      </tr>
                      <tr>
                          <td>Rollo / Tomo:</td>
                          <td><input name="E_Roll_Volume" type="text" value="<?php echo $E_Roll_Volume; ?>" class="form-control"></td>
                          <td>Documento:</td>
                          <td><input name="E_Document" type="text" value="<?php echo $E_Document; ?>" class="form-control"></td>
                          <td>Ficha / Folio:</td>
                          <td><input name="E_File_Folio" type="text" value="<?php echo $E_File_Folio; ?>" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Domicilio (Detalle exacto de su ubicación fisica (lugar donde ejecuta sus actividades):</td>
                          <td colspan="3"><input name="E_Address" type="text" value="<?php echo $E_Address; ?>" class="form-control"></td>
                          <td>Tipo de Entidad:</td>
                          <td>
                              <input name="E_Type_Corporation" type="checkbox" value="1" <?php if ($E_Type_Corporation==1) echo 'checked'; ?> id="Corporación"><label for="Corporación">Corporación</label><br>
                              <input name="E_Type_Foundation" type="checkbox" value="1" <?php if ($E_Type_Foundation==1) echo 'checked'; ?> id="Fundación"><label for="Fundación">Fundación</label><br>
                              <input name="E_Type_Escrow" type="checkbox" value="1" <?php if ($E_Type_Escrow==1) echo 'checked'; ?> id="Fideicomiso"><label for="Fideicomiso">Fideicomiso</label>
                          </td>
                      </tr>
                      <tr>
                          <td>Dirección postal:</td>
                          <td><input name="E_Postal_Address" value="<?php echo $E_Postal_Address; ?>" type="text" class="form-control"></td>
                          <td>Teléfono de Oficina:</td>
                          <td><input name="E_Office_Telephone" value="<?php echo $E_Office_Telephone; ?>" type="text" class="form-control"></td>
                          <td>Fax:</td>
                          <td><input name="E_Fax" value="<?php echo $E_Fax;?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Otro:</td>
                          <td><input name="E_Other" value="<?php echo $E_Other; ?>" type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Beneficiario(s) económico(s) de Cuenta Persona(s) o Natural(es)</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre(s):</td>
                          <td>Apellido(s):</td>
                          <td>No. de Documento (ID):</td>
                          <td>País de Residencia Fiscal:</td>
                      </tr>
                      <tr>
                          <td>
                              <input name="E_Beneficiary_Name1" value="<?php echo $E_Beneficiary_Name1;?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name2" value="<?php echo $E_Beneficiary_Name2;?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name3" value="<?php echo $E_Beneficiary_Name3;?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name4" value="<?php echo $E_Beneficiary_Name4;?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="E_Beneficiary_Name_Surname1" value="<?php echo $E_Beneficiary_Name_Surname1; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_Surname2" value="<?php echo $E_Beneficiary_Name_Surname2; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_Surname3" value="<?php echo $E_Beneficiary_Name_Surname3; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_Surname4" value="<?php echo $E_Beneficiary_Name_Surname4; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="E_Beneficiary_Name_ID1" value="<?php echo $E_Beneficiary_Name_ID1; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_ID2" value="<?php echo $E_Beneficiary_Name_ID2; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_ID3" value="<?php echo $E_Beneficiary_Name_ID3; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Name_ID4" value="<?php echo $E_Beneficiary_Name_ID4; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="E_Beneficiary_Country_Tax1" value="<?php echo $E_Beneficiary_Country_Tax1; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Country_Tax2" value="<?php echo $E_Beneficiary_Country_Tax2; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Country_Tax3" value="<?php echo $E_Beneficiary_Country_Tax3; ?>" type="text" class="form-control"><br>
                              <input name="E_Beneficiary_Country_Tax4" value="<?php echo $E_Beneficiary_Country_Tax4; ?>" type="text" class="form-control">
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Origen de Fondos</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Jurisdicciones principales de donde recibe/envía:</td>
                      </tr>
                      <tr>
                          <td>1-</td>
                          <td><input name="Funds_Source1" value="<?PHP echo $Funds_Source1 ; ?>" type="text" class="form-control"></td>
                          <td>
                              <input name="Funds_Source1_Type_Receive_Cash" type="checkbox" value="1" <?PHP if($Funds_Source1_Type_Receive_Cash==1) echo "checked"  ; ?> id="Recibe-su-Efectivo"><label for="Recibe-su-Efectivo">Recibe su Efectivo</label><br>
                              <input name="Funds_Source1_Type_Send_Cash" <?PHP if($Funds_Source1_Type_Send_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-su-Efectivo"><label for="Envía-su-Efectivo">Envía su Efectivo</label><br>
                              <input name="Funds_Source1_Type_Receive_Titles" <?PHP if ($Funds_Source1_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos"><label for="Recibe-sus-Títulos">Recibe sus Títulos</label><br>
                              <input name="Funds_Source1_Type_Submit_Titles" <?PHP if ($Funds_Source1_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos"><label for="Envía-sus-Títulos">Envía sus Títulos</label>
                          </td>
                      </tr>
                      <tr>
                          <td>2-</td>
                          <td><input name="Funds_Source2" value="<?PHP echo $Funds_Source2 ; ?>" type="text" class="form-control"></td>
                          <td>
                              <input name="Funds_Source2_Type_Receive_Cash" type="checkbox" value="1" <?PHP if ($Funds_Source2_Type_Receive_Cash==1) echo "checked" ; ?> id="Recibe-su-Efectivo2"><label for="Recibe-su-Efectivo2">Recibe su Efectivo</label><br>
                              <input name="Funds_Source2_Type_Send_Cash" <?PHP if ($Funds_Source2_Type_Send_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-su-Efectivo2"><label for="Envía-su-Efectivo2">Envía su Efectivo</label><br>
                              <input name="Funds_Source2_Type_Receive_Titles" <?PHP if($Funds_Source2_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos2"><label for="Recibe-sus-Títulos2">Recibe sus Títulos</label><br>
                              <input name="Funds_Source2_Type_Submit_Titles" <?PHP if($Funds_Source2_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos2"><label for="Envía-sus-Títulos2">Envía sus Títulos</label>
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Fuente de los Recursos o Patrimonio</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre del Empleador / Independiente:</td>
                          <td><input name="RS_Employer_name" value="<?PHP echo $RS_Employer_name ; ?>" type="text" class="form-control"></td>
                          <td>Ingreso Anual: (USD):</td>
                          <td><input name="RS_Annual_Income_USD" value="<?PHP echo $RS_Annual_Income_USD ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Salario Anual: (USD):</td>
                          <td><input name="RS_Annual_Salary_USD" value="<?PHP echo $RS_Annual_Salary_USD ; ?>" type="text" class="form-control"></td>
                          <td>Años en la Empresa:</td>
                          <td><input name="RS_Years_in_Company" value="<?PHP echo $RS_Years_in_Company ; ?>" type="text" class="form-control"></td>
                          <td>Actividad:</td>
                          <td>
                              <input name="RS_Activity_Professional_fees" <?PHP if ($RS_Activity_Professional_fees==1) echo "checked"  ; ?> type="checkbox" value="1" id="Honorarios-Profesionales"><label for="Honorarios-Profesionales">Honorarios Profesionales</label><br>
                              <input name="RS_Activity_Own_business" <?PHP if ($RS_Activity_Own_business==1) echo "checked"  ; ?> type="checkbox" value="1" id="Negocio-Propio"><label for="Negocio-Propio">Negocio Propio</label>
                          </td>
                      </tr>
                      <tr>
                          <td>Fuente de los Recursos:</td>
                          <td>
                              <input name="RS_Activity_Saving" <?PHP if ($RS_Activity_Saving==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ahorro"><label for="Ahorro">Ahorro</label><br>
                              <input name="RS_Activity_Pension" <?PHP if ($RS_Activity_Pension==1) echo "checked"  ; ?> type="checkbox" value="1" id="Pensión"><label for="Pensión">Pensión</label><br>
                              <input name="RS_Activity_Pension1" <?PHP if ($RS_Activity_Pension1==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Salario</label>
                          </td>
                          <td>Dividendos de Inversión:</td>
                          <td><input name="RS_Investment_Dividends" value="<?PHP echo $RS_Investment_Dividends ; ?>" type="text" class="form-control"></td>
                          <td>Otros:</td>
                          <td><input name="RS_Others" value="<?PHP echo $RS_Others ; ?>" type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Referencia Bancaria</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre de la Institución:</td>
                          <td>País:</td>
                          <td>Persona Contacto:</td>
                          <td>Teléfono:</td>
                      </tr>
                      <tr>
                          <td>
                              <input name="Bank1_Ref_Name" value="<?PHP echo $Bank1_Ref_Name ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Name" value="<?PHP echo $Bank2_Ref_Name ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Name" value="<?PHP echo $Bank3_Ref_Name ; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="Bank1_Ref_Country" value="<?PHP echo $Bank1_Ref_Country ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Country" value="<?PHP echo $Bank2_Ref_Country ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Country" value="<?PHP echo $Bank3_Ref_Country ; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="Bank1_Ref_Contact" value="<?PHP echo $Bank1_Ref_Contact ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Contact" value="<?PHP echo $Bank2_Ref_Contact ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Contact" value="<?PHP echo $Bank3_Ref_Contact ; ?>" type="text" class="form-control">
                          </td>
                          <td>
                              <input name="Bank1_Ref_Phone" value="<?PHP echo $Bank1_Ref_Phone ; ?>" type="text" class="form-control"><br>
                              <input name="Bank2_Ref_Phone" value="<?PHP echo $Bank2_Ref_Phone ; ?>" type="text" class="form-control"><br>
                              <input name="Bank3_Ref_Phone" value="<?PHP echo $Bank3_Ref_Phone ; ?>" type="text" class="form-control">
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Depósito Inicial</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Usted estará depositando o transfiriendo:</td>
                          <td>
                              <input name="Initial_Deposit_Cash" <?PHP if ($Initial_Deposit_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Efectivo"><label for="Efectivo">Efectivo</label><br>
                              <input name="Initial_Deposit_Non_Securities" <?PHP if ($Initial_Deposit_Non_Securities==1) echo "checked"  ; ?> type="checkbox" value="1" id="Títulos-Valores"><label for="Títulos-Valores">No Títulos Valores</label><br>
                              <input name="Initial_Deposit_Both" <?PHP if ($Initial_Deposit_Both==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ambos"><label for="Ambos">Ambos</label>
                          </td>
                          <td>Indique el Monto (USD):</td>
                          <td><input name="Initial_Deposit_USD_Amount" value="<?PHP echo $Initial_Deposit_USD_Amount ; ?>" type="text" class="form-control"></td>
                          <td>&nbsp;</td>
                          <td><input name="Initial_Deposit_Securities_Amount" value="<?PHP echo $Initial_Deposit_Securities_Amount ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Institución de donde Provienen los Fondos:</td>
                          <td><input name="Initial_Deposit_From1" type="text" value="<?PHP echo $Initial_Deposit_From1 ; ?>" class="form-control"><br>
                              <input name="Initial_Deposit_From2" type="text" value="<?PHP echo $Initial_Deposit_From2 ; ?>" class="form-control">
                          </td>
                          <td>Tiempo de Relación con la Institución:</td>
                          <td>
                              <input name="Initial_Deposit_From1_Cash" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From1_Cash==1) echo "checked"  ; ?> id="Efectivo"><label for="Efectivo">Efectivo</label><br>
                              <input name="Initial_Deposit_From1_Securities" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From1_Securities==1) echo "checked"  ; ?> id="Títulos"><label for="Títulos">Títulos</label><br>
                              <input name="Initial_Deposit_From2_Cash" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From2_Cash==1) echo "checked" ; ?> id="Efectivo3"><label for="Efectivo3">Efectivo</label><br>
                              <input name="Initial_Deposit_From2_Securities" type="checkbox" value="1" <?PHP if ($Initial_Deposit_From2_Securities==1) echo "checked"  ; ?> id="Títulos3"><label for="Títulos3">Títulos</label>
                          </td>
                          <td>&nbsp;</td>
                          <td>
                              <input name="Initial_Deposit_From1_Rel" type="text" value="<?PHP echo $Initial_Deposit_From1_Rel; ?>" class="form-control"><br>
                              <input name="Initial_Deposit_From2_Rel" type="text" value="<?PHP echo $Initial_Deposit_From2_Rel; ?>" class="form-control">
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Persona Políticamente Expuesta</b></p>
              </div>
              <div class="gray-paragraph">
                  <p>El cliente debe indicar expresamente si es Persona Políticamente Expuesta (PEP). Persona Políticamente Expuesta incluye, entre otros, una persona que desempeña o ha desempeñado funciones públicas prominentes dentro o fuera del país, tales como jefes de Estado o de Gobierno, políticos de alto nivel, funcionarios gubernamentales, judiciales u oficiales militares de alto nivel, ejecutivos de alto nivel de corporaciones que pertenecen al Estado, funcionarios importantes de partidos políticos. (En base a la definición establecida en Articulo 4 Ley 23/2015).</p>
              </div>
              <div class="tabled-checkboxes">
                  <table>
                      <tr>
                          <td>¿Es Ud. Una Persona Políticamente Expuesta (PEP)?</td>
                          <td><input name="PEP" <?PHP if ($PEP==1) echo "checked"  ; ?> type="radio" value="1" id="Salario"><label for="Salario">Si</label></td>
                          <td><input name="PEP" <?PHP if ($PEP==0) echo "checked"  ; ?> type="radio" value="0" id="Salario"><label for="Salario">No</label></td>
                      </tr>
                      <tr>
                          <td>¿Es Ud. Familiar Cercano (cónyuge o 1er grado consanguinidad) de PEP?</td>
                          <td><input name="PEP_Close" <?PHP if ($PEP_Close==1) echo "checked"  ; ?> type="radio" value="1" id="Salario"><label for="Salario">Si</label></td>
                          <td><input name="PEP_Close" <?PHP if ($PEP_Close==0) echo "checked" ; ?> type="radio" value="0" id="Salario"><label for="Salario">No</label></td>
                      </tr>
                      <tr>
                          <td>¿Declara que en los últimos 5 años (según la definición) se considera como PEP?</td>
                          <td><input name="PEP_Five" <?PHP if ($PEP_Five==1) echo "checked"  ; ?> type="radio" value="1" id="Salario"><label for="Salario">Si</label></td>
                          <td><input name="PEP_Five" <?PHP if ($PEP_Five==0) echo "checked"  ; ?> type="radio" value="0" id="Salario"><label for="Salario">No</label></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Comunicación Seleccionar uno o varios campos</b></p>
              </div>
              <div class="tabled-checkboxes">
                  <table>
                      <tr>
                          <td>Personas autorizadas para instruir órdenes:</td>
                          <td><input name="Orders_Autorise_Owner" <?PHP if ($Orders_Autorise_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Titular</label></td>
                          <td><input name="Orders_Autorise_Co_Owner" <?PHP if ($Orders_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Cotitular</label></td>
                          <td><input name="Orders_Autorise_Signatory" <?PHP if ($Orders_Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Firmante (s)</label></td>
                          <td><input name="Orders_Autorise_Attorney" <?PHP if ($Orders_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Apoderado</label></td>
                          <td><input name="Orders_Autorise_Beneficiary_Shareholder" <?PHP if ($Orders_Autorise_Beneficiary_Shareholder==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Beneficiario <br>Accionista</label></td>
                      </tr>
                      <tr>
                          <td>Autorizado a dar instrucción de envío y recepción de títulos y efectivo:</td>
                          <td><input name="Send_receive_cash_Autorise_Owner" <?PHP if ($Send_receive_cash_Autorise_Owner==1) echo "checked"   ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Titular</label></td>
                          <td><input name="Send_receive_cash_Autorise_Co_Owner" <?PHP if ($Send_receive_cash_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Cotitular</label></td>
                          <td><input name="Send_receive_cash_Autorise_Signatory" <?PHP if ($Send_receive_cash_Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Firmante (s)</label></td>
                          <td><input name="Send_receive_cash_Autorise_Attorney" <?PHP if ($Send_receive_cash_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Apoderado</label></td>
                          <td><input name="Send_receive_cash_Beneficiary_Shareholder" <?PHP if ($Send_receive_cash_Beneficiary_Shareholder==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Beneficiario <br>Accionista</label></td>
                      </tr>
                      <tr>
                          <td>Las órdenes podrán ser colocadas por:</td>
                          <td><input name="Orders_Mail" type="checkbox" value="1" <?PHP if ($Orders_Mail==1) echo "checked"  ; ?> id="Salario"><label for="Salario">Correo</label></td>
                          <td><input name="Orders_Documents" <?PHP if ($Orders_Documents==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Documentos Escritos</label></td>
                          <td><input name="Orders_Telephone" <?PHP if ($Orders_Telephone==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Vía Telefónica</label></td>
                          <td><input name="Orders_text" <?PHP if ($Orders_text==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Plataformas de Texto</label></td>
                          <td><input name="Orders_Directly" <?PHP if ($Orders_Directly==1) echo "checked"; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Directamente por el Cliente en el Sistema</label></td>
                          <td><input name="Orders_All_Above" <?PHP if ((($Orders_Mail==1) and ($Orders_Documents==1)) and ((($Orders_Telephone==1) and ($Orders_text==1)) and ($Orders_Directly==1))) echo "checked"; ?> type="checkbox" value="1" id="Salario"><label for="Salario">Todas las Anteriores</label></td>
                      </tr>
                      <tr>
                          <td>Confirmar las instrucciones emitidas (compra y venta de títulos y valores):</td>
                          <td><input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==1) echo "checked" ; ?> type="radio" value="1" id="no-discrecional"><label for="no-discrecional">Si</label><br>
                              <input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==0) echo "checked" ; ?> type="radio" value="0" id="si"><label for="si">No</label></td>
                          <td>De ser afirmativa completar:</td>
                          <td><input name="Complete1" <?PHP if ($Complete1==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro"><label for="Ahorro"></label><br>
                              <input name="Complete2" <?PHP if ($Complete2==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión"><label for="Pensión"></label><br>
                              <input name="Complete3" <?PHP if ($Complete3==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario"><label for="Salario"></label></td>
                      </tr>
                      <tr>
                          <td>Es voluntad del cliente que los Estados de Cuenta de su cuenta de inversión reposen en las oficinas de Firmus Financial Inc. a su disposicion y solicitud:</td>
                          <td><input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="Si"><label for="Si">Si</label><br>
                              <input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="No"><label for="No">No</label></td>
                      </tr>
                      <tr>
                          <td>Si su respuesta es No indique como desea recibir los Estados de Cuenta:</td>
                          <td><input name="Receive_AS_Mail" <?PHP if ($Receive_AS_Mail==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro"><label for="Ahorro">Correo</label><br>
                              <input name="Receive_AS_Postal" <?PHP if ($Receive_AS_Postal==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión"><label for="Pensión">Apartado Postal</label></td>
                      </tr>
                      <tr>
                          <td>Desea recibirlos con periodicidad:</td>
                          <td><input name="Receive_Mensual" <?PHP if ($Receive_Mensual==1) echo "checked" ; ?> type="checkbox" value="1" id="Mensual"><label for="Mensual">Mensual</label><br>
                              <input name="Receive_Trimestral" <?PHP if ($Receive_Trimestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Trimestral"><label for="Trimestral">Trimestral</label><br>
                              <input name="Receive_Semestral" <?PHP if ($Receive_Semestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Semestral"><label for="Semestral">Semestral</label><br>
                              <input name="Receive_Anual" <?PHP if ($Receive_Anual==1) echo "checked" ; ?> type="checkbox" value="1" id="Anual"><label for="Anual">Anual</label></td>
                      </tr>
                  </table>
              </div>
              <div class="fields-block-wrapper m-0">
                  <table>
                      <tr>
                          <td>Firmus Financial Inc. tomará como correo autorizado el declarado en Datos Generales, de ser diferente suministrar el mismo:</td>
                          <td><input name="General_Data" value="<?PHP echo $General_Data ; ?>" type="text" class="form-control"></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Declaración</b></p>
              </div>
              <div class="gray-paragraph">
                  <p>Confirmo (Confirmamos) que he (hemos) comprendido los términos del acuerdo de cuenta de inversión, incluyendo los modos de comunicación, acceso en línea, notificaciones y demás términos. <br><br>
                      Actuando en mi propio nombre y de manera voluntaria, declaro (declaramos) que hemos comprendido a cabalidad la información que se ha solicitado y respondiendo los campos de forma veraz y correcta en todo su alcance de forma plena e irrevocable; autorizando a Firmus Financial Inc. para la verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso que implique modificación de la información aquí declarada, de las circunstancias económicas, financieras y/o personales, del titular de la cuenta, firmantes autorizados, propietario efectivo o beneficiario finales. <br><br>
                      Confirmo (Confirmamos) estar anuente que las condiciones generales entregadas forman parte de la relación contractual presente.</p>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Firma (s) Cliente (s)</b></p>
              </div>
              <div class="fields-block-wrapper m-0 px-0">
                  <table>
                      <tr>
                          <td>Tipo de Firma:</td>
                          <td>
                              <input name="Signature1_Permanent" <?PHP if ($Signature1_Permanent==1) echo "checked" ; ?> type="checkbox" value="1" id="fijo"><label for="fijo">Conjunta</label><br>
                              <input name="Signature1_Not_variable" <?PHP if ($Signature1_Not_variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable"><label for="Variable">Indistinta</label>
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre completo (en imprenta):</td>
                          <td><input name="Full_name1" value="<?PHP echo $Full_name1 ; ?>" type="text" class="form-control"></td>
                          <td>Nombre completo (en imprenta):</td>
                          <td><input name="Full_name2" value="<?PHP echo $Full_name2 ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>No. de Documento (ID):</td>
                          <td><input name="Document1_ID" value="<?PHP echo $Document1_ID ; ?>" type="text" class="form-control"></td>
                          <td>No. de Documento (ID):</td>
                          <td><input name="Document2_ID" value="<?PHP echo $Document2_ID ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Fecha:</td>
                          <td><input name="Signature1_Date" value="<?PHP echo $Signature1_Date ; ?>" type="text" id="datepicker2" class="form-control"><small>DD/MM/AAAA</small></td>
                          <td>Fecha:</td>
                          <td><input name="Signature2_Date" value="<?PHP echo $Signature2_Date ; ?>" type="text" id="datepicker3" class="form-control"><small>DD/MM/AAAA</small></td>
                      </tr>
                      <tr>
                          <td colspan="2"><div class="signature-block"></div><p>Firma</p></td>
                          <td colspan="2"><div class="signature-block"></div><p>Firma</p></td>
                      </tr>
                  </table>
              </div>
              <div class="pdf-type-subtext">
                  <p><b>Firma (s) Personal de la Casa de Valores</b></p>
              </div>
              <div class="fields-block-wrapper">
                  <table>
                      <tr>
                          <td>Nombre del Corredor:</td>
                          <td><input name="Runners_Name" value="<?PHP echo $Runners_Name ; ?>" type="text" class="form-control"></td>
                          <td>Nombre del Oficial de Cumplimiento:</td>
                          <td><input name="Compliance_Officer_Name" value="<?PHP echo $Compliance_Officer_Name ; ?>" type="text" class="form-control"></td>
                          <td>Nombre del Ejecutivo Principal:</td>
                          <td><input name="Chief_Executive_Name" value="<?PHP echo $Chief_Executive_Name ; ?>" type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Fecha:</td>
                          <td><input name="Runners_Date" value="<?PHP echo $Runners_Date ; ?>" type="text" id="datepicker4" class="form-control"><small>DD/MM/AAAA</small></td>
                          <td>Fecha:</td>
                          <td><input name="Compliance_Officer_Date" value="<?PHP echo $Compliance_Officer_Date ; ?>" id="datepicker5" type="text" class="form-control"><small>DD/MM/AAAA</small></td>
                          <td>Fecha:</td>
                          <td><input name="Chief_Executive_Date" value="<?PHP echo $Chief_Executive_Date ; ?>" type="text" id="datepicker6" class="form-control"><small>DD/MM/AAAA</small></td>
                      </tr>
                      <tr>
                          <td colspan="2"><div class="signature-block"></div><p>Firma del Corredor de Valores</p></td>
                          <td colspan="2"><div class="signature-block"></div><p>Firma del Oficial de Cumplimiento</p></td>
                          <td colspan="2"><div class="signature-block"></div><p>Firma del Ejecutivo Principal</p></td>
                      </tr>
                  </table>
              </div>
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
>>>>>>> Stashed changes
