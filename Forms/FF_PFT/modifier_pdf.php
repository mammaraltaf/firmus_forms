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
$db->query("select * from FOR_FF_PFT_ES where id=$id");
while( $data = $db->fetch_array() )
{
$Invest_Exp_Conserv=$data['Invest_Exp_Conserv'];
$Invest_Exp_Moderat=$data['Invest_Exp_Moderat'];
$Invest_Exp_Aggress=$data['Invest_Exp_Aggress'];
$Mutual_Funds_L=$data['Mutual_Funds_L'];
$Mutual_Funds_M=$data['Mutual_Funds_M'];
$Mutual_Funds_H=$data['Mutual_Funds_H'];
$Mutual_Funds_Exp=$data['Mutual_Funds_Exp'];
$Mutual_Funds_Markets=$data['Mutual_Funds_Markets'];
$Fixed_Rent_L=$data['Fixed_Rent_L'];
$Fixed_Rent_M=$data['Fixed_Rent_M'];
$Fixed_Rent_H=$data['Fixed_Rent_H'];
$Fixed_Rent_Exp=$data['Fixed_Rent_Exp'];
$Fixed_Rent_Markets=$data['Fixed_Rent_Markets'];
$Struct_Prod_L=$data['Struct_Prod_L'];
$Struct_Prod_M=$data['Struct_Prod_M'];
$Struct_Prod_H=$data['Struct_Prod_H'];
$Struct_Prod_Exp=$data['Struct_Prod_Exp'];
$Struct_Prod_Markets=$data['Struct_Prod_Markets'];
$Actions_L=$data['Actions_L'];
$Actions_M=$data['Actions_M'];
$Actions_H=$data['Actions_H'];
$Actions_Exp=$data['Actions_Exp'];
$Actions_Markets=$data['Actions_Markets'];
$Derivatives_L=$data['Derivatives_L'];
$Derivatives_M=$data['Derivatives_M'];
$Derivatives_H=$data['Derivatives_H'];
$Derivatives_Exp=$data['Derivatives_Exp'];
$Derivatives_Markets=$data['Derivatives_Markets'];
$Others_L=$data['Others_L'];
$Others_M=$data['Others_M'];
$Others_H=$data['Others_H'];
$Others_Exp=$data['Others_Exp'];
$Others_Markets=$data['Others_Markets'];
$P_S_Ops_Inf_1M=$data['P_S_Ops_Inf_1M'];
$P_S_Ops_1M_10M=$data['P_S_Ops_1M_10M'];
$P_S_Ops_Sup_10M=$data['P_S_Ops_Sup_10M'];
$S_Titles_Inf_1M=$data['S_Titles_Inf_1M'];
$S_Titles_1M_10M=$data['S_Titles_1M_10M'];
$S_Titles_Sup_10M=$data['S_Titles_Sup_10M'];
$W_Titles_Inf_1M=$data['W_Titles_Inf_1M'];
$W_Titles_1M_10M=$data['W_Titles_1M_10M'];
$W_Titles_Sup_10M=$data['W_Titles_Sup_10M'];
$C_Contribution_Inf_1M=$data['C_Contribution_Inf_1M'];
$C_Contribution_1M_10M=$data['C_Contribution_1M_10M'];
$C_Contribution_Sup_10M=$data['C_Contribution_Sup_10M'];
$C_withdrawal_Inf_1M=$data['C_withdrawal_Inf_1M'];
$C_withdrawal_1M_10M=$data['C_withdrawal_1M_10M'];
$C_withdrawal_Sup_10M=$data['C_withdrawal_Sup_10M'];
$P_S_Ops_Inf_12=$data['P_S_Ops_Inf_12'];
$P_S_Ops_12_24=$data['P_S_Ops_12_24'];
$P_S_Ops_Sup_24=$data['P_S_Ops_Sup_24'];
$S_Titles_Inf_12=$data['S_Titles_Inf_12'];
$S_Titles_12_24=$data['S_Titles_12_24'];
$S_Titles_Sup_24=$data['S_Titles_Sup_24'];
$W_Titles_Inf_12=$data['W_Titles_Inf_12'];
$W_Titles_12_24=$data['W_Titles_12_24'];
$W_Titles_Sup_24=$data['W_Titles_Sup_24'];
$C_Contribution_Inf_12=$data['C_Contribution_Inf_12'];
$C_Contribution_12_24=$data['C_Contribution_12_24'];
$C_Contribution_Sup_24=$data['C_Contribution_Sup_24'];
$C_withdrawal_Inf_12=$data['C_withdrawal_Inf_12'];
$C_withdrawal_12_24=$data['C_withdrawal_12_24'];
$C_withdrawal_Sup_24=$data['C_withdrawal_Sup_24'];
$Funds_Provided_ET=$data['Funds_Provided_ET'];
$Funds_Provided_Check=$data['Funds_Provided_Check'];
$Funds_Provided_Cash=$data['Funds_Provided_Cash'];
$Funds_Provided_Q_Cash=$data['Funds_Provided_Q_Cash'];
$Funds_Provided_Other=$data['Funds_Provided_Other'];
$Funds_Provided_Other_Detail=$data['Funds_Provided_Other_Detail'];
$E_A_Code=$data['E_A_Code'];
$Invest_obj_Preservation=$data['Invest_obj_Preservation'];
$Invest_obj_Cost_effec=$data['Invest_obj_Cost_effec'];
$Invest_obj_Capital_App=$data['Invest_obj_Capital_App'];
$invest_obj_p_exp_1=$data['invest_obj_p_exp_1'];
$invest_obj_p_exp_2=$data['invest_obj_p_exp_2'];
$invest_obj_p_exp_3=$data['invest_obj_p_exp_3'];
$invest_obj_p_exp_4=$data['invest_obj_p_exp_4'];
$Purp_Retirement_Fund=$data['Purp_Retirement_Fund'];
$Purp_Capital_Conserv=$data['Purp_Capital_Conserv'];
$Purp_Establish_Funds=$data['Purp_Establish_Funds'];
$Purp_Capitalize_Nbusiness=$data['Purp_Capitalize_Nbusiness'];
$Purp_Other=$data['Purp_Other'];
$Purp_Other_Detail=$data['Purp_Other_Detail'];
$Risk_Tol_1_2_Y=$data['Risk_Tol_1_2_Y'];
$Risk_Tol_3_5_Y=$data['Risk_Tol_3_5_Y'];
$Risk_Tol_Up_6_Y=$data['Risk_Tol_Up_6_Y'];
$Avg_ann_return_2_4=$data['Avg_ann_return_2_4'];
$Avg_ann_return_4_6=$data['Avg_ann_return_4_6'];
$Avg_ann_return_Up_7=$data['Avg_ann_return_Up_7'];
$percent_inv_0_25=$data['percent_inv_0_25'];
$percent_inv_26_50=$data['percent_inv_26_50'];
$percent_inv_Up_51=$data['percent_inv_Up_51'];
$inv_important_yes=$data['inv_important_yes'];
$inv_important_No=$data['inv_important_No'];
$inv_important_Very=$data['inv_important_Very'];
$A_Cash_Banks_Y1=$data['A_Cash_Banks_Y1'];
$A_Cash_Banks_Y2=$data['A_Cash_Banks_Y2'];
$P_Accounts_Payable_Y1=$data['P_Accounts_Payable_Y1'];
$P_Accounts_Payable_Y2=$data['P_Accounts_Payable_Y2'];
$A_Accounts_Receivable_Y1=$data['A_Accounts_Receivable_Y1'];
$A_Accounts_Receivable_Y2=$data['A_Accounts_Receivable_Y2'];
$P_Loans_Pay_Y1=$data['P_Loans_Pay_Y1'];
$P_Loans_Pay_Y2=$data['P_Loans_Pay_Y2'];
$A_Shares_Listed_Cs_Y1=$data['A_Shares_Listed_Cs_Y1'];
$A_Shares_Listed_Cs_Y2=$data['A_Shares_Listed_Cs_Y2'];
$P_Real_Estate_Mortgages_Y1=$data['P_Real_Estate_Mortgages_Y1'];
$P_Real_Estate_Mortgages_Y2=$data['P_Real_Estate_Mortgages_Y2'];
$A_Other_Fixed_Income_Y1=$data['A_Other_Fixed_Income_Y1'];
$A_Other_Fixed_Income_Y2=$data['A_Other_Fixed_Income_Y2'];
$P_Other_Liabilities_Y1=$data['P_Other_Liabilities_Y1'];
$P_Other_Liabilities_Y2=$data['P_Other_Liabilities_Y2'];
$A_Other_Assets_Y1=$data['A_Other_Assets_Y1'];
$A_Other_Assets_Y2=$data['A_Other_Assets_Y2'];
$P_Tax_Interest_Due_Y1=$data['P_Tax_Interest_Due_Y1'];
$P_Tax_Interest_Due_Y2=$data['P_Tax_Interest_Due_Y2'];
$A_Real_estate_Y1=$data['A_Real_estate_Y1'];
$A_Real_estate_Y2=$data['A_Real_estate_Y2'];
$P_Real_estate_Y1=$data['P_Real_estate_Y1'];
$P_Real_estate_Y2=$data['P_Real_estate_Y2'];
$A_Main_Home_Value_Y1=$data['A_Main_Home_Value_Y1'];
$A_Main_Home_Value_Y2=$data['A_Main_Home_Value_Y2'];
$P_Main_Home_Value_Y1=$data['P_Main_Home_Value_Y1'];
$P_Main_Home_Value_Y2=$data['P_Main_Home_Value_Y2'];
$A_Personal_Property_Y1=$data['A_Personal_Property_Y1'];
$A_Personal_Property_Y2=$data['A_Personal_Property_Y2'];
$P_Personal_Property_Y1=$data['P_Personal_Property_Y1'];
$P_Personal_Property_Y2=$data['P_Personal_Property_Y2'];
$A_Other_Assets2_Y1=$data['A_Other_Assets2_Y1'];
$A_Other_Assets2_Y2=$data['A_Other_Assets2_Y2'];
$P_Other_Assets2_Y1=$data['P_Other_Assets2_Y1'];
$P_Other_Assets2_Y2=$data['P_Other_Assets2_Y2'];
$A_Total_Assets_Y1=$data['A_Total_Assets_Y1'];
$A_Total_Assets_Y2=$data['A_Total_Assets_Y2'];
$P_Total_Passives_Y1=$data['P_Total_Passives_Y1'];
$P_Total_Passives_Y2=$data['P_Total_Passives_Y2'];
$R_Net_Worth_USD_Y1=$data['R_Net_Worth_USD_Y1'];
$R_Net_Worth_USD_Y2=$data['R_Net_Worth_USD_Y2'];
$R_Income_Y1=$data['R_Income_Y1'];
$R_Income_Y2=$data['R_Income_Y2'];
$R_Total_Expenses_Y1=$data['R_Total_Expenses_Y1'];
$R_Total_Expenses_Y2=$data['R_Total_Expenses_Y2'];
$R_Profit_Loss_Y1=$data['R_Profit_Loss_Y1'];
$R_Profit_Loss_Y2=$data['R_Profit_Loss_Y2'];
$R_Change_Assets_Y1=$data['R_Change_Assets_Y1'];
$R_Change_Assets_Y2=$data['R_Change_Assets_Y2'];
$Signature1_Permanent=$data['Signature1_Permanent'];
$Signature1_Not_variable=$data['Signature1_Not_variable'];
$Full_name1=$data['Full_name1'];
$Full_name2=$data['Full_name2'];
$Document_ID1=$data['Document_ID1'];
$Document_ID2=$data['Document_ID2'];
$Signature_Date1=$data['Signature_Date1'];
$Signature_Date2=$data['Signature_Date2'];
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
$Signature_Date1=datetofrench($Signature_Date1);
$Signature_Date2=datetofrench($Signature_Date2);
$Runners_Date=datetofrench($Runners_Date);
$Compliance_Officer_Date=datetofrench($Compliance_Officer_Date);
$Chief_Executive_Date=datetofrench($Chief_Executive_Date);





//---------------------





?>  
  
  <body>
<input class="active5 no-print" name="btn_pdf" value="Download as PDF File" type="button" onclick="window.print();">
  <form name="form1" method="POST" action="modif.php">
	<?PHP echo "<input type=hidden name=id value=$id>"; ?>	 
    <section class="wrapper">
      <div class="top-logo">
        <div class="flex-container">
          <img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid" style="margin-left: 400px;">
          <label for="account_number" style="margin-left: 120px;">Número de cuenta:</label>
          <input type="text" name="account_number" value= "<?php echo $account_number; ?>" placeholder="Número de cuenta" />
        </div>
      </div>
      <div class="pdf-type-text">
        <h6>Perfil Financiero y Transaccional</h6>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Experiencia Inversora</b><i> Seleccione UNA sola alternativa, de no aplicar colocar N/A</i></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-33">
            <div class="checkboxes-group flex-40">
              <div class="checkbox-block">
                <input name="Invest_Exp_Conserv"  type="checkbox" value="1" <?php if ($Invest_Exp_Conserv==1) echo 'checked'; ?> id="Si">
                <p>Conservador</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="checkboxes-group flex-40">
              <div class="checkbox-block">
                <input name="Invest_Exp_Moderat"  type="checkbox" value="1" <?php if ($Invest_Exp_Moderat==1) echo 'checked'; ?> id="Equilibrado">
                <p>Moderado - Equilibrado</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="checkboxes-group flex-40">
              <div class="checkbox-block">
                <input name="Invest_Exp_Aggress"  type="checkbox" value="1" <?php if ($Invest_Exp_Aggress==1) echo 'checked'; ?>  id="Agresivo">
                <p>Agresivo</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-33">
            <p>Estoy dispuesto a aceptar un bajo riesgo para  mi capital incial, incluyendo baja volatilidad, a buscar un bajo nivel de beneficio de cartera </p>
          </div>
          <div class="single-field flex-33">
            <p>Estoy dispuesto a aceptar algunos riesgos para mi capital inicial y tolerar cierta volatilidad, a buscar un modesto nivel de beneficios de la cartera  </p>
          </div>
          <div class="single-field flex-33">
            <p>Estoy dispuesto a aceptar el riesgo máximo para mi capital incial de manera agresiva para obtener el máximo rendimiento y entiendo que podría perder todo o la mayor parte del dinero invertido  </p>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-20">
            <b>Productos</b>
          </div>
          <div class="single-field flex-10">
            <b>Limitada</b>
          </div>
          <div class="single-field flex-10">
            <b>Media</b>
          </div>
          <div class="single-field flex-10">
            <b>Alta</b>
          </div>
          <div class="single-field flex-20">
            <b>Años de Experiencia:</b>
          </div>
          <div class="single-field flex-30">
            <b>Mercados</b>
          </div>
        </div>
        <div class="d-flex mt-16 align-items-center">
          <div class="single-field flex-20">
            <p>Fondos mutuos</p>
          </div>
          <div class="single-field flex-10">
            <input name="Mutual_Funds_L"  type="checkbox" value="1"  <?php if ($Mutual_Funds_L==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Mutual_Funds_M"  type="checkbox" value="1" <?php if ($Mutual_Funds_M==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Mutual_Funds_H"  type="checkbox" value="1" <?php if ($Mutual_Funds_H==1) echo 'checked'; ?> id="">
          </div>
          <div class="horizontal-form-field single-field flex-20">
            <input name="Mutual_Funds_Exp"  type="text" value="<?php echo $Mutual_Funds_Exp; ?>" class="form-control">
          </div>
          <div class="horizontal-form-field single-field flex-30">
            <input name="Mutual_Funds_Markets"  type="text" value="<?php echo $Mutual_Funds_Markets; ?>" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16 align-items-center">
          <div class="single-field flex-20">
            <p>Renta fija</p>
          </div>
          <div class="single-field flex-10">
            <input name="Fixed_Rent_L"  type="checkbox" value="1" <?php if ($Fixed_Rent_L==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Fixed_Rent_M"  type="checkbox" value="1" <?php if ($Fixed_Rent_M==1) echo 'checked'; ?>  id="">
          </div>
          <div class="single-field flex-10">
            <input name="Fixed_Rent_H"  type="checkbox" value="1" <?php if ($Fixed_Rent_H==1) echo 'checked'; ?> id="">
          </div>
          <div class="horizontal-form-field single-field flex-20">
            <input name="Fixed_Rent_Exp"  type="text" value="<?php echo $Fixed_Rent_Exp; ?>" class="form-control">
          </div>
          <div class="horizontal-form-field single-field flex-30">
            <input name="Fixed_Rent_Markets"  type="text" value="<?php echo $Fixed_Rent_Markets; ?>" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16 align-items-center">
          <div class="single-field flex-20">
            <p>Productos estructurados</p>
          </div>
          <div class="single-field flex-10">
            <input name="Struct_Prod_L"  type="checkbox" value="1"  <?php if ($Struct_Prod_L==1) echo 'checked'; ?>  id="">
          </div>
          <div class="single-field flex-10">
            <input name="Struct_Prod_M"  type="checkbox" value="1" <?php if ($Struct_Prod_M==1) echo 'checked'; ?>  id="">
          </div>
          <div class="single-field flex-10">
            <input name="Struct_Prod_H"  type="checkbox" value="1" <?php if ($Struct_Prod_H==1) echo 'checked'; ?>  id="">
          </div>
          <div class="horizontal-form-field single-field flex-20">
            <input name="Struct_Prod_Exp"  type="text" value="<?php echo $Struct_Prod_Exp; ?>" class="form-control">
          </div>
          <div class="horizontal-form-field single-field flex-30">
            <input name="Struct_Prod_Markets"  type="text" value="<?php echo $Struct_Prod_Markets; ?>" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16 align-items-center">
          <div class="single-field flex-20">
            <p>Acciones</p>
          </div>
          <div class="single-field flex-10">
            <input name="Actions_L"  type="checkbox" value="1" <?php if ($Actions_L==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Actions_M"  type="checkbox" value="1" <?php if ($Actions_M==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Actions_H"  type="checkbox" value="1" <?php if ($Actions_H==1) echo 'checked'; ?> id="">
          </div>
          <div class="horizontal-form-field single-field flex-20">
            <input name="Actions_Exp"  type="text" value="<?php echo $Actions_Exp; ?>" class="form-control">
          </div>
          <div class="horizontal-form-field single-field flex-30">
            <input name="Actions_Markets"  type="text" value="<?php echo $Actions_Markets; ?>" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16 align-items-center">
          <div class="single-field flex-20">
            <p>Derivadosones</p>
          </div>
          <div class="single-field flex-10">
            <input name="Derivatives_L"  type="checkbox" value="1"  <?php if ($Derivatives_L==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Derivatives_M"  type="checkbox" value="1" <?php if ($Derivatives_M==1) echo 'checked'; ?>  id="">
          </div>
          <div class="single-field flex-10">
            <input name="Derivatives_H"  type="checkbox" value="1" <?php if ($Derivatives_H==1) echo 'checked'; ?>  id="">
          </div>
          <div class="horizontal-form-field single-field flex-20">
            <input name="Derivatives_Exp"  type="text" value="<?php echo $Derivatives_Exp; ?>" class="form-control">
          </div>
          <div class="horizontal-form-field single-field flex-30">
            <input name="Derivatives_Markets"  type="text" value="<?php echo $Derivatives_Markets; ?>" class="form-control">
          </div>
        </div>
        <div class="d-flex mt-16 align-items-center">
          <div class="single-field flex-20">
            <p>Otro (detalle)</p>
          </div>
          <div class="single-field flex-10">
            <input name="Others_L"  type="checkbox" value="1" <?php if ($Others_L==1) echo 'checked'; ?> id="">
          </div>
          <div class="single-field flex-10">
            <input name="Others_M"  type="checkbox" value="1" <?php if ($Others_M==1) echo 'checked'; ?>  id="">
          </div>
          <div class="single-field flex-10">
            <input name="Others_H"  type="checkbox" value="1" <?php if ($Others_H==1) echo 'checked'; ?>  id="">
          </div>
          <div class="horizontal-form-field single-field flex-20">
            <input name="Others_Exp"  type="text" value="<?php echo $Others_Exp; ?>" class="form-control">
          </div>
          <div class="horizontal-form-field single-field flex-30">
            <input name="Others_Markets"  type="text" value="<?php echo $Others_Markets; ?>" class="form-control">
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Frecuencia de los movimientos / Necesidad de Liquidez</b></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-100">
            <b>Monto Promedio de Operaciones Anuales</b>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Operaciones de Compra y venta</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="P_S_Ops_1M_10M"  type="checkbox" value="1" <?php if ($P_S_Ops_1M_10M==1) echo 'checked'; ?>  id="Ahorro">
                <p>≤$1,000,000.000</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="P_S_Ops_Sup_10M"  type="checkbox" value="1" <?php if ($P_S_Ops_Sup_10M==1) echo 'checked'; ?>  id="Pensión">
                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_Inf_1M"  type="checkbox" value="1" <?php if ($S_Titles_Inf_1M==1) echo 'checked'; ?> id="Salario">
                <p>>$10,000,000.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Envío de Títulos</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_Inf_1M"  type="checkbox" value="1" <?php if ($S_Titles_Inf_1M ==1) echo 'checked'; ?> id="Ahorro">
                <p>≤$1,000,000.000</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_1M_10M"  type="checkbox" value="1"  <?php if ($S_Titles_1M_10M==1) echo 'checked'; ?> id="Pensión">
                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_Sup_10M"  type="checkbox" value="1" <?php if ($S_Titles_Sup_10M==1) echo 'checked'; ?> id="Salario">
                <p>>$10,000,000.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Retiro de Títulos</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="W_Titles_Inf_1M"  type="checkbox" value="1"  <?php if ($W_Titles_Inf_1M==1) echo 'checked'; ?> id="Ahorro">
                <p>≤$1,000,000.000</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="W_Titles_1M_10M"  type="checkbox" value="1" <?php if ($W_Titles_1M_10M==1) echo 'checked'; ?>  id="Pensión">
                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="W_Titles_Sup_10M"  type="checkbox" value="1" <?php if ($W_Titles_Sup_10M==1) echo 'checked'; ?>   id="Salario">
                <p>>$10,000,000.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Aporte de Efectivo</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_Contribution_Inf_1M"  type="checkbox" value="1" <?php if ($C_Contribution_Inf_1M==1) echo 'checked'; ?>  id="Ahorro">
                <p>≤$1,000,000.000</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_Contribution_1M_10M"  type="checkbox" value="1" <?php if ($C_Contribution_1M_10M==1) echo 'checked'; ?> id="Pensión">
                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_Contribution_Sup_10M"  type="checkbox" value="1" <?php if ($C_Contribution_Sup_10M==1) echo 'checked'; ?>  id="Salario">
                <p>>$10,000,000.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Retiro de Efectivo</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_withdrawal_Inf_1M"  type="checkbox" value="1" <?php if ($C_withdrawal_Inf_1M==1) echo 'checked'; ?>  id="Ahorro">
                <p>≤$1,000,000.000</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_withdrawal_1M_10M"  type="checkbox" value="1" <?php if ($C_withdrawal_1M_10M==1) echo 'checked'; ?>  id="Pensión">
                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_withdrawal_Sup_10M"  type="checkbox" value="1" <?php if ($C_withdrawal_Sup_10M==1) echo 'checked'; ?>  id="Salario">
                <p>>$10,000,000.000</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-100">
            <b>Número Promedio de Operaciones Anuales</b>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Operaciones de Compra y venta</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="P_S_Ops_Inf_12"  type="checkbox" value="1" <?php if ($P_S_Ops_Inf_12==1) echo 'checked'; ?>  id="Ahorro">
                <p>≤12</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="P_S_Ops_12_24"  type="checkbox" value="1" <?php if ($P_S_Ops_12_24==1) echo 'checked'; ?> id="Pensión">
                <p>>>12 - ≤24</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="P_S_Ops_Sup_24"  type="checkbox" value="1" <?php if ($P_S_Ops_Sup_24==1) echo 'checked'; ?>  id="Salario">
                <p>>>24</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Envío de Títulos</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_Inf_12"  type="checkbox" value="1" <?php if ($S_Titles_Inf_12==1) echo 'checked'; ?>  id="Ahorro">
                <p>≤12</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_12_24"  type="checkbox" value="1" <?php if ($S_Titles_12_24==1) echo 'checked'; ?> id="Pensión">
                <p>>>12 - ≤24</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="S_Titles_Sup_24"  type="checkbox" value="1" <?php if ($S_Titles_Sup_24==1) echo 'checked'; ?>  id="Salario">
                <p>>>24</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Retiro de Títulos</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="W_Titles_Inf_12"  type="checkbox" value="1" <?php if ($W_Titles_Inf_12==1) echo 'checked'; ?>  id="Ahorro">
                <p>≤12</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="W_Titles_12_24"  type="checkbox" value="1" <?php if ($W_Titles_12_24==1) echo 'checked'; ?>  id="Pensión">
                <p>>>12 - ≤24</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="W_Titles_Sup_24"  type="checkbox" value="1" <?php if ($W_Titles_Sup_24==1) echo 'checked'; ?>  id="Salario">
                <p>>>24</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Aporte de Efectivo</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_Contribution_Inf_12"  type="checkbox" value="1" <?php if ($C_Contribution_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                <p>≤12</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_Contribution_12_24"  type="checkbox" value="1" <?php if ($C_Contribution_12_24==1) echo 'checked'; ?> id="Pensión">
                <p>>>12 - ≤24</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_Contribution_Sup_24"  type="checkbox" value="1" <?php if ($C_Contribution_Sup_24==1) echo 'checked'; ?> id="Salario">
                <p>>>24</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-field flex-30 mt-16">
            <p>Retiro de Efectivo</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_withdrawal_Inf_12"  type="checkbox" value="1" <?php if ($C_withdrawal_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                <p>≤12</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-30">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_withdrawal_12_24"  type="checkbox" value="1" <?php if ($C_withdrawal_12_24==1) echo 'checked'; ?> id="Pensión">
                <p>>>12 - ≤24</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="C_withdrawal_Sup_24"  type="checkbox" value="1" <?php if ($C_withdrawal_Sup_24==1) echo 'checked'; ?> id="Salario">
                <p>>>24</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="pdf-type-subtext">
        <p><b>Medio por el cual(cuales) suministrará los fondos</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-80">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Funds_Provided_ET"  type="checkbox" value="1" <?php if ($Funds_Provided_ET==1) echo 'checked'; ?> id="Ahorro">
                <p>Transferencia Electrónica</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Provided_Check"  type="checkbox" value="1" <?php if ($Funds_Provided_Check==1) echo 'checked'; ?> id="Ahorro">
                <p>Cheque</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Provided_Cash"  type="checkbox" value="1" <?php if ($Funds_Provided_Cash==1) echo 'checked'; ?> id="Ahorro">
                <p>Efectivo</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Provided_Q_Cash"  type="checkbox" value="1" <?php if ($Funds_Provided_Q_Cash==1) echo 'checked'; ?> id="Ahorro">
                <p>Cuasi Efectivo</p>
              </div>
              <div class="checkbox-block">
                <input name="Funds_Provided_Other"  type="checkbox" value="1" <?php if ($Funds_Provided_Other==1) echo 'checked'; ?>  id="Ahorro">
                <p>Otro (detalle)</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="horizontal-form-field single-field flex-20">
              <input name="Funds_Provided_Other_Detail"  type="text" value="<?php echo $Funds_Provided_Other_Detail; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-100">
            <div class="horizontal-form-field">
              <p>Colocar el código que represente su Acitividad Económica (Ver Anexo A):</p>
              <input name="E_A_Code"  type="text"  value="<?php echo $E_A_Code; ?>"  class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
       <p><b>Objetivos de la inversión</b></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-100">
            <div class="checkboxes-group m-0">
              <div class="checkbox-block">
                <input name="Invest_obj_Preservation"  type="checkbox" value="1" <?php if ($Invest_obj_Preservation==1) echo 'checked'; ?>  id="Ahorro">
                <p>Preservación</p>
              </div>
              <div class="checkbox-block">
                <input name="Invest_obj_Cost_effec"  type="checkbox" value="1" <?php if ($Invest_obj_Cost_effec==1) echo 'checked'; ?> id="Ahorro">
                <p>Rentabilidad</p>
              </div>
              <div class="checkbox-block">
                <input name="Invest_obj_Capital_App"  type="checkbox" value="1" <?php if ($Invest_obj_Capital_App==1) echo 'checked'; ?>  id="Ahorro">
                <p>Apreciación de Capital</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="single-field">
          <b>Cuál de estas frases describe de la mejor manera el objetivo de su inversión:   </b>
        </div>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>No estoy preparado para exponer mi capital</p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_1"  type="checkbox" value="1" <?php if ($invest_obj_p_exp_1==1) echo 'checked'; ?> >
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>No estoy preparado para exponer mi capital en inversiones con alta volatidad aunque alcance grandes retornos, busco obtener retornos estables
            </p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_2"  type="checkbox" value="1" <?php if ($invest_obj_p_exp_2==1) echo 'checked'; ?> >
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>Quisiera maximizar los retornos a largo plazo y preocuparme lo menos posible por los movimientos a corto plazo del mercado
            </p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_3"  type="checkbox" value="1" <?php if ($invest_obj_p_exp_3==1) echo 'checked'; ?> >
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>Quiero alcanzar retornos a largo plazo más altos, por lo tanto estoy preparado para experimentar niveles razonables de volatilidad</p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_4"  type="checkbox" value="1" <?php if ($invest_obj_p_exp_4==1) echo 'checked'; ?> >
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
       <p><b>Propósito</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-fields flex-25">
            <div class="checkbox-block">
              <input name="Purp_Retirement_Fund"  type="checkbox" value="1"  <?php if ($Purp_Retirement_Fund==1) echo 'checked'; ?> id="Discrecional">
              <p>Fondo de Retiro</p>
            </div>
          </div>
          <div class="single-fields flex-25">
            <div class="checkbox-block">
              <input name="Purp_Capital_Conserv"  type="checkbox" value="1" <?php if ($Purp_Capital_Conserv==1) echo 'checked'; ?>  id="Discrecional">
              <p>Conservación de Capital</p>
            </div>
          </div>
          <div class="single-fields flex-25">
            <div class="checkbox-block">
              <input name="Purp_Establish_Funds"  type="checkbox" value="1" <?php if ($Purp_Establish_Funds==1) echo 'checked'; ?> id="Discrecional">
              <p>Establecer Fondos para un Tercero</p>
            </div>
          </div>
          <div class="single-fields flex-25">
            <div class="checkbox-block">
              <input name="Purp_Capitalize_Nbusiness"  type="checkbox" value="1" <?php if ($Purp_Capitalize_Nbusiness==1) echo 'checked'; ?>  id="Discrecional">
              <p>Capitalizar un nuevo negocio</p>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="single-fields flex-15">
            <div class="checkbox-block">
              <input name="Purp_Other"  type="checkbox" value="1"  <?php if ($Purp_Other==1) echo 'checked'; ?> id="Discrecional">
              <p>Otro (detalle)</p>
            </div>
          </div>
          <div class="single-fields flex-85">
            <input name="Purp_Other_Detail"  type="text" value="<?php echo $Purp_Other_Detail; ?>"  class="form-control">
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
       <p><b>Tolerancia al riesgo y la capacidad financiera del cliente</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-50">
            <p>En cuánto tiempo necesitará Usted este dinero invertido, o por cuánto tiempo piensa Usted que puede mantener este portafolio de inversión? </p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Risk_Tol_1_2_Y"  type="checkbox" value="1" <?php if ($Risk_Tol_1_2_Y==1) echo 'checked'; ?> id="Ahorro">
                <p>1 a 2  Años</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Risk_Tol_3_5_Y"  type="checkbox" value="1" <?php if ($Risk_Tol_3_5_Y==1) echo 'checked'; ?> id="Pensión">
                <p>3 a 5 Años</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Risk_Tol_Up_6_Y"  type="checkbox" value="1" <?php if ($Risk_Tol_Up_6_Y==1) echo 'checked'; ?> id="Salario">
                <p>más de 6 Años</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-50">
            <p>Retorno anual promedio esperado del portafolio de inversión </p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Avg_ann_return_2_4"  type="checkbox" value="1" <?php if ($Avg_ann_return_2_4==1) echo 'checked'; ?> id="Ahorro">
                <p>2% a 4%</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Avg_ann_return_4_6"  type="checkbox" value="1" <?php if ($Avg_ann_return_4_6==1) echo 'checked'; ?>  id="Pensión">
                <p>4% a 6%</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="Avg_ann_return_Up_7"  type="checkbox" value="1" <?php if ($Avg_ann_return_Up_7==1) echo 'checked'; ?> id="Salario">
                <p>más de 7%</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-50">
            <p>De su patrimonio que porcentaje invertirá</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="percent_inv_0_25"  type="checkbox" value="1" <?php if ($percent_inv_0_25==1) echo 'checked'; ?>  id="Ahorro">
                <p>0 % a 25%</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="percent_inv_26_50"  type="checkbox" value="1" <?php if ($percent_inv_26_50==1) echo 'checked'; ?> id="Pensión">
                <p>26 % a 50%</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="percent_inv_Up_51"  type="checkbox" value="1" <?php if ($percent_inv_Up_51==1) echo 'checked'; ?> id="Salario">
                <p>más del  51%</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-50">
            <p>Qué tan importante es disponer de su capital invertido (en caso de emergencia)?</p>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="inv_important_yes"  type="checkbox" value="1" <?php if ($inv_important_yes==1) echo 'checked'; ?> id="Ahorro">
                <p>No importante</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="inv_important_No"  type="checkbox" value="1" <?php if ($inv_important_No==1) echo 'checked'; ?>  id="Pensión">
                <p>Importante</p>
              </div>
            </div>
          </div>
          <div class="single-field flex-20">
            <div class="checkboxes-group">
              <div class="checkbox-block">
                <input name="inv_important_Very"  type="checkbox" value="1" <?php if ($inv_important_Very==1) echo 'checked'; ?> id="Salario">
                <p>Muy importante</p>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
      <div class="pdf-type-subtext">
       <p><b>PATRIMONIO Declarado en USD </b><i>(últimos 2 años)</i></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field">
            <p><b>ACTIVOS</b> (deberá incluir Ingresos provenientes de fuentes tales como: pensión alimenticia, seguridad social, ingresos por inversiones, entre otros)</p>
          </div>
          <div class="single-field">
            <p><b>PASIVOS</b> (deberá incluir por ejemplo préstamos pendientes, saldos de tarjetas de crédito, impuestos, entre otros)</p>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex">
          <div class="single-field flex-30">
          </div>
          <div class="single-field flex-10">
            <p><b>Año 1</b></p>
          </div>
          <div class="single-field flex-10">
            <p><b>Año 2</b></p>
          </div>
          <div class="single-field flex-30">
            
          </div>
          <div class="single-field flex-10">
            <p><b>Año 1</b></p>
          </div>
          <div class="single-field flex-10">
            <p><b>Año 2</b></p>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Efectivo en Bancos:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Cash_Banks_Y1"  type="text" value="<?php echo $A_Cash_Banks_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Cash_Banks_Y2"  type="text" value="<?php echo $A_Cash_Banks_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>Cuentas por Pagar:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Accounts_Payable_Y1"  type="text" value="<?php echo $P_Accounts_Payable_Y1; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Accounts_Payable_Y2"  type="text" value="<?php echo $P_Accounts_Payable_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Cuentas por Cobrar:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Accounts_Receivable_Y1"  type="text" value="<?php echo $A_Accounts_Receivable_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Accounts_Receivable_Y2"  type="text" value="<?php echo $A_Accounts_Receivable_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>Préstamos por Pagar:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Loans_Pay_Y1"  type="text" value="<?php echo $P_Loans_Pay_Y1; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Loans_Pay_Y2"  type="text" value="<?php echo $P_Loans_Pay_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Acciones de empresas cotizadas en Bolsa:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Shares_Listed_Cs_Y1"  type="text" value="<?php echo $A_Shares_Listed_Cs_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Shares_Listed_Cs_Y2"  type="text" value="<?php echo $A_Shares_Listed_Cs_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>Hipotecas sobre  Bienes Raíces:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Real_Estate_Mortgages_Y1"  type="text" value="<?php echo $P_Real_Estate_Mortgages_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Real_Estate_Mortgages_Y2"  type="text" value="<?php echo $P_Real_Estate_Mortgages_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Otros Valores de Renta Fija (Pagarés, Plazo Fijos, Letras, Obligaciones):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Other_Fixed_Income_Y1"  type="text" value="<?php echo $A_Other_Fixed_Income_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Other_Fixed_Income_Y2"  type="text" value="<?php echo $A_Other_Fixed_Income_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>Otros Pasivos (Saldos de tarjetas de crédito entre otros):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Other_Liabilities_Y1"  type="text" value="<?php echo $P_Other_Liabilities_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Other_Liabilities_Y2"  type="text" value="<?php echo $P_Other_Liabilities_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Otros Activos (Bienes Patrimoniales, que no se transforman en dinero  tan rápido):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Other_Assets_Y1"  type="text" value="<?php echo $A_Other_Assets_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Other_Assets_Y2"  type="text" value="<?php echo $A_Other_Assets_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>Impuesto e Intereses Adeudados:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Tax_Interest_Due_Y1"  type="text"  value="<?php echo $P_Tax_Interest_Due_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Tax_Interest_Due_Y2"  type="text" value="<?php echo $P_Tax_Interest_Due_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Bienes Raíces:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Real_estate_Y1"  type="text" value="<?php echo $A_Real_estate_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Real_estate_Y2"  type="text" value="<?php echo $A_Real_estate_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>&nbsp;</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Real_estate_Y1"  type="text" value="<?php echo $P_Real_estate_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Real_estate_Y2"  type="text" value="<?php echo $P_Real_estate_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Valor de Vivienda Principal:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Main_Home_Value_Y1"  type="text" value="<?php echo $A_Main_Home_Value_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Main_Home_Value_Y2"  type="text" value="<?php echo $A_Main_Home_Value_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>&nbsp;</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Main_Home_Value_Y1"  type="text" value="<?php echo $P_Main_Home_Value_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Main_Home_Value_Y2"  type="text" value="<?php echo $P_Main_Home_Value_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Propiedad Personal (Automóvil, Mobiliario, etc.):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Personal_Property_Y1"  type="text" value="<?php echo $A_Personal_Property_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Personal_Property_Y2"  type="text" value="<?php echo $A_Personal_Property_Y2; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>&nbsp;</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Personal_Property_Y1"  type="text" value="<?php echo $P_Personal_Property_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Personal_Property_Y2"  type="text" value="<?php echo $P_Personal_Property_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Otros Activos:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Other_Assets2_Y1"  type="text" value="<?php echo $A_Other_Assets2_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Other_Assets2_Y2"  type="text" value="<?php echo $A_Other_Assets2_Y2; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>&nbsp;</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Other_Assets2_Y1"  type="text" value="<?php echo $P_Other_Assets2_Y1; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Other_Assets2_Y2"  type="text" value="<?php echo $P_Other_Assets2_Y2; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-end mt-16">
          <div class="single-field flex-30">
            <p>Total Activo:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Total_Assets_Y1"  type="text" value="<?php echo $A_Total_Assets_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="A_Total_Assets_Y2"  type="text" value="<?php echo $A_Total_Assets_Y2; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-30">
            <p>Total Pasivo:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Total_Passives_Y1"  type="text" value="<?php echo $P_Total_Passives_Y1; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="P_Total_Passives_Y2"  type="text" value="<?php echo $P_Total_Passives_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
          <div class="single-field flex-80">
            <p>Patrimonio Neto (Activo – Pasivo) (USD):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Net_Worth_USD_Y1"  type="text" value="<?php echo $R_Net_Worth_USD_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Net_Worth_USD_Y2"  type="text" value="<?php echo $R_Net_Worth_USD_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-80">
            <p>Ingresos (ingreso productos de ventas, servicios u operaciones similares):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Income_Y1"  type="text" value="<?php echo $R_Income_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Income_Y2"  type="text" value="<?php echo $R_Income_Y2; ?>"  class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-80">
            <p>Total de Gastos  (saldos de dinero, desembolso, pagos que se realizan  durante el período):</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Total_Expenses_Y1"  type="text" value="<?php echo $R_Total_Expenses_Y1; ?>"  class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Total_Expenses_Y2"  type="text" value="<?php echo $R_Total_Expenses_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-80">
            <p>Utilidad o Pérdida:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Profit_Loss_Y1"  type="text" value="<?php echo $R_Profit_Loss_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Profit_Loss_Y2"  type="text" value="<?php echo $R_Profit_Loss_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex">
          <div class="single-field flex-80">
            <p>Cambio de Patrimonio:</p>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Change_Assets_Y1"  type="text" value="<?php echo $R_Change_Assets_Y1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-10">
            <div class="horizontal-form-field">
              <input name="R_Change_Assets_Y2"  type="text" value="<?php echo $R_Change_Assets_Y2; ?>" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="pdf-type-subtext">
        <p><b>Declaración</b></p>
      </div>
      <div class="gray-paragraph">
        <p>Declaro (declaramos) bajo fe de juramento que los dineros, capitales, haberes, valores o títulos utilizados en los negocios realizados con Firmus Financial Inc., no tienen relación con actividades producto del delito de legitimación de capitales, y por lo tanto no guardan vinculación ninguna con actividades ilícitas, así como tampoco emanan de ningún delito previsto en cualquier ley penal vigente. <br><br>
        Actuando en mi propio nombre y de manera voluntaria, declaro (declaramos) que hemos comprendido a cabalidad la información que se ha solicitado, respondiendo los campos de forma veraz y correcta, en todo su alcance de forma plena e irrevocable; autorizando a Firmus Financial Inc., para la verificación de los datos suministrados en esta plantilla, advirtiendo de forma inmediata cualquier suceso que implique modificación de la información aquí declarada, de las circunstancias: Económicas, financieras y/o personales, del titular de la cuenta, firmantes autorizados, propietario efectivo o beneficiarios finales.<br><br>
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
                  <input name="Signature1_Permanent"  type="checkbox" value="1" <?php if ($Signature1_Permanent==1) echo 'checked'; ?> id="Conjunta">
                  <label for="Conjunta">Conjunta</label>
                </div>
                <div class="checkbox-block">
                  <input name="Signature1_Not_variable"  type="checkbox" value="1"  <?php if ($Signature1_Not_variable==1) echo 'checked'; ?> id="Indistinta">
                  <label for="Indistinta">Indistinta</label>
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
              <input name="Full_name1"  type="text" value="<?php echo $Full_name1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-50">
            <div class="vertical-form-field">
              <p>Nombre completo (en imprenta):</p>
              <input name="Full_name2"  type="text" value="<?php echo $Full_name2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>No. de Documento (ID):</p>
              <input name="Document_ID1"  type="text" value="<?php echo $Document_ID1; ?>" class="form-control">
            </div>
          </div>
          <div class="single-field flex-50">
            <div class="horizontal-form-field">
              <p>No. de Documento (ID):</p>
              <input name="Document_ID2"  type="text" value="<?php echo $Document_ID2; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex mt-16">
          <div class="single-field flex-25">
          </div>
          <div class="single-field flex-25">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Signature_Date1"  type="text" value="<?php echo $Signature_Date1; ?>" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-25">
          </div>
          <div class="single-field flex-25">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Signature_Date2"  type="text" value="<?php echo $Signature_Date2; ?>" class="form-control" id="datepicker1" placeholder="DD/MM/AAAA..">
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
        <p><b>Verificado por Personal de la Casa de Valores:</b></p>
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
              <input name="Compliance_Officer_Name"  type="text" value="<?php echo $Compliance_Officer_Name; ?>"  class="form-control">
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
              <input name="Runners_Date"  type="text" value="<?php echo $Runners_Date; ?>" class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Compliance_Officer_Date"  type="text" value="<?php echo $Compliance_Officer_Date; ?>" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
              <small>DD/MM/AAAA</small>
            </div>
          </div>
          <div class="single-field flex-33">
            <div class="vertical-form-field">
              <p>Fecha:</p>
              <input name="Chief_Executive_Date"  type="text" value="<?php echo $Chief_Executive_Date; ?>" class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
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
      <div class="pdf-type-subtext">
        <p><b>Anexo A</b></p>
      </div>
      <div class="fields-block-wrapper">
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <b>Código</b>
          </div>
          <div class="single-field flex-90">
            <b>Nombre Actividad</b>
          </div>
        </div>
        <div class="d-flex mt-16 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC001</p>
          </div>
          <div class="single-field flex-90">
            <p>ABOGADOS, NOTARIOS, OTROS PROFESIONALES JURIDICOS Y CONTADORES PUBLICOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC002</p>
          </div>
          <div class="single-field flex-90">
            <p>AFIANZADOR, PRESTAMISTA</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC003</p>
          </div>
          <div class="single-field flex-90">
            <p>AGENCIAS DE PAGOS, REGISTRO Y TRANSFERENCIAS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC004</p>
          </div>
          <div class="single-field flex-90">
            <p>AGENCIAS DE VIAJE</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC005</p>
          </div>
          <div class="single-field flex-90">
            <p>AGENTE DE INVERSION</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC006</p>
          </div>
          <div class="single-field flex-90">
            <p>ALQUILERES VARIOS</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC007</p>
          </div>
          <div class="single-field flex-90">
            <p>AMA DE CASA</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC008</p>
          </div>
          <div class="single-field flex-90">
            <p>ASOCIACIONES CIVILES O ORGANIZACIONES SIN FINES DE LUCRO Y BENEFICENCIAS</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC009</p>
          </div>
          <div class="single-field flex-90">
            <p>BANCOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC010</p>
          </div>
          <div class="single-field flex-90">
            <p>BIENES INMUEBLES</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC011</p>
          </div>
          <div class="single-field flex-90">
            <p>CASA DE CAMBIO</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC012</p>
          </div>
          <div class="single-field flex-90">
            <p>CASA DE EMPENO</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC013</p>
          </div>
          <div class="single-field flex-90">
            <p>CASINOS Y SALAS DE JUEGOS, EMPRESAS DE APUESTAS Y APUESTAS POR INTERNET</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC014</p>
          </div>
          <div class="single-field flex-90">
            <p>CLUBES SOCIALES Y CIVICOS</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC015</p>
          </div>
          <div class="single-field flex-90">
            <p>COMERCIALIZADORAS Y ARRENDADORAS DE VEHICULOS AUTOMOTORES Y AERONAVES</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC016</p>
          </div>
          <div class="single-field flex-90">
            <p>COMERCIALIZADORES DE ANTIGUEDADES, JOYAS, METALES PRECIOSOS, PIEDRAS PRECIOSAS Y OTROS BIENES
              SANTUARIOS</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC017</p>
          </div>
          <div class="single-field flex-90">
            <p>COMERCIALIZADORES DE ARMAS, EXPLOSIVOS Y MUNICIONES</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC018</p>
          </div>
          <div class="single-field flex-90">
            <p>COMERCIO MAYORISTA</p>
          </div>
        </div>
        <div class="d-flex bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC019</p>
          </div>
          <div class="single-field flex-90">
            <p>COMERCIO MINORISTA</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC020</p>
          </div>
          <div class="single-field flex-90">
            <p>CONSTRUCCION</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC021</p>
          </div>
          <div class="single-field flex-90">
            <p>DEPORTE</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC022</p>
          </div>
          <div class="single-field flex-90">
            <p>DESEMPLEADO</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC023</p>
          </div>
          <div class="single-field flex-90">
            <p>DESPACHANTE DE ADUANA</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC024</p>
          </div>
          <div class="single-field flex-90">
            <p>DOCENTE</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC025</p>
          </div>
          <div class="single-field flex-90">
            <p>E-COMMERCE</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC026</p>
          </div>
          <div class="single-field flex-90">
            <p>ELECTRICIDAD, GAS, AGUA Y SERVICIOS SANITARIOS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC027</p>
          </div>
          <div class="single-field flex-90">
            <p>EMPLEADO</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC028</p>
          </div>
          <div class="single-field flex-90">
            <p>EMPRESARIO</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC029</p>
          </div>
          <div class="single-field flex-90">
            <p>ESTABLECIMIENTOS FINANCIEROS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC030</p>
          </div>
          <div class="single-field flex-90">
            <p>ESTUDIANTE</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC031</p>
          </div>
          <div class="single-field flex-90">
            <p>EXPLOTACION AGRICOLA GANADERA</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC032</p>
          </div>
          <div class="single-field flex-90">
            <p>EXPLOTACION DE MINAS Y CANTERAS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC033</p>
          </div>
          <div class="single-field flex-90">
            <p>FABRICACION DE MUEBLES</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC034</p>
          </div>
          <div class="single-field flex-90">
            <p>FABRICACION DE VEHICULOS AUTOMOTORES</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC035</p>
          </div>
          <div class="single-field flex-90">
            <p>FACTORING</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC036</p>
          </div>
          <div class="single-field flex-90">
            <p>FIDUCIARIA</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC037</p>
          </div>
          <div class="single-field flex-90">
            <p>FINANCIERAS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC038</p>
          </div>
          <div class="single-field flex-90">
            <p>FINANZAS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC039</p>
          </div>
          <div class="single-field flex-90">
            <p>FUNDACIONES</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC040</p>
          </div>
          <div class="single-field flex-90">
            <p>FUNDACIONES SIN FINES DE LUCRO</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC041</p>
          </div>
          <div class="single-field flex-90">
            <p>GANADERIA Y/O AGRICULTURA EN GENERAL</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC042</p>
          </div>
          <div class="single-field flex-90">
            <p>IMP Y EXPORTACION MERCANCIA GENERAL</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC043</p>
          </div>
          <div class="single-field flex-90">
            <p>IMPRENTA, EDITORIALES, PUBLICACIONES</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC044</p>
          </div>
          <div class="single-field flex-90">
            <p>INDETERMINADO</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC045</p>
          </div>
          <div class="single-field flex-90">
            <p>INDUSTRIA MANUFACTURERAS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC046</p>
          </div>
          <div class="single-field flex-90">
            <p>INMOBILIARIAS Y AGENTES INMOBILIARIOS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC047</p>
          </div>
          <div class="single-field flex-90">
            <p>INSTITUCIONES DEL GOBIERNO (SERVICIOS GUBERNAMENTALES)</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC048</p>
          </div>
          <div class="single-field flex-90">
            <p>JOYERIA Y RELOJERIA</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC049</p>
          </div>
          <div class="single-field flex-90">
            <p>JUBILADO Y/O PENSIONADO</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC050</p>
          </div>
          <div class="single-field flex-90">
            <p>MAQUINARIAS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC051</p>
          </div>
          <div class="single-field flex-90">
            <p>MEDICINA EN GENERAL</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC052</p>
          </div>
          <div class="single-field flex-90">
            <p>MEDICO</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC053</p>
          </div>
          <div class="single-field flex-90">
            <p>MILITAR Y/O POLICIA</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC054</p>
          </div>
          <div class="single-field flex-90">
            <p>MONEDAS, OBJETOS DE ARTE Y SELLOS POSTALES</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC055</p>
          </div>
          <div class="single-field flex-90">
            <p>MUEBLES Y ACCESORIOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC056</p>
          </div>
          <div class="single-field flex-90">
            <p>ONGS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC057</p>
          </div>
          <div class="single-field flex-90">
            <p>OPERADORES CAMBIARIOS FRONTERIZOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC058</p>
          </div>
          <div class="single-field flex-90">
            <p>ORGANISMOS INTERNACIONALES</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC059</p>
          </div>
          <div class="single-field flex-90">
            <p>OTROS NEGOCIOS POR INTERNET</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC060</p>
          </div>
          <div class="single-field flex-90">
            <p>OTROS PROVEEDORES DE SERVICIOS SOCIETARIOS Y FIDEICOMISOS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC061</p>
          </div>
          <div class="single-field flex-90">
            <p>PAPEL Y PRODUCTOS DEL PAPEL</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC062</p>
          </div>
          <div class="single-field flex-90">
            <p>PETROLEO Y DERIVADOS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC063</p>
          </div>
          <div class="single-field flex-90">
            <p>PRODUCTOS AGROPECUARIOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC064</p>
          </div>
          <div class="single-field flex-90">
            <p>PROFESIONAL INDEPENDIENTE</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC065</p>
          </div>
          <div class="single-field flex-90">
            <p>RELIGIOSO</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC066</p>
          </div>
          <div class="single-field flex-90">
            <p>REMESADORA DE FONDOS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC067</p>
          </div>
          <div class="single-field flex-90">
            <p>RESTAURANTES</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC068</p>
          </div>
          <div class="single-field flex-90">
            <p>SEGUROS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC069</p>
          </div>
          <div class="single-field flex-90">
            <p>SUBSTANCIA Y PRODUCTOS QUIMICOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC070</p>
          </div>
          <div class="single-field flex-90">
            <p>SUJETOS NO FINANCIEROS Y PROFESIONALES SUJETOS A SUPERVISION</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC071</p>
          </div>
          <div class="single-field flex-90">
            <p>SUPERMERCADOS</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC072</p>
          </div>
          <div class="single-field flex-90">
            <p>TABACO</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC073</p>
          </div>
          <div class="single-field flex-90">
            <p>TEXTILES Y/O CALZADO</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC074</p>
          </div>
          <div class="single-field flex-90">
            <p>TRANSPORTE EN GENERAL</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC075</p>
          </div>
          <div class="single-field flex-90">
            <p>ZONA FRANCA</p>
          </div>
        </div>
        <div class="d-flex p-5">
          <div class="single-field flex-10">
            <p>AC076</p>
          </div>
          <div class="single-field flex-90">
            <p>ZONA FRONTERIZAS</p>
          </div>
        </div>
        <div class="d-flex p-5 bg-gray p-5">
          <div class="single-field flex-10">
            <p>AC077</p>
          </div>
          <div class="single-field flex-90">
            <p>CLASIFICACION DIFERENTE A LAS ANTERIORES (OTROS SERVICIOS)</p>
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
const numberCodeInputs = [...numberCodeForm.querySelectorAll('[data-number-code-input name="" ]')];

// Event callbacks
const handleInput = ({target}) => {
  if (!target.value.length) { return target.value = null; }
  
  const input name="" Length = target.value.length;
  let currentIndex = Number(target.dataset.numberCodeInput);
  
  if (input name="" Length > 1) {
    const input name="" Values = target.value.split('');
    
    input name="" Values.forEach((value, valueIndex) => {
      const nextValueIndex = currentIndex + valueIndex;
      
      if (nextValueIndex >= numberCodeInputs.length) { return; }
      
      numberCodeInputs[nextValueIndex].value = value;
    });
    
    currentIndex += input name="" Values.length - 2;
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
numberCodeForm.addEventListener('input name="" ', handleInput);
numberCodeForm.addEventListener('keydown', handleKeyDown);
    </script>
  </body>
</html>
