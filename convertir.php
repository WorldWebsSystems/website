<?php
require_once __DIR__ . '/tcpdf/tcpdf.php';
require_once __DIR__ . '/html2pdf/src/Html2Pdf.php';
require_once __DIR__ . '/html2pdf/src/Exception/Html2PdfException.php';
require_once __DIR__ . '/html2pdf/src/Exception/InvalidPdfParameterException.php';

use Spipu\Html2Pdf\Html2Pdf;

$html = file_get_contents('pagina.html');

$html2pdf = new Html2Pdf('P', 'A4', 'es');
$html2pdf->writeHTML($html);
$html2pdf->output('pagina_convertida.pdf', 'D');