<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF('P','mm','Letter');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Image('imagenes/icono_pdf.png', 100, 100, -300);
$pdf->Output();
?>