<?php
error_reporting(E_ALL);
require '../../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

// Capture the HTML content
ob_start();
?>


<?php
$html = ob_get_clean();

// Load HTML to Dompdf
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dynamic_data.pdf", array("Attachment" => 1));
?>
?>
<?php
