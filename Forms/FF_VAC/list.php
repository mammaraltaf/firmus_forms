  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../favicon.png" rel="shortcut icon" type="image/x-icon" />
      <title>Firmus Financial Inc.</title>
</head>
<center>
<?PHP
error_reporting(0);
include "../dbclass.php";
$db = new database('');
$db->connect();

$db->query("SELECT id,account_number,Account_Name, Client_Name FROM  FOR_FF_VAC_ES order by id");

echo "<h3>Verificación y Aprobación de Cuentas (FF-VAC-ES-V.01)</h3>";
// Back to Main Menu button
echo "<div style='text-align: right; margin-top: 20px;'>
        <a href='./../../index.html' class='back-to-main-menu' style='padding: 300px'>BACK TO MAIN MENU</a>
      </div>";
echo "<table border=1 >
       <th>id</th>       
       <th>Account Number</th>
	   <th>Account Name</th>
	   <th>Client Name</th>
	   <th></th>
	   <th></th>
	   <th></th>
";

while( $data = $db->fetch_array() )
{
$id=$data['id'];
$account_number=$data['account_number'];
$account_name=$data['Account_Name'];
$client_name=$data['Client_Name'];


echo "<tr>
       <td>$id</td>
	   <td>$account_number</td>
	   <td>$account_name</td>
	   <td>$client_name</td>
       	   <td><a href=modifier_pdf.php?id=$id><img src=../images/pdf.png title=View_PDF></a></td>
	   <td><a href=modifier.php?id=$id><img src=../images/editwg.gif title=Modify></a></td>
	   <td><a href=supp.php?id=$id><img src=../images/delete.gif title=Delete></a></td>
	   
	   ";
};
echo "</table>";
echo "<br>";
echo "+<a href=FOR_FF_VAC_ES.html>Add New FORM : FOR_FF_VAC_ES</a>";
echo "<br>";
?>
</center>  