<?php

	include 'calcula_criptomoneda.php';

	?>

	<h3><img src="imagenes/<?php echo $imagen; ?>" height=30><br>

	<b><font size=3 title = "<?php echo 'Monto a pagar: USD ' . $total_monto; ?>"><?php echo $moneda . " " . number_format($total_monto / $valor_moneda, 8, '.', ','); ?></b></font></h3>
	Tasa: <?php echo $valor_moneda; ?><br><br>

	<?php

	if ($datos_adicionales <> '') {

		?><font size=1><b><?php echo $datos_adicionales; ?></b></font><br><br><?php

	}

	?>

	<font size=2>Dirección:<br><b><?php echo $cuenta; ?></b></font><br><br>

	<img src='imagenes/<?php echo $codigo_qr; ?>' height=150>

	<?php

	if ($red <> '') {

		?><br><br><b><font size=2><?php echo $red; ?></font></b><?php

	}

?>
