<?php

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

function getIntegerValue($key)
{
    return isset($_POST[$key]) && !empty($_POST[$key]) ? $_POST[$key] : 0;
}

$Contract_Type = getPostValue('Contract_Type');
$Part_Rel = getPostValue('Part_Rel');
$Part_Rel_Raison = getPostValue('Part_Rel_Raison');
$E_Name = getPostValue('E_Name');
$E_surname = getPostValue('E_surname');
$E_Country = getPostValue('E_Country');
$E_C_Status = getPostValue('E_C_Status');
$E_ID_type = getPostValue('E_ID_type');
$E_ID_No = getPostValue('E_ID_No');
$E_ID_Expire_Date = getPostDateValue('E_ID_Expire_Date');
$E_Birth_Date = getPostDateValue('E_Birth_Date');
$E_Birth_Place = getPostValue('E_Birth_Place');
$E_Email = getPostValue('E_Email');
$E_Profession = getPostValue('E_Profession');
$E_Profession_Current = getPostValue('E_Profession_Current');
$E_Home_Adress = getPostValue('E_Home_Adress');
$E_Home_Adress_Number = getPostValue('E_Home_Adress_Number');
$E_Home_Postal_Adress = getPostValue('E_Home_Postal_Adress');
$E_Home_Fax = getPostValue('E_Home_Fax');
$E_Office_Adress = getPostValue('E_Office_Adress');
$E_Office_Number = getPostValue('E_Office_Number');
$E_Office_Postal_Adress = getPostValue('E_Office_Postal_Adress');
$E_Office_Fax = getPostValue('E_Office_Fax');
$E_Salary_Independ = getPostValue('E_Salary_Independ');
$E_Salary_NotRetired = getPostValue('E_Salary_NotRetired');
$E_Salary_NotPensioned = getPostValue('E_Salary_NotPensioned');
$E_Salary_Fixed = getPostValue('E_Salary_Fixed');
$E_Salary_Variable = getPostValue('E_Salary_Variable');
$E_Salary_Other = getPostValue('E_Salary_Other');
$Funds_Source1 = getPostValue('Funds_Source1');
$Funds_Source1_Type_Receive_Cash = getPostValue('Funds_Source1_Type_Receive_Cash');
$Funds_Source1_Type_Send_Cash = getPostValue('Funds_Source1_Type_Send_Cash');
$Funds_Source1_Type_Receive_Titles = getPostValue('Funds_Source1_Type_Receive_Titles');
$Funds_Source1_Type_Submit_Titles = getPostValue('Funds_Source1_Type_Submit_Titles');
$Funds_Source2 = getPostValue('Funds_Source2');
$Funds_Source2_Type_Receive_Cash = getPostValue('Funds_Source2_Type_Receive_Cash');
$Funds_Source2_Type_Send_Cash = getPostValue('Funds_Source2_Type_Send_Cash');
$Funds_Source2_Type_Receive_Titles = getPostValue('Funds_Source2_Type_Receive_Titles');
$Funds_Source2_Type_Submit_Titles = getPostValue('Funds_Source2_Type_Submit_Titles');
$RS_Employer_name = getPostValue('RS_Employer_name');
$RS_Annual_Income_USD = getPostValue('RS_Annual_Income_USD');
$RS_Annual_Salary_USD = getPostValue('RS_Annual_Salary_USD');
$RS_Years_in_Company = getPostValue('RS_Years_in_Company');
$RS_Activity_Professional_fees = getPostValue('RS_Activity_Professional_fees');
$RS_Activity_Own_business = getPostValue('RS_Activity_Own_business');
$RS_Activity_Saving = getPostValue('RS_Activity_Saving');
$RS_Activity_Pension = getPostValue('RS_Activity_Pension');
$RS_Activity_Pension1 = getPostValue('RS_Activity_Pension1');
$RS_Investment_Dividends = getPostValue('RS_Investment_Dividends');
$RS_Others = getPostValue('RS_Others');
$Bank1_Ref_Name = getPostValue('Bank1_Ref_Name');
$Bank1_Ref_Country = getPostValue('Bank1_Ref_Country');
$Bank1_Ref_Contact = getPostValue('Bank1_Ref_Contact');
$Bank1_Ref_Phone = getPostValue('Bank1_Ref_Phone');
$Bank2_Ref_Name = getPostValue('Bank2_Ref_Name');
$Bank2_Ref_Country = getPostValue('Bank2_Ref_Country');
$Bank2_Ref_Contact = getPostValue('Bank2_Ref_Contact');
$Bank2_Ref_Phone = getPostValue('Bank2_Ref_Phone');
$Bank3_Ref_Name = getPostValue('Bank3_Ref_Name');
$Bank3_Ref_Country = getPostValue('Bank3_Ref_Country');
$Bank3_Ref_Contact = getPostValue('Bank3_Ref_Contact');
$Bank3_Ref_Phone = getPostValue('Bank3_Ref_Phone');

