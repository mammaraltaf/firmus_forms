<?PHP
//---modif---//
error_reporting(E_ALL);
include "../dbclass.php";
include "../functions.php";

// Helper function to check if a value is set and not empty
function getPostValue($key) {
    return isset($_POST[$key]) && !empty($_POST[$key]) ? "'".$_POST[$key]."'" : 'NULL';
}

// Function to handle date conversion
function getPostDateValue($key) {
    return isset($_POST[$key]) && !empty($_POST[$key]) ? "'".frenchtodate($_POST[$key])."'" : 'NULL';
}

$id=getPostValue('id');
$Invest_Exp_Conserv=getPostValue('Invest_Exp_Conserv');
$Invest_Exp_Moderat=getPostValue('Invest_Exp_Moderat');
$Invest_Exp_Aggress=getPostValue('Invest_Exp_Aggress');
$Mutual_Funds_L=getPostValue('Mutual_Funds_L');
$Mutual_Funds_M=getPostValue('Mutual_Funds_M');
$Mutual_Funds_H=getPostValue('Mutual_Funds_H');
$Mutual_Funds_Exp=getPostValue('Mutual_Funds_Exp');
$Mutual_Funds_Markets=getPostValue('Mutual_Funds_Markets');
$Fixed_Rent_L=getPostValue('Fixed_Rent_L');
$Fixed_Rent_M=getPostValue('Fixed_Rent_M');
$Fixed_Rent_H=getPostValue('Fixed_Rent_H');
$Fixed_Rent_Exp=getPostValue('Fixed_Rent_Exp');
$Fixed_Rent_Markets=getPostValue('Fixed_Rent_Markets');
$Struct_Prod_L=getPostValue('Struct_Prod_L');
$Struct_Prod_M=getPostValue('Struct_Prod_M');
$Struct_Prod_H=getPostValue('Struct_Prod_H');
$Struct_Prod_Exp=getPostValue('Struct_Prod_Exp');
$Struct_Prod_Markets=getPostValue('Struct_Prod_Markets');
$Actions_L=getPostValue('Actions_L');
$Actions_M=getPostValue('Actions_M');
$Actions_H=getPostValue('Actions_H');
$Actions_Exp=getPostValue('Actions_Exp');
$Actions_Markets=getPostValue('Actions_Markets');
$Derivatives_L=getPostValue('Derivatives_L');
$Derivatives_M=getPostValue('Derivatives_M');
$Derivatives_H=getPostValue('Derivatives_H');
$Derivatives_Exp=getPostValue('Derivatives_Exp');
$Derivatives_Markets=getPostValue('Derivatives_Markets');
$Others_L=getPostValue('Others_L');
$Others_M=getPostValue('Others_M');
$Others_H=getPostValue('Others_H');
$Others_Exp=getPostValue('Others_Exp');
$Others_Markets=getPostValue('Others_Markets');
$P_S_Ops_Inf_1M=getPostValue('P_S_Ops_Inf_1M');
$P_S_Ops_1M_10M=getPostValue('P_S_Ops_1M_10M');
$P_S_Ops_Sup_10M=getPostValue('P_S_Ops_Sup_10M');
$S_Titles_Inf_1M=getPostValue('S_Titles_Inf_1M');
$S_Titles_1M_10M=getPostValue('S_Titles_1M_10M');
$S_Titles_Sup_10M=getPostValue('S_Titles_Sup_10M');
$W_Titles_Inf_1M=getPostValue('W_Titles_Inf_1M');
$W_Titles_1M_10M=getPostValue('W_Titles_1M_10M');
$W_Titles_Sup_10M=getPostValue('W_Titles_Sup_10M');
$C_Contribution_Inf_1M=getPostValue('C_Contribution_Inf_1M');
$C_Contribution_1M_10M=getPostValue('C_Contribution_1M_10M');
$C_Contribution_Sup_10M=getPostValue('C_Contribution_Sup_10M');
$C_withdrawal_Inf_1M=getPostValue('C_withdrawal_Inf_1M');
$C_withdrawal_1M_10M=getPostValue('C_withdrawal_1M_10M');
$C_withdrawal_Sup_10M=getPostValue('C_withdrawal_Sup_10M');
$P_S_Ops_Inf_12=getPostValue('P_S_Ops_Inf_12');
$P_S_Ops_12_24=getPostValue('P_S_Ops_12_24');
$P_S_Ops_Sup_24=getPostValue('P_S_Ops_Sup_24');
$S_Titles_Inf_12=getPostValue('S_Titles_Inf_12');
$S_Titles_12_24=getPostValue('S_Titles_12_24');
$S_Titles_Sup_24=getPostValue('S_Titles_Sup_24');
$W_Titles_Inf_12=getPostValue('W_Titles_Inf_12');
$W_Titles_12_24=getPostValue('W_Titles_12_24');
$W_Titles_Sup_24=getPostValue('W_Titles_Sup_24');
$C_Contribution_Inf_12=getPostValue('C_Contribution_Inf_12');
$C_Contribution_12_24=getPostValue('C_Contribution_12_24');
$C_Contribution_Sup_24=getPostValue('C_Contribution_Sup_24');
$C_withdrawal_Inf_12=getPostValue('C_withdrawal_Inf_12');
$C_withdrawal_12_24=getPostValue('C_withdrawal_12_24');
$C_withdrawal_Sup_24=getPostValue('C_withdrawal_Sup_24');
$Funds_Provided_ET=getPostValue('Funds_Provided_ET');
$Funds_Provided_Check=getPostValue('Funds_Provided_Check');
$Funds_Provided_Cash=getPostValue('Funds_Provided_Cash');
$Funds_Provided_Q_Cash=getPostValue('Funds_Provided_Q_Cash');
$Funds_Provided_Other=getPostValue('Funds_Provided_Other');
$Funds_Provided_Other_Detail=getPostValue('Funds_Provided_Other_Detail');
$E_A_Code=getPostValue('E_A_Code');
$Invest_obj_Preservation=getPostValue('Invest_obj_Preservation');
$Invest_obj_Cost_effec=getPostValue('Invest_obj_Cost_effec');
$Invest_obj_Capital_App=getPostValue('Invest_obj_Capital_App');
$invest_obj_p_exp_1=getPostValue('invest_obj_p_exp_1');
$invest_obj_p_exp_2=getPostValue('invest_obj_p_exp_2');
$invest_obj_p_exp_3=getPostValue('invest_obj_p_exp_3');
$invest_obj_p_exp_4=getPostValue('invest_obj_p_exp_4');
$Purp_Retirement_Fund=getPostValue('Purp_Retirement_Fund');
$Purp_Capital_Conserv=getPostValue('Purp_Capital_Conserv');
$Purp_Establish_Funds=getPostValue('Purp_Establish_Funds');
$Purp_Capitalize_Nbusiness=getPostValue('Purp_Capitalize_Nbusiness');
$Purp_Other=getPostValue('Purp_Other');
$Purp_Other_Detail=getPostValue('Purp_Other_Detail');
$Risk_Tol_1_2_Y=getPostValue('Risk_Tol_1_2_Y');
$Risk_Tol_3_5_Y=getPostValue('Risk_Tol_3_5_Y');
$Risk_Tol_Up_6_Y=getPostValue('Risk_Tol_Up_6_Y');
$Avg_ann_return_2_4=getPostValue('Avg_ann_return_2_4');
$Avg_ann_return_4_6=getPostValue('Avg_ann_return_4_6');
$Avg_ann_return_Up_7=getPostValue('Avg_ann_return_Up_7');
$percent_inv_0_25=getPostValue('percent_inv_0_25');
$percent_inv_26_50=getPostValue('percent_inv_26_50');
$percent_inv_Up_51=getPostValue('percent_inv_Up_51');
$inv_important_yes=getPostValue('inv_important_yes');
$inv_important_No=getPostValue('inv_important_No');
$inv_important_Very=getPostValue('inv_important_Very');
$A_Cash_Banks_Y1=getPostValue('A_Cash_Banks_Y1');
$A_Cash_Banks_Y2=getPostValue('A_Cash_Banks_Y2');
$P_Accounts_Payable_Y1=getPostValue('P_Accounts_Payable_Y1');
$P_Accounts_Payable_Y2=getPostValue('P_Accounts_Payable_Y2');
$A_Accounts_Receivable_Y1=getPostValue('A_Accounts_Receivable_Y1');
$A_Accounts_Receivable_Y2=getPostValue('A_Accounts_Receivable_Y2');
$P_Loans_Pay_Y1=getPostValue('P_Loans_Pay_Y1');
$P_Loans_Pay_Y2=getPostValue('P_Loans_Pay_Y2');
$A_Shares_Listed_Cs_Y1=getPostValue('A_Shares_Listed_Cs_Y1');
$A_Shares_Listed_Cs_Y2=getPostValue('A_Shares_Listed_Cs_Y2');
$P_Real_Estate_Mortgages_Y1=getPostValue('P_Real_Estate_Mortgages_Y1');
$P_Real_Estate_Mortgages_Y2=getPostValue('P_Real_Estate_Mortgages_Y2');
$A_Other_Fixed_Income_Y1=getPostValue('A_Other_Fixed_Income_Y1');
$A_Other_Fixed_Income_Y2=getPostValue('A_Other_Fixed_Income_Y2');
$P_Other_Liabilities_Y1=getPostValue('P_Other_Liabilities_Y1');
$P_Other_Liabilities_Y2=getPostValue('P_Other_Liabilities_Y2');
$A_Other_Assets_Y1=getPostValue('A_Other_Assets_Y1');
$A_Other_Assets_Y2=getPostValue('A_Other_Assets_Y2');
$P_Tax_Interest_Due_Y1=getPostValue('P_Tax_Interest_Due_Y1');
$P_Tax_Interest_Due_Y2=getPostValue('P_Tax_Interest_Due_Y2');
$A_Real_estate_Y1=getPostValue('A_Real_estate_Y1');
$A_Real_estate_Y2=getPostValue('A_Real_estate_Y2');
$P_Real_estate_Y1=getPostValue('P_Real_estate_Y1');
$P_Real_estate_Y2=getPostValue('P_Real_estate_Y2');
$A_Main_Home_Value_Y1=getPostValue('A_Main_Home_Value_Y1');
$A_Main_Home_Value_Y2=getPostValue('A_Main_Home_Value_Y2');
$P_Main_Home_Value_Y1=getPostValue('P_Main_Home_Value_Y1');
$P_Main_Home_Value_Y2=getPostValue('P_Main_Home_Value_Y2');
$A_Personal_Property_Y1=getPostValue('A_Personal_Property_Y1');
$A_Personal_Property_Y2=getPostValue('A_Personal_Property_Y2');
$P_Personal_Property_Y1=getPostValue('P_Personal_Property_Y1');
$P_Personal_Property_Y2=getPostValue('P_Personal_Property_Y2');
$A_Other_Assets2_Y1=getPostValue('A_Other_Assets2_Y1');
$A_Other_Assets2_Y2=getPostValue('A_Other_Assets2_Y2');
$P_Other_Assets2_Y1=getPostValue('P_Other_Assets2_Y1');
$P_Other_Assets2_Y2=getPostValue('P_Other_Assets2_Y2');
$A_Total_Assets_Y1=getPostValue('A_Total_Assets_Y1');
$A_Total_Assets_Y2=getPostValue('A_Total_Assets_Y2');
$P_Total_Passives_Y1=getPostValue('P_Total_Passives_Y1');
$P_Total_Passives_Y2=getPostValue('P_Total_Passives_Y2');
$R_Net_Worth_USD_Y1=getPostValue('R_Net_Worth_USD_Y1');
$R_Net_Worth_USD_Y2=getPostValue('R_Net_Worth_USD_Y2');
$R_Income_Y1=getPostValue('R_Income_Y1');
$R_Income_Y2=getPostValue('R_Income_Y2');
$R_Total_Expenses_Y1=getPostValue('R_Total_Expenses_Y1');
$R_Total_Expenses_Y2=getPostValue('R_Total_Expenses_Y2');
$R_Profit_Loss_Y1=getPostValue('R_Profit_Loss_Y1');
$R_Profit_Loss_Y2=getPostValue('R_Profit_Loss_Y2');
$R_Change_Assets_Y1=getPostValue('R_Change_Assets_Y1');
$R_Change_Assets_Y2=getPostValue('R_Change_Assets_Y2');
$Signature1_Permanent=getPostValue('Signature1_Permanent');
$Signature1_Not_variable=getPostValue('Signature1_Not_variable');
$Full_name1=getPostValue('Full_name1');
$Full_name2=getPostValue('Full_name2');
$Document_ID1=getPostValue('Document_ID1');
$Document_ID2=getPostValue('Document_ID2');
$Signature_Date1=getPostDateValue('Signature_Date1');
$Signature_Date2=getPostDateValue('Signature_Date2');
$Signature1=getPostValue('Signature1');
$Signature2=getPostValue('Signature2');
$Runners_Name=getPostValue('Runners_Name');
$Runners_Date=getPostDateValue('Runners_Date');
$Compliance_Officer_Name=getPostValue('Compliance_Officer_Name');
$Compliance_Officer_Date=getPostDateValue('Compliance_Officer_Date');
$Chief_Executive_Name=getPostValue('Chief_Executive_Name');
$Chief_Executive_Date=getPostDateValue('Chief_Executive_Date');
$Stock_Broker1_Signature=getPostValue('Stock_Broker1_Signature');
$Stock_Broker2_Signature=getPostValue('Stock_Broker2_Signature');
$Chief_Executive_Signature=getPostValue('Chief_Executive_Signature');
$account_number=getPostValue('account_number');


