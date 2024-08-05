<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Firmus Financial Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../favicon.png" rel="shortcut icon" type="image/x-icon">

</head>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Autocertificación de Residencia Fiscal para Personas que Ejercen Control (FF-ECA-ES-V.01)</h3>
        <a href="./../../index.html" class="btn btn-primary">BACK TO MAIN MENU</a>
    </div>
<?PHP
error_reporting(0);
include "../dbclass.php";
$db = new database('');
$db->connect();

$db->query("SELECT id,account_number,E_Name, E_Country FROM  FOR_FF_ECA_ES order by id");

echo "<table id='accountsTable' class='table table-striped table-bordered'>";
    echo "<thead>
                    <tr>
                        <th>ID</th>
                        <th>Account Number</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Country</th>
                        <th>PDF</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>";

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
<td>$e_surname</td>
<td>$e_country</td>
<td><a href='modifier_pdf.php?id=$id'><img src='../images/pdf.png' title='View PDF'></a></td>
<td><a href='modifier.php?id=$id'><img src='../images/editwg.gif' title='Modify'></a></td>
<td><a href='supp.php?id=$id'><img src='../images/delete.gif' title='Delete'></a></td>
</tr>";
}
echo "</tbody>";
echo "</table>";
echo "<a href='FOR_FF_ECA_ES.html' class='btn btn-success mt-3'>Add New FORM: FOR_FF_ECA_ES</a>";
?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#accountsTable').DataTable();
    });
</script>
</body>
</html>