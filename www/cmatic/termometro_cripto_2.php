<?php

$num_icono 	= $_GET[icono];
$moneda 	= $_GET[moneda];
$tasa 		= $_GET[tasa];
$decimales	= $_GET[decimales];

?>
<div align='left'>
<label id='icono<?php echo $num_icono; ?>' name='icono<?php echo $num_icono; ?>' >
<img src='imagenes/flecha_arriba.png' width='22' title='1 <?php echo $moneda . ' = USD $ ' . number_format($tasa, $decimales, '.', ','); ?>' hidden /></label>
</div>