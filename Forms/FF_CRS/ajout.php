<?PHP

error_reporting(E_ALL);
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
$E_Country=getPostValue('E_Country');
$E_Tax_Adress_Reg=getPostValue('E_Tax_Adress_Reg');
$E_Local_Number=getPostValue('E_Local_Number');
$E_City=getPostValue('E_City');
$CRF_Country1=getPostValue('CRF_Country1');
$CRF_City1=getPostValue('CRF_City1');
$CRF_RequireIF1=getPostValue('CRF_RequireIF1');
$CRF_TIN_No1=getPostValue('CRF_TIN_No1');
$CRF_Adress1=getPostValue('CRF_Adress1');
$CRF_Country2=getPostValue('CRF_Country2');
$CRF_City2=getPostValue('CRF_City2');
$CRF_RequireIF2=getPostValue('CRF_RequireIF2');
$CRF_TIN_No2=getPostValue('CRF_TIN_No2');
$CRF_Adress2=getPostValue('CRF_Adress2');
$CRF_Country3=getPostValue('CRF_Country3');
$CRF_City3=getPostValue('CRF_City3');
$CRF_RequireIF3=getPostValue('CRF_RequireIF3');
$CRF_TIN_No3=getPostValue('CRF_TIN_No3');
$CRF_Adress3=getPostValue('CRF_Adress3');

$NOTIN1_A=getPostValue('NOTIN1_A');
$NOTIN1_B=getPostValue('NOTIN1_B');
$NOTIN1_R=getPostValue('NOTIN1_R');

$NOTIN2_A=getPostValue('NOTIN2_A');
$NOTIN2_B=getPostValue('NOTIN2_B');
$NOTIN2_R=getPostValue('NOTIN2_R');

$NOTIN3_A=getPostValue('NOTIN3_A');
$NOTIN3_B=getPostValue('NOTIN3_B');
$NOTIN3_R=getPostValue('NOTIN3_R');



$CRS_1=getPostValue('CRS_1');
$CRS_2=getPostValue('CRS_2');

$CRS_B=getPostValue('CRS_B');
$CRS_C=getPostValue('CRS_C');
$CRS_C_Details1=getPostValue('CRS_C_Details1');
$CRS_C_Details2=getPostValue('CRS_C_Details2');
$CRS_D=getPostValue('CRS_D');
$CRS_E=getPostValue('CRS_E');
$CRS_F=getPostValue('CRS_F');
$CRS_G=getPostValue('CRS_G');
$Person_Name_CtrlFE1=getPostValue('Person_Name_CtrlFE1');
$Person_Name_CtrlFE2=getPostValue('Person_Name_CtrlFE2');
$Person_Name_CtrlFE3=getPostValue('Person_Name_CtrlFE3');
$FATCA_3_1=getPostValue('FATCA_3_1');
$FATCA_3_2=getPostValue('FATCA_3_2');

$FATCA_3_2_GIIN=getPostValue('FATCA_3_2_GIIN');

$FATCA_3_3=getPostValue('FATCA_3_3');
$FATCA_3_4=getPostValue('FATCA_3_4');
$FATCA_3_4_1=getPostValue('FATCA_3_4_1');
$FATCA_3_4_2=getPostValue('FATCA_3_4_2');
$FATCA_3_4_3=getPostValue('FATCA_3_4_3');
$FATCA_3_5=getPostValue('FATCA_3_5');

$FATCA_3_5_Detail=getPostValue('FATCA_3_5_Detail');

