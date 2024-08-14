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
$db->query("select * from FOR_FF_APN_ES where id=$id");
while( $data = $db->fetch_array() )
{
    $Contract_Type=$data['Contract_Type'];
    $Part_Rel=$data['Part_Rel'];
    $Part_Rel_Raison=$data['Part_Rel_Raison'];
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

    $Initial_Deposit_Cash=$data['Initial_Deposit_Cash'];
    $Initial_Deposit_Non_Securities=$data['Initial_Deposit_Non_Securities'];
    $Initial_Deposit_Both=$data['Initial_Deposit_Both'];

    $Initial_Deposit_USD_Amount=$data['Initial_Deposit_USD_Amount'];
    $Initial_Deposit_Securities_Amount=$data['Initial_Deposit_Securities_Amount'];

    $Initial_Deposit_From1=$data['Initial_Deposit_From1'];
    $Initial_Deposit_From1_Cash=$data['Initial_Deposit_From1_Cash'];
    $Initial_Deposit_From1_Securities=$data['Initial_Deposit_From1_Securities'];
    $Initial_Deposit_From1_Rel=$data['Initial_Deposit_From1_Rel'];

    $Initial_Deposit_From2=$data['Initial_Deposit_From2'];
    $Initial_Deposit_From2_Cash=$data['Initial_Deposit_From2_Cash'];
    $Initial_Deposit_From2_Securities=$data['Initial_Deposit_From2_Securities'];
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
    $Send_receive_cash__Autorise_Signatory=$data['Send_receive_cash__Autorise_Signatory'];
    $Send_receive_cash_Autorise_Attorney=$data['Send_receive_cash_Autorise_Attorney'];
    $Send_receive_cash__Beneficiary_Shareholder=$data['Send_receive_cash__Beneficiary_Shareholder'];
    $Orders_Mail=$data['Orders_Mail'];
    $Orders_Documents=$data['Orders_Documents'];
    $Orders_Telephone=$data['Orders_Telephone'];
    $Orders_text=$data['Orders_text'];
    $Orders_Directly=$data['Orders_Directly'];
    $Autorise_Give_instuctions=$data['Autorise_Give_instuctions'];
    $Complete1=$data['Complete1'];
    $Complete2=$data['Complete2'];
    $Complete3=$data['Complete3'];
    $Complete4=$data['Complete4'];
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
$Signature1_Date=datetofrench($Signature1_Date);
$Signature2_Date=datetofrench($Signature2_Date);
$Runners_Date=datetofrench($Runners_Date);
$Compliance__Officer_Date=datetofrench($Compliance__Officer_Date);
$Chief_Executive_Date=datetofrench($Chief_Executive_Date);

// Capture the HTML content
ob_start();
?>
<?php
$base64='http://localhost/firmus_forms/Forms/images/logo.svg';
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
            /*.form-container {*/
            /*flex: 1;*/
            /*}*/
            .header {
                text-align: center;
                margin-top: 50px;
            }
            .form-header {
                background-color: #358ccb;
                color: white;
                padding: 2px;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                margin-top: 5px;
            }
            .form-subheader {
                background-color: #8ab5e1;
                color: white;
                font-size: 12px;
                padding: 1px 20px 1px 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 0;
                padding-top: 5px;
                padding-left: 20px;
                padding-right: 20px;
            }
            .form-section {
                background-color: #f0f0f0;
                font-weight: normal;
            }
            .form-section-first-row-td {
                padding-top: 6px;
            }
            .form-section-second-row-td {
                /*padding-top: -10px;*/
                display: inline-block;
                margin-top: -10px;
                position: relative;
                top: -10px;
            }
            .checkbox-up-span {
                display: inline-block;
                /*width: 10px;*/
            }
            .checkbox-below-span {
                vertical-align: middle;
            }
            .below-span {
                display: block;
                border-bottom: 1px solid #5c84a4;
                height: 20px;
                background-color: #f4f6fc;
            }

            td {
                /*padding: 8px;*/
                vertical-align: top;
            }
            .input-field {
                width: 100%;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .checkbox-field {
                margin-right: 10px;
            }
            .full-width {
                width: 100%;
            }
            .row1 {
                border-bottom: 2px solid #e5eaf7;
                padding: 10px;
                font-weight: normal;
            }
            .table2-row1 {
                /*border-bottom: 2px solid #e5eaf7;*/
                padding: 5px;
                font-weight: normal;
            }
            .footer {
                text-align: center;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                border-top: 3px solid #000;
                /*padding: 10px 20px;*/
                box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
                line-height: 0.2;
                font-size: 8px !important;
                margin-top: 3px;
            }
            .footer-content {
                text-align: center;
                font-size: 12px;
                color: #000;
            }
            .footer-bottom {
                /*display: flex;*/
                /*justify-content: space-between;*/
                /*position: relative;*/
                font-size: 10px;
                color: #666;
                /*margin-top: -20px;*/
                background-color: #f0f0f0;
            }
            .page-number:after {
                content: counter(page);
            }


            /* second page */
            .para-one {
                background-color: #f0f0f0;
                padding: 5px 20px 5px 20px;
            }
            .si-no {
                width: 10%; padding-top: 10px; padding-left: 7px
            }
            .row-background-style {
                background-color: #f0f0f0;
                /*position: relative;*/
                /*padding-right: -20px;*/
            }
            .signature-box {
                width: 330px;
                height: 70px;
                border: 1px solid #878787;
                background-color: #f7f7f7;
            }
            .signature-label {
                text-align: center;
                margin-top: 5px;
            }    </style>
        <title>FF_APN</title>
    </head>
    <body>
    <form name="form1" method="POST" action="modif.php">
	<?PHP echo "<input type=hidden name=id value=$id>"; ?>
    <div class="container">
        <div class="header">
            <svg>
                <img src="<?php echo $base64; ?>"  alt="Firmus Financial" class="img-fluid" style="width: 150px;">
            </svg>
        </div>

        <div class="form-container">
            <div class="form-header">Apertura de Cuenta Persona Natural</div>
            <div class="form-subheader">Datos Generales Completar todos los campos de este formulario, de no aplicar colocar
                N/A
            </div>

            <table style=" background-color: #f0f0f0;">
                <tr class="form-section">
                    <td class="form-section-first-row-td" style="width: 20%">Tipo de Cuenta o Contrato:</td>
                    <td class="form-section-first-row-td" style="width: 20%">
                        <span class="checkbox-up-span" style=""></span>
                        <input name="Contract_Type" <?PHP if ($Contract_Type==1) echo "checked" ; ?> type="checkbox" value="1" id="no-discrecional"  style="vertical-align: middle;">
                        <span class="checkbox-below-span">No Discrecional</span>
                    </td>
                    <td class="form-section-first-row-td" style="width: 20%">
                        <span class="checkbox-up-span"></span>
                        <input <?PHP if ($Contract_Type==0) echo "checked" ; ?> type="checkbox"  value="0" id="discrecional" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Discrecional</span>
                    </td>
                    <td class="row1" style="width: 40%">
                        <label>Explique por qué se considera parte relacionada:</label>
                        <span class="below-span" name="Part_Rel_Raison"><?PHP echo $Part_Rel_Raison ; ?></span>
                    </td>
                </tr>
                <tr class="form-section">
                    <td class="form-section-second-row-td" style="margin-top: -15px; padding-bottom: -10px">Parte
                        Relacionada:
                    </td>
                    <td>
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;"></span>
                        <input name="Part_Rel" <?PHP if ($Part_Rel==1) echo "checked" ; ?> type="checkbox" value="1" id="si" style="vertical-align: middle; display: inline-block;
                        margin-top: -15px; padding-bottom: -10px; position: relative; top: -15px;">
                        <span class="checkbox-below-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;">Sí</span>
                    </td>
                    <td>
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;"></span>
                        <input name="Part_Rel" <?PHP if ($Part_Rel==0) echo "checked" ; ?> type="checkbox" value="0" id="no" style="vertical-align: middle; display: inline-block;
                        margin-top: -15px; padding-bottom: -10px; position: relative; top: -15px;">
                        <span class="checkbox-below-span" style="display: inline-block; margin-top: -15px; padding-bottom: -10px;
                        position: relative; top: -15px;">No</span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 30%"  class="table2-row1">
                        <label>Nombre(s):</label>
                        <span class="below-span" name="E_Name"><?PHP echo $E_Name ; ?></span>
                    </td>
                    <td style="width: 30%" class="table2-row1">
                        <label>Apellido(s):</label>
                        <span class="below-span" name="E_surname"><?PHP echo $E_surname ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Nacionalidad:</label>
                        <span class="below-span" name ="E_Country"><?PHP echo $E_Country ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Estado Civil:</label>
                        <span class="below-span" name ="E_C_Status"><?PHP echo $E_C_Status ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 15%" class="table2-row1">
                        <label>Tipo de Documento (ID):</label>
                        <span class="below-span" name="E_ID_type"><?PHP echo $E_ID_type ; ?></span>
                    </td>
                    <td style="width: 17%" class="table2-row1">
                        <label>No. de Documento (ID):</label>
                        <span class="below-span" name ="E_ID_No"><?PHP echo $E_ID_No ; ?></span>
                    </td>
                    <td style="width: 18%"  class="table2-row1">
                        <label>Fecha de Vencimiento (ID):</label>
                        <span class="below-span" id="datepicker" name="E_ID_Expire_Date"><?PHP echo $E_ID_Expire_Date ; ?></span>
                    </td>
                    <td style="width: 15%"  class="table2-row1">
                        <label>Fecha de Nacimiento:</label>
                        <span class="below-span" name="E_Birth_Date" id="datepicker1"><?PHP echo $E_Birth_Date ; ?>"</span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <label>Lugar de Nacimiento:</label>
                        <span class="below-span"name="E_Birth_Place"><?PHP echo $E_Birth_Place ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 60%" class="table2-row1">
                        <label>Correo Electrónico:</label>
                        <span class="below-span"name="E_Email"><?PHP echo $E_Email ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Profesión u Oficio:</label>
                        <span class="below-span" name="E_Profession"><?PHP echo $E_Profession ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <label>Ocupación Actual:</label>
                        <span class="below-span" name="E_Profession_Current"><?PHP echo $E_Profession_Current ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%"  class="table2-row1">
                        <label>Domicilio Personal:</label>
                        <span class="below-span" name="E_Home_Adress"><?PHP echo $E_Home_Adress ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Nº de Domicilio / Casa:</label>
                        <span class="below-span" name="E_Home_Adress_Number"><?PHP echo $E_Home_Adress_Number ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Dirección Postal:</label>
                        <span class="below-span" Name="E_Home_Postal_Adress"><?PHP echo $E_Home_Postal_Adress ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <label>Fax:</label>
                        <span class="below-span" name="E_Home_Fax"><?PHP echo $E_Home_Fax ; ?></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%"  class="table2-row1">
                        <label>Domicilio Laboral:</label>
                        <span class="below-span" name="E_Office_Adress"><?PHP echo $E_Office_Adress ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <label>Nº de Oficina:</label>
                        <span class="below-span" name="E_Office_Number"><?PHP echo $E_Office_Number ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <label>Dirección Postal:</label>
                        <span class="below-span" name="E_Office_Postal_Adress"><?PHP echo $E_Office_Postal_Adress ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <label>Fax:</label>
                        <span class="below-span" name="E_Office_Fax"><?PHP echo $E_Office_Fax ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%" class="table2-row1">Empleado con Salario:</td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="E_Salary_Independ" <?PHP if ($E_Salary_Independ ==1) echo "checked" ; ?>  type="checkbox" value="1" id="Independiente" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Independiente</span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="E_Salary_NotRetired" type="checkbox" value="1"  <?PHP if ($E_Salary_NotRetired ==1) echo "checked" ; ?>  id="Jubilado" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Jubilado</span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="E_Salary_NotPensioned" <?PHP if ($E_Salary_NotPensioned ==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensionado"style="vertical-align: middle;">
                        <span class="checkbox-below-span">Pensionado</span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="E_Salary_Fixed" <?PHP if ($E_Salary_Fixed==1) echo "checked"; ?> type="checkbox" value="1" id="fijo" style="vertical-align: middle;">
                        <span class="checkbox-below-span">Fijo</span>

                        <span class="checkbox-up-span"></span>
                        <input name="E_Salary_Variable" <?PHP if($E_Salary_Variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable" style="vertical-align: middle; padding-left: 30px">
                        <span class="checkbox-below-span">Variable</span>
                    </td>
                    <td style="width: 4%; padding-top: 5px">Otro:</td>
                    <td style="width: 56%">
                        <span class="below-span" name="E_Salary_Other"><?PHP echo $E_Salary_Other ; ?></span>
                    </td>
                </tr>

            </table>
            <div class="form-subheader" style="margin-top: -5px">Origen de Fondos</div>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td colspan="6" class="label">Jurisdicciones principales de donde recibe/envía:</td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 5px">1-</td>
                    <td style="width: 32%; margin-right: 3px" >
                        <span class="below-span" name="Funds_Source1"><?PHP echo $Funds_Source1 ; ?></span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Funds_Source1_Type_Receive_Cash"  type="checkbox" value="1" <?PHP if($Funds_Source1_Type_Receive_Cash==1) echo "checked"  ; ?> id="Recibe-su-Efectivo" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input  name="Funds_Source1_Type_Send_Cash"  <?PHP if($Funds_Source1_Type_Send_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-su-Efectivo" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Funds_Source1_Type_Receive_Titles"  <?PHP if ($Funds_Source1_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe sus Títulos </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Funds_Source1_Type_Submit_Titles" <?PHP if ($Funds_Source1_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía sus Títulos </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 5px">2-</td>
                    <td style="width: 32%; margin-right: 3px" >
                        <span class="below-span" name="Funds_Source2">"<?PHP echo $Funds_Source2 ; ?></span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" value="1" id="Recibe-su-Efectivo2" name="Funds_Source2_Type_Receive_Cash" <?PHP if ($Funds_Source2_Type_Receive_Cash==1) echo "checked" ; ?> style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" name="Funds_Source2_Type_Send_Cash" type="checkbox" value="1" id="Envía-su-Efectivo2"
                        <?PHP if ($Funds_Source2_Type_Send_Cash==1) echo "checked  "  ; ?> style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía su Efectivo </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input tname="Funds_Source2_Type_Receive_Titles" <?PHP if($Funds_Source2_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos2" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Recibe sus Títulos </span>
                    </td>
                    <td style="width: 18%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" name="Funds_Source2_Type_Submit_Titles" <?PHP if($Funds_Source2_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos2" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Envía sus Títulos </span>
                    </td>
                </tr>
            </table>
            <div class="form-subheader" style="margin-top: -5px">Fuente de los Recursos o Patrimonio</div>
            <table style="margin-left: -5px !important;">
                <td style="width: 25%; padding-top: 5px">Nombre del Empleador / Independiente:</td>
                <td style="width: 40%;">
                    <span class="below-span" style="margin-right: 4px" name="RS_Employer_name" ><?PHP echo $RS_Employer_name ; ?></span>
                </td>
                <td style="width: 14%; padding-top: 5px">Ingreso Anual: (USD):</td>
                <td style="width: 15%; margin-right: 3px">
                    <span class="below-span" name="RS_Annual_Income_USD" ><?PHP echo $RS_Annual_Income_USD ; ?></span>
                </td>
            </table>
            <table style="margin-left: -5px !important;">
                <td style="width: 13%; padding-top: 5px">Salario Anual: (USD):</td>
                <td style="width: 5%;">
                    <span class="below-span" name="RS_Annual_Salary_USD" style="margin-right: 4px"><?PHP echo $RS_Annual_Salary_USD ; ?></span>
                </td>
                <td style="width: 13%; padding-top: 5px">Años en la Empresa:</td>
                <td style="width: 15%; margin-right: 3px">
                    <span class="below-span" name="RS_Years_in_Company"><?PHP echo $RS_Years_in_Company ; ?></span>
                </td>
                <td style="width: 10%; padding-top: 8px; padding-left: 30%">Actividad:</td>
                <td style="width: 20%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="RS_Activity_Professional_fees" <?PHP if ($RS_Activity_Professional_fees==1) echo "checked"  ; ?> type="checkbox" value="1" id="Honorarios-Profesionales" style="vertical-align: middle;">
                    <span class="checkbox-below-span"> Honorarios Profesionales </span>
                </td>
                <td style="width: 15%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" name="RS_Activity_Own_business"  <?PHP if ($RS_Activity_Own_business==1) echo "checked"  ; ?> type="checkbox" value="1" id="Negocio-Propio" style="vertical-align: middle;">
                    <span class="checkbox-below-span"> Negocio Propio </span>
                </td>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 12%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input type="checkbox" name="RS_Activity_Saving" <?PHP if ($RS_Activity_Saving==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ahorro" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Ahorro </span>
                    </td>
                    <td style="width: 12%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="RS_Activity_Pension" <?PHP if ($RS_Activity_Pension==1) echo "checked"  ; ?> type="checkbox" value="1" id="Pensión" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Pensión </span>
                    </td>
                    <td style="width: 12%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="RS_Activity_Pension1" <?PHP if ($RS_Activity_Pension1==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario"style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Salario </span>
                    </td>
                    <td style="width: 15%; padding-top: 5px" >Dividendos de Inversión:</td>
                    <td style="width: 15%; margin-right: 3px">
                        <span class="below-span" name="RS_Investment_Dividends"><?PHP echo $RS_Investment_Dividends ; ?></span>
                    </td>
                    <td style="width: 5%; padding-top: 5px; padding-left: 20%">Otros:</td>
                    <td style="width: 15%; margin-right: 3px">
                        <span class="below-span" name="RS_Others"><?PHP echo $RS_Others ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="font-weight: bold">Referencia Bancaria</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="width: 40%">Referencia Bancaria:</td>
                    <td style="width: 0%"></td>
                    <td style="width: 20%; padding-left: 5px">País:</td>
                    <td style="width: 20%; padding-left: 5px">Persona Contacto:</td>
                    <td style="width: 20%; padding-left: 5px">Teléfono:</td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 2%; padding-top: 10px">1-</td>
                    <td style="width: 38%"  class="table2-row1">
                        <span class="below-span" name="Bank1_Ref_Name"><?PHP echo $Bank1_Ref_Name ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank1_Ref_Country"><?PHP echo $Bank1_Ref_Country ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank1_Ref_Contact"><?PHP echo $Bank1_Ref_Contact ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank1_Ref_Phone"><?PHP echo $Bank1_Ref_Phone ; ?></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 10px" >2-</td>
                    <td style="width: 38%"  class="table2-row1">
                        <span class="below-span" name="Bank2_Ref_Name"><?PHP echo $Bank2_Ref_Name ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank2_Ref_Country"><?PHP echo $Bank2_Ref_Country ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank2_Ref_Contact"><?PHP echo $Bank2_Ref_Contact ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank2_Ref_Phone"><?PHP echo $Bank2_Ref_Phone ; ?></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 10px">3-</td>
                    <td style="width: 38%"  class="table2-row1">
                        <span class="below-span" name="Bank3_Ref_Name"><?PHP echo $Bank3_Ref_Name ; ?></span>
                    </td>
                    <td style="width: 20%"   class="table2-row1">
                        <span class="below-span" name="Bank3_Ref_Country"><?PHP echo $Bank3_Ref_Country ; ?></span>
                    </td>
                    <td style="width: 20%"  class="table2-row1">
                        <span class="below-span" name="Bank3_Ref_Contact"><?PHP echo $Bank3_Ref_Contact ; ?></span>
                    </td>
                    <td style="width: 20%" class="table2-row1">
                        <span class="below-span"  name="Bank3_Ref_Phone"><?PHP echo $Bank3_Ref_Phone ; ?></span>
                    </td>
                </tr>
            </table>
            <div class="form-subheader" style="margin-top: 10px">Depósito Inicial</div>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 40%">Usted estará depositando o transfiriendo:</td>
                    <td style="width: 60%"> Indique el Monto (USD):</td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 14%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_Cash"  <?PHP if ($Initial_Deposit_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Efectivo" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Efectivo </span>
                    </td>
                    <td style="width: 14%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_Non_Securities"  <?PHP if ($Initial_Deposit_Non_Securities==1) echo "checked"  ; ?> type="checkbox" value="1" id="Títulos-Valores" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Títulos Valores </span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_Both" <?PHP if ($Initial_Deposit_Both==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ambos" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Ambos </span>
                    </td>
                    <td style="width: 10%; padding-top: 10px">Efectivo:</td>
                    <td style="width: 15%"  class="table2-row1">
                        <span class="below-span" name="Initial_Deposit_USD_Amount"><?PHP echo $Initial_Deposit_USD_Amount ; ?></span>
                    </td>
                    <td style="width: 15%; padding-top: 10px">Títulos Valores:</td>
                    <td style="width: 15%"  class="table2-row1">
                        <span class="below-span" name="Initial_Deposit_Securities_Amount"><?PHP echo $Initial_Deposit_Securities_Amount ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 70%">Institución de donde Provienen los Fondos:</td>
                    <td style="width: 30%"> Tiempo de Relación con la Institución:</td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 2%; padding-top: 10px">1-</td>
                    <td style="width: 48%"  class="table2-row1">
                        <span class="below-span" name="Initial_Deposit_From1"><?PHP echo $Initial_Deposit_From1 ; ?></span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_From1_Cash"  name="Initial_Deposit_Cash"  <?PHP if ($Initial_Deposit_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Efectivo" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Efectivo </span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_From1_Securities" type="checkbox" value="1"  <?PHP if ($Initial_Deposit_From1_Securities==1) echo "checked"  ; ?>    id="Títulos" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Títulos </span>
                    </td>
                    <td style="width: 30%"  class="table2-row1">
                        <span class="below-span" name="Initial_Deposit_From1_Rel"><?PHP echo $Initial_Deposit_From1_Rel; ?></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 10px">2-</td>
                    <td style="width: 48%"  class="table2-row1">
                        <span class="below-span" name="Initial_Deposit_From2"><?PHP echo $Initial_Deposit_From2 ; ?></span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_From2_Cash"  type="checkbox" value="1"  <?PHP if ($Initial_Deposit_From2_Cash==1) echo "checked" ; ?>   id="Efectivo3" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Efectivo </span>
                    </td>
                    <td style="width: 10%" class="table2-row1">
                        <span class="checkbox-up-span"></span>
                        <input name="Initial_Deposit_From2_Securities"   type="checkbox" value="1"  <?PHP if ($Initial_Deposit_From2_Securities==1) echo "checked"  ; ?>   id="Títulos3" style="vertical-align: middle;">
                        <span class="checkbox-below-span"> Títulos </span>
                    </td>
                    <td style="width: 30%"  class="table2-row1">
                        <span class="below-span" name="Initial_Deposit_From2_Rel"><?PHP echo $Initial_Deposit_From2_Rel; ?></span>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <p style="font-weight: bold">PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol,
                    Ciudad de Panamá.</p>
                <p style="font-weight: bold">Teléfono: + 507 310 0625 | 
                    www.firmus-financial.com</p>
                <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá
                    bajo Resolución No. 630-2014</p>
            </div>
            <table class="footer-bottom">
                <tr>
                    <td>
                        <p style="color: #1a202c"> FFAPNES.V01 </p>
                    </td>
                    <td>
                        <p class="page-number"></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- second page -->
    <div class="container">
        <div class="header">
            <svg>
                <img src="<?php echo $base64; ?>" alt="logo" style="width: 150px;">
            </svg>
        </div>

        <div class="form-subheader" style="margin-top: 10px">Persona Políticamente Expuesta</div>
        <div class="para-one">
            <p>
                El cliente debe indicar expresamente si es Persona Políticamente Expuesta (PEP).
                Persona Políticamente Expuesta incluye, entre otros, una persona
                que desempeña o ha desempeñado funciones públicas prominentes dentro o fuera del país,
                tales como jefes de Estado o de Gobierno, políticos de alto
                nivel, funcionarios gubernamentales, judiciales u oficiales militares de alto nivel,
                ejecutivos de alto nivel de corporaciones que pertenecen al Estado,
                funcionarios importantes de partidos políticos. (En base a la definición establecida
                en Articulo 4 Ley 23/2015).
            </p>
        </div>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 80%; padding-top: 10px"></td>
                <td class="si-no">Si</td>
                <td class="si-no">No</td>
            </tr>
            <tr class="row-background-style">
                <td style="width: 80%; padding-top: 10px">¿Es Ud. Una Persona Políticamente Expuesta (PEP)?</td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input type="checkbox" name="PEP" <?PHP if ($PEP==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="PEP" <?PHP if ($PEP==0) echo "checked"  ; ?> type="checkbox" value="0" id="Salario" style="vertical-align: middle;">
                </td>
            </tr>
            <tr>
                <td style="width: 80%; padding-top: 10px">¿Es Ud. Familiar Cercano (cónyuge o 1er grado consanguinidad)
                    de PEP?
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="PEP_Close" <?PHP if ($PEP_Close==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="PEP_Close" <?PHP if ($PEP_Close==0) echo "checked" ; ?> type="checkbox" value="0" id="Salario"  style="vertical-align: middle;">
                </td>
            </tr>
            <tr class="row-background-style">
                <td style="width: 80%; padding-top: 10px; padding-left: -20px">¿Declara que en los últimos 5 años (según
                    la definición) se considera como PEP?
                </td>
                <td style="width: 10%;" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="PEP_Five" <?PHP if ($PEP_Five==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td style="width: 10%" class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="PEP_Five" <?PHP if ($PEP_Five==0) echo "checked"  ; ?> type="checkbox" value="0" id="Salario" style="vertical-align: middle;">
                </td>
            </tr>
        </table>
        <div class="form-subheader" style="margin-top: 10px">Comunicación Seleccionar uno o varios campos</div>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 50%; padding-bottom: -15px"></td>
                <td style="padding-bottom: -15px">Titular</td>
                <td style="padding-bottom: -15px">Cotitular</td>
                <td style="padding-bottom: -15px">Firmante (s)</td>
                <td style="padding-bottom: -15px">Apoderado</td>
                <td style="padding-bottom: -15px">Beneficiario Accionista</td>
            </tr>
            <tr class="row-background-style">
                <td style="padding-top: 10px">Personas autorizadas para instruir órdenes</td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Autorise_Owner" <?PHP if ($Orders_Autorise_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Autorise_Co_Owner" <?PHP if ($Orders_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Autorise_Signatory" <?PHP if ($Orders_Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Autorise_Attorney" <?PHP if ($Orders_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Autorise_Beneficiary_Shareholder" <?PHP if ($Orders_Autorise_Beneficiary_Shareholder==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
            </tr>
            <tr>
                <td style="padding-top: 10px">Autorizado a dar instrucción de envío y recepción de tìtulos y efectivo
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Send_receive_cash_Autorise_Owner" <?PHP if ($Send_receive_cash_Autorise_Owner==1) echo "checked"   ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Send_receive_cash_Autorise_Co_Owner" <?PHP if ($Send_receive_cash_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Send_receive_cash__Autorise_Signatory" <?PHP if ($Send_receive_cash__Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Send_receive_cash_Autorise_Attorney" <?PHP if ($Send_receive_cash_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Send_receive_cash__Beneficiary_Shareholder" <?PHP if ($Send_receive_cash__Beneficiary_Shareholder==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 40%; padding-bottom: -15px"></td>
                <td style="padding-bottom: -15px">Correo</td>
                <td style="padding-bottom: -15px">Documentos Correo Escritos</td>
                <td style="padding-bottom: -15px">Vía Telefónica</td>
                <td style="padding-bottom: -15px">Plataformas de Texto</td>
                <td style="padding-bottom: -15px">Directamente por el Cliente en el Sistema</td>
                <td style="padding-bottom: -15px">Todas las Anteriores</td>
            </tr>
            <tr class="row-background-style">
                <td style="padding-top: 10px">Las órdenes podrán ser colocadas por</td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Mail"  type="checkbox" value="1"  <?PHP if ($Orders_Mail==1) echo "checked"  ; ?> id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Documents" <?PHP if ($Orders_Documents==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Telephone" <?PHP if ($Orders_Telephone==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input tname="Orders_text" <?PHP if ($Orders_text==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_Directly" <?PHP if ($Orders_Directly==1)  echo "checked"; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Orders_All_Above" <?PHP if ((($Orders_Mail==1) and ($Orders_Documents==1)) and
                                        ((($Orders_Telephone==1) and ($Orders_text==1))  and ($Orders_Directly==1)))  echo "checked"; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 20%">Confirmar las instrucciones
                    emitidas (compra y venta de
                    títulos y valores)
                </td>
                <td style="width: 20%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==1) echo "checked" ; ?> type="checkbox" value="1" id="no-discrecional" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative;">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        ">Sí</span>
                </td>
                <td style="width: 60%; font-style: italic;">De ser afirmativa completar:</td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="width: 20%"></td>
                <td style="width: 20%">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==0) echo "checked" ; ?> type="checkbox" value="0" id="si" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                    <span class="checkbox-below-span" style="display: inline-block; margin-top: -10px; padding-bottom: -10px;
                        position: relative; top: -10px;">No</span>
                </td>
                <td style="width: 10%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input name="Complete1" <?PHP if ($Complete1==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
                <td style="width: 10%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input name="Complete2" <?PHP if ($Complete2==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
                <td style="width: 10%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input name="Complete3" <?PHP if ($Complete3==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
                <td style="width: 30%;  font-style: italic;">
                    <span class="checkbox-up-span" style="display: inline-block; margin-top: -10px;
                        position: relative; top: -10px;"></span>
                    <input name="Complete4" <?PHP if ($Complete4==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario1" style="vertical-align: middle; display: inline-block;
                        margin-top: -10px; position: relative; top: -10px;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr class="row-background-style">
                <td style="padding-top: 10px" width="80%">Es voluntad del cliente que los Estados de Cuenta
                    de su cuenta de inversión reposen en las oficinas
                    de Firmus-Octogone Inc. a su disposicion y solicitud
                </td>
                <td style="padding-top: 10px; padding-left: 7px" width="10%">Si</td>
                <td style="padding-top: 10px; padding-left: 7px" width="10%">No</td>
            </tr>
            <tr class="row-background-style">
                <td width="80%" style="position: relative; margin-top: -20px"></td>
                <td class="table2-row1" style="position: relative; margin-top: -20px">
                    <span class="checkbox-up-span"></span>
                    <input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="Si" style="position: relative; margin-top: -20px; vertical-align: middle;">
                </td>
                <td class="table2-row1">
                    <span class="checkbox-up-span"></span>
                    <input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==0) echo "checked" ; ?> type="checkbox" value="1" id="No" style="position: relative; margin-top: -20px; vertical-align: middle;">
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="padding-top: 10px; font-style: italic" width="50%">Si su respuesta es No indique como
                    desea recibir los Estados de Cuenta:
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Receive_AS_Mail" <?PHP if ($Receive_AS_Mail==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Correo</span>
                </td>
                <td style="width: 40%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Receive_AS_Postal" <?PHP if ($Receive_AS_Postal==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Apartado Postal </span>
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr class="row-background-style">
                <td style="padding-top: 10px; font-style: italic" width=40%">Desea recibirlos con periodicidad
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Receive_Mensual" <?PHP if ($Receive_Mensual==1) echo "checked" ; ?> type="checkbox" value="1" id="Mensual" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Mensual</span>
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Receive_Trimestral" <?PHP if ($Receive_Trimestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Trimestral" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Trimestral</span>
                </td>
                <td style="width: 10%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Receive_Semestral" <?PHP if ($Receive_Semestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Semestral" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Semestral</span>
                </td>
                <td style="width: 30%">
                <span class="checkbox-up-span" style="display: inline-block; padding-bottom: -10px;
                        position: relative;"></span>
                    <input name="Receive_Anual" <?PHP if ($Receive_Anual==1) echo "checked" ; ?> type="checkbox" value="1" id="Anual" style="vertical-align: middle; display: inline-block;
                       padding-bottom: -10px; position: relative; margin-top: 7px">
                    <span class="checkbox-below-span" style="display: inline-block; padding-bottom: -10px;
                        margin-top: 7px">Anual</span>
                </td>
            </tr>
        </table>
        <table style="margin-left: -5px !important;">
            <tr>
                <td style="padding-top: 10px; width: 50%">Firmus-Octogone Inc. tomará como correo autorizado el declarado en
                    Datos Generales, de ser diferente suministrar el mismo:
                </td>
                <td class="table2-row1" style="width: 50%">
                    <span class="below-span" name="General_Data" style="margin-top: 8px; position: relative; "><?PHP echo $General_Data ; ?></span>
                </td>
            </tr>
        </table>
        <div class="form-subheader" style="margin-top: 10px;">Declaración</div>
        <div class="para-one" style=" margin-bottom: 130px">
            <p>
                Confirmo (Confirmamos) que he (hemos) comprendido los términos del acuerdo de cuenta de inversión,
                incluyendo los modos de comunicación,
                acceso en línea, notificaciones y demás términos. <br><br>
                Actuando en mi propio nombre y de manera voluntaria, declaro (declaramos) que hemos comprendido a cabalidad
                la información que se ha solicitado
                y respondiendo los campos de forma veraz y correcta en todo su alcance de forma plena e irrevocable;
                autorizando a Firmus-Octogone Inc. para la
                verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso
                que implique modificación de la información
                aquí declarada, de las circunstancias económicas, financieras y/o personales, del titular de la cuenta,
                firmantes autorizados, propietario efectivo o
                beneficiario finales. <br><br>
                Confirmo (Confirmamos) estar anuente que las condiciones generales entregadas forman parte de la relación
                contractual presente.
            </p>
        </div>
        <!-- Footer -->
        <div class="footer" style="margin-top: 100px">
            <div class="footer-content">
                <p style="font-weight: bold">PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol,
                    Ciudad de Panamá.</p>
                <p style="font-weight: bold">Teléfono: + 507 310 0625 | 
                    www.firmus-financial.com</p>
                <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá
                    bajo Resolución No. 630-2014</p>
            </div>
            <table class="footer-bottom">
                <tr>
                    <td>
                        <p style="color: #1a202c"> FFAPNES.V01 </p>
                    </td>
                    <td>
                        <p class="page-number"></p>
                    </td>
                </tr>
            </table>
        </div>
        <!-- third page -->

        <div class="container">
            <div class="header">
                <svg>
                    <img src="<?php echo $base64; ?>" alt="logo" style="width: 150px;">
                </svg>
            </div>
            <div class="form-subheader" style="margin-top: 10px">Firma (s) Cliente (s</div>
            <table style=" background-color: #f0f0f0;">
                <tr class="form-section">
                    <td class="form-section-first-row-td" style="width: 10%">Tipo de Firma:</td>
                    <td class="form-section-first-row-td" style="width: 10%">
                        <span class="checkbox-up-span" style="position: relative; margin-bottom: 10px"></span>
                        <input name="Signature1_Permanent" <?PHP if ($Signature1_Permanent==1) echo "checked" ; ?> type="checkbox" value="1" id="fijo" style="vertical-align: middle;
                    position: relative; top: -1px; margin-top: -1px">
                        <span class="checkbox-below-span" style=" position: relative;
                    top: -2px; margin-top: -2px">Conjunta</span>
                    </td>
                    <td class="form-section-first-row-td" style="width: 80%">
                        <span class="checkbox-up-span" style="position: relative; margin-bottom: 10px"></span>
                        <input name="Signature1_Not_variable"  <?PHP if ($Signature1_Not_variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable" style="vertical-align: middle;
                    position: relative; top: -1px; margin-top: -1px">
                        <span class="checkbox-below-span" style=" position: relative;
                    top: -2px; margin-top: -2px">Indistinta</span>
                    </td>
                </tr>
            </table>
            <table style="margin-left: -5px !important;">
                <tr>
                    <td style="width: 45%"  class="table2-row1">
                        <label>Nombre completo (en imprenta):</label>
                        <span class="below-span" name="Full_name1"><?PHP echo $Full_name1 ; ?></span>
                    </td>
                    <td width="10%"></td>
                    <td style="width: 45%"  class="table2-row1">
                        <label>Nombre completo (en imprenta):</label>
                        <span class="below-span" name="Full_name2"><?PHP echo $Full_name2 ; ?></span>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width: 15%; padding-top: 10px">No. de Documento (ID):</td>
                    <td style="width: 30%"   class="table2-row1">
                        <span class="below-span" name="Document1_ID" ><?PHP echo $Document1_ID ; ?></span>
                    </td>
                    <td width="10%"></td>
                    <td style="width: 15%; padding-top: 10px">No. de Documento (ID):</td>
                    <td style="width: 30%"   class="table2-row1">
                        <span class="below-span" name="Document2_ID"><?PHP echo $Document2_ID ; ?></span>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="25%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%"  class="table2-row1">
                        <span class="below-span" name="Signature1_Date" id="datepicker2"><?PHP echo $Signature1_Date ; ?></span>
                    </td>
                    <td width="10%"></td>
                    <td width="25%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%"  class="table2-row1">
                        <span class="below-span" name="Signature2_Date" id="datepicker3" ><?PHP echo $Signature2_Date ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-top: 15px">
                <tr>
                    <td class="signature-section">
                        <div class="signature-box"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                    <td width="10%"></td>
                    <td class="signature-section">
                        <div class="signature-box"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                </tr>
            </table>
            <div class="form-subheader" style="margin-top: 15px">Firma (s) Cliente (s</div>
            <table style="margin-left: -5px !important; margin-top: 15px">
                <tr>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre del Corredor:</label>
                        <span class="below-span" name="Runners_Name"><?PHP echo $Runners_Name ; ?></span>
                    </td>
                    <td width="5%"></td>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre del Oficial de Cumplimiento:</label>
                        <span class="below-span" name="Compliance_Officer_Name"><?PHP echo $Compliance_Officer_Name ; ?></span>
                    </td>
                    <td width="5%"></td>
                    <td style="width: 30%" class="table2-row1">
                        <label>Nombre del Ejecutivo Principal:</label>
                        <span class="below-span"  name="Chief_Executive_Name"><?PHP echo $Chief_Executive_Name ; ?></span>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="10%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span" name="Runners_Date" id="datepicker4"><?PHP echo $Runners_Date ; ?></span>
                    </td>
                    <td width="5%"></td>
                    <td width="15%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%"  class="table2-row1">
                        <span class="below-span"  name="Compliance__Officer_Date" id="datepicker5"><?PHP echo $Compliance__Officer_Date ; ?></span>
                    </td>
                    <td width="5%"></td>
                    <td width="15%"></td>
                    <td style="width: 5%; padding-top: 10px">Fecha:</td>
                    <td style="width: 15%" class="table2-row1">
                        <span class="below-span" name="Chief_Executive_Date" id="datepicker6" ><?PHP echo $Chief_Executive_Date ; ?></span>
                    </td>
                </tr>
            </table>
            <table style="margin-top: 15px">
                <tr>
                    <td class="signature-section">
                        <div class="signature-box" style="width: 215px;"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                    <td width="5%"></td>
                    <td class="signature-section">
                        <div class="signature-box" style="width: 215px;"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                    <td width="5%"></td>
                    <td class="signature-section">
                        <div class="signature-box" style="width: 215px;"></div>
                        <div class="signature-label">Firma</div>
                    </td>
                </tr>
            </table>


        </div>


        <!-- Footer -->
        <div class="footer" style="margin-top: 100px">
            <div class="footer-content">
                <p style="font-weight: bold">PH Times Square Center, Oficinas 17 D-E, Costa del Este, Av. Costa del Sol,
                    Ciudad de Panamá.</p>
                <p style="font-weight: bold">Teléfono: + 507 310 0625 | 
                    www.firmus-financial.com</p>
                <p>Entidad Regulada y Supervisada por la Superintendencia del Mercado de Valores de la República de Panamá
                    bajo Resolución No. 630-2014</p>
            </div>
            <table class="footer-bottom">
                <tr>
                    <td>
                        <p style="color: #1a202c"> FFAPNES.V01 </p>
                    </td>
                    <td>
                        <p class="page-number"></p>
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
$dompdf->stream("dynamic_data.pdf", array("Attachment" => 1));
?>
 <script>
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