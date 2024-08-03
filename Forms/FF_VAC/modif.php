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
$Account_Name=getPostValue('Account_Name');
$Client_Name=getPostValue('Client_Name');
$Custody_Account=getPostValue('Custody_Account');
$Person_Natural=getPostValue('Person_Natural');
$Person_Legal=getPostValue('Person_Legal');
$Opening_Date=getPostDateValue('Opening_Date');
$Presented_by=getPostValue('Presented_by');
$Presented_Date=getPostDateValue('Presented_Date');
$Verified_by=getPostValue('Verified_by');
$Verified_Date=getPostDateValue('Verified_Date');
$Approved_by=getPostValue('Approved_by');
$Approved_Date=getPostDateValue('Approved_Date');
$account_number=getPostValue('account_number');


$db = new database('');
$db->connect();


$db = new database('');
$db->connect();


$db->query("update FOR_FF_VAC_ES set
Account_Name=$Account_Name,
Client_Name=$Client_Name,
Custody_Account=$Custody_Account,
Person_Natural=$Person_Natural,
Person_Legal=$Person_Legal,
Opening_Date=$Opening_Date,
Presented_by=$Presented_by,
Presented_Date=$Presented_Date,
Verified_by=$Verified_by,
Verified_Date=$Verified_Date,
Approved_by=$Approved_by,
Approved_Date=$Approved_Date,
account_number=$account_number
 where id=$id
");
 echo '<br>Data Updated  Cambios realizados !';
echo "<br><a href=list.php><< Back </a>";

?>