$Initial_Deposit_Cash = getPostValue('Initial_Deposit_Cash');
$Initial_Deposit_Non_Securities = getPostValue('Initial_Deposit_Non_Securities');
$Initial_Deposit_Both = getPostValue('Initial_Deposit_Both');

$Initial_Deposit_USD_Amount = getIntegerValue('Initial_Deposit_USD_Amount');
$Initial_Deposit_Securities_Amount = getIntegerValue('Initial_Deposit_Securities_Amount');

$Initial_Deposit_From1 = getPostValue('Initial_Deposit_From1');
$Initial_Deposit_From1_Cash = getPostValue('Initial_Deposit_From1_Cash');
$Initial_Deposit_From1_Securities = getPostValue('Initial_Deposit_From1_Securities');

$Initial_Deposit_From2 = getIntegerValue('Initial_Deposit_From2');
$Initial_Deposit_From2_Cash = getIntegerValue('Initial_Deposit_From2_Cash');
$Initial_Deposit_From2_Securities = getIntegerValue('Initial_Deposit_From2_Securities');
$Initial_Deposit_From1_Rel = getIntegerValue('Initial_Deposit_From1_Rel');
$Initial_Deposit_From2_Rel = getIntegerValue('Initial_Deposit_From2_Rel');

$PEP = getPostValue('PEP');
$PEP_Close = getPostValue('PEP_Close');
$PEP_Five = getPostValue('PEP_Five');
$Orders_Autorise_Owner = getPostValue('Orders_Autorise_Owner');
$Orders_Autorise_Co_Owner = getPostValue('Orders_Autorise_Co_Owner');
$Orders_Autorise_Signatory = getPostValue('Orders_Autorise_Signatory');
$Orders_Autorise_Attorney = getPostValue('Orders_Autorise_Attorney');
$Orders_Autorise_Beneficiary_Shareholder = getPostValue('Orders_Autorise_Beneficiary_Shareholder');
$Send_receive_cash_Autorise_Owner = getPostValue('Send_receive_cash_Autorise_Owner');
$Send_receive_cash_Autorise_Co_Owner = getPostValue('Send_receive_cash_Autorise_Co_Owner');
$Send_receive_cash__Autorise_Signatory = getPostValue('Send_receive_cash__Autorise_Signatory');
$Send_receive_cash_Autorise_Attorney = getPostValue('Send_receive_cash_Autorise_Attorney');
$Send_receive_cash__Beneficiary_Shareholder = getPostValue('Send_receive_cash__Beneficiary_Shareholder');
$Orders_Mail = getPostValue('Orders_Mail');
$Orders_Documents = getPostValue('Orders_Documents');
$Orders_Telephone = getPostValue('Orders_Telephone');
$Orders_text = getPostValue('Orders_text');
$Orders_Directly = getPostValue('Orders_Directly');
$Orders_All_Above = getPostValue('Orders_All_Above');
$Autorise_Give_instuctions = getPostValue('Autorise_Give_instuctions');
$Complete1 = getPostValue('Complete1');
$Complete2 = getPostValue('Complete2');
$Complete3 = getPostValue('Complete3');
$Complete4 = getPostValue('Complete4');
$Autorise_Firmus = getIntegerValue('Autorise_Firmus');
$Receive_AS_Mail = getPostValue('Receive_AS_Mail');
$Receive_AS_Postal = getPostValue('Receive_AS_Postal');

$Receive_Mensual = getPostValue('Receive_Mensual');
$Receive_Trimestral = getPostValue('Receive_Trimestral');
$Receive_Semestral = getPostValue('Receive_Semestral');
$Receive_Anual = getPostValue('Receive_Anual');
$General_Data = getPostValue('General_Data');
$Signature1_Permanent = getPostValue('Signature1_Permanent');
$Signature1_Not_variable = getPostValue('Signature1_Not_variable');
$Full_name1 = getPostValue('Full_name1');
$Full_name2 = getPostValue('Full_name2');
$Document1_ID = getPostValue('Document1_ID');
$Document2_ID = getPostValue('Document2_ID');
$Signature1_Date = getPostDateValue('Signature1_Date');
$Signature2_Date = getPostDateValue('Signature2_Date');
$Signature1 = getPostValue('Signature1');
$Signature2 = getPostValue('Signature2');
$Runners_Name = getPostValue('Runners_Name');
$Runners_Date = getPostDateValue('Runners_Date');
$Compliance_Officer_Name = getPostValue('Compliance_Officer_Name');
$Compliance__Officer_Date = getPostDateValue('Compliance__Officer_Date');
$Chief_Executive_Name = getPostValue('Chief_Executive_Name');
$Chief_Executive_Date = getPostDateValue('Chief_Executive_Date');
$Stock_Broker1_Signature = getPostValue('Stock_Broker1_Signature');
$Stock_Broker2_Signature = getPostValue('Stock_Broker2_Signature');
$Chief_Executive_Signature = getPostValue('Chief_Executive_Signature');
$account_number = getPostValue('account_number');

$db = new database('');
$db->connect();

