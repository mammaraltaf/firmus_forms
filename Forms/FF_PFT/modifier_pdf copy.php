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
         .single-field {
    width: 33.33%;
  }
          .table-cell {
    display: table-cell;
  }
  .flex-25 {
    width: 25%;
  }
  .flex-50 {
    width: 50%;
  }

.fields-block-wrapper {
            padding: 20px;
            background-color: #f9f9f9; /* Light gray background */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 20px;
        }
        table {
            width: 100%;
            
        }
        th, td {
            padding: 10px;
            
            vertical-align: middle;
        }
        th {
            background-color: #e0e0e0; /* Slightly darker gray for header */
            font-weight: bold;
        }
        .checkboxes-group {
            display: flex;
            align-items: center;
        }
        .checkbox-block {
            display: flex;
            align-items: center;
        }
        .checkbox-block p {
            margin: 0 0 0 5px;
        }
        .flex-30 { width: 30%; }
        .flex-20 { width: 20%; }
        .flex-10 { width: 10%; }
        .mt-16 { margin-top: 16px; }
        /* Add CSS here or link to your CSS file */
        .fields-block-wrapper {
            background-color: #f0f0f0; /* Light gray background */
            padding: 20px;
            border-radius: 8px;
        }
        .checkbox-table,
        .text-table {
            border-collapse: collapse;
            width: 100%;
        }
        .checkbox-cell,
        .text-cell {
            padding: 10px;
            vertical-align: top;
            text-align: center;
        }
        .checkbox-cell p,
        .text-cell p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
        .checkbox-block {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .checkbox-block input {
            margin-bottom: 5px;
        }
        .mt-16 {
            margin-top: 16px;
        }
    
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
    <table>
  <tr>
    <td><img src="../images/logo.svg" alt="Firmus Financial" class="img-fluid" style="margin-left: 400px;"></td>
    <td><label for="account_number" style="margin-left: 120px;">Número de cuenta:</label></td>
    <td><input type="text" name="account_number" value="<?php echo $account_number; ?>" placeholder="Número de cuenta"></td>
  </tr>
  <tr>
    <td class="pdf-type-text"><h6>Perfil Financiero y Transaccional</h6></td>
  </tr>

     <tr>
      <td class="pdf-type-subtext">
        <p><b>Experiencia Inversora</b><i> Seleccione UNA sola alternativa, de no aplicar colocar N/A</i></p></td>
  </tr>
      </table>
      <div class="fields-block-wrapper bg-gray">
            <!-- Checkboxes Row -->
            <table class="checkbox-table">
                <tr>
                    <td class="checkbox-cell">
                        <div class="checkbox-block">
                            <input name="Invest_Exp_Conserv" type="checkbox" value="1" <?php if ($Invest_Exp_Conserv==1) echo 'checked'; ?> id="Si">
                            <p>Conservador</p>
                        </div>
                    </td>
                    <td class="checkbox-cell">
                        <div class="checkbox-block">
                            <input name="Invest_Exp_Moderat" type="checkbox" value="1" <?php if ($Invest_Exp_Moderat==1) echo 'checked'; ?> id="Equilibrado">
                            <p>Moderado - Equilibrado</p>
                        </div>
                    </td>
                    <td class="checkbox-cell">
                        <div class="checkbox-block">
                            <input name="Invest_Exp_Aggress" type="checkbox" value="1" <?php if ($Invest_Exp_Aggress==1) echo 'checked'; ?> id="Agresivo">
                            <p>Agresivo</p>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Descriptive Text Row -->
            <table class="text-table mt-16">
                <tr>
                    <td class="text-cell">
                        Estoy dispuesto a aceptar un bajo riesgo para mi capital inicial, incluyendo baja volatilidad, a buscar un bajo nivel de beneficio de cartera
                    </td>
                    <td class="text-cell">
                        Estoy dispuesto a aceptar algunos riesgos para mi capital inicial y tolerar cierta volatilidad, a buscar un modesto nivel de beneficios de la cartera
                    </td>
                    <td class="text-cell">
                        Estoy dispuesto a aceptar el riesgo máximo para mi capital inicial de manera agresiva para obtener el máximo rendimiento y entiendo que podría perder todo o la mayor parte del dinero invertido
                    </td>
                </tr>
            </table>
        </div>
       
        <div class="fields-block-wrapper">
            <table>
                <!-- Table Header Row -->
                <thead>
                    <tr>
                        <th>Productos</th>
                        <th>Limitada</th>
                        <th>Media</th>
                        <th>Alta</th>
                        <th>Años de Experiencia:</th>
                        <th>Mercados</th>
                    </tr>
                </thead>
                <!-- Table Body Rows -->
                <tbody>
                    <tr>
                        <td>Fondos mutuos</td>
                        <td class="checkbox-cell">
                            <input name="Mutual_Funds_L" type="checkbox" value="1" <?php if ($Mutual_Funds_L==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Mutual_Funds_M" type="checkbox" value="1" <?php if ($Mutual_Funds_M==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Mutual_Funds_H" type="checkbox" value="1" <?php if ($Mutual_Funds_H==1) echo 'checked'; ?>>
                        </td>
                        <td>
                            <input name="Mutual_Funds_Exp" type="text" value="<?php echo $Mutual_Funds_Exp; ?>" class="form-control">
                        </td>
                        <td>
                            <input name="Mutual_Funds_Markets" type="text" value="<?php echo $Mutual_Funds_Markets; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Renta fija</td>
                        <td class="checkbox-cell">
                            <input name="Fixed_Rent_L" type="checkbox" value="1" <?php if ($Fixed_Rent_L==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Fixed_Rent_M" type="checkbox" value="1" <?php if ($Fixed_Rent_M==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Fixed_Rent_H" type="checkbox" value="1" <?php if ($Fixed_Rent_H==1) echo 'checked'; ?>>
                        </td>
                        <td>
                            <input name="Fixed_Rent_Exp" type="text" value="<?php echo $Fixed_Rent_Exp; ?>" class="form-control">
                        </td>
                        <td>
                            <input name="Fixed_Rent_Markets" type="text" value="<?php echo $Fixed_Rent_Markets; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Productos estructurados</td>
                        <td class="checkbox-cell">
                            <input name="Struct_Prod_L" type="checkbox" value="1" <?php if ($Struct_Prod_L==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Struct_Prod_M" type="checkbox" value="1" <?php if ($Struct_Prod_M==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Struct_Prod_H" type="checkbox" value="1" <?php if ($Struct_Prod_H==1) echo 'checked'; ?>>
                        </td>
                        <td>
                            <input name="Struct_Prod_Exp" type="text" value="<?php echo $Struct_Prod_Exp; ?>" class="form-control">
                        </td>
                        <td>
                            <input name="Struct_Prod_Markets" type="text" value="<?php echo $Struct_Prod_Markets; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Acciones</td>
                        <td class="checkbox-cell">
                            <input name="Actions_L" type="checkbox" value="1" <?php if ($Actions_L==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Actions_M" type="checkbox" value="1" <?php if ($Actions_M==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Actions_H" type="checkbox" value="1" <?php if ($Actions_H==1) echo 'checked'; ?>>
                        </td>
                        <td>
                            <input name="Actions_Exp" type="text" value="<?php echo $Actions_Exp; ?>" class="form-control">
                        </td>
                        <td>
                            <input name="Actions_Markets" type="text" value="<?php echo $Actions_Markets; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Derivados</td>
                        <td class="checkbox-cell">
                            <input name="Derivatives_L" type="checkbox" value="1" <?php if ($Derivatives_L==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Derivatives_M" type="checkbox" value="1" <?php if ($Derivatives_M==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Derivatives_H" type="checkbox" value="1" <?php if ($Derivatives_H==1) echo 'checked'; ?>>
                        </td>
                        <td>
                            <input name="Derivatives_Exp" type="text" value="<?php echo $Derivatives_Exp; ?>" class="form-control">
                        </td>
                        <td>
                            <input name="Derivatives_Markets" type="text" value="<?php echo $Derivatives_Markets; ?>" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Otro (detalle)</td>
                        <td class="checkbox-cell">
                            <input name="Others_L" type="checkbox" value="1" <?php if ($Others_L==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Others_M" type="checkbox" value="1" <?php if ($Others_M==1) echo 'checked'; ?>>
                        </td>
                        <td class="checkbox-cell">
                            <input name="Others_H" type="checkbox" value="1" <?php if ($Others_H==1) echo 'checked'; ?>>
                        </td>
                        <td>
                            <input name="Others_Exp" type="text" value="<?php echo $Others_Exp; ?>" class="form-control">
                        </td>
                        <td>
                            <input name="Others_Markets" type="text" value="<?php echo $Others_Markets; ?>" class="form-control">
                        </td>
                    </tr>
                </tbody>
            </table>
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
        <table>
            <tbody>
                <!-- Operaciones de Compra y venta -->
                <tr>
                    <td class="flex-30 mt-16"><b>Operaciones de Compra y venta</b></td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="P_S_Ops_1M_10M" type="checkbox" value="1" <?php if ($P_S_Ops_1M_10M==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤$1,000,000.000</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-30">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="P_S_Ops_Sup_10M" type="checkbox" value="1" <?php if ($P_S_Ops_Sup_10M==1) echo 'checked'; ?> id="Pensión">
                                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_Inf_1M" type="checkbox" value="1" <?php if ($S_Titles_Inf_1M==1) echo 'checked'; ?> id="Salario">
                                <p>>$10,000,000.000</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Envío de Títulos -->
                <tr>
                    <td class="flex-30 mt-16"><b>Envío de Títulos</b></td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_Inf_1M" type="checkbox" value="1" <?php if ($S_Titles_Inf_1M==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤$1,000,000.000</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-30">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_1M_10M" type="checkbox" value="1" <?php if ($S_Titles_1M_10M==1) echo 'checked'; ?> id="Pensión">
                                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_Sup_10M" type="checkbox" value="1" <?php if ($S_Titles_Sup_10M==1) echo 'checked'; ?> id="Salario">
                                <p>>$10,000,000.000</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Retiro de Títulos -->
                <tr>
                    <td class="flex-30 mt-16"><b>Retiro de Títulos</b></td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="W_Titles_Inf_1M" type="checkbox" value="1" <?php if ($W_Titles_Inf_1M==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤$1,000,000.000</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-30">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="W_Titles_1M_10M" type="checkbox" value="1" <?php if ($W_Titles_1M_10M==1) echo 'checked'; ?> id="Pensión">
                                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="W_Titles_Sup_10M" type="checkbox" value="1" <?php if ($W_Titles_Sup_10M==1) echo 'checked'; ?> id="Salario">
                                <p>>$10,000,000.000</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Aporte de Efectivo -->
                <tr>
                    <td class="flex-30 mt-16"><b>Aporte de Efectivo</b></td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_Contribution_Inf_1M" type="checkbox" value="1" <?php if ($C_Contribution_Inf_1M==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤$1,000,000.000</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-30">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_Contribution_1M_10M" type="checkbox" value="1" <?php if ($C_Contribution_1M_10M==1) echo 'checked'; ?> id="Pensión">
                                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_Contribution_Sup_10M" type="checkbox" value="1" <?php if ($C_Contribution_Sup_10M==1) echo 'checked'; ?> id="Salario">
                                <p>>$10,000,000.000</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Retiro de Efectivo -->
                <tr>
                    <td class="flex-30 mt-16"><b>Retiro de Efectivo</b></td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_withdrawal_Inf_1M" type="checkbox" value="1" <?php if ($C_withdrawal_Inf_1M==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤$1,000,000.000</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-30">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_withdrawal_1M_10M" type="checkbox" value="1" <?php if ($C_withdrawal_1M_10M==1) echo 'checked'; ?> id="Pensión">
                                <p>>$1,000,000.000 - ≤$10,000,000.00</p>
                            </div>
                        </div>
                    </td>
                    <td class="flex-20">
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_withdrawal_Sup_10M" type="checkbox" value="1" <?php if ($C_withdrawal_Sup_10M==1) echo 'checked'; ?> id="Salario">
                                <p>>$10,000,000.000</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="fields-block-wrapper bg-gray">
        <div class="d-flex">
            <div class="single-field flex-100">
                <b>Número Promedio de Operaciones Anuales</b>
            </div>
        </div>
    </div>
    
    <div class="fields-block-wrapper">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>≤12</th>
                    <th>>>12 - ≤24</th>
                    <th>>>24</th>
                </tr>
            </thead>
            <tbody>
                <!-- Operaciones de Compra y venta -->
                <tr>
                    <td><b>Operaciones de Compra y venta</b></td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="P_S_Ops_Inf_12" type="checkbox" value="1" <?php if ($P_S_Ops_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤12</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="P_S_Ops_12_24" type="checkbox" value="1" <?php if ($P_S_Ops_12_24==1) echo 'checked'; ?> id="Pensión">
                                <p>>>12 - ≤24</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="P_S_Ops_Sup_24" type="checkbox" value="1" <?php if ($P_S_Ops_Sup_24==1) echo 'checked'; ?> id="Salario">
                                <p>>>24</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Envío de Títulos -->
                <tr>
                    <td><b>Envío de Títulos</b></td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_Inf_12" type="checkbox" value="1" <?php if ($S_Titles_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤12</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_12_24" type="checkbox" value="1" <?php if ($S_Titles_12_24==1) echo 'checked'; ?> id="Pensión">
                                <p>>>12 - ≤24</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="S_Titles_Sup_24" type="checkbox" value="1" <?php if ($S_Titles_Sup_24==1) echo 'checked'; ?> id="Salario">
                                <p>>>24</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Retiro de Títulos -->
                <tr>
                    <td><b>Retiro de Títulos</b></td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="W_Titles_Inf_12" type="checkbox" value="1" <?php if ($W_Titles_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤12</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="W_Titles_12_24" type="checkbox" value="1" <?php if ($W_Titles_12_24==1) echo 'checked'; ?> id="Pensión">
                                <p>>>12 - ≤24</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="W_Titles_Sup_24" type="checkbox" value="1" <?php if ($W_Titles_Sup_24==1) echo 'checked'; ?> id="Salario">
                                <p>>>24</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Aporte de Efectivo -->
                <tr>
                    <td><b>Aporte de Efectivo</b></td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_Contribution_Inf_12" type="checkbox" value="1" <?php if ($C_Contribution_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤12</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_Contribution_12_24" type="checkbox" value="1" <?php if ($C_Contribution_12_24==1) echo 'checked'; ?> id="Pensión">
                                <p>>>12 - ≤24</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_Contribution_Sup_24" type="checkbox" value="1" <?php if ($C_Contribution_Sup_24==1) echo 'checked'; ?> id="Salario">
                                <p>>>24</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Retiro de Efectivo -->
                <tr>
                    <td><b>Retiro de Efectivo</b></td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_withdrawal_Inf_12" type="checkbox" value="1" <?php if ($C_withdrawal_Inf_12==1) echo 'checked'; ?> id="Ahorro">
                                <p>≤12</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_withdrawal_12_24" type="checkbox" value="1" <?php if ($C_withdrawal_12_24==1) echo 'checked'; ?> id="Pensión">
                                <p>>>12 - ≤24</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="C_withdrawal_Sup_24" type="checkbox" value="1" <?php if ($C_withdrawal_Sup_24==1) echo 'checked'; ?> id="Salario">
                                <p>>>24</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      <div class="pdf-type-subtext">
        <p><b>Medio por el cual(cuales) suministrará los fondos</b></p>
      </div>
      <div class="fields-block-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Forma de Provisión de Fondos</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="checkboxes-group">
                            <div class="checkbox-block">
                                <input name="Funds_Provided_ET" type="checkbox" value="1" <?php if ($Funds_Provided_ET==1) echo 'checked'; ?> id="Ahorro">
                                <p>Transferencia Electrónica</p>
                            </div>
                            <div class="checkbox-block">
                                <input name="Funds_Provided_Check" type="checkbox" value="1" <?php if ($Funds_Provided_Check==1) echo 'checked'; ?> id="Ahorro">
                                <p>Cheque</p>
                            </div>
                            <div class="checkbox-block">
                                <input name="Funds_Provided_Cash" type="checkbox" value="1" <?php if ($Funds_Provided_Cash==1) echo 'checked'; ?> id="Ahorro">
                                <p>Efectivo</p>
                            </div>
                            <div class="checkbox-block">
                                <input name="Funds_Provided_Q_Cash" type="checkbox" value="1" <?php if ($Funds_Provided_Q_Cash==1) echo 'checked'; ?> id="Ahorro">
                                <p>Cuasi Efectivo</p>
                            </div>
                            <div class="checkbox-block">
                                <input name="Funds_Provided_Other" type="checkbox" value="1" <?php if ($Funds_Provided_Other==1) echo 'checked'; ?> id="Ahorro">
                                <p>Otro (detalle)</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="horizontal-form-field">
                            <input name="Funds_Provided_Other_Detail" type="text" value="<?php echo $Funds_Provided_Other_Detail; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="horizontal-form-field">
                            <p>Colocar el código que represente su Actividad Económica (Ver Anexo A):</p>
                            <input name="E_A_Code" type="text" value="<?php echo $E_A_Code; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      <div class="pdf-type-subtext">
       <p><b>Objetivos de la inversión</b></p>
      </div>
      <div class="fields-block-wrapper bg-gray">
  <table>
    <tr>
      <td class="single-field flex-100">
        <div class="checkboxes-group m-0">
          <div class="checkbox-block">
            <input name="Invest_obj_Preservation" type="checkbox" value="1" <?php if ($Invest_obj_Preservation==1) echo 'checked'; ?> id="Ahorro">
            <p>Preservación</p>
          </div>
          <div class="checkbox-block">
            <input name="Invest_obj_Cost_effec" type="checkbox" value="1" <?php if ($Invest_obj_Cost_effec==1) echo 'checked'; ?> id="Ahorro">
            <p>Rentabilidad</p>
          </div>
          <div class="checkbox-block">
            <input name="Invest_obj_Capital_App" type="checkbox" value="1" <?php if ($Invest_obj_Capital_App==1) echo 'checked'; ?> id="Ahorro">
            <p>Apreciación de Capital</p>
          </div>
        </div>
      </td>
    </tr>
  </table>
</div>
<div class="fields-block-wrapper">
  <div class="single-field">
    <b>Cuál de estas frases describe de la mejor manera el objetivo de su inversión:   </b>
  </div>
</div>

<div class="fields-block-wrapper">
  <div class="single-field">
    <b>Cuál de estas frases describe de la mejor manera el objetivo de su inversión:   </b>
  </div>
  <table>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>No estoy preparado para exponer mi capital</p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_1" type="checkbox" value="1" <?php if ($invest_obj_p_exp_1==1) echo 'checked'; ?>>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>No estoy preparado para exponer mi capital en inversiones con alta volatilidad aunque alcance grandes retornos, busco obtener retornos estables</p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_2" type="checkbox" value="1" <?php if ($invest_obj_p_exp_2==1) echo 'checked'; ?>>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>Quisiera maximizar los retornos a largo plazo y preocuparme lo menos posible por los movimientos a corto plazo del mercado</p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_3" type="checkbox" value="1" <?php if ($invest_obj_p_exp_3==1) echo 'checked'; ?>>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="tc-row single-field flex-80">
            <p>Quiero alcanzar retornos a largo plazo más altos, por lo tanto estoy preparado para experimentar niveles razonables de volatilidad</p>
          </div>
          <div class="single-field flex-5">
            <input name="invest_obj_p_exp_4" type="checkbox" value="1" <?php if ($invest_obj_p_exp_4==1) echo 'checked'; ?>>
          </div>
        </div>
      </td>
    </tr>
  </table>
</div>
      <div class="pdf-type-subtext">
       <p><b>Propósito</b></p>
      </div>
      <div class="fields-block-wrapper">
  <table>
    <tr>
      <td class="single-fields flex-25">
        <div class="checkbox-block">
          <input name="Purp_Retirement_Fund"  type="checkbox" value="1"  <?php if ($Purp_Retirement_Fund==1) echo 'checked'; ?> id="Discrecional">
          <p>Fondo de Retiro</p>
        </div>
      </td>
      <td class="single-fields flex-25">
        <div class="checkbox-block">
          <input name="Purp_Capital_Conserv"  type="checkbox" value="1" <?php if ($Purp_Capital_Conserv==1) echo 'checked'; ?>  id="Discrecional">
          <p>Conservación de Capital</p>
        </div>
      </td>
      <td class="single-fields flex-25">
        <div class="checkbox-block">
          <input name="Purp_Establish_Funds"  type="checkbox" value="1" <?php if ($Purp_Establish_Funds==1) echo 'checked'; ?> id="Discrecional">
          <p>Establecer Fondos para un Tercero</p>
        </div>
      </td>
      <td class="single-fields flex-25">
        <div class="checkbox-block">
          <input name="Purp_Capitalize_Nbusiness"  type="checkbox" value="1" <?php if ($Purp_Capitalize_Nbusiness==1) echo 'checked'; ?>  id="Discrecional">
          <p>Capitalizar un nuevo negocio</p>
        </div>
      </td>
    </tr>
    <tr>
      <td class="single-fields flex-15">
        <div class="checkbox-block">
          <input name="Purp_Other"  type="checkbox" value="1"  <?php if ($Purp_Other==1) echo 'checked'; ?> id="Discrecional">
          <p>Otro (detalle)</p>
        </div>
      </td>
      <td class="single-fields flex-85">
        <input name="Purp_Other_Detail"  type="text" value="<?php echo $Purp_Other_Detail; ?>"  class="form-control">
      </td>
    </tr>
  </table>
</div>
      <div class="pdf-type-subtext">
       <p><b>Tolerancia al riesgo y la capacidad financiera del cliente</b></p>
      </div>
      <div class="fields-block-wrapper">
        <table>
            <tbody>
                <!-- Row for Investment Time Horizon -->
                <tr>
                    <td colspan="4">
                        <p>En cuánto tiempo necesitará Usted este dinero invertido, o por cuánto tiempo piensa Usted que puede mantener este portafolio de inversión?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox-block">
                            <input name="Risk_Tol_1_2_Y" type="checkbox" value="1" <?php if ($Risk_Tol_1_2_Y==1) echo 'checked'; ?> id="Risk_Tol_1_2_Y">
                            <p>1 a 2 Años</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="Risk_Tol_3_5_Y" type="checkbox" value="1" <?php if ($Risk_Tol_3_5_Y==1) echo 'checked'; ?> id="Risk_Tol_3_5_Y">
                            <p>3 a 5 Años</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="Risk_Tol_Up_6_Y" type="checkbox" value="1" <?php if ($Risk_Tol_Up_6_Y==1) echo 'checked'; ?> id="Risk_Tol_Up_6_Y">
                            <p>más de 6 Años</p>
                        </div>
                    </td>
                </tr>
                <!-- Row for Expected Annual Return -->
                <tr>
                    <td colspan="4">
                        <p>Retorno anual promedio esperado del portafolio de inversión</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox-block">
                            <input name="Avg_ann_return_2_4" type="checkbox" value="1" <?php if ($Avg_ann_return_2_4==1) echo 'checked'; ?> id="Avg_ann_return_2_4">
                            <p>2% a 4%</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="Avg_ann_return_4_6" type="checkbox" value="1" <?php if ($Avg_ann_return_4_6==1) echo 'checked'; ?> id="Avg_ann_return_4_6">
                            <p>4% a 6%</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="Avg_ann_return_Up_7" type="checkbox" value="1" <?php if ($Avg_ann_return_Up_7==1) echo 'checked'; ?> id="Avg_ann_return_Up_7">
                            <p>más de 7%</p>
                        </div>
                    </td>
                </tr>
                <!-- Row for Investment Percentage -->
                <tr>
                    <td colspan="4">
                        <p>De su patrimonio que porcentaje invertirá</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox-block">
                            <input name="percent_inv_0_25" type="checkbox" value="1" <?php if ($percent_inv_0_25==1) echo 'checked'; ?> id="percent_inv_0_25">
                            <p>0 % a 25%</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="percent_inv_26_50" type="checkbox" value="1" <?php if ($percent_inv_26_50==1) echo 'checked'; ?> id="percent_inv_26_50">
                            <p>26 % a 50%</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="percent_inv_Up_51" type="checkbox" value="1" <?php if ($percent_inv_Up_51==1) echo 'checked'; ?> id="percent_inv_Up_51">
                            <p>más del 51%</p>
                        </div>
                    </td>
                </tr>
                <!-- Row for Importance of Capital Availability -->
                <tr>
                    <td colspan="4">
                        <p>Qué tan importante es disponer de su capital invertido (en caso de emergencia)?</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox-block">
                            <input name="inv_important_yes" type="checkbox" value="1" <?php if ($inv_important_yes==1) echo 'checked'; ?> id="inv_important_yes">
                            <p>No importante</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="inv_important_No" type="checkbox" value="1" <?php if ($inv_important_No==1) echo 'checked'; ?> id="inv_important_No">
                            <p>Importante</p>
                        </div>
                    </td>
                    <td>
                        <div class="checkbox-block">
                            <input name="inv_important_Very" type="checkbox" value="1" <?php if ($inv_important_Very==1) echo 'checked'; ?> id="inv_important_Very">
                            <p>Muy importante</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      <div class="pdf-type-subtext">
       <p><b>PATRIMONIO Declarado en USD </b><i>(últimos 2 años)</i></p>
      </div>
     <!-- Assets and Liabilities -->
<table cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
  <thead>
    <tr>
      <th colspan="3" style="background-color: #f2f2f2;">ACTIVOS</th>
      <th colspan="3" style="background-color: #f2f2f2;">PASIVOS</th>
    </tr>
  </thead>
  <tbody>
    <!-- Empty rows for header spacing -->
    <tr>
      <td colspan="3"></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td>Efectivo en Bancos:</td>
      <td><input name="A_Cash_Banks_Y1" type="text" value="<?php echo $A_Cash_Banks_Y1; ?>" class="form-control"></td>
      <td><input name="A_Cash_Banks_Y2" type="text" value="<?php echo $A_Cash_Banks_Y2; ?>" class="form-control"></td>
      <td>Cuentas por Pagar:</td>
      <td><input name="P_Accounts_Payable_Y1" type="text" value="<?php echo $P_Accounts_Payable_Y1; ?>" class="form-control"></td>
      <td><input name="P_Accounts_Payable_Y2" type="text" value="<?php echo $P_Accounts_Payable_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Cuentas por Cobrar:</td>
      <td><input name="A_Accounts_Receivable_Y1" type="text" value="<?php echo $A_Accounts_Receivable_Y1; ?>" class="form-control"></td>
      <td><input name="A_Accounts_Receivable_Y2" type="text" value="<?php echo $A_Accounts_Receivable_Y2; ?>" class="form-control"></td>
      <td>Préstamos por Pagar:</td>
      <td><input name="P_Loans_Pay_Y1" type="text" value="<?php echo $P_Loans_Pay_Y1; ?>" class="form-control"></td>
      <td><input name="P_Loans_Pay_Y2" type="text" value="<?php echo $P_Loans_Pay_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Acciones de empresas cotizadas en Bolsa:</td>
      <td><input name="A_Shares_Listed_Cs_Y1" type="text" value="<?php echo $A_Shares_Listed_Cs_Y1; ?>" class="form-control"></td>
      <td><input name="A_Shares_Listed_Cs_Y2" type="text" value="<?php echo $A_Shares_Listed_Cs_Y2; ?>" class="form-control"></td>
      <td>Hipotecas sobre Bienes Raíces:</td>
      <td><input name="P_Real_Estate_Mortgages_Y1" type="text" value="<?php echo $P_Real_Estate_Mortgages_Y1; ?>" class="form-control"></td>
      <td><input name="P_Real_Estate_Mortgages_Y2" type="text" value="<?php echo $P_Real_Estate_Mortgages_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Otros Valores de Renta Fija (Pagarés, Plazo Fijos, Letras, Obligaciones):</td>
      <td><input name="A_Other_Fixed_Income_Y1" type="text" value="<?php echo $A_Other_Fixed_Income_Y1; ?>" class="form-control"></td>
      <td><input name="A_Other_Fixed_Income_Y2" type="text" value="<?php echo $A_Other_Fixed_Income_Y2; ?>" class="form-control"></td>
      <td>Otros Pasivos (Saldos de tarjetas de crédito entre otros):</td>
      <td><input name="P_Other_Liabilities_Y1" type="text" value="<?php echo $P_Other_Liabilities_Y1; ?>" class="form-control"></td>
      <td><input name="P_Other_Liabilities_Y2" type="text" value="<?php echo $P_Other_Liabilities_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Otros Activos (Bienes Patrimoniales, que no se transforman en dinero tan rápido):</td>
      <td><input name="A_Other_Assets_Y1" type="text" value="<?php echo $A_Other_Assets_Y1; ?>" class="form-control"></td>
      <td><input name="A_Other_Assets_Y2" type="text" value="<?php echo $A_Other_Assets_Y2; ?>" class="form-control"></td>
      <td>Impuesto e Intereses Adeudados:</td>
      <td><input name="P_Tax_Interest_Due_Y1" type="text" value="<?php echo $P_Tax_Interest_Due_Y1; ?>" class="form-control"></td>
      <td><input name="P_Tax_Interest_Due_Y2" type="text" value="<?php echo $P_Tax_Interest_Due_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Bienes Raíces:</td>
      <td><input name="A_Real_estate_Y1" type="text" value="<?php echo $A_Real_estate_Y1; ?>" class="form-control"></td>
      <td><input name="A_Real_estate_Y2" type="text" value="<?php echo $A_Real_estate_Y2; ?>" class="form-control"></td>
      <td>&nbsp;</td>
      <td><input name="P_Real_estate_Y1" type="text" value="<?php echo $P_Real_estate_Y1; ?>" class="form-control"></td>
      <td><input name="P_Real_estate_Y2" type="text" value="<?php echo $P_Real_estate_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Valor de Vivienda Principal:</td>
      <td><input name="A_Main_Home_Value_Y1" type="text" value="<?php echo $A_Main_Home_Value_Y1; ?>" class="form-control"></td>
      <td><input name="A_Main_Home_Value_Y2" type="text" value="<?php echo $A_Main_Home_Value_Y2; ?>" class="form-control"></td>
      <td>&nbsp;</td>
      <td><input name="P_Main_Home_Value_Y1" type="text" value="<?php echo $P_Main_Home_Value_Y1; ?>" class="form-control"></td>
      <td><input name="P_Main_Home_Value_Y2" type="text" value="<?php echo $P_Main_Home_Value_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Propiedad Personal (Automóvil, Mobiliario, etc.):</td>
      <td><input name="A_Personal_Property_Y1" type="text" value="<?php echo $A_Personal_Property_Y1; ?>" class="form-control"></td>
      <td><input name="A_Personal_Property_Y2" type="text" value="<?php echo $A_Personal_Property_Y2; ?>" class="form-control"></td>
      <td>&nbsp;</td>
      <td><input name="P_Personal_Property_Y1" type="text" value="<?php echo $P_Personal_Property_Y1; ?>" class="form-control"></td>
      <td><input name="P_Personal_Property_Y2" type="text" value="<?php echo $P_Personal_Property_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Otros Activos:</td>
      <td><input name="A_Other_Assets2_Y1" type="text" value="<?php echo $A_Other_Assets2_Y1; ?>" class="form-control"></td>
      <td><input name="A_Other_Assets2_Y2" type="text" value="<?php echo $A_Other_Assets2_Y2; ?>" class="form-control"></td>
      <td>&nbsp;</td>
      <td><input name="P_Other_Assets2_Y1" type="text" value="<?php echo $P_Other_Assets2_Y1; ?>" class="form-control"></td>
      <td><input name="P_Other_Assets2_Y2" type="text" value="<?php echo $P_Other_Assets2_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Total Activo:</td>
      <td><input name="A_Total_Assets_Y1" type="text" value="<?php echo $A_Total_Assets_Y1; ?>" class="form-control"></td>
      <td><input name="A_Total_Assets_Y2" type="text" value="<?php echo $A_Total_Assets_Y2; ?>" class="form-control"></td>
      <td>Total Pasivo:</td>
      <td><input name="P_Total_Liabilities_Y1" type="text" value="<?php echo $P_Total_Liabilities_Y1; ?>" class="form-control"></td>
      <td><input name="P_Total_Liabilities_Y2" type="text" value="<?php echo $P_Total_Liabilities_Y2; ?>" class="form-control"></td>
    </tr>
  </tbody>
</table>

<!-- Income and Expenses -->
<table  cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
  <thead>
    <tr>
      <th colspan="3" style="background-color: #f2f2f2;">INGRESOS</th>
      <th colspan="3" style="background-color: #f2f2f2;">GASTOS</th>
    </tr>
  </thead>
  <tbody>
    <!-- Empty rows for header spacing -->
    <tr>
      <td colspan="3"></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td>Salario:</td>
      <td><input name="I_Salary_Y1" type="text" value="<?php echo $I_Salary_Y1; ?>" class="form-control"></td>
      <td><input name="I_Salary_Y2" type="text" value="<?php echo $I_Salary_Y2; ?>" class="form-control"></td>
      <td>Hipoteca:</td>
      <td><input name="E_Mortgage_Y1" type="text" value="<?php echo $E_Mortgage_Y1; ?>" class="form-control"></td>
      <td><input name="E_Mortgage_Y2" type="text" value="<?php echo $E_Mortgage_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Renta:</td>
      <td><input name="I_Rent_Y1" type="text" value="<?php echo $I_Rent_Y1; ?>" class="form-control"></td>
      <td><input name="I_Rent_Y2" type="text" value="<?php echo $I_Rent_Y2; ?>" class="form-control"></td>
      <td>Servicios Públicos:</td>
      <td><input name="E_Public_Services_Y1" type="text" value="<?php echo $E_Public_Services_Y1; ?>" class="form-control"></td>
      <td><input name="E_Public_Services_Y2" type="text" value="<?php echo $E_Public_Services_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Intereses Ganados:</td>
      <td><input name="I_Earned_Interest_Y1" type="text" value="<?php echo $I_Earned_Interest_Y1; ?>" class="form-control"></td>
      <td><input name="I_Earned_Interest_Y2" type="text" value="<?php echo $I_Earned_Interest_Y2; ?>" class="form-control"></td>
      <td>Teléfono:</td>
      <td><input name="E_Phone_Y1" type="text" value="<?php echo $E_Phone_Y1; ?>" class="form-control"></td>
      <td><input name="E_Phone_Y2" type="text" value="<?php echo $E_Phone_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Dividendos:</td>
      <td><input name="I_Dividends_Y1" type="text" value="<?php echo $I_Dividends_Y1; ?>" class="form-control"></td>
      <td><input name="I_Dividends_Y2" type="text" value="<?php echo $I_Dividends_Y2; ?>" class="form-control"></td>
      <td>Seguro:</td>
      <td><input name="E_Insurance_Y1" type="text" value="<?php echo $E_Insurance_Y1; ?>" class="form-control"></td>
      <td><input name="E_Insurance_Y2" type="text" value="<?php echo $E_Insurance_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Otros Ingresos:</td>
      <td><input name="I_Other_Income_Y1" type="text" value="<?php echo $I_Other_Income_Y1; ?>" class="form-control"></td>
      <td><input name="I_Other_Income_Y2" type="text" value="<?php echo $I_Other_Income_Y2; ?>" class="form-control"></td>
      <td>Comida:</td>
      <td><input name="E_Food_Y1" type="text" value="<?php echo $E_Food_Y1; ?>" class="form-control"></td>
      <td><input name="E_Food_Y2" type="text" value="<?php echo $E_Food_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Transporte:</td>
      <td><input name="E_Transportation_Y1" type="text" value="<?php echo $E_Transportation_Y1; ?>" class="form-control"></td>
      <td><input name="E_Transportation_Y2" type="text" value="<?php echo $E_Transportation_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Total Ingresos:</td>
      <td><input name="I_Total_Income_Y1" type="text" value="<?php echo $I_Total_Income_Y1; ?>" class="form-control"></td>
      <td><input name="I_Total_Income_Y2" type="text" value="<?php echo $I_Total_Income_Y2; ?>" class="form-control"></td>
      <td>Total Gastos:</td>
      <td><input name="E_Total_Expenses_Y1" type="text" value="<?php echo $E_Total_Expenses_Y1; ?>" class="form-control"></td>
      <td><input name="E_Total_Expenses_Y2" type="text" value="<?php echo $E_Total_Expenses_Y2; ?>" class="form-control"></td>
    </tr>
  </tbody>
</table>

<!-- Differences and Financial Ratios -->
<table  cellpadding="10" cellspacing="0" style="width: 100%;">
  <thead>
    <tr>
      <th colspan="3" style="background-color: #f2f2f2;">DIFERENCIAS</th>
      <th colspan="3" style="background-color: #f2f2f2;">RAZONES FINANCIERAS</th>
    </tr>
  </thead>
  <tbody>
    <!-- Empty rows for header spacing -->
    <tr>
      <td colspan="3"></td>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td>Activo Total - Pasivo Total:</td>
      <td><input name="Diff_Assets_Liabilities_Y1" type="text" value="<?php echo $Diff_Assets_Liabilities_Y1; ?>" class="form-control"></td>
      <td><input name="Diff_Assets_Liabilities_Y2" type="text" value="<?php echo $Diff_Assets_Liabilities_Y2; ?>" class="form-control"></td>
      <td>Razón de Liquidez:</td>
      <td><input name="Ratio_Liquidity_Y1" type="text" value="<?php echo $Ratio_Liquidity_Y1; ?>" class="form-control"></td>
      <td><input name="Ratio_Liquidity_Y2" type="text" value="<?php echo $Ratio_Liquidity_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>Ingreso Total - Gastos Totales:</td>
      <td><input name="Diff_Income_Expenses_Y1" type="text" value="<?php echo $Diff_Income_Expenses_Y1; ?>" class="form-control"></td>
      <td><input name="Diff_Income_Expenses_Y2" type="text" value="<?php echo $Diff_Income_Expenses_Y2; ?>" class="form-control"></td>
      <td>Razón de Solvencia:</td>
      <td><input name="Ratio_Solvency_Y1" type="text" value="<?php echo $Ratio_Solvency_Y1; ?>" class="form-control"></td>
      <td><input name="Ratio_Solvency_Y2" type="text" value="<?php echo $Ratio_Solvency_Y2; ?>" class="form-control"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Razón de Rentabilidad:</td>
      <td><input name="Ratio_Profitability_Y1" type="text" value="<?php echo $Ratio_Profitability_Y1; ?>" class="form-control"></td>
      <td><input name="Ratio_Profitability_Y2" type="text" value="<?php echo $Ratio_Profitability_Y2; ?>" class="form-control"></td>
    </tr>
  </tbody>
</table>

<!-- Additional Notes -->
<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
  <thead>
    <tr>
      <th colspan="6" style="background-color: #f2f2f2;">NOTAS ADICIONALES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="6"><textarea name="Additional_Notes" rows="4" cols="80" class="form-control"><?php echo $Additional_Notes; ?></textarea></td>
    </tr>
  </tbody>
</table>

<!-- Submit Button -->
<div class="form-group" style="margin-top: 20px;">
  <button type="submit" class="btn btn-primary">Guardar</button>
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
        <table class="checkbox-table">
          <tr>
            <td>
              <input name="Signature1_Permanent" type="checkbox" value="1" <?php if ($Signature1_Permanent==1) echo 'checked'; ?> id="Conjunta">
              <label for="Conjunta">Conjunta</label>
            </td>
          </tr>
          <tr>
            <td>
              <input name="Signature1_Not_variable" type="checkbox" value="1" <?php if ($Signature1_Not_variable==1) echo 'checked'; ?> id="Indistinta">
              <label for="Indistinta">Indistinta</label>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="fields-block-wrapper">
  <div class="d-flex">
    <div class="table-cell">
      <table>
        <tr>
          <td>
            <p>Nombre completo (en imprenta):</p>
            <input name="Full_name1" type="text" value="<?php echo $Full_name1; ?>" class="form-control">
          </td>
          <td>
            <p>Nombre completo (en imprenta):</p>
            <input name="Full_name2" type="text" value="<?php echo $Full_name2; ?>" class="form-control">
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="d-flex mt-16">
    <div class="table-cell">
      <table>
        <tr>
          <td>
            <p>No. de Documento (ID):</p>
            <input name="Document_ID1" type="text" value="<?php echo $Document_ID1; ?>" class="form-control">
          </td>
          <td>
            <p>No. de Documento (ID):</p>
            <input name="Document_ID2" type="text" value="<?php echo $Document_ID2; ?>" class="form-control">
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="d-flex mt-16">
    <div class="table-cell flex-25">
      &nbsp;
    </div>
    <div class="table-cell flex-25">
      <table>
        <tr>
          <td>
            <p>Fecha:</p>
            <input name="Signature_Date1" type="text" value="<?php echo $Signature_Date1; ?>" class="form-control" id="datepicker" placeholder="DD/MM/AAAA..">
            <small>DD/MM/AAAA</small>
          </td>
        </tr>
      </table>
    </div>
    <div class="table-cell flex-25">
      &nbsp;
    </div>
    <div class="table-cell flex-25">
      <table>
        <tr>
          <td>
            <p>Fecha:</p>
            <input name="Signature_Date2" type="text" value="<?php echo $Signature_Date2; ?>" class="form-control" id="datepicker1" placeholder="DD/MM/AAAA..">
            <small>DD/MM/AAAA</small>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="d-flex mt-16">
    <div class="table-cell signature flex-50">
      <div class="signature-block"></div>
      <p>Firma</p>
    </div>
    <div class="table-cell signature flex-50">
      <div class="signature-block"></div>
      <p>Firma</p>
    </div>
  </div>
</div>
      <div class="pdf-type-subtext">
        <p><b>Verificado por Personal de la Casa de Valores:</b></p>
      </div>
      <div class="fields-block-wrapper">
      <div class="fields-block-wrapper">
  <table>
    <tr>
      <td class="d-flex single-field flex-33">
        <div class="vertical-form-field">
          <p>Nombre del Corredor:</p>
          <input name="Runners_Name" type="text" value="<?php echo $Runners_Name; ?>" class="form-control">
        </div>
      </td>
      <td class="d-flex single-field flex-33">
        <div class="vertical-form-field">
          <p>Nombre del Oficial de Cumplimiento:</p>
          <input name="Compliance_Officer_Name" type="text" value="<?php echo $Compliance_Officer_Name; ?>" class="form-control">
        </div>
      </td>
      <td class="d-flex single-field flex-33">
        <div class="vertical-form-field">
          <p>Nombre del Ejecutivo Principal:</p>
          <input name="Chief_Executive_Name" type="text" value="<?php echo $Chief_Executive_Name; ?>" class="form-control">
        </div>
      </td>
    </tr>
    <tr>
      <td class="d-flex single-field flex-33">
        <div class="vertical-form-field">
          <p>Fecha:</p>
          <input name="Runners_Date" type="text" value="<?php echo $Runners_Date; ?>" class="form-control" id="datepicker2" placeholder="DD/MM/AAAA..">
          <small>DD/MM/AAAA</small>
        </div>
      </td>
      <td class="d-flex single-field flex-33">
        <div class="vertical-form-field">
          <p>Fecha:</p>
          <input name="Compliance_Officer_Date" type="text" value="<?php echo $Compliance_Officer_Date; ?>" class="form-control" id="datepicker3" placeholder="DD/MM/AAAA..">
          <small>DD/MM/AAAA</small>
        </div>
      </td>
      <td class="d-flex single-field flex-33">
        <div class="vertical-form-field">
          <p>Fecha:</p>
          <input name="Chief_Executive_Date" type="text" value="<?php echo $Chief_Executive_Date; ?>" class="form-control" id="datepicker4" placeholder="DD/MM/AAAA..">
          <small>DD/MM/AAAA</small>
        </div>
      </td>
    </tr>
    <tr>
      <td class="d-flex signature single-field flex-33">
        <div class="signature-block"></div>
        <p>Firma del Corredor de Valores</p>
      </td>
      <td class="d-flex signature single-field flex-33">
        <div class="signature-block"></div>
        <p>Firma del Oficial de Cumplimiento</p>
      </td>
      <td class="d-flex signature single-field flex-33">
        <div class="signature-block"></div>
        <p>Firma del Ejecutivo Principal</p>
      </td>
    </tr>
  </table>
</div>
</div>
      <div class="pdf-type-subtext">
        <p><b>Anexo A</b></p>
      </div>
      <table  cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
  <thead>
    <tr>
      <th style="width: 10%; text-align: left;">Código</th>
      <th style="width: 90%; text-align: left;">Nombre Actividad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>AC001</td>
      <td>ABOGADOS, NOTARIOS, OTROS PROFESIONALES JURIDICOS Y CONTADORES PUBLICOS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC002</td>
      <td>AFIANZADOR, PRESTAMISTA</td>
    </tr>
    <tr>
      <td>AC003</td>
      <td>AGENCIAS DE PAGOS, REGISTRO Y TRANSFERENCIAS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC004</td>
      <td>AGENCIAS DE VIAJE</td>
    </tr>
    <tr>
      <td>AC005</td>
      <td>AGENTE DE INVERSION</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC006</td>
      <td>ALQUILERES VARIOS</td>
    </tr>
    <tr>
      <td>AC007</td>
      <td>AMA DE CASA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC008</td>
      <td>ASOCIACIONES CIVILES O ORGANIZACIONES SIN FINES DE LUCRO Y BENEFICENCIAS</td>
    </tr>
    <tr>
      <td>AC009</td>
      <td>BANCOS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC010</td>
      <td>BIENES INMUEBLES</td>
    </tr>
    <tr>
      <td>AC011</td>
      <td>CASA DE CAMBIO</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC012</td>
      <td>CASA DE EMPENO</td>
    </tr>
    <tr>
      <td>AC013</td>
      <td>CASINOS Y SALAS DE JUEGOS, EMPRESAS DE APUESTAS Y APUESTAS POR INTERNET</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC014</td>
      <td>CLUBES SOCIALES Y CIVICOS</td>
    </tr>
    <tr>
      <td>AC015</td>
      <td>COMERCIALIZADORAS Y ARRENDADORAS DE VEHICULOS AUTOMOTORES Y AERONAVES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC016</td>
      <td>COMERCIALIZADORES DE ANTIGUEDADES, JOYAS, METALES PRECIOSOS, PIEDRAS PRECIOSAS Y OTROS BIENES
        SANTUARIOS</td>
    </tr>
    <tr>
      <td>AC017</td>
      <td>COMERCIALIZADORES DE ARMAS, EXPLOSIVOS Y MUNICIONES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC018</td>
      <td>COMERCIO MAYORISTA</td>
    </tr>
    <tr>
      <td>AC019</td>
      <td>COMERCIO MINORISTA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC020</td>
      <td>CONSTRUCCION</td>
    </tr>
    <tr>
      <td>AC021</td>
      <td>DEPORTE</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC022</td>
      <td>DESEMPLEADO</td>
    </tr>
    <tr>
      <td>AC023</td>
      <td>DESPACHANTE DE ADUANA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC024</td>
      <td>DOCENTE</td>
    </tr>
    <tr>
      <td>AC025</td>
      <td>E-COMMERCE</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC026</td>
      <td>ELECTRICIDAD, GAS, AGUA Y SERVICIOS SANITARIOS</td>
    </tr>
    <tr>
      <td>AC027</td>
      <td>EMPLEADO</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC028</td>
      <td>EMPRESARIO</td>
    </tr>
    <tr>
      <td>AC029</td>
      <td>ESTABLECIMIENTOS FINANCIEROS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC030</td>
      <td>ESTUDIANTE</td>
    </tr>
    <tr>
      <td>AC031</td>
      <td>EXPLOTACION AGRICOLA GANADERA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC032</td>
      <td>EXPLOTACION DE MINAS Y CANTERAS</td>
    </tr>
    <tr>
      <td>AC033</td>
      <td>FABRICACION DE MUEBLES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC034</td>
      <td>FABRICACION DE VEHICULOS AUTOMOTORES</td>
    </tr>
    <tr>
      <td>AC035</td>
      <td>FACTORING</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC036</td>
      <td>FIDUCIARIA</td>
    </tr>
    <tr>
      <td>AC037</td>
      <td>FINANCIERAS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC038</td>
      <td>FINANZAS</td>
    </tr>
    <tr>
      <td>AC039</td>
      <td>FUNDACIONES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC040</td>
      <td>FUNDACIONES SIN FINES DE LUCRO</td>
    </tr>
    <tr>
      <td>AC041</td>
      <td>GANADERIA Y/O AGRICULTURA EN GENERAL</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC042</td>
      <td>IMP Y EXPORTACION MERCANCIA GENERAL</td>
    </tr>
    <tr>
      <td>AC043</td>
      <td>IMPRENTA, EDITORIALES, PUBLICACIONES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC044</td>
      <td>INDETERMINADO</td>
    </tr>
    <tr>
      <td>AC045</td>
      <td>INDUSTRIA MANUFACTURERAS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC046</td>
      <td>INMOBILIARIAS Y AGENTES INMOBILIARIOS</td>
    </tr>
    <tr>
      <td>AC047</td>
      <td>INSTITUCIONES DEL GOBIERNO (SERVICIOS GUBERNAMENTALES)</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC048</td>
      <td>JOYERIA Y RELOJERIA</td>
    </tr>
    <tr>
      <td>AC049</td>
      <td>JUBILADO Y/O PENSIONADO</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC050</td>
      <td>LIBRERIAS Y PAPELERIAS</td>
    </tr>
    <tr>
      <td>AC051</td>
      <td>LOGISTICA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC052</td>
      <td>MEDIOS DE COMUNICACION</td>
    </tr>
    <tr>
      <td>AC053</td>
      <td>MEDICINA Y FARMACIA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC054</td>
      <td>MICRO EMPRESA</td>
    </tr>
    <tr>
      <td>AC055</td>
      <td>OTROS SERVICIOS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC056</td>
      <td>PEQUEÑA EMPRESA</td>
    </tr>
    <tr>
      <td>AC057</td>
      <td>PROFESIONALES LIBERALES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC058</td>
      <td>PROPONIENTES DE CRÉDITOS</td>
    </tr>
    <tr>
      <td>AC059</td>
      <td>SECTOR PRIVADO</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC060</td>
      <td>SECTOR PUBLICO</td>
    </tr>
    <tr>
      <td>AC061</td>
      <td>SEGURIDAD PRIVADA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC062</td>
      <td>SEGUROS</td>
    </tr>
    <tr>
      <td>AC063</td>
      <td>SEGUROS DE VIDA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC064</td>
      <td>SEGUROS GENERALES</td>
    </tr>
    <tr>
      <td>AC065</td>
      <td>SOCIEDADES ANONIMAS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC066</td>
      <td>SOCIEDADES DE RESPONSABILIDAD LIMITADA</td>
    </tr>
    <tr>
      <td>AC067</td>
      <td>TELECOMUNICACIONES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC068</td>
      <td>TRANSPORTES Y CARGAS</td>
    </tr>
    <tr>
      <td>AC069</td>
      <td>TRANSPORTES INTERNACIONALES</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC070</td>
      <td>TRANSPORTES NACIONALES</td>
    </tr>
    <tr>
      <td>AC071</td>
      <td>VENTA DE ALIMENTOS Y BEBIDAS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC072</td>
      <td>VENTA DE ARTICULOS DE USO PERSONAL</td>
    </tr>
    <tr>
      <td>AC073</td>
      <td>VENTA DE ARTICULOS DE HIGIENE Y BELLEZA</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC074</td>
      <td>VENTA DE ARTICULOS DE HOGAR</td>
    </tr>
    <tr>
      <td>AC075</td>
      <td>VENTA DE ELECTRODOMESTICOS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC076</td>
      <td>VENTA DE JOYAS</td>
    </tr>
    <tr>
      <td>AC077</td>
      <td>VENTA DE LIBROS</td>
    </tr>
    <tr style="background-color: #f0f0f0;">
      <td>AC078</td>
      <td>VENTA DE VEHICULOS</td>
    </tr>
    <tr>
      <td>AC079</td>
      <td>VENTA DE VESTIMENTA</td>
    </tr>
  </tbody>
</table>



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