$db = new database('');
$db->connect();


$db->query("update FOR_FF_PFT_ES set
Invest_Exp_Conserv=$Invest_Exp_Conserv,
Invest_Exp_Moderat=$Invest_Exp_Moderat,
Invest_Exp_Aggress=$Invest_Exp_Aggress,
Mutual_Funds_L=$Mutual_Funds_L,
Mutual_Funds_M=$Mutual_Funds_M,
Mutual_Funds_H=$Mutual_Funds_H,
Mutual_Funds_Exp=$Mutual_Funds_Exp,
Mutual_Funds_Markets=$Mutual_Funds_Markets,
Fixed_Rent_L=$Fixed_Rent_L,
Fixed_Rent_M=$Fixed_Rent_M,
Fixed_Rent_H=$Fixed_Rent_H,
Fixed_Rent_Exp=$Fixed_Rent_Exp,
Fixed_Rent_Markets=$Fixed_Rent_Markets,
Struct_Prod_L=$Struct_Prod_L,
Struct_Prod_M=$Struct_Prod_M,
Struct_Prod_H=$Struct_Prod_H,
Struct_Prod_Exp=$Struct_Prod_Exp,
Struct_Prod_Markets=$Struct_Prod_Markets,
Actions_L=$Actions_L,
Actions_M=$Actions_M,
Actions_H=$Actions_H,
Actions_Exp=$Actions_Exp,
Actions_Markets=$Actions_Markets,
Derivatives_L=$Derivatives_L,
Derivatives_M=$Derivatives_M,
Derivatives_H=$Derivatives_H,
Derivatives_Exp=$Derivatives_Exp,
Derivatives_Markets=$Derivatives_Markets,
Others_L=$Others_L,
Others_M=$Others_M,
Others_H=$Others_H,
Others_Exp=$Others_Exp,
Others_Markets=$Others_Markets,
P_S_Ops_Inf_1M=$P_S_Ops_Inf_1M,
P_S_Ops_1M_10M=$P_S_Ops_1M_10M,
P_S_Ops_Sup_10M=$P_S_Ops_Sup_10M,
S_Titles_Inf_1M=$S_Titles_Inf_1M,
S_Titles_1M_10M=$S_Titles_1M_10M,
S_Titles_Sup_10M=$S_Titles_Sup_10M,
W_Titles_Inf_1M=$W_Titles_Inf_1M,
W_Titles_1M_10M=$W_Titles_1M_10M,
W_Titles_Sup_10M=$W_Titles_Sup_10M,
C_Contribution_Inf_1M=$C_Contribution_Inf_1M,
C_Contribution_1M_10M=$C_Contribution_1M_10M,
C_Contribution_Sup_10M=$C_Contribution_Sup_10M,
C_withdrawal_Inf_1M=$C_withdrawal_Inf_1M,
C_withdrawal_1M_10M=$C_withdrawal_1M_10M,
C_withdrawal_Sup_10M=$C_withdrawal_Sup_10M,
P_S_Ops_Inf_12=$P_S_Ops_Inf_12,
P_S_Ops_12_24=$P_S_Ops_12_24,
P_S_Ops_Sup_24=$P_S_Ops_Sup_24,
S_Titles_Inf_12=$S_Titles_Inf_12,
S_Titles_12_24=$S_Titles_12_24,
S_Titles_Sup_24=$S_Titles_Sup_24,
W_Titles_Inf_12=$W_Titles_Inf_12,
W_Titles_12_24=$W_Titles_12_24,
W_Titles_Sup_24=$W_Titles_Sup_24,
C_Contribution_Inf_12=$C_Contribution_Inf_12,
C_Contribution_12_24=$C_Contribution_12_24,
C_Contribution_Sup_24=$C_Contribution_Sup_24,
C_withdrawal_Inf_12=$C_withdrawal_Inf_12,
C_withdrawal_12_24=$C_withdrawal_12_24,
C_withdrawal_Sup_24=$C_withdrawal_Sup_24,
Funds_Provided_ET=$Funds_Provided_ET,
Funds_Provided_Check=$Funds_Provided_Check,
Funds_Provided_Cash=$Funds_Provided_Cash,
Funds_Provided_Q_Cash=$Funds_Provided_Q_Cash,
Funds_Provided_Other=$Funds_Provided_Other,
Funds_Provided_Other_Detail=$Funds_Provided_Other_Detail,
E_A_Code=$E_A_Code,
Invest_obj_Preservation=$Invest_obj_Preservation,
Invest_obj_Cost_effec=$Invest_obj_Cost_effec,
Invest_obj_Capital_App=$Invest_obj_Capital_App,
invest_obj_p_exp_1=$invest_obj_p_exp_1,
invest_obj_p_exp_2=$invest_obj_p_exp_2,
invest_obj_p_exp_3=$invest_obj_p_exp_3,
invest_obj_p_exp_4=$invest_obj_p_exp_4,
Purp_Retirement_Fund=$Purp_Retirement_Fund,
Purp_Capital_Conserv=$Purp_Capital_Conserv,
Purp_Establish_Funds=$Purp_Establish_Funds,
Purp_Capitalize_Nbusiness=$Purp_Capitalize_Nbusiness,
Purp_Other=$Purp_Other,
Purp_Other_Detail=$Purp_Other_Detail,
Risk_Tol_1_2_Y=$Risk_Tol_1_2_Y,
Risk_Tol_3_5_Y=$Risk_Tol_3_5_Y,
Risk_Tol_Up_6_Y=$Risk_Tol_Up_6_Y,
Avg_ann_return_2_4=$Avg_ann_return_2_4,
Avg_ann_return_4_6=$Avg_ann_return_4_6,
Avg_ann_return_Up_7=$Avg_ann_return_Up_7,
percent_inv_0_25=$percent_inv_0_25,
percent_inv_26_50=$percent_inv_26_50,
percent_inv_Up_51=$percent_inv_Up_51,
inv_important_yes=$inv_important_yes,
inv_important_No=$inv_important_No,
inv_important_Very=$inv_important_Very,
A_Cash_Banks_Y1=$A_Cash_Banks_Y1,
A_Cash_Banks_Y2=$A_Cash_Banks_Y2,
P_Accounts_Payable_Y1=$P_Accounts_Payable_Y1,
P_Accounts_Payable_Y2=$P_Accounts_Payable_Y2,
A_Accounts_Receivable_Y1=$A_Accounts_Receivable_Y1,
A_Accounts_Receivable_Y2=$A_Accounts_Receivable_Y2,
P_Loans_Pay_Y1=$P_Loans_Pay_Y1,
P_Loans_Pay_Y2=$P_Loans_Pay_Y2,
A_Shares_Listed_Cs_Y1=$A_Shares_Listed_Cs_Y1,
A_Shares_Listed_Cs_Y2=$A_Shares_Listed_Cs_Y2,
P_Real_Estate_Mortgages_Y1=$P_Real_Estate_Mortgages_Y1,
P_Real_Estate_Mortgages_Y2=$P_Real_Estate_Mortgages_Y2,
A_Other_Fixed_Income_Y1=$A_Other_Fixed_Income_Y1,
A_Other_Fixed_Income_Y2=$A_Other_Fixed_Income_Y2,
P_Other_Liabilities_Y1=$P_Other_Liabilities_Y1,
P_Other_Liabilities_Y2=$P_Other_Liabilities_Y2,
A_Other_Assets_Y1=$A_Other_Assets_Y1,
A_Other_Assets_Y2=$A_Other_Assets_Y2,
P_Tax_Interest_Due_Y1=$P_Tax_Interest_Due_Y1,
P_Tax_Interest_Due_Y2=$P_Tax_Interest_Due_Y2,
A_Real_estate_Y1=$A_Real_estate_Y1,
A_Real_estate_Y2=$A_Real_estate_Y2,
P_Real_estate_Y1=$P_Real_estate_Y1,
P_Real_estate_Y2=$P_Real_estate_Y2,
A_Main_Home_Value_Y1=$A_Main_Home_Value_Y1,
A_Main_Home_Value_Y2=$A_Main_Home_Value_Y2,
P_Main_Home_Value_Y1=$P_Main_Home_Value_Y1,
P_Main_Home_Value_Y2=$P_Main_Home_Value_Y2,
A_Personal_Property_Y1=$A_Personal_Property_Y1,
A_Personal_Property_Y2=$A_Personal_Property_Y2,
P_Personal_Property_Y1=$P_Personal_Property_Y1,
P_Personal_Property_Y2=$P_Personal_Property_Y2,
A_Other_Assets2_Y1=$A_Other_Assets2_Y1,
A_Other_Assets2_Y2=$A_Other_Assets2_Y2,
P_Other_Assets2_Y1=$P_Other_Assets2_Y1,
P_Other_Assets2_Y2=$P_Other_Assets2_Y2,
A_Total_Assets_Y1=$A_Total_Assets_Y1,
A_Total_Assets_Y2=$A_Total_Assets_Y2,
P_Total_Passives_Y1=$P_Total_Passives_Y1,
P_Total_Passives_Y2=$P_Total_Passives_Y2,
R_Net_Worth_USD_Y1=$R_Net_Worth_USD_Y1,
R_Net_Worth_USD_Y2=$R_Net_Worth_USD_Y2,
R_Income_Y1=$R_Income_Y1,
R_Income_Y2=$R_Income_Y2,
R_Total_Expenses_Y1=$R_Total_Expenses_Y1,
R_Total_Expenses_Y2=$R_Total_Expenses_Y2,
R_Profit_Loss_Y1=$R_Profit_Loss_Y1,
R_Profit_Loss_Y2=$R_Profit_Loss_Y2,
R_Change_Assets_Y1=$R_Change_Assets_Y1,
R_Change_Assets_Y2=$R_Change_Assets_Y2,
Signature1_Permanent=$Signature1_Permanent,
Signature1_Not_variable=$Signature1_Not_variable,
Full_name1=$Full_name1,
Full_name2=$Full_name2,
Document_ID1=$Document_ID1,
Document_ID2=$Document_ID2,
Signature_Date1=$Signature_Date1,
Signature_Date2=$Signature_Date2,
Signature1=$Signature1,
Signature2=$Signature2,
Runners_Name=$Runners_Name,
Runners_Date=$Runners_Date,
Compliance_Officer_Name=$Compliance_Officer_Name,
Compliance_Officer_Date=$Compliance_Officer_Date,
Chief_Executive_Name=$Chief_Executive_Name,
Chief_Executive_Date=$Chief_Executive_Date,
Stock_Broker1_Signature=$Stock_Broker1_Signature,
Stock_Broker2_Signature=$Stock_Broker2_Signature,
Chief_Executive_Signature=$Chief_Executive_Signature,
account_number=$account_number

  where id=$id
");
 echo '<br>Data Updated  Cambios realizados !';
echo "<br><a href=list.php><< Back </a>";
?>