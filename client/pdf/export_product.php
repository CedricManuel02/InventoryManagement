<?php

require_once("../database/connection.php");
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = "<h1 style='text-align: center;'>Hello this is a pdf</h1>";

$dompdf->loadHtml($html);

$dompdf->setPaper("A4", "portrait");

$dompdf->render();

$dompdf->stream();
?>