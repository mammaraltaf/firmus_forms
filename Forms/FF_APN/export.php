<?PHP
error_reporting(0);
include "../dbclass.php";
include "../functions.php";
$db = new database('');
$db->connect();

$id=$_GET['id'];
$db->query("select * from FOR_FF_APN_ES where id=$id");
while( $data = $db->fetch_array() )
{
$Contract_Type=$data['Contract_Type'];
$Part_Rel=$data['Part_Rel'];
$Part_Rel_Raison=$data['Part_Rel_Raison'];
$E_Name=$data['E_Name'];
$E_surname=$data['E_surname'];
$E_Country=$data['E_Country'];
$E_C_Status=$data['E_C_Status'];
$E_ID_type=$data['E_ID_type'];
$E_ID_No=$data['E_ID_No'];
$E_ID_Expire_Date=$data['E_ID_Expire_Date'];
$E_Birth_Date=$data['E_Birth_Date'];
$E_Birth_Place=$data['E_Birth_Place'];
$E_Email=$data['E_Email'];
$E_Profession=$data['E_Profession'];
$E_Profession_Current=$data['E_Profession_Current'];
$E_Home_Adress=$data['E_Home_Adress'];
$E_Home_Adress_Number=$data['E_Home_Adress_Number'];
$E_Home_Postal_Adress=$data['E_Home_Postal_Adress'];
$E_Home_Fax=$data['E_Home_Fax'];
$E_Office_Adress=$data['E_Office_Adress'];
$E_Office_Number=$data['E_Office_Number'];
$E_Office_Postal_Adress=$data['E_Office_Postal_Adress'];
$E_Office_Fax=$data['E_Office_Fax'];
$E_Salary_Independ=$data['E_Salary_Independ'];
$E_Salary_NotRetired=$data['E_Salary_NotRetired'];
$E_Salary_NotPensioned=$data['E_Salary_NotPensioned'];
$E_Salary_Fixed=$data['E_Salary_Fixed'];
$E_Salary_Variable=$data['E_Salary_Variable'];
$E_Salary_Other=$data['E_Salary_Other'];

$Funds_Source1=$data['Funds_Source1'];
$Funds_Source1_Type_Receive_Cash=$data['Funds_Source1_Type_Receive_Cash'];
$Funds_Source1_Type_Send_Cash=$data['Funds_Source1_Type_Send_Cash'];

$Funds_Source1_Type_Receive_Titles=$data['Funds_Source1_Type_Receive_Titles'];
$Funds_Source1_Type_Submit_Titles=$data['Funds_Source1_Type_Submit_Titles'];

$Funds_Source2=$data['Funds_Source2'];
$Funds_Source2_Type_Receive_Cash=$data['Funds_Source2_Type_Receive_Cash'];
$Funds_Source2_Type_Send_Cash=$data['Funds_Source2_Type_Send_Cash'];

$Funds_Source2_Type_Receive_Titles=$data['Funds_Source2_Type_Receive_Titles'];
$Funds_Source2_Type_Submit_Titles=$data['Funds_Source2_Type_Submit_Titles'];

$RS_Employer_name=$data['RS_Employer_name'];
$RS_Annual_Income_USD=$data['RS_Annual_Income_USD'];
$RS_Annual_Salary_USD=$data['RS_Annual_Salary_USD'];
$RS_Years_in_Company=$data['RS_Years_in_Company'];
$RS_Activity_Professional_fees=$data['RS_Activity_Professional_fees'];
$RS_Activity_Own_business=$data['RS_Activity_Own_business'];
$RS_Activity_Saving=$data['RS_Activity_Saving'];
$RS_Activity_Pension=$data['RS_Activity_Pension'];
$RS_Activity_Pension1=$data['RS_Activity_Pension1'];
$RS_Investment_Dividends=$data['RS_Investment_Dividends'];
$RS_Others=$data['RS_Others'];
$Bank1_Ref_Name=$data['Bank1_Ref_Name'];
$Bank1_Ref_Country=$data['Bank1_Ref_Country'];
$Bank1_Ref_Contact=$data['Bank1_Ref_Contact'];
$Bank1_Ref_Phone=$data['Bank1_Ref_Phone'];
$Bank2_Ref_Name=$data['Bank2_Ref_Name'];
$Bank2_Ref_Country=$data['Bank2_Ref_Country'];
$Bank2_Ref_Contact=$data['Bank2_Ref_Contact'];
$Bank2_Ref_Phone=$data['Bank2_Ref_Phone'];
$Bank3_Ref_Name=$data['Bank3_Ref_Name'];
$Bank3_Ref_Country=$data['Bank3_Ref_Country'];
$Bank3_Ref_Contact=$data['Bank3_Ref_Contact'];
$Bank3_Ref_Phone=$data['Bank3_Ref_Phone'];

$Initial_Deposit_Cash=$data['Initial_Deposit_Cash'];
$Initial_Deposit_Non_Securities=$data['Initial_Deposit_Non_Securities'];

$Initial_Deposit_USD_Amount=$data['Initial_Deposit_USD_Amount'];
$Initial_Deposit_Securities_Amount=$data['Initial_Deposit_Securities_Amount'];

$Initial_Deposit_From1=$data['Initial_Deposit_From1'];
$Initial_Deposit_From1_Cash=$data['Initial_Deposit_From1_Cash'];
$Initial_Deposit_From1_Securities=$data['Initial_Deposit_From1_Securities'];
$Initial_Deposit_From1_Rel=$data['Initial_Deposit_From1_Rel'];

$Initial_Deposit_From2=$data['Initial_Deposit_From2'];
$Initial_Deposit_From2_Cash=$data['Initial_Deposit_From2_Cash'];
$Initial_Deposit_From2_Securities=$data['Initial_Deposit_From2_Securities'];
$Initial_Deposit_From2_Rel=$data['Initial_Deposit_From2_Rel'];


$PEP=$data['PEP'];
$PEP_Close=$data['PEP_Close'];
$PEP_Five=$data['PEP_Five'];
$Orders_Autorise_Owner=$data['Orders_Autorise_Owner'];
$Orders_Autorise_Co_Owner=$data['Orders_Autorise_Co_Owner'];
$Orders_Autorise_Signatory=$data['Orders_Autorise_Signatory'];
$Orders_Autorise_Attorney=$data['Orders_Autorise_Attorney'];
$Orders_Autorise_Beneficiary_Shareholder=$data['Orders_Autorise_Beneficiary_Shareholder'];
$Send_receive_cash_Autorise_Owner=$data['Send_receive_cash_Autorise_Owner'];
$Send_receive_cash_Autorise_Co_Owner=$data['Send_receive_cash_Autorise_Co_Owner'];
$Send_receive_cash__Autorise_Signatory=$data['Send_receive_cash__Autorise_Signatory'];
$Send_receive_cash_Autorise_Attorney=$data['Send_receive_cash_Autorise_Attorney'];
$Send_receive_cash__Beneficiary_Shareholder=$data['Send_receive_cash__Beneficiary_Shareholder'];
$Orders_Mail=$data['Orders_Mail'];
$Orders_Documents=$data['Orders_Documents'];
$Orders_Telephone=$data['Orders_Telephone'];
$Orders_text=$data['Orders_text'];
$Orders_Directly=$data['Orders_Directly'];
$Autorise_Give_instuctions=$data['Autorise_Give_instuctions'];
$Complete1=$data['Complete1'];
$Complete2=$data['Complete2'];
$Complete3=$data['Complete3'];
$Complete4=$data['Complete4'];
$Autorise_Firmus=$data['Autorise_Firmus'];
$Receive_AS_Mail=$data['Receive_AS_Mail'];
$Receive_AS_Postal=$data['Receive_AS_Postal'];

$Receive_Mensual=$data['Receive_Mensual'];
$Receive_Trimestral=$data['Receive_Trimestral'];
$Receive_Semestral=$data['Receive_Semestral'];
$Receive_Anual=$data['Receive_Anual'];
$General_Data=$data['General_Data'];
$Signature1_Permanent=$data['Signature1_Permanent'];
$Signature1_Not_variable=$data['Signature1_Not_variable'];
$Full_name1=$data['Full_name1'];
$Full_name2=$data['Full_name2'];
$Document1_ID=$data['Document1_ID'];
$Document2_ID=$data['Document2_ID'];
$Signature1_Date=$data['Signature1_Date'];
$Signature2_Date=$data['Signature2_Date'];
$Signature1=$data['Signature1'];
$Signature2=$data['Signature2'];
$Runners_Name=$data['Runners_Name'];
$Runners_Date=$data['Runners_Date'];
$Compliance_Officer_Name=$data['Compliance_Officer_Name'];
$Compliance__Officer_Date=$data['Compliance__Officer_Date'];
$Chief_Executive_Name=$data['Chief_Executive_Name'];
$Chief_Executive_Date=$data['Chief_Executive_Date'];
$Stock_Broker1_Signature=$data['Stock_Broker1_Signature'];
$Stock_Broker2_Signature=$data['Stock_Broker2_Signature'];
$Chief_Executive_Signature=$data['Chief_Executive_Signature'];
$account_number=$data['account_number'];
};