// Get the latest ID and increment it
$db->query("SELECT id FROM FOR_FF_APN_ES ORDER BY id DESC LIMIT 1");
$data = $db->fetch_array();
$id = $data ? $data['id'] + 1 : 1; // Handle case when there are no rows and start with id 1
$query_new = "INSERT INTO FOR_FF_APN_ES VALUES (
    $id,
    $Contract_Type,
    $Part_Rel,
    $Part_Rel_Raison,
    $E_Name,
    $E_surname,
    $E_Country,
    $E_C_Status,
    $E_ID_type,
    $E_ID_No,
    $E_ID_Expire_Date,
    $E_Birth_Date,
    $E_Birth_Place,
    $E_Email,
    $E_Profession,
    $E_Profession_Current,
    $E_Home_Adress,
    $E_Home_Adress_Number,
    $E_Home_Postal_Adress,
    $E_Home_Fax,
    $E_Office_Adress,
    $E_Office_Number,
    $E_Office_Postal_Adress,
    $E_Office_Fax,
    $E_Salary_Independ,
    $E_Salary_NotRetired,
    $E_Salary_NotPensioned,
    $E_Salary_Fixed,
    $E_Salary_Variable,
    $E_Salary_Other,
    $Funds_Source1,
    $Funds_Source1_Type_Receive_Cash,
    $Funds_Source1_Type_Send_Cash,
    $Funds_Source1_Type_Receive_Titles,
    $Funds_Source1_Type_Submit_Titles,
    $Funds_Source2,
    $Funds_Source2_Type_Receive_Cash,
    $Funds_Source2_Type_Send_Cash,
    $Funds_Source2_Type_Receive_Titles,
    $Funds_Source2_Type_Submit_Titles,
    $RS_Employer_name,
    $RS_Annual_Income_USD,
    $RS_Annual_Salary_USD,
    $RS_Years_in_Company,
    $RS_Activity_Professional_fees,
    $RS_Activity_Own_business,
    $RS_Activity_Saving,
    $RS_Activity_Pension,
    $RS_Activity_Pension1,
    $RS_Investment_Dividends,
    $RS_Others,
    $Bank1_Ref_Name,
    $Bank1_Ref_Country,
    $Bank1_Ref_Contact,
    $Bank1_Ref_Phone,
    $Bank2_Ref_Name,
    $Bank2_Ref_Country,
    $Bank2_Ref_Contact,
    $Bank2_Ref_Phone,
    $Bank3_Ref_Name,
    $Bank3_Ref_Country,
    $Bank3_Ref_Contact,
    $Bank3_Ref_Phone,
    $Initial_Deposit_Cash,
    $Initial_Deposit_Non_Securities,
    $Initial_Deposit_Both,
    $Initial_Deposit_From1,
    $Initial_Deposit_From1_Cash,
    $Initial_Deposit_From1_Securities,
    $Initial_Deposit_USD_Amount,
    $Initial_Deposit_Securities_Amount,
    $Initial_Deposit_From2,
    $Initial_Deposit_From2_Cash,
    $Initial_Deposit_From2_Securities,
    $Initial_Deposit_From1_Rel,
    $Initial_Deposit_From2_Rel,
    $PEP,
    $PEP_Close,
    $PEP_Five,
    $Orders_Autorise_Owner,
    $Orders_Autorise_Co_Owner,
    $Orders_Autorise_Signatory,
    $Orders_Autorise_Attorney,
    $Orders_Autorise_Beneficiary_Shareholder,
    $Send_receive_cash_Autorise_Owner,
    $Send_receive_cash_Autorise_Co_Owner,
    $Send_receive_cash__Autorise_Signatory,
    $Send_receive_cash_Autorise_Attorney,
    $Send_receive_cash__Beneficiary_Shareholder,
    $Orders_Mail,
    $Orders_Documents,
    $Orders_Telephone,
    $Orders_text,
    $Orders_Directly,
    $Orders_All_Above,
    $Autorise_Give_instuctions,
    $Complete1,
    $Complete2,
    $Complete3,
    $Complete4,
    $Autorise_Firmus,
    $Receive_AS_Mail,
    $Receive_AS_Postal,
    $Receive_Mensual,
    $Receive_Trimestral,
    $Receive_Semestral,
    $Receive_Anual,
    $General_Data,
    $Signature1_Permanent,
    $Signature1_Not_variable,
    $Full_name1,
    $Full_name2,
    $Document1_ID,
    $Document2_ID,
    $Signature1_Date,
    $Signature2_Date,
    $Signature1,
    $Signature2,
    $Runners_Name,
    $Runners_Date,
    $Compliance_Officer_Name,
    $Compliance__Officer_Date,
    $Chief_Executive_Name,
    $Chief_Executive_Date,
    $Stock_Broker1_Signature,
    $Stock_Broker2_Signature,
    $Chief_Executive_Signature,
    $account_number
)";

$db->query($query_new);

echo '<br>Contracto agregado !';
echo "<br><a href=list.php><< Back </a>";

?>
