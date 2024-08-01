<?php
error_reporting(E_ALL);
require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

// Capture the HTML content
ob_start();
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_pdf.css" rel="stylesheet">
        <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
        <title>Firmus Financial Inc.</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 20px;
            }

            h6 {
                font-size: 1.25em;
                margin-top: 20px;
            }

            p {
                margin: 0;
                padding: 5px 0;
            }

            input[type="text"],
            input[type="radio"],
            input[type="checkbox"] {
                margin-bottom: 10px;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .flex-container {
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
            }

            .single-field {
                flex: 1;
                min-width: 150px;
                padding: 10px;
            }

            .checkbox-block,
            .radio-block,
            .vertical-form-field,
            .horizontal-form-field {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .checkbox-block input,
            .checkbox-block label,
            .radio-block input,
            .radio-block label {
                margin-right: 5px;
            }

            .checkbox-block label,
            .radio-block label {
                margin-left: 5px;
                vertical-align: middle;
            }

            .flex-20 {
                flex: 20%;
            }

            .flex-25 {
                flex: 25%;
            }

            .flex-50 {
                flex: 50%;
            }

            .flex-100 {
                flex: 100%;
            }

            .checkbox-block {
                display: flex;
                align-items: center;
            }

            .checkbox-block input {
                margin-right: 5px;
            }

            .checkbox-block label {
                margin: 0;
                vertical-align: middle;
            }


        </style>
    </head>
    <?PHP
    error_reporting(E_ALL);
    include "dbclass.php";
    include "functions.php";
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
    //---------------------



    ?>

    <body>
    <form name="form1" method="POST" action="modif.php">
        <?PHP echo "<input type=hidden name=id value=$id>"; ?>
        <section class="wrapper">
            <div class="top-logo">
                <div class="flex-container">
                    <img src="/images/logo.svg" alt="Firmus Financial" class="img-fluid" style="margin-left: 400px;margin-right: 200;">
                    <label for="account_number" style="margin-left: 120px;">Número de cuenta:</label>
                    <input type="text" name="account_number" value= "<?php echo $account_number; ?>" placeholder="Número de cuenta" />
                </div>
            </div>
            <div class="pdf-type-text">
                <h6>Apertura de Cuenta Persona Natural</h6>
            </div>
            <div class="pdf-type-subtext">
                <p><b>Datos Generales</b> Completar todos los campos de este formulario, de no aplicar colocar N/A</p>
            </div>
            <div class="grayed-fields d-flex">
                <div class="single-field flex-20">
                    <p>Tipo de Cuenta o Contrato:</p>
                    <p>Parte Relacionada:</p>
                </div>
                <div class="single-field flex-20">
                    <div class="checkbox-block">
                        <input name="Contract_Type" <?PHP if ($Contract_Type==1) echo "checked" ; ?> type="radio" value="1" id="no-discrecional">
                        <label for="no-discrecional">No Discrecional</label>
                    </div>
                    <div class="checkbox-block">
                        <input name="Part_Rel" <?PHP if ($Part_Rel==1) echo "checked" ; ?> type="radio" value="1" id="si">
                        <label for="si">Si</label>
                    </div>
                </div>
                <div class="single-field flex-20">
                    <div class="checkbox-block">
                        <input name="Contract_Type" <?PHP if ($Contract_Type==0) echo "checked" ; ?> type="radio" value="0" id="discrecional">
                        <label for="discrecional">Discrecional</label>
                    </div>
                    <div class="checkbox-block">
                        <input name="Part_Rel" <?PHP if ($Part_Rel==0) echo "checked" ; ?> type="radio" value="0" id="no">
                        <label for="no">No</label>
                    </div>
                </div>
                <div class="single-field flex-40">
                    <div class="vertical-form-field">
                        <p>Explique por qué se considera parte relacionada:</p>
                        <input name="Part_Rel_Raison" value="<?PHP echo $Part_Rel_Raison ; ?>" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="fields-block-wrapper">
                <div class="d-flex">
                    <div class="single-field flex-25">
                        <div class="vertical-form-field">
                            <p>Nombre(s):</p>
                            <input name="E_Name" value="<?PHP echo $E_Name ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-25">
                        <div class="vertical-form-field">
                            <p>Apellido(s):</p>
                            <input name="E_surname"value="<?PHP echo $E_surname ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-25">
                        <div class="vertical-form-field">
                            <p>ANacionalidad:</p>
                            <input name ="E_Country" type= "text" value="<?PHP echo $E_Country ; ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-25">
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
                            <input name="E_ID_type" value="<?PHP echo $E_ID_type ; ?>" type="text" class="form-control">
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
                            <input name="E_ID_Expire_Date" value="<?PHP echo $E_ID_Expire_Date ; ?>" type="text" id="datepicker" class="form-control">
                            <small>DD/MM/AAAA</small>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="vertical-form-field">
                            <p>Fecha de Nacimiento:</p>
                            <input name="E_Birth_Date" value="<?PHP echo $E_Birth_Date ; ?>" type="text" id="datepicker1" class="form-control">
                            <small>DD/MM/AAAA</small>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="vertical-form-field">
                            <p>Lugar de Nacimiento:</p>
                            <input name="E_Birth_Place" value="<?PHP echo $E_Birth_Place ; ?>" type="text" class="form-control">
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
                            <input name="E_Profession" value="<?PHP echo $E_Profession ; ?>" type="text" class="form-control">
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
                            <input Name="E_Home_Postal_Adress" value="<?PHP echo $E_Home_Postal_Adress ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="vertical-form-field">
                            <p>Fax:</p>
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
                            <input name="E_Office_Number" value="<?PHP echo $E_Office_Number ; ?>" type="text" class="form-control">
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
                            <p>Fax:</p>
                            <input name="E_Office_Fax" value="<?PHP echo $E_Office_Fax ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field flex-40">
                        <div class="vertical-form-field">
                            <p>Empleado con Salario:</p>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkboxes-group m-0">
                            <div class="checkbox-block">
                                <input name="E_Salary_Independ" <?PHP if ($E_Salary_Independ ==1) echo "checked" ; ?>  type="checkbox" value="1" id="Independiente">
                                <label for="Independiente">Independiente</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkboxes-group m-0">
                            <div class="checkbox-block">
                                <input name="E_Salary_NotRetired" type="checkbox" value="1"  <?PHP if ($E_Salary_NotRetired ==1) echo "checked" ; ?>  id="Jubilado">
                                <label for="Jubilado">Jubilado</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkboxes-group m-0">
                            <div class="checkbox-block">
                                <input name="E_Salary_NotPensioned" <?PHP if ($E_Salary_NotPensioned ==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensionado">
                                <label for="Pensionado">Pensionado</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16 align-items-center">
                    <div class="checkboxes-group flex-40">
                        <div class="checkbox-block">
                            <input name="E_Salary_Fixed" <?PHP if ($E_Salary_Fixed==1) echo "checked"; ?> type="checkbox" value="1" id="fijo">
                            <label for="fijo">Fijo</label>
                        </div>
                        <div class="checkbox-block">
                            <input name="E_Salary_Variable" <?PHP if($E_Salary_Variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable">
                            <label for="Variable">Variable</label>
                        </div>
                    </div>
                    <div class="single-field flex-60">
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
                    <div class="single-field flex-20">
                        <p>Jurisdicciones principales de donde recibe/envía:</p>
                    </div>

                </div>
                <div class="d-flex mt-16 align-items-end">
                    <div class="single-field flex-20">
                        <div class="horizontal-form-field">
                            <p>1-</p>
                            <input name="Funds_Source1" value="<?PHP echo $Funds_Source1 ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input name="Funds_Source1_Type_Receive_Cash"  type="checkbox" value="1" <?PHP if($Funds_Source1_Type_Receive_Cash==1) echo "checked"  ; ?> id="Recibe-su-Efectivo">
                            <label for="Recibe-su-Efectivo">Recibe su Efectivo</label>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input name="Funds_Source1_Type_Send_Cash"  <?PHP if($Funds_Source1_Type_Send_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-su-Efectivo">
                            <label for="Envía-su-Efectivo">Envía su Efectivo</label>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input name="Funds_Source1_Type_Receive_Titles"  <?PHP if ($Funds_Source1_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos">
                            <label for="Recibe-sus-Títulos">Recibe sus Títulos</label>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input  name="Funds_Source1_Type_Submit_Titles" <?PHP if ($Funds_Source1_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos">
                            <label for="Envía-sus-Títulos">Envía sus Títulos</label>
                        </div>
                    </div>

                </div>
                <div class="d-flex mt-16 align-items-end">
                    <div class="single-field flex-20">
                        <div class="horizontal-form-field">
                            <p>2-</p>
                            <input name="Funds_Source2" value="<?PHP echo $Funds_Source2 ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input type="checkbox" value="1" id="Recibe-su-Efectivo2" name="Funds_Source2_Type_Receive_Cash" <?PHP if ($Funds_Source2_Type_Receive_Cash==1) echo "checked" ; ?> >
                            <label for="Recibe-su-Efectivo2">Recibe su Efectivo</label>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input name="Funds_Source2_Type_Send_Cash" type="checkbox" value="1" id="Envía-su-Efectivo2"
                                <?PHP if ($Funds_Source2_Type_Send_Cash==1) echo "checked  "  ; ?> >
                            <label for="Envía-su-Efectivo2">Envía su Efectivo</label>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input name="Funds_Source2_Type_Receive_Titles" <?PHP if($Funds_Source2_Type_Receive_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Recibe-sus-Títulos2">
                            <label for="Recibe-sus-Títulos2">Recibe sus Títulos</label>
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkbox-block">
                            <input name="Funds_Source2_Type_Submit_Titles" <?PHP if($Funds_Source2_Type_Submit_Titles==1) echo "checked"  ; ?> type="checkbox" value="1" id="Envía-sus-Títulos2">
                            <label for="Envía-sus-Títulos2">Envía sus Títulos</label>
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
                            <input name="RS_Employer_name" value="<?PHP echo $RS_Employer_name ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-40">
                        <div class="horizontal-form-field">
                            <p>Ingreso Anual: (USD):</p>
                            <input name="RS_Annual_Income_USD" value="<?PHP echo $RS_Annual_Income_USD ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16 align-items-center">
                    <div class="single-field flex-30">
                        <div class="horizontal-form-field">
                            <p>Salario Anual: (USD):</p>
                            <input name="RS_Annual_Salary_USD" value="<?PHP echo $RS_Annual_Salary_USD ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-30">
                        <div class="horizontal-form-field">
                            <p>Años en la Empresa:</p>
                            <input name="RS_Years_in_Company" value="<?PHP echo $RS_Years_in_Company ; ?>" type="text" class="form-control">
                            <p>Actividad:</p>
                        </div>
                    </div>
                    <div class="single-field flex-40">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="RS_Activity_Professional_fees" <?PHP if ($RS_Activity_Professional_fees==1) echo "checked"  ; ?> type="checkbox" value="1" id="Honorarios-Profesionales">
                                <label for="Honorarios-Profesionales">Honorarios Profesionales</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="RS_Activity_Own_business"  <?PHP if ($RS_Activity_Own_business==1) echo "checked"  ; ?> type="checkbox" value="1" id="Negocio-Propio">
                                <label for="Negocio-Propio">Negocio Propio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16 align-items-center">
                    <div class="single-field flex-40">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="RS_Activity_Saving" <?PHP if ($RS_Activity_Saving==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ahorro">
                                <label for="Ahorro">Ahorro</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="RS_Activity_Pension" <?PHP if ($RS_Activity_Pension==1) echo "checked"  ; ?> type="checkbox" value="1" id="Pensión">
                                <label for="Pensión">Pensión</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="RS_Activity_Pension1" <?PHP if ($RS_Activity_Pension1==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                <label for="Salario">Salario</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-field flex-40">
                        <div class="horizontal-form-field">
                            <p>Dividendos de Inversión:</p>
                            <input name="RS_Investment_Dividends"  value="<?PHP echo $RS_Investment_Dividends ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="horizontal-form-field">
                            <p>Otros:</p>
                            <input name="RS_Others" value="<?PHP echo $RS_Others ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field flex-100">
                        <p><b>Referencia Bancaria</b></p>
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
                <div class="d-flex mt-16">
                    <div class="single-field flex-40">
                        <div class="horizontal-form-field">
                            <p>1-</p>
                            <input name="Bank1_Ref_Name"  value="<?PHP echo $Bank1_Ref_Name ; ?>" type="text" class="form-control">
                        </div>
                        <div class="horizontal-form-field">
                            <p>2-</p>
                            <input  name="Bank2_Ref_Name" value="<?PHP echo $Bank2_Ref_Name ; ?>" type="text" class="form-control">
                        </div>
                        <div class="horizontal-form-field">
                            <p>3-</p>
                            <input name="Bank3_Ref_Name" value="<?PHP echo $Bank3_Ref_Name ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="vertical-form-field">
                            <input name="Bank1_Ref_Country" value="<?PHP echo $Bank1_Ref_Country ; ?>" type="text" class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Bank2_Ref_Country" value="<?PHP echo $Bank2_Ref_Country ; ?>" type="text" class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Bank3_Ref_Country" value="<?PHP echo $Bank3_Ref_Country ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="vertical-form-field">
                            <input name="Bank1_Ref_Contact" value="<?PHP echo $Bank1_Ref_Contact ; ?>" type="text" class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Bank2_Ref_Contact" value="<?PHP echo $Bank2_Ref_Contact ; ?>" type="text" class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Bank3_Ref_Contact" value="<?PHP echo $Bank3_Ref_Contact ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="vertical-form-field">
                            <input name="Bank1_Ref_Phone" value="<?PHP echo $Bank1_Ref_Phone ; ?>" type="text" class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Bank2_Ref_Phone" value="<?PHP echo $Bank2_Ref_Phone ; ?>" type="text" class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Bank3_Ref_Phone" value="<?PHP echo $Bank3_Ref_Phone ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pdf-type-subtext">
                <p><b>Depósito Inicial</b></p>
            </div>
            <div class="fields-block-wrapper">
                <div class="d-flex">
                    <div class="single-field flex-40">
                        <p>Usted estará depositando o transfiriendo: </p>
                        <div class="checkboxes-group flex-40">
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_Cash"  <?PHP if ($Initial_Deposit_Cash==1) echo "checked"  ; ?> type="checkbox" value="1" id="Efectivo">
                                <label for="Efectivo">Efectivo</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_Non_Securities"  <?PHP if ($Initial_Deposit_Non_Securities==1) echo "checked"  ; ?> type="checkbox" value="1" id="Títulos-Valores">
                                <label for="Títulos-Valores">No Títulos Valores</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_Both" <?PHP if ($Initial_Deposit_Both==1) echo "checked"  ; ?> type="checkbox" value="1" id="Ambos">
                                <label for="Ambos">Ambos</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-field flex-30">
                        <p>Indique el Monto (USD):</p>
                        <div class="horizontal-form-field">
                            <p>Efectivo</p>
                            <input name="Initial_Deposit_USD_Amount" value="<?PHP echo $Initial_Deposit_USD_Amount ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-30">
                        <p>&nbsp;</p>
                        <div class="horizontal-form-field">
                            <p>Títulos Valores:</p>
                            <input name="Initial_Deposit_Securities_Amount" value="<?PHP echo $Initial_Deposit_Securities_Amount ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field flex-70">
                        <p>Institución de donde Provienen los Fondos:</p>
                    </div>
                    <div class="single-field flex-30">
                        <p>Tiempo de Relación con la Institución:</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="single-field flex-50">
                        <div class="horizontal-form-field">
                            <p>1-</p>
                            <input name="Initial_Deposit_From1"  type="text" value="<?PHP echo $Initial_Deposit_From1 ; ?>"  class="form-control">
                        </div>
                        <div class="horizontal-form-field">
                            <p>2-</p>
                            <input name="Initial_Deposit_From2" type="text"  value="<?PHP echo $Initial_Deposit_From2 ; ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_From1_Cash"  type="checkbox" value="1" <?PHP if ($Initial_Deposit_From1_Cash==1) echo "checked"  ; ?>   id="Efectivo">
                                <label for="Efectivo">Efectivo</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_From1_Securities" type="checkbox" value="1"  <?PHP if ($Initial_Deposit_From1_Securities==1) echo "checked"  ; ?>    id="Títulos">
                                <label for="Títulos">Títulos</label>
                            </div>
                        </div>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_From2_Cash"  type="checkbox" value="1"  <?PHP if ($Initial_Deposit_From2_Cash==1) echo "checked" ; ?>   id="Efectivo3">
                                <label for="Efectivo3">Efectivo</label>
                            </div>
                            <div class="checkbox-block">
                                <input name="Initial_Deposit_From2_Securities"   type="checkbox" value="1"  <?PHP if ($Initial_Deposit_From2_Securities==1) echo "checked"  ; ?>   id="Títulos3">
                                <label for="Títulos3">Títulos</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-field flex-30">
                        <div class="vertical-form-field">
                            <input name="Initial_Deposit_From1_Rel"   type="text" value="<?PHP echo $Initial_Deposit_From1_Rel; ?>"  class="form-control">
                        </div>
                        <div class="vertical-form-field">
                            <input name="Initial_Deposit_From2_Rel" type="text"  value="<?PHP echo $Initial_Deposit_From2_Rel; ?>"  class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pdf-type-subtext">
                <p><b>Persona Políticamente Expuesta</b></p>
            </div>
            <div class="gray-paragraph">
                <p>El cliente debe indicar expresamente si es Persona Políticamente Expuesta (PEP). Persona Políticamente Expuesta incluye, entre otros, una persona
                    que desempeña o ha desempeñado funciones públicas prominentes dentro o fuera del país, tales como jefes de Estado o de Gobierno, políticos de alto
                    nivel, funcionarios gubernamentales, judiciales u oficiales militares de alto nivel, ejecutivos de alto nivel de corporaciones que pertenecen al Estado,
                    funcionarios importantes de partidos políticos. (En base a la definición establecida en Articulo 4 Ley 23/2015).</p>
            </div>
            <div class="tabled-checkboxes">
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
                                <p>¿Es Ud. Una Persona Políticamente Expuesta (PEP)?</p>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="PEP" <?PHP if ($PEP==1) echo "checked"  ; ?> type="radio" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="PEP" <?PHP if ($PEP==0) echo "checked"  ; ?> type="radio" value="0" id="Salario">
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
                                    <input name="PEP_Close" <?PHP if ($PEP_Close==1) echo "checked"  ; ?> type="radio" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="PEP_Close" <?PHP if ($PEP_Close==0) echo "checked" ; ?> type="radio" value="0" id="Salario" >
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="tc-row single-field flex-80">
                                <p>¿Declara que en los últimos 5 años (según la definición) se considera como PEP?
                                </p>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="PEP_Five" <?PHP if ($PEP_Five==1) echo "checked"  ; ?> type="radio" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="PEP_Five" <?PHP if ($PEP_Five==0) echo "checked"  ; ?> type="radio" value="0" id="Salario">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pdf-type-subtext">
                <p><b>Comunicación Seleccionar uno  o varios campos</b></p>
            </div>
            <div class="tabled-checkboxes">
                <div class="fields-block-wrapper px-0">
                    <div class="d-flex">
                        <div class="single-field flex-50">
                        </div>
                        <div class="single-field flex-10">
                            <p>Titular</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Cotitular</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Firmante (s)</p>
                        </div>
                        <div class="single-field flex-10">
                            <p> Apoderado</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Beneficiario  <br>Accionista</p>
                        </div>
                    </div>
                    <div class="tabled-checkboxes-rows">
                        <div class="d-flex">
                            <div class="tc-row single-field flex-50">
                                <p>Personas autorizadas para instruir órdenes</p>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Autorise_Owner" <?PHP if ($Orders_Autorise_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Autorise_Co_Owner" <?PHP if ($Orders_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Autorise_Signatory" <?PHP if ($Orders_Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Autorise_Attorney" <?PHP if ($Orders_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Autorise_Beneficiary_Shareholder" <?PHP if ($Orders_Autorise_Beneficiary_Shareholder==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="tc-row single-field flex-50">
                                <p>Autorizado a dar instrucción de envío y recepción de tìtulos y efectivo
                                </p>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Send_receive_cash_Autorise_Owner" <?PHP if ($Send_receive_cash_Autorise_Owner==1) echo "checked"   ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Send_receive_cash_Autorise_Co_Owner" <?PHP if ($Send_receive_cash_Autorise_Co_Owner==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Send_receive_cash__Autorise_Signatory" <?PHP if ($Send_receive_cash__Autorise_Signatory==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Send_receive_cash_Autorise_Attorney" <?PHP if ($Send_receive_cash_Autorise_Attorney==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Send_receive_cash__Beneficiary_Shareholder" <?PHP if ($Send_receive_cash__Beneficiary_Shareholder==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabled-checkboxes">
                <div class="fields-block-wrapper px-0">
                    <div class="d-flex">
                        <div class="single-field flex-40">
                        </div>
                        <div class="single-field flex-10">
                            <p>Correo</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Documentos <br>Escritos</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Vía <br>Telefónica</p>
                        </div>
                        <div class="single-field flex-10">
                            <p> Plataformas <br>de Texto</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Directamente por el Cliente en el Sistema</p>
                        </div>
                        <div class="single-field flex-10">
                            <p>Todas las Anteriores </p>
                        </div>
                    </div>
                    <div class="tabled-checkboxes-rows">
                        <div class="d-flex">
                            <div class="tc-row single-field flex-40">
                                <p>Las órdenes podrán ser colocadas por</p>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Mail"  type="checkbox" value="1"  <?PHP if ($Orders_Mail==1) echo "checked"  ; ?> id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Documents" <?PHP if ($Orders_Documents==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Telephone" <?PHP if ($Orders_Telephone==1) echo "checked"  ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_text" <?PHP if ($Orders_text==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_Directly" <?PHP if ($Orders_Directly==1)  echo "checked"; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <div class="checkbox-block">
                                    <input name="Orders_All_Above" <?PHP if ((($Orders_Mail==1) and ($Orders_Documents==1)) and
                                        ((($Orders_Telephone==1) and ($Orders_text==1))  and ($Orders_Directly==1)))  echo "checked"; ?> type="checkbox" value="1" id="Salario">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="tc-row single-field flex-30">
                                <p>Confirmar las instrucciones emitidas (compra y venta de títulos y valores)
                                </p>
                            </div>
                            <div class="tc-row single-field flex-20">
                                <div class="checkbox-block">
                                    <input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==1) echo "checked" ; ?> type="radio" value="1" id="no-discrecional">
                                    <label for="no-discrecional">Si</label>
                                </div>
                                <div class="checkbox-block">
                                    <input name="Autorise_Give_instuctions" <?PHP if ($Autorise_Give_instuctions==0) echo "checked" ; ?> type="radio" value="0" id="si">
                                    <label for="si">No</label>
                                </div>
                            </div>
                            <div class="tc-row single-field flex-50">
                                <p>De ser afirmativa completar:</p>
                                <div class="checkboxes-group m-0">
                                    <div class="checkbox-block">
                                        <input name="Complete1" <?PHP if ($Complete1==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro">
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Complete2" <?PHP if ($Complete2==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión">
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Complete3" <?PHP if ($Complete3==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario">
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Complete4" <?PHP if ($Complete4==1) echo "checked" ; ?> type="checkbox" value="1" id="Salario1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabled-checkboxes-rows">
                        <div class="d-flex">
                            <div class="tc-row single-field flex-80">
                                <p>Es voluntad del cliente que los Estados de Cuenta de su cuenta de inversión reposen en las oficinas
                                    de Firmus Financial Inc. a su disposicion y solicitud </p>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <label for="Si">Si</label>
                                <div class="checkbox-block">
                                    <input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="Si">
                                </div>
                            </div>
                            <div class="tc-row single-field flex-10">
                                <label for="No">No</label>
                                <div class="checkbox-block">
                                    <input name="Autorise_Firmus" <?PHP if ($Autorise_Firmus==1) echo "checked" ; ?> type="checkbox" value="1" id="No">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="tc-row single-field flex-60">
                                <p>Si su respuesta es No indique como desea recibir los Estados de Cuenta:</p>
                            </div>
                            <div class="tc-row single-field flex-40">
                                <div class="checkboxes-group">
                                    <div class="checkbox-block">
                                        <input name="Receive_AS_Mail" <?PHP if ($Receive_AS_Mail==1) echo "checked" ; ?> type="checkbox" value="1" id="Ahorro">
                                        <label for="Ahorro">Correo</label>
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Receive_AS_Postal" <?PHP if ($Receive_AS_Postal==1) echo "checked" ; ?> type="checkbox" value="1" id="Pensión">
                                        <label for="Pensión">Apartado Postal</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="tc-row single-field flex-50">
                                <p>Desea recibirlos con periodicidad</p>
                            </div>
                            <div class="tc-row single-field flex-50">
                                <div class="checkboxes-group">
                                    <div class="checkbox-block">
                                        <input name="Receive_Mensual" <?PHP if ($Receive_Mensual==1) echo "checked" ; ?> type="checkbox" value="1" id="Mensual">
                                        <label for="Mensual">Mensual</label>
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Receive_Trimestral" <?PHP if ($Receive_Trimestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Trimestral">
                                        <label for="Trimestral">Trimestral</label>
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Receive_Semestral" <?PHP if ($Receive_Semestral==1) echo "checked" ; ?> type="checkbox" value="1" id="Semestral">
                                        <label for="Semestral">Semestral</label>
                                    </div>
                                    <div class="checkbox-block">
                                        <input name="Receive_Anual" <?PHP if ($Receive_Anual==1) echo "checked" ; ?> type="checkbox" value="1" id="Anual">
                                        <label for="Anual">Anual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fields-block-wrapper m-0">
                <div class="d-flex">
                    <div class="single-field flex-100">
                        <div class="horizontal-form-field">
                            <p>Firmus Financial Inc. tomará como correo autorizado el declarado en Datos Generales, de ser diferente suministrar el mismo:</p>
                            <input name="General_Data" value="<?PHP echo $General_Data ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
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
                <div class="tabled-checkboxes-rows">
                    <div class="d-flex">
                        <div class="tc-row single-field flex-20">
                            <p>Tipo de Firma:</p>
                        </div>
                        <div class="tc-row single-field flex-80">
                            <div class="checkboxes-group m-0">
                                <div class="checkbox-block">
                                    <input name="Signature1_Permanent" <?PHP if ($Signature1_Permanent==1) echo "checked" ; ?> type="checkbox" value="1" id="fijo">
                                    <label for="fijo">Conjunta</label>
                                </div>
                                <div class="checkbox-block">
                                    <input name="Signature1_Not_variable"  <?PHP if ($Signature1_Not_variable==1) echo "checked" ; ?> type="checkbox" value="1" id="Variable">
                                    <label for="Variable">Indistinta</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fields-block-wrapper">
                <div class="d-flex">
                    <div class="single-field flex-50">
                        <div class="vertical-form-field">
                            <p>Nombre completo (en imprenta):</p>
                            <input name="Full_name1" value="<?PHP echo $Full_name1 ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-50">
                        <div class="vertical-form-field">
                            <p>Nombre completo (en imprenta):</p>
                            <input name="Full_name2" value="<?PHP echo $Full_name2 ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field flex-50">
                        <div class="horizontal-form-field">
                            <p>No. de Documento (ID):</p>
                            <input name="Document1_ID"  value="<?PHP echo $Document1_ID ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-50">
                        <div class="horizontal-form-field">
                            <p>No. de Documento (ID):</p>
                            <input name="Document2_ID" value="<?PHP echo $Document2_ID ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field flex-25">
                    </div>
                    <div class="single-field flex-25">
                        <div class="vertical-form-field">
                            <p>Fecha:</p>
                            <input name="Signature1_Date" value="<?PHP echo $Signature1_Date ; ?>" type="text" id="datepicker2" class="form-control">
                            <small>DD/MM/AAAA</small>
                        </div>
                    </div>
                    <div class="single-field flex-25">
                    </div>
                    <div class="single-field flex-25">
                        <div class="vertical-form-field">
                            <p>Fecha:</p>
                            <input name="Signature2_Date" value="<?PHP echo $Signature2_Date ; ?>" type="text" id="datepicker3" class="form-control">
                            <small>DD/MM/AAAA</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field signature flex-50">
                        <div class="signature-block"></div>
                        <p>Firma</p>
                    </div>
                    <div class="single-field signature flex-50">
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
                            <input name="Runners_Name" value="<?PHP echo $Runners_Name ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-33">
                        <div class="vertical-form-field">
                            <p>Nombre del Oficial de Cumplimiento:</p>
                            <input name="Compliance_Officer_Name" value="<?PHP echo $Compliance_Officer_Name ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="single-field flex-33">
                        <div class="vertical-form-field">
                            <p>Nombre del Ejecutivo Principal:</p>
                            <input name="Chief_Executive_Name" value="<?PHP echo $Chief_Executive_Name ; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-16">
                    <div class="single-field flex-33">
                        <div class="vertical-form-field">
                            <p>Fecha:</p>
                            <input name="Runners_Date"  value="<?PHP echo $Runners_Date ; ?>" type="text" id="datepicker4" class="form-control">
                            <small>DD/MM/AAAA</small>
                        </div>
                    </div>
                    <div class="single-field flex-33">
                        <div class="vertical-form-field">
                            <p>Fecha:</p>
                            <input name="Compliance__Officer_Date" value="<?PHP echo $Compliance__Officer_Date ; ?>" id="datepicker5" type="text" class="form-control">
                            <small>DD/MM/AAAA</small>
                        </div>
                    </div>
                    <div class="single-field flex-33">
                        <div class="vertical-form-field">
                            <p>Fecha:</p>
                            <input name="Chief_Executive_Date" value="<?PHP echo $Chief_Executive_Date ; ?>" type="text" id="datepicker6" class="form-control">
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
            <!--            <center><input class="active5" name="btn_submit" value=" Save Data " type="submit"></center>-->
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
?>
<?php
