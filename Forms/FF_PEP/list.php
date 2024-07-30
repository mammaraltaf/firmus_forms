  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../favicon.png" rel="shortcut icon" type="image/x-icon" />
    <title>Firmus Financial Inc.</title>
</head>
<center>
<?PHP
//error_reporting(0);
include "../dbclass.php";
$db = new database('');
$db->connect();

$db->query("SELECT id,account_number,E_Name, E_Country FROM  FOR_FF_PEP_ES order by id");

echo "<h3>Persona Políticamente Expuesta (PEP) (FF-PEP-ES-V.01)</h3>";
echo "<div style='text-align: right; margin-top: 20px;'>
        <a href='./../../index.html' class='back-to-main-menu' style='padding: 300px'>BACK TO MAIN MENU</a>
      </div>";
echo "<table border=1 >
       <th>id</th>       
       <th>Account Number</th>
	   <th>Name</th>
	   <th>Country</th>
	   <th></th>
	   <th></th>
	   <th></th>
";

while( $data = $db->fetch_array() )
{
$id=$data['id'];
$account_number=$data['account_number'];
$e_name=$data['E_Name'];
$e_country=$data['E_Country'];

echo "<tr>
       <td>$id</td>
       <td>$account_number</td>
	   <td>$e_name</td>
	   <td>$e_country</td>
	   <td><a href=modifier_pdf.php?id=$id><img src=../images/pdf.png title=View_PDF></a></td>
	   <td><a href=modifier.php?id=$id><img src=../images/editwg.gif title=Modify></a></td>
	   <td><a href=supp.php?id=$id><img src=../images/delete.gif title=Delete></a></td>
	   
	   ";
};
echo "</table>";
echo "<br>";
echo "+<a class='active5' href=FOR_FF_PEP_ES.html>Add New FORM : FOR_FF_PEP_ES</a>";

echo "<br>";
?>
</center>  