$FATCA_3_6=getPostValue('FATCA_3_6');
$Trustee_Name=getPostValue('Trustee_Name');
$Trustee_GIIN=getPostValue('Trustee_GIIN');
$FATCA_3_7=getPostValue('FATCA_3_7');
$FATCA_3_8=getPostValue('FATCA_3_8');
$FATCA_3_9=getPostValue('FATCA_3_9');
$FATCA_a=getPostValue('FATCA_a');
$FATCA_b=getPostValue('FATCA_b');
$GIIN_1=getPostValue('GIIN_1');
$GIIN_2=getPostValue('GIIN_2');
$GIIN_3=getPostValue('GIIN_3');
$GIIN_4=getPostValue('GIIN_4');
$GIIN_5=getPostValue('GIIN_5');
$GIIN_6=getPostValue('GIIN_6');
$GIIN_7=getPostValue('GIIN_7');
$GIIN_8=getPostValue('GIIN_8');
$GIIN_9=getPostValue('GIIN_9');
$GIIN_10=getPostValue('GIIN_10');
$GIIN_11=getPostValue('GIIN_11');
$GIIN_12=getPostValue('GIIN_12');
$GIIN_13=getPostValue('GIIN_13');
$GIIN_14=getPostValue('GIIN_14');
$GIIN_15=getPostValue('GIIN_15');
$GIIN_16=getPostValue('GIIN_16');
$E_Sponsor_Name=getPostValue('E_Sponsor_Name');
$E_Sponsor_GIIN=getPostValue('E_Sponsor_GIIN');
$Person_Name_PNFFE1=getPostValue('Person_Name_PNFFE1');
$Person_Name_PNFFE2=getPostValue('Person_Name_PNFFE2');
$Person_Name_PNFFE3=getPostValue('Person_Name_PNFFE3');
$Person_Name_PNFFE4=getPostValue('Person_Name_PNFFE4');
$Person_Name_PNFFE5=getPostValue('Person_Name_PNFFE5');
$Person_Name_PNFFE6=getPostValue('Person_Name_PNFFE6');
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

$db->query("SELECT id FROM FOR_FF_CRS_ES ORDER BY id DESC LIMIT 1");
$data = $db->fetch_array();
$id = $data ? $data['id'] + 1 : 1; // Handle case when there are no rows and start with id 1


$db = new database('');
$db->connect();



$db->query("INSERT INTO FOR_FF_CRS_ES VALUES ($id,
$E_Name,
$E_Country,
$E_Tax_Adress_Reg,
$E_Local_Number,
$E_City,
$CRF_Country1,
$CRF_City1,
$CRF_RequireIF1,
$CRF_TIN_No1,
$CRF_Adress1,
$CRF_Country2,
$CRF_City2,
$CRF_RequireIF2,
$CRF_TIN_No2,
$CRF_Adress2,
$CRF_Country3,
$CRF_City3,
$CRF_RequireIF3,
$CRF_TIN_No3,
$CRF_Adress3,
$NOTIN1_A,
$NOTIN1_B,
$NOTIN1_R,
$NOTIN2_A,
$NOTIN2_B,
$NOTIN2_R,
$NOTIN3_A,
$NOTIN3_B,
$NOTIN3_R,
$CRS_1,
$CRS_2,
$CRS_B,
$CRS_C,
$CRS_C_Details1,
$CRS_C_Details2,
$CRS_D,
$CRS_E,
$CRS_F,
$CRS_G,
$Person_Name_CtrlFE1,
$Person_Name_CtrlFE2,
$Person_Name_CtrlFE3,
$FATCA_3_1,
$FATCA_3_2,
$FATCA_3_2_GIIN,
$FATCA_3_3,
$FATCA_3_4,
$FATCA_3_4_1,
$FATCA_3_4_2,
$FATCA_3_4_3,
$FATCA_3_5,
$FATCA_3_5_Detail,
$FATCA_3_6,
$Trustee_Name,
$Trustee_GIIN,
$FATCA_3_7,
$FATCA_3_8,
$FATCA_3_9,
$FATCA_a,
$FATCA_b,
$GIIN_1,
$GIIN_2,
$GIIN_3,
$GIIN_4,
$GIIN_5,
$GIIN_6,
$GIIN_7,
$GIIN_8,
$GIIN_9,
$GIIN_10,
$GIIN_11,
$GIIN_12,
$GIIN_13,
$GIIN_14,
$GIIN_15,
$GIIN_16,
$E_Sponsor_Name,
$E_Sponsor_GIIN,
$Person_Name_PNFFE1,
$Person_Name_PNFFE2,
$Person_Name_PNFFE3,
$Person_Name_PNFFE4,
$Person_Name_PNFFE5,
$Person_Name_PNFFE6,
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