if($E_ID_Expire_Date=='0000-00-00') $E_ID_Expire_Date='';
if($E_Birth_Date=='0000-00-00') $E_Birth_Date='';
if($Signature1_Date=='0000-00-00') $Signature1_Date='';
if($Signature2_Date=='0000-00-00') $Signature2_Date='';
if($Runners_Date=='0000-00-00') $Runners_Date='';
if($Compliance__Officer_Date=='0000-00-00') $Compliance__Officer_Date='';
if($Chief_Executive_Date=='0000-00-00') $Chief_Executive_Date='';




echo "($id,
'$Contract_Type',
'$Part_Rel',
'$Part_Rel_Raison',
'$E_Name',
'$E_surname',
'$E_Country',
'$E_C_Status',
'$E_ID_type',
'$E_ID_No',
'$E_ID_Expire_Date',
'$E_Birth_Date',
'$E_Birth_Place',
'$E_Email',
'$E_Profession',
'$E_Profession_Current',
'$E_Home_Adress',
'$E_Home_Adress_Number',
'$E_Home_Postal_Adress',
'$E_Home_Fax',
'$E_Office_Adress',
'$E_Office_Number',
'$E_Office_Postal_Adress',
'$E_Office_Fax',
'$E_Salary_Independ',
'$E_Salary_NotRetired',
'$E_Salary_NotPensioned',
'$E_Salary_Fixed',
'$E_Salary_Variable',
'$E_Salary_Other',
'$Funds_Source1',
'$Funds_Source1_Type_Receive_Cash',
'$Funds_Source1_Type_Send_Cash',
'$Funds_Source1_Type_Receive_Titles',
'$Funds_Source1_Type_Submit_Titles',
'$Funds_Source2',
'$Funds_Source2_Type_Receive_Cash',
'$Funds_Source2_Type_Send_Cash',
'$Funds_Source2_Type_Receive_Titles',
'$Funds_Source2_Type_Submit_Titles',
'$RS_Employer_name',
'$RS_Annual_Income_USD',
'$RS_Annual_Salary_USD',
'$RS_Years_in_Company',
'$RS_Activity_Professional_fees',
'$RS_Activity_Own_business',
'$RS_Activity_Saving',
'$RS_Activity_Pension',
'$RS_Activity_Pension1',
'$RS_Investment_Dividends',
'$RS_Others',
'$Bank1_Ref_Name',
'$Bank1_Ref_Country',
'$Bank1_Ref_Contact',
'$Bank1_Ref_Phone',
'$Bank2_Ref_Name',
'$Bank2_Ref_Country',
'$Bank2_Ref_Contact',
'$Bank2_Ref_Phone',
'$Bank3_Ref_Name',
'$Bank3_Ref_Country',
'$Bank3_Ref_Contact',
'$Bank3_Ref_Phone',
'$Initial_Deposit_Cash',
'$Initial_Deposit_Non_Securities',
'$Initial_Deposit_USD_Amount',
'$Initial_Deposit_Securities_Amount',
'$Initial_Deposit_From1',
'$Initial_Deposit_From1_Cash',
'$Initial_Deposit_From1_Securities',
'$Initial_Deposit_From1_Rel',
'$Initial_Deposit_From2',
'$Initial_Deposit_From2_Cash',
'$Initial_Deposit_From2_Securities',
'$Initial_Deposit_From2_Rel',
'$PEP',
'$PEP_Close',
'$PEP_Five',
'$Orders_Autorise_Owner',
'$Orders_Autorise_Co_Owner',
'$Orders_Autorise_Signatory',
'$Orders_Autorise_Attorney',
'$Orders_Autorise_Beneficiary_Shareholder',
'$Send_receive_cash_Autorise_Owner',
'$Send_receive_cash_Autorise_Co_Owner',
'$Send_receive_cash__Autorise_Signatory',
'$Send_receive_cash_Autorise_Attorney',
'$Send_receive_cash__Beneficiary_Shareholder',
'$Orders_Mail',
'$Orders_Documents',
'$Orders_Telephone',
'$Orders_text',
'$Orders_Directly',
'$Autorise_Give_instuctions',
'$Complete1',
'$Complete2',
'$Complete3',
'$Complete4',
'$Autorise_Firmus',
'$Receive_AS_Mail',
'$Receive_AS_Postal',
'$Receive_Mensual',
'$Receive_Trimestral',
'$Receive_Semestral',
'$Receive_Anual',
'$General_Data',
'$Signature1_Permanent',
'$Signature1_Not_variable',
'$Full_name1',
'$Full_name2',
'$Document1_ID',
'$Document2_ID',
'$Signature1_Date',
'$Signature2_Date',
'$Signature1',
'$Signature2',
'$Runners_Name',
'$Runners_Date',
'$Compliance_Officer_Name',
'$Compliance__Officer_Date',
'$Chief_Executive_Name',
'$Chief_Executive_Date',
'$Stock_Broker1_Signature',
'$Stock_Broker2_Signature',
'$Chief_Executive_Signature',
'$account_number'
)";



?>