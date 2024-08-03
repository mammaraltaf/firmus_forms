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
$E_Surname=getPostValue('E_Surname');
$E_Country=getPostValue('E_Country');
$E_ID_type=getPostValue('E_ID_type');
$E_ID_No=getPostValue('E_ID_No');
$E_ID_Expire_Date=getPostDateValue('E_ID_Expire_Date');
$E_Birth_Date=getPostDateValue('E_Birth_Date');
$E_Birth_Place=getPostValue('E_Birth_Place');
$PEP_Link_Explain1=getPostValue('PEP_Link_Explain1');
$PEP_Link_Explain2=getPostValue('PEP_Link_Explain2');
$Account_Purpose=getPostValue('Account_Purpose');
$PEP_Relationship_Direct=getPostValue('PEP_Relationship_Direct');
$Funds_From_GED=getPostValue('Funds_From_GED');
$Funds_From_GCE=getPostValue('Funds_From_GCE');
$Funds_From_GC=getPostValue('Funds_From_GC');
$Funds_From_GCLTH=getPostValue('Funds_From_GCLTH');
$Funds_From_MultiNat=getPostValue('Funds_From_MultiNat');
$Funds_From_Others=getPostValue('Funds_From_Others');
$Funds_Person_Autorised=getPostValue('Funds_Person_Autorised');
$PEP_Name=getPostValue('PEP_Name');
$PEP_Surname=getPostValue('PEP_Surname');
$PEP_Country=getPostValue('PEP_Country');
$PEP_ID_type=getPostValue('PEP_ID_type');
$PEP_ID_No=getPostValue('PEP_ID_No');
$PEP_ID_Expire_Date=getPostDateValue('PEP_ID_Expire_Date');
$PEP_Birth_Date=getPostDateValue('PEP_Birth_Date');
$PEP_Birth_Place=getPostValue('PEP_Birth_Place');
$Institution_Name=getPostValue('Institution_Name');
$PEP_LPP_Pos_Name=getPostValue('PEP_LPP_Pos_Name');
$PEP_LPP_parctice=getPostValue('PEP_LPP_parctice');
$PEP_LPPT_year=getPostValue('PEP_LPPT_year');
$PEP_Exerc_Aut=getPostValue('PEP_Exerc_Aut');
$PEP_Exerc_Aut_Detail=getPostValue('PEP_Exerc_Aut_Detail');
$PEP_Manage_PA=getPostValue('PEP_Manage_PA');
$PEP_Manage_PA_Detail=getPostValue('PEP_Manage_PA_Detail');
$PEP_Reput=getPostValue('PEP_Reput');
$PEP_Reput_Detail=getPostValue('PEP_Reput_Detail');
$PEP_Reput_News=getPostValue('PEP_Reput_News');
$PEP_Reput_News_Detail=getPostValue('PEP_Reput_News_Detail');
$Full_name=getPostValue('Full_name');
$Document_ID=getPostValue('Document_ID');
$Signature_Date=getPostDateValue('Signature_Date');
$Signature=getPostValue('Signature');
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

$db->query("SELECT id FROM FOR_FF_PEP_ES ORDER BY id DESC LIMIT 1");
$data = $db->fetch_array();
$id = $data ? $data['id'] + 1 : 1; // Handle case when there are no rows and start with id 1

$db = new database('');
$db->connect();



$db->query("INSERT INTO FOR_FF_PEP_ES VALUES ($id,
$E_Name,
$E_Surname,
$E_Country,
$E_ID_type,
$E_ID_No,
$E_ID_Expire_Date,
$E_Birth_Date,
$E_Birth_Place,
$PEP_Link_Explain1,
$PEP_Link_Explain2,
$Account_Purpose,
$PEP_Relationship_Direct,
$Funds_From_GED,
$Funds_From_GCE,
$Funds_From_GC,
$Funds_From_GCLTH,
$Funds_From_MultiNat, 
$Funds_From_Others,
$Funds_Person_Autorised,
$PEP_Name,
$PEP_Surname,
$PEP_Country,
$PEP_ID_type,
$PEP_ID_No,
$PEP_ID_Expire_Date,
$PEP_Birth_Date,
$PEP_Birth_Place,
$Institution_Name,
$PEP_LPP_Pos_Name,
$PEP_LPP_parctice,
$PEP_LPPT_year,
$PEP_Exerc_Aut,
$PEP_Exerc_Aut_Detail,
$PEP_Manage_PA,
$PEP_Manage_PA_Detail,
$PEP_Reput,
$PEP_Reput_Detail,
$PEP_Reput_News,
$PEP_Reput_News_Detail,
$Full_name,
$Document_ID,
$Signature_Date,
$Signature,
$Runners_Name,
$Runners_Date,
$Compliance_Officer_Name,
$Compliance_Officer_Date,
$Chief_Executive_Name,
$Chief_Executive_Date,
$Stock_Broker1_Signature,
$Stock_Broker2_Signature,
$Chief_Executive_Signature,
$account_number


)");

// $db->close_mysql();
 echo '<br>Contracto agregado !';
echo "<br><a href=list.php><< Back </a>";



?>