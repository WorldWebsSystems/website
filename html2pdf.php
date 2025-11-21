<?php
require __DIR__ . '/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

// Ruta del archivo HTML (puede ser local o contenido de una URL)
$htmlFile = 'index.php'; // o 'https://example.com'

// Opción 1: si es un archivo local
$htmlContent = file_get_contents($htmlFile);

// Opción 2: si es una URL remota, activa esta línea y comenta la anterior
// $htmlContent = file_get_contents('https://tupagina.com');

// Crear una instancia de Html2Pdf
$html2pdf = new Html2Pdf('P', 'A4', 'es');

// Cargar el contenido HTML
$html2pdf->writeHTML($htmlContent);

// Descargar el PDF
$html2pdf->output('pagina_convertida.pdf', 'D'); // Cambia 'D' por 'I' para ver en el navegador