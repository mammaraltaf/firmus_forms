<?php

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

function getIntegerValue($key)
{
    return isset($_POST[$key]) && !empty($_POST[$key]) ? $_POST[$key] : 0;
}

// Get the fields from the form
$beneficial_owner_name = getPostValue('beneficial_owner_name');
$country_of_citizenship = getPostValue('country_of_citizenship');
$permanent_residence_address = getPostValue('permanent_residence_address');
$permanent_residence_city_state_province = getPostValue('permanent_residence_city_state_province');
$permanent_residence_country = getPostValue('permanent_residence_country');
$mailing_address = getPostValue('mailing_address');
$mailing_address_city_state_province = getPostValue('mailing_address_city_state_province');
$mailing_address_country = getPostValue('mailing_address_country');
$us_taxpayer_identification_number = getPostValue('us_taxpayer_identification_number');
$foreign_tax_identifying_number = getPostValue('foreign_tax_identifying_number');
$ftin_not_legally_required = getIntegerValue('ftin_not_legally_required');
$reference_numbers = getPostValue('reference_numbers');
$date_of_birth = getPostDateValue('date_of_birth');
$treaty_country_residence = getPostValue('treaty_country_residence');
$special_rates_conditions = getPostValue('special_rates_conditions');
$certification_signature = getPostValue('certification_signature');
$certification_date = getPostDateValue('certification_date');
$signer_name = getPostValue('signer_name');

//$query_new = "INSERT INTO for_ff_w8_ben (beneficial_owner_name, country_of_citizenship, permanent_residence_address, permanent_residence_city_state_province, permanent_residence_country, mailing_address, mailing_address_city_state_province, mailing_address_country, us_taxpayer_identification_number, foreign_tax_identifying_number, ftin_not_legally_required, reference_numbers, date_of_birth, treaty_country_residence, special_rates_conditions, certification_signature, certification_date, signer_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$db = new database('');
$db->connect();

$query_new = "
INSERT INTO for_ff_w8_ben (
    beneficial_owner_name,
    country_of_citizenship,
    permanent_residence_address,
    permanent_residence_city_state_province,
    permanent_residence_country,
    mailing_address,
    mailing_address_city_state_province,
    mailing_address_country,
    us_taxpayer_identification_number,
    foreign_tax_identifying_number,
    ftin_not_legally_required,
    reference_numbers,
    date_of_birth,
    treaty_country_residence,
    special_rates_conditions,
    certification_signature,
    certification_date,
    signer_name
) VALUES (
    $beneficial_owner_name,
    $country_of_citizenship,
    $permanent_residence_address,
    $permanent_residence_city_state_province,
    $permanent_residence_country,
    $mailing_address,
    $mailing_address_city_state_province,
    $mailing_address_country,
    $us_taxpayer_identification_number,
    $foreign_tax_identifying_number,
    $ftin_not_legally_required,
    $reference_numbers,
    $date_of_birth,
    $treaty_country_residence,
    $special_rates_conditions,
    $certification_signature,
    $certification_date,
    $signer_name
)";

// Prepare and execute the query
$db->query($query_new);

echo '<br>Contracto agregado !';
echo "<br><a href=list.php><< Back </a>";

?>