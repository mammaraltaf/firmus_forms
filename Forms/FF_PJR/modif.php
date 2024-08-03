<?PHP
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

$E1_Type_Beneficiary=getPostValue('E1_Type_Beneficiary');
$E1_Type_Legal_Representative=getPostValue('E1_Type_Legal_Representative');
$E1_Type_Director=getPostValue('E1_Type_Director');
$E1_Type_Protective=getPostValue('E1_Type_Protective');
$E1_Type_Other=getPostValue('E1_Type_Other');

$E1_Name=getPostValue('E1_Name');
$E1_surname=getPostValue('E1_surname');
$E1_Country=getPostValue('E1_Country');
$E1_C_Status=getPostValue('E1_C_Status');
$E1_ID_type=getPostValue('E1_ID_type');
$E1_ID_No=getPostValue('E1_ID_No');
$E1_ID_Expire_Date=getPostDateValue('E1_ID_Expire_Date');
$E1_Birth_Date=getPostDateValue('E1_Birth_Date');
$E1_Birth_Place=getPostValue('E1_Birth_Place');
$E1_Email=getPostValue('E1_Email');
$E1_Profession=getPostValue('E1_Profession');
$E1_Profession_Current=getPostValue('E1_Profession_Current');
$E1_Home_Adress=getPostValue('E1_Home_Adress');
$E1_Home_Adress_Number=getPostValue('E1_Home_Adress_Number');
$E1_Home_Postal_Adress=getPostValue('E1_Home_Postal_Adress');
$E1_Home_Fax=getPostValue('E1_Home_Fax');
$E1_Phone=getPostValue('E1_Phone');
$E1_Part_Rel=getPostValue('E1_Part_Rel');
$E1_Part_Rel_Raison=getPostValue('E1_Part_Rel_Raison');
$E1_Type_Beneficiary=getPostValue('E1_Type_Beneficiary');
$E1_Type_Legal_Representative=getPostValue('E1_Type_Legal_Representative');
$E1_Type_Director=getPostValue('E1_Type_Director');
$E1_Type_Protective=getPostValue('E1_Type_Protective');
$E1_Type_Other=getPostValue('E1_Type_Other');

$E2_Type_Beneficiary=getPostValue('E2_Type_Beneficiary');
$E2_Type_Legal_Representative=getPostValue('E2_Type_Legal_Representative');
$E2_Type_Director=getPostValue('E2_Type_Director');
$E2_Type_Protective=getPostValue('E2_Type_Protective');
$E2_Type_Other=getPostValue('E2_Type_Other');
$E2_Name=getPostValue('E2_Name');
$E2_surname=getPostValue('E2_surname');
$E2_Country=getPostValue('E2_Country');
$E2_C_Status=getPostValue('E2_C_Status');
$E2_ID_type=getPostValue('E2_ID_type');
$E2_ID_No=getPostValue('E2_ID_No');
$E2_ID_Expire_Date=getPostDateValue('E2_ID_Expire_Date');
$E2_Birth_Date=getPostDateValue('E2_Birth_Date');
$E2_Birth_Place=getPostValue('E2_Birth_Place');
$E2_Email=getPostValue('E2_Email');
$E2_Profession=getPostValue('E2_Profession');
$E2_Profession_Current=getPostValue('E2_Profession_Current');
$E2_Home_Adress=getPostValue('E2_Home_Adress');
$E2_Home_Adress_Number=getPostValue('E2_Home_Adress_Number');
$E2_Home_Postal_Adress=getPostValue('E2_Home_Postal_Adress');
$E2_Home_Fax=getPostValue('E2_Home_Fax');
$E2_Phone=getPostValue('E2_Phone');
$E2_Part_Rel=getPostValue('E2_Part_Rel');
$E2_Part_Rel_Raison=getPostValue('E2_Part_Rel_Raison');
$E2_Type_Beneficiary=getPostValue('E2_Type_Beneficiary');
$E2_Type_Legal_Representative=getPostValue('E2_Type_Legal_Representative');
$E2_Type_Director=getPostValue('E2_Type_Director');
$E2_Type_Protective=getPostValue('E2_Type_Protective');
$E2_Type_Other=getPostValue('E2_Type_Other');

$E3_Type_Beneficiary=getPostValue('E3_Type_Beneficiary');
$E3_Type_Legal_Representative=getPostValue('E3_Type_Legal_Representative');
$E3_Type_Director=getPostValue('E3_Type_Director');
$E3_Type_Protective=getPostValue('E3_Type_Protective');
$E3_Type_Other=getPostValue('E3_Type_Other');
$E3_Name=getPostValue('E3_Name');
$E3_surname=getPostValue('E3_surname');
$E3_Country=getPostValue('E3_Country');
$E3_C_Status=getPostValue('E3_C_Status');
$E3_ID_type=getPostValue('E3_ID_type');
$E3_ID_No=getPostValue('E3_ID_No');
$E3_ID_Expire_Date=getPostDateValue('E3_ID_Expire_Date');
$E3_Birth_Date=getPostDateValue('E3_Birth_Date');
$E3_Birth_Place=getPostValue('E3_Birth_Place');
$E3_Email=getPostValue('E3_Email');
$E3_Profession=getPostValue('E3_Profession');
$E3_Profession_Current=getPostValue('E3_Profession_Current');
$E3_Home_Adress=getPostValue('E3_Home_Adress');
$E3_Home_Adress_Number=getPostValue('E3_Home_Adress_Number');
$E3_Home_Postal_Adress=getPostValue('E3_Home_Postal_Adress');
$E3_Home_Fax=getPostValue('E3_Home_Fax');
$E3_Phone=getPostValue('E3_Phone');
$E3_Part_Rel=getPostValue('E3_Part_Rel');
$E3_Part_Rel_Raison=getPostValue('E3_Part_Rel_Raison');
$E3_Type_Beneficiary=getPostValue('E3_Type_Beneficiary');
$E3_Type_Legal_Representative=getPostValue('E3_Type_Legal_Representative');
$E3_Type_Director=getPostValue('E3_Type_Director');
$E3_Type_Protective=getPostValue('E3_Type_Protective');
$E3_Type_Other=getPostValue('E3_Type_Other');
$account_number=getPostValue('account_number');


