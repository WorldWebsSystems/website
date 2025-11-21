<?php

if ($operar <> '') {

	?>

	<font size='3'>

	<img src='imagenes/<?php echo $imagen_mini; ?>' height='40'>

	</font>

	<font size='1'>

	</font>

	<?php

	include 'ficha_tasa_1.php';

	include 'ficha_tasa_2.php';

	include 'ficha_tasa_3.php';

}else{

	$url_operar = "trading_simulador.php?operar=" . $moneda;

	if ($so == 'windows') {

		$ancho_ficha_1 = '45%';
		$ancho_ficha_2 = '5%';
		$ancho_ficha_3 = '50%';

	}else{

		$ancho_ficha_1 = '40%';
		$ancho_ficha_2 = '60%';
		$ancho_ficha_3 = '0%';

	}

	?>

	<div align='center'>

	<table width='100%'>

		<tr>

			<td  align='center' width='<?php echo $ancho_ficha_1; ?>'>

				<font size='2'>

				<img src='imagenes/<?php echo $imagen_mini; ?>' width='30'><br><b><?php echo $formapago; ?></b>

				</font>

				<?php

				if ($so <> 'windows') {

					?>

					<br>

					<a href='<?php echo $url_operar; ?>' /><b>Operar</b></a>

					<?php

				}

				?>

			</td>

			<td align='center' width='<?php echo $ancho_ficha_2; ?>'>

				<?php

				include 'ficha_tasa_1.php';

				?>

			<td align='center' width='<?php echo $ancho_ficha_3; ?>'>

				<?php

				if ($so == 'windows') {

					?>

					<td width='50px'>

						<font size='2'><font size='2'><a href='<?php echo $url_operar; ?>' title='Operar criptomoneda <?php echo $moneda; ?> con Simulador de Trading SIM4WW' /><b>Operar</b></a>

					</td>

					<?php

				}

				?>

		</tr>

	</table>

	</div>

	<?php

}

?>