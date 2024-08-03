<?php

error_reporting(E_ALL);
include "../dbclass.php";
include "../functions.php";

// Fetch POST data
$Account_Name = isset($_POST['Account_Name']) ? $_POST['Account_Name'] : null;
$Client_Name = isset($_POST['Client_Name']) ? $_POST['Client_Name'] : null;
$Custody_Account = isset($_POST['Custody_Account']) ? $_POST['Custody_Account'] : null;
$Person_Natural = isset($_POST['Person_Natural']) ? $_POST['Person_Natural'] : null;
$Person_Legal = isset($_POST['Person_Legal']) ? $_POST['Person_Legal'] : null;
$Opening_Date = isset($_POST['Opening_Date']) ? $_POST['Opening_Date'] : null;
$Presented_by = isset($_POST['Presented_by']) ? $_POST['Presented_by'] : null;
$Presented_Date = isset($_POST['Presented_Date']) ? $_POST['Presented_Date'] : null;
$Verified_by = isset($_POST['Verified_by']) ? $_POST['Verified_by'] : null;
$Verified_Date = isset($_POST['Verified_Date']) ? $_POST['Verified_Date'] : null;
$Approved_by = isset($_POST['Approved_by']) ? $_POST['Approved_by'] : null;
$Approved_Date = isset($_POST['Approved_Date']) ? $_POST['Approved_Date'] : null;
$account_number = isset($_POST['account_number']) ? $_POST['account_number'] : null;

// Change Dates from DD/MM/YYYY format to YYYY-MM-DD to be saved in MySQL
$Opening_Date = !empty($Opening_Date) ? frenchtodate($Opening_Date) : null;
$Presented_Date = !empty($Presented_Date) ? frenchtodate($Presented_Date) : null;
$Verified_Date = !empty($Verified_Date) ? frenchtodate($Verified_Date) : null;
$Approved_Date = !empty($Approved_Date) ? frenchtodate($Approved_Date) : null;
// Connect to the database
$db = new database('');
$db->connect();

// Get the latest ID and increment it
$db->query("SELECT id FROM FOR_FF_VAC_ES ORDER BY id DESC LIMIT 1");
$data = $db->fetch_array();
$id = $data ? $data['id'] + 1 : 1; // Handle case when there are no rows and start with id 1

// Prepare the INSERT statement
$fields = [];
$values = [];

// Populate fields and values
if ($Account_Name) { $fields[] = 'Account_Name'; $values[] = "'$Account_Name'"; }
if ($Client_Name) { $fields[] = 'Client_Name'; $values[] = "'$Client_Name'"; }
if ($Custody_Account) { $fields[] = 'Custody_Account'; $values[] = "'$Custody_Account'"; }
if ($Person_Natural) { $fields[] = 'Person_Natural'; $values[] = "'$Person_Natural'"; }
if ($Person_Legal) { $fields[] = 'Person_Legal'; $values[] = "'$Person_Legal'"; }
if ($Opening_Date) { $fields[] = 'Opening_Date'; $values[] = "'$Opening_Date'"; }
if ($Presented_by) { $fields[] = 'Presented_by'; $values[] = "'$Presented_by'"; }
if ($Presented_Date) { $fields[] = 'Presented_Date'; $values[] = "'$Presented_Date'"; }
if ($Verified_by) { $fields[] = 'Verified_by'; $values[] = "'$Verified_by'"; }
if ($Verified_Date) { $fields[] = 'Verified_Date'; $values[] = "'$Verified_Date'"; }
if ($Approved_by) { $fields[] = 'Approved_by'; $values[] = "'$Approved_by'"; }
if ($Approved_Date) { $fields[] = 'Approved_Date'; $values[] = "'$Approved_Date'"; }
if ($account_number) { $fields[] = 'account_number'; $values[] = "'$account_number'"; }

// Ensure there are fields to insert
if (empty($fields)) {
    echo '<br>No data to insert!';
    echo "<br><a href=list.php><< Back </a>";
    exit;
}

// Insert data into the database
$field_list = implode(', ', $fields);
$value_list = implode(', ', $values);

$query = "INSERT INTO FOR_FF_VAC_ES (id, $field_list) VALUES ($id, $value_list)";
//echo '<br>Debug Query: ' . $query . '<br>';  // Debugging statement

// Execute the query
    $db->query($query);

// Close the database connection
// $db->close_mysql();

echo '<br>Contracto agregado !';
echo "<br><a href=list.php><< Back </a>";

?>
