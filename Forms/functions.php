<?php
// la fonction f affiche les nombres au format monetaire //
function f($v)
{
return number_format($v,2, ',', ' ');
}

//----texte_pur nettoie les textes de toutes les caracteres pouvant engendrer des erreurs comme les apostrophes etc...
function texte_pur($texte)
{
$t=str_replace(",", " ", $texte);
$t=str_replace("'", " ", $t);
$t=str_replace("/", " ", $t);
$t=str_replace(";", " ", $t);
$t = htmlspecialchars($t);
	$t = addslashes($t);
	$t = nl2br($t);
return $t;
};

function datetofrench($d)
{
	global $dd;

	// Check if the input is not null and has a length of at least 8
	if (!is_null($d) && strlen($d) >= 8) {
		if (strlen($d) > 8) {
			// Format: YYYY-MM-DD
			$dd = $d[8] . $d[9] . '/' . $d[5] . $d[6] . '/' . $d[0] . $d[1] . $d[2] . $d[3];
		} else {
			// Format: YYYYMMDD
			$dd = $d[6] . $d[7] . '/' . $d[4] . $d[5] . '/' . $d[0] . $d[1] . $d[2] . $d[3];
		}
		return $dd;
	} else {
		// Handle the case where $d is null or too short
		return null;
	}
}


// transforme une date du format anglais au format francais !!
//function datetofrench($d)
//{
//global $dd;
////20081231
////2008-12-31
//if (strlen($d)>8) { $dd=$d[8].$d[9].'/'.$d[5].$d[6].'/'.$d[0].$d[1].$d[2].$d[3]; } else
//{ $dd=$d[6].$d[7].'/'.$d[4].$d[5].'/'.$d[0].$d[1].$d[2].$d[3]; };
//return $dd;
//};
//function frenchtodate($d)
//{
//global $dd;
////31 / 12 / 2017
////01 2 34 5 6789
//
//$dd=$dd=$d[6].$d[7].$d[8].$d[9].'-'.$d[3].$d[4].'-'.$d[0].$d[1];
//
//
//return $dd;
//};

function frenchtodate($d) {
	global $dd;

	// Check if the date string is in the format 'dd/mm/yyyy' and is exactly 10 characters long
	if (strlen($d) === 10 && $d[2] === '/' && $d[5] === '/') {
		$dd = $d[6] . $d[7] . $d[8] . $d[9] . '-' . $d[3] . $d[4] . '-' . $d[0] . $d[1];
	} else {
		// Return an invalid date format if input is not as expected
		$dd = '0000-00-00';
	}

	return $dd;
}

?>
