<?PHP

error_reporting(0);
include "../dbclass.php";
include "../functions.php";

function getPostValue($key) {
    return isset($_POST[$key]) && !empty($_POST[$key]) ? "'".$_POST[$key]."'" : 'NULL';
}

// Function to handle date conversion
function getPostDateValue($key) {
    return isset($_POST[$key]) && !empty($_POST[$key]) ? "'".frenchtodate($_POST[$key])."'" : 'NULL';
}

$E_Name=getPostValue('E_Name');
$E_surname=getPostValue('E_surname');
$E_Country=getPostValue('E_Country');
$E_C_Status=getPostValue('E_C_Status');
$E_ID_type=getPostValue('E_ID_type');
$E_ID_No=getPostValue('E_ID_No');
$E_ID_Expire_Date=getPostDateValue('E_ID_Expire_Date');
$E_Birth_Date=getPostDateValue('E_Birth_Date');
$E_Birth_Place=getPostValue('E_Birth_Place');
$E_Email=getPostValue('E_Email');
$E_Profession=getPostValue('E_Profession');
$E_Profession_Current=getPostValue('E_Profession_Current');
$E_Home_Adress=getPostValue('E_Home_Adress');
$E_Home_Adress_Number=getPostValue('E_Home_Adress_Number');
$E_Home_Postal_Adress=getPostValue('E_Home_Postal_Adress');
$E_Home_Fax=getPostValue('E_Home_Fax');
$E_Office_Adress=getPostValue('E_Office_Adress');
$E_Office_Number=getPostValue('E_Office_Number');
$E_Office_Postal_Adress=getPostValue('E_Office_Postal_Adress');
$E_Office_Fax=getPostValue('E_Office_Fax');
$E_Phone=getPostValue('E_Phone');
$E_Salary_Independ=getPostValue('E_Salary_Independ');
$E_Salary_NotRetired=getPostValue('E_Salary_NotRetired');
$E_Salary_NotPensioned=getPostValue('E_Salary_NotPensioned');
$E_Salary_Fixed=getPostValue('E_Salary_Fixed');
$E_Salary_Variable=getPostValue('E_Salary_Variable');
$E_Salary_Other=getPostValue('E_Salary_Other');
$Funds_Source1=getPostValue('Funds_Source1');
$Funds_Source1_Type_Receive_Cash=getPostValue('Funds_Source1_Type_Receive_Cash');
$Funds_Source1_Type_Send_Cash=getPostValue('Funds_Source1_Type_Send_Cash');
$Funds_Source1_Type_Receive_Titles=getPostValue('Funds_Source1_Type_Receive_Titles');
$Funds_Source1_Type_Submit_Titles=getPostValue('Funds_Source1_Type_Submit_Titles');
$Funds_Source2=getPostValue('Funds_Source2');
$Funds_Source2_Type_Receive_Cash=getPostValue('Funds_Source2_Type_Receive_Cash');
$Funds_Source2_Type_Send_Cash=getPostValue('Funds_Source2_Type_Send_Cash');
$Funds_Source2_Type_Receive_Titles=getPostValue('Funds_Source2_Type_Receive_Titles');
$Funds_Source2_Type_Submit_Titles=getPostValue('Funds_Source2_Type_Submit_Titles');
$RS_Employer_name=getPostValue('RS_Employer_name');
$RS_Annual_Income_USD=getPostValue('RS_Annual_Income_USD');
$RS_Annual_Salary_USD=getPostValue('RS_Annual_Salary_USD');
$RS_Years_in_Company=getPostValue('RS_Years_in_Company');
$RS_Activity_Professional_fees=getPostValue('RS_Activity_Professional_fees');
$RS_Activity_Own_business=getPostValue('RS_Activity_Own_business');
$RS_Activity_Saving=getPostValue('RS_Activity_Saving');
$RS_Activity_Pension=getPostValue('RS_Activity_Pension');
$RS_Activity_Pension1=getPostValue('RS_Activity_Pension1');
$RS_Investment_Dividends=getPostValue('RS_Investment_Dividends');
$RS_Others=getPostValue('RS_Others');
$Bank1_Ref_Name=getPostValue('Bank1_Ref_Name');
$Bank1_Ref_Country=getPostValue('Bank1_Ref_Country');
$Bank1_Ref_Contact=getPostValue('Bank1_Ref_Contact');
$Bank1_Ref_Phone=getPostValue('Bank1_Ref_Phone');
$Bank2_Ref_Name=getPostValue('Bank2_Ref_Name');
$Bank2_Ref_Country=getPostValue('Bank2_Ref_Country');
$Bank2_Ref_Contact=getPostValue('Bank2_Ref_Contact');
$Bank2_Ref_Phone=getPostValue('Bank2_Ref_Phone');
$Bank3_Ref_Name=getPostValue('Bank3_Ref_Name');
$Bank3_Ref_Country=getPostValue('Bank3_Ref_Country');
$Bank3_Ref_Contact=getPostValue('Bank3_Ref_Contact');
$Bank3_Ref_Phone=getPostValue('Bank3_Ref_Phone');


$PEP=getPostValue('PEP');
$PEP_Close=getPostValue('PEP_Close');
$PEP_Five=getPostValue('PEP_Five');

$Full_name=getPostValue('Full_name');

$Document_ID=getPostValue('Document_ID');

$Signature_Date=getPostDateValue('Signature_Date');

$Signature=getPostValue('Signature');

$Runners_Name=getPostValue('Runners_Name');
$Runners_Date=getPostDateValue('Runners_Date');
$Compliance_Officer_Name=getPostValue('Compliance_Officer_Name');
$Compliance__Officer_Date=getPostDateValue('Compliance__Officer_Date');
$Chief_Executive_Name=getPostValue('Chief_Executive_Name');
$Chief_Executive_Date=getPostDateValue('Chief_Executive_Date');
$Stock_Broker1_Signature=getPostValue('Stock_Broker1_Signature');
$Stock_Broker2_Signature=getPostValue('Stock_Broker2_Signature');
$Chief_Executive_Signature=getPostValue('Chief_Executive_Signature');
$account_number=getPostValue('account_number');


$db = new database('');
$db->connect();

$db->query("SELECT id FROM FOR_FF_PNC_ES ORDER BY id DESC LIMIT 1");
$data = $db->fetch_array();
$id = $data ? $data['id'] + 1 : 1; // Handle case when there are no rows and start with id 1

$db = new database('');
$db->connect();


$db->query("INSERT INTO FOR_FF_PNC_ES VALUES ($id,

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
$E_Phone,
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
$PEP,
$PEP_Close,
$PEP_Five,
$Full_name,
$Document_ID,
$Signature_Date,
$Signature,
$Runners_Name,
$Runners_Date,
$Compliance_Officer_Name,
$Compliance__Officer_Date,
$Chief_Executive_Name,
$Chief_Executive_Date,
$Stock_Broker1_Signature,
$Stock_Broker2_Signature,
$Chief_Executive_Signature,
$account_number)");

// $db->close_mysql();
 echo '<br>Contracto agregado !';
echo "<br><a href=list.php><< Back </a>";



?>