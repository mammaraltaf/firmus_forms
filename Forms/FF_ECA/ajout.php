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
$E_Home_Street1=getPostValue('E_Home_Street1');
$E_Home_Adress1=getPostValue('E_Home_Adress1');
$E_Home_Adress_Number1=getPostValue('E_Home_Adress_Number1');
$E_Home_City1=getPostValue('E_Home_City1');
$E_Home_State1=getPostValue('E_Home_State1');
$E_Home_Country1=getPostValue('E_Home_Country1');
$E_Home_Postal_Code1=getPostValue('E_Home_Postal_Code1');
$E_Home_Street2=getPostValue('E_Home_Street2');
$E_Home_Adress2=getPostValue('E_Home_Adress2');
$E_Home_Adress_Number2=getPostValue('E_Home_Adress_Number2');
$E_Home_City2=getPostValue('E_Home_City2');
$E_Home_State2=getPostValue('E_Home_State2');
$E_Home_Country2=getPostValue('E_Home_Country2');
$E_Home_Postal_Code2=getPostValue('E_Home_Postal_Code2');
$E_Business_Name1=getPostValue('E_Business_Name1');
$E_TIN1=getPostValue('E_TIN1');
$E_Business_Name2=getPostValue('E_Business_Name2');
$E_TIN2=getPostValue('E_TIN2');
$E_Business_Name3=getPostValue('E_Business_Name3');
$E_TIN3=getPostValue('E_TIN3');
$RF_a_FATCA_USA=getPostValue('RF_a_FATCA_USA');
$RF_a_FATCA_NA=getPostValue('RF_a_FATCA_NA');
$RF_a_CRS_Panama=getPostValue('RF_a_CRS_Panama');
$RF_a_CRS_Other=getPostValue('RF_a_CRS_Other');
$RF_b_FATCA_USA=getPostValue('RF_b_FATCA_USA');
$RF_b_FATCA_NA=getPostValue('RF_b_FATCA_NA');
$RF_b_CRS_Panama=getPostValue('RF_b_CRS_Panama');
$RF_b_CRS_Other=getPostValue('RF_b_CRS_Other');
$RF_c_FATCA_USA=getPostValue('RF_c_FATCA_USA');
$RF_c_FATCA_NA=getPostValue('RF_c_FATCA_NA');
$RF_c_CRS_Panama=getPostValue('RF_c_CRS_Panama');
$RF_c_CRS_Other=getPostValue('RF_c_CRS_Other');
$RF_d_FATCA_USA=getPostValue('RF_d_FATCA_USA');
$RF_d_FATCA_NA=getPostValue('RF_d_FATCA_NA');
$RF_d_CRS_Panama=getPostValue('RF_d_CRS_Panama');
$RF_d_CRS_Other=getPostValue('RF_d_CRS_Other');
$RF_e_FATCA_USA=getPostValue('RF_e_FATCA_USA');
$RF_e_FATCA_NA=getPostValue('RF_e_FATCA_NA');
$RF_e_CRS_Panama=getPostValue('RF_e_CRS_Panama');
$RF_e_CRS_Other=getPostValue('RF_e_CRS_Other');
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
$Person_Name_CtrlFE1=getPostValue('Person_Name_CtrlFE1');
$Person_Name_CtrlFE2=getPostValue('Person_Name_CtrlFE2');
$Person_Name_CtrlFE3=getPostValue('Person_Name_CtrlFE3');
$Ctrl_Role_a_1=getPostValue('Ctrl_Role_a_1');
$Ctrl_Role_a_2=getPostValue('Ctrl_Role_a_2');
$Ctrl_Role_a_3=getPostValue('Ctrl_Role_a_3');
$Ctrl_Role_b_1=getPostValue('Ctrl_Role_b_1');
$Ctrl_Role_b_2=getPostValue('Ctrl_Role_b_2');
$Ctrl_Role_b_3=getPostValue('Ctrl_Role_b_3');
$Ctrl_Role_c_1=getPostValue('Ctrl_Role_c_1');
$Ctrl_Role_c_2=getPostValue('Ctrl_Role_c_2');
$Ctrl_Role_c_3=getPostValue('Ctrl_Role_c_3');
$Ctrl_Role_d_1=getPostValue('Ctrl_Role_d_1');
$Ctrl_Role_d_2=getPostValue('Ctrl_Role_d_2');
$Ctrl_Role_d_3=getPostValue('Ctrl_Role_d_3');
$Ctrl_Role_e_1=getPostValue('Ctrl_Role_e_1');
$Ctrl_Role_e_2=getPostValue('Ctrl_Role_e_2');
$Ctrl_Role_e_3=getPostValue('Ctrl_Role_e_3');
$Ctrl_Role_f_1=getPostValue('Ctrl_Role_f_1');
$Ctrl_Role_f_2=getPostValue('Ctrl_Role_f_2');
$Ctrl_Role_f_3=getPostValue('Ctrl_Role_f_3');
$Ctrl_Role_g_1=getPostValue('Ctrl_Role_g_1');
$Ctrl_Role_g_2=getPostValue('Ctrl_Role_g_2');
$Ctrl_Role_g_3=getPostValue('Ctrl_Role_g_3');
$Ctrl_Role_h_1=getPostValue('Ctrl_Role_h_1');
$Ctrl_Role_h_2=getPostValue('Ctrl_Role_h_2');
$Ctrl_Role_h_3=getPostValue('Ctrl_Role_h_3');
$Ctrl_Role_i_1=getPostValue('Ctrl_Role_i_1');
$Ctrl_Role_i_2=getPostValue('Ctrl_Role_i_2');
$Ctrl_Role_i_3=getPostValue('Ctrl_Role_i_3');
$Ctrl_Role_j_1=getPostValue('Ctrl_Role_j_1');
$Ctrl_Role_j_2=getPostValue('Ctrl_Role_j_2');
$Ctrl_Role_j_3=getPostValue('Ctrl_Role_j_3');
$Ctrl_Role_k_1=getPostValue('Ctrl_Role_k_1');
$Ctrl_Role_k_2=getPostValue('Ctrl_Role_k_2');
$Ctrl_Role_k_3=getPostValue('Ctrl_Role_k_3');
$Ctrl_Role_l_1=getPostValue('Ctrl_Role_l_1');
$Ctrl_Role_l_2=getPostValue('Ctrl_Role_l_2');
$Ctrl_Role_l_3=getPostValue('Ctrl_Role_l_3');
$Ctrl_Role_m_1=getPostValue('Ctrl_Role_m_1');
$Ctrl_Role_m_2=getPostValue('Ctrl_Role_m_2');
$Ctrl_Role_m_3=getPostValue('Ctrl_Role_m_3');
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