$db = new database('');
$db->connect();


$db->query("update FOR_FF_PJR_ES set
E1_Type_Beneficiary=$E1_Type_Beneficiary,
E1_Type_Legal_Representative=$E1_Type_Legal_Representative,
E1_Type_Director=$E1_Type_Director,
E1_Type_Protective=$E1_Type_Protective,
E1_Type_Other=$E1_Type_Other,
E1_Name=$E1_Name,
E1_surname=$E1_surname,
E1_Country=$E1_Country,
E1_C_Status=$E1_C_Status,
E1_ID_type=$E1_ID_type,
E1_ID_No=$E1_ID_No,
E1_ID_Expire_Date=$E1_ID_Expire_Date,
E1_Birth_Date=$E1_Birth_Date,
E1_Birth_Place=$E1_Birth_Place,
E1_Email=$E1_Email,
E1_Profession=$E1_Profession,
E1_Profession_Current=$E1_Profession_Current,
E1_Home_Adress=$E1_Home_Adress,
E1_Home_Adress_Number=$E1_Home_Adress_Number,
E1_Home_Postal_Adress=$E1_Home_Postal_Adress,
E1_Home_Fax=$E1_Home_Fax,
E1_Phone=$E1_Phone,
E1_Part_Rel=$E1_Part_Rel,
E1_Part_Rel_Raison=$E1_Part_Rel_Raison,
E1_Type_Beneficiary=$E1_Type_Beneficiary,
E1_Type_Legal_Representative=$E1_Type_Legal_Representative,
E1_Type_Director=$E1_Type_Director,
E1_Type_Protective=$E1_Type_Protective,
E1_Type_Other=$E1_Type_Other,
E2_Type_Beneficiary=$E2_Type_Beneficiary,
E2_Type_Legal_Representative=$E2_Type_Legal_Representative,
E2_Type_Director=$E2_Type_Director,
E2_Type_Protective=$E2_Type_Protective,
E2_Type_Other=$E2_Type_Other,
E2_Name=$E2_Name,
E2_surname=$E2_surname,
E2_Country=$E2_Country,
E2_C_Status=$E2_C_Status,
E2_ID_type=$E2_ID_type,
E2_ID_No=$E2_ID_No,
E2_ID_Expire_Date=$E2_ID_Expire_Date,
E2_Birth_Date=$E2_Birth_Date,
E2_Birth_Place=$E2_Birth_Place,
E2_Email=$E2_Email,
E2_Profession=$E2_Profession,
E2_Profession_Current=$E2_Profession_Current,
E2_Home_Adress=$E2_Home_Adress,
E2_Home_Adress_Number=$E2_Home_Adress_Number,
E2_Home_Postal_Adress=$E2_Home_Postal_Adress,
E2_Home_Fax=$E2_Home_Fax,
E2_Phone=$E2_Phone,
E2_Part_Rel=$E2_Part_Rel,
E2_Part_Rel_Raison=$E2_Part_Rel_Raison,
E2_Type_Beneficiary=$E2_Type_Beneficiary,
E2_Type_Legal_Representative=$E2_Type_Legal_Representative,
E2_Type_Director=$E2_Type_Director,
E2_Type_Protective=$E2_Type_Protective,
E2_Type_Other=$E2_Type_Other,
E3_Type_Beneficiary=$E3_Type_Beneficiary,
E3_Type_Legal_Representative=$E3_Type_Legal_Representative,
E3_Type_Director=$E3_Type_Director,
E3_Type_Protective=$E3_Type_Protective,
E3_Type_Other=$E3_Type_Other,
E3_Name=$E3_Name,
E3_surname=$E3_surname,
E3_Country=$E3_Country,
E3_C_Status=$E3_C_Status,
E3_ID_type=$E3_ID_type,
E3_ID_No=$E3_ID_No,
E3_ID_Expire_Date=$E3_ID_Expire_Date,
E3_Birth_Date=$E3_Birth_Date,
E3_Birth_Place=$E3_Birth_Place,
E3_Email=$E3_Email,
E3_Profession=$E3_Profession,
E3_Profession_Current=$E3_Profession_Current,
E3_Home_Adress=$E3_Home_Adress,
E3_Home_Adress_Number=$E3_Home_Adress_Number,
E3_Home_Postal_Adress=$E3_Home_Postal_Adress,
E3_Home_Fax=$E3_Home_Fax,
E3_Phone=$E3_Phone,
E3_Part_Rel=$E3_Part_Rel,
E3_Part_Rel_Raison=$E3_Part_Rel_Raison,
E3_Type_Beneficiary=$E3_Type_Beneficiary,
E3_Type_Legal_Representative=$E3_Type_Legal_Representative,
E3_Type_Director=$E3_Type_Director,
E3_Type_Protective=$E3_Type_Protective,
E3_Type_Other=$E3_Type_Other,
account_number=$account_number
 where id=$id
");
 echo '<br>Data Updated  Cambios realizados !';
echo "<br><a href=list.php><< Back </a>";
?>