$db->query("SELECT id FROM FOR_FF_ECA_ES ORDER BY id DESC LIMIT 1");
$data = $db->fetch_array();
$id = $data ? $data['id'] + 1 : 1; // Handle case when there are no rows and start with id 1


$db = new database('');
$db->connect();



$db->query("INSERT INTO FOR_FF_ECA_ES VALUES ($id,
$E_Name,
$E_Surname,
$E_Country,
$E_ID_type,
$E_ID_No,
$E_ID_Expire_Date,
$E_Birth_Date,
$E_Birth_Place,
$E_Home_Street1,
$E_Home_Adress1,
$E_Home_Adress_Number1,
$E_Home_City1,
$E_Home_State1,
$E_Home_Country1,
$E_Home_Postal_Code1,
$E_Home_Street2,
$E_Home_Adress2,
$E_Home_Adress_Number2,
$E_Home_City2,
$E_Home_State2,
$E_Home_Country2,
$E_Home_Postal_Code2,
$E_Business_Name1,
$E_TIN1,
$E_Business_Name2,
$E_TIN2,
$E_Business_Name3,
$E_TIN3,
$RF_a_FATCA_USA,
$RF_a_FATCA_NA,
$RF_a_CRS_Panama,
$RF_a_CRS_Other,
$RF_b_FATCA_USA,
$RF_b_FATCA_NA,
$RF_b_CRS_Panama,
$RF_b_CRS_Other,
$RF_c_FATCA_USA,
$RF_c_FATCA_NA,
$RF_c_CRS_Panama,
$RF_c_CRS_Other,
$RF_d_FATCA_USA,
$RF_d_FATCA_NA,
$RF_d_CRS_Panama,
$RF_d_CRS_Other,
$RF_e_FATCA_USA,
$RF_e_FATCA_NA,
$RF_e_CRS_Panama,
$RF_e_CRS_Other,
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
$Person_Name_CtrlFE1,
$Person_Name_CtrlFE2,
$Person_Name_CtrlFE3,
$Ctrl_Role_a_1,
$Ctrl_Role_a_2,
$Ctrl_Role_a_3,
$Ctrl_Role_b_1,
$Ctrl_Role_b_2,
$Ctrl_Role_b_3,
$Ctrl_Role_c_1,
$Ctrl_Role_c_2,
$Ctrl_Role_c_3,
$Ctrl_Role_d_1,
$Ctrl_Role_d_2,
$Ctrl_Role_d_3,
$Ctrl_Role_e_1,
$Ctrl_Role_e_2,
$Ctrl_Role_e_3,
$Ctrl_Role_f_1,
$Ctrl_Role_f_2,
$Ctrl_Role_f_3,
$Ctrl_Role_g_1,
$Ctrl_Role_g_2,
$Ctrl_Role_g_3,
$Ctrl_Role_h_1,
$Ctrl_Role_h_2,
$Ctrl_Role_h_3,
$Ctrl_Role_i_1,
$Ctrl_Role_i_2,
$Ctrl_Role_i_3,
$Ctrl_Role_j_1,
$Ctrl_Role_j_2,
$Ctrl_Role_j_3,
$Ctrl_Role_k_1,
$Ctrl_Role_k_2,
$Ctrl_Role_k_3,
$Ctrl_Role_l_1,
$Ctrl_Role_l_2,
$Ctrl_Role_l_3,
$Ctrl_Role_m_1,
$Ctrl_Role_m_2,
$Ctrl_Role_m_3,
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