<script language="JavaScript">

	function reload(){location.reload(true);}

</script>

<?php

include 'valores_decimales.php';

//$key = '507982'; //temporal para reemplazar los vps

if ($key == '507982') {

	include 'detecta_ip.php';

}

$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where operar=1 and status=1 order by formapago asc");

$c = 0;

while ($row2 = mysqli_fetch_array($resultado2)) {

	$c++;

	$criptos[$c][0] = '';
	$criptos[$c][1] = $row2[moneda];
	$criptos[$c][2] = $row2[grafico];
	$criptos[$c][3] = $row2[imagen_mini];
	$criptos[$c][4] = $row2[formapago];

	$resultado3  = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$row2[moneda]' order by id desc limit 1");

	$row3 = mysqli_fetch_array($resultado3);

	$criptos[$c][5] = $row3[tasa];

}

$url_complemento = '&dias_historico=' . $dias_historico . '&anticipacion=' . $anticipacion . 'exceso=' . $exceso;

$i = 0;

while ($i <= $c - 1) {

	$i++;

	$url_iframe[$i][0] = 'valor_cripto.php?moneda=' . $criptos[$i][1] . $url_complemento;
	include 'valores_criptos.php';
	$url_iframe[$i][5] = 'valor_cripto_calculatasa.php?moneda=' . $criptos[$i][1] . $url_complemento . '&key=' . $key . '&ip=' . $ip;

	?>

	<script language="JavaScript">

		setInterval("frames['iframe<?php echo $i; ?>'].location.href  = '<?php echo $url_iframe[$i][0]; ?>'", 15000);
		setInterval("frames['iframe<?php echo $i; ?>1'].location.href = '<?php echo $url_iframe[$i][5]; ?>'", 5000);

	</script>

	<?php

}

$ii = $i;

?>

<section id="calculos_monedas" class="pricing">

	<?php

	for ($i = 1; $i <= $ii; $i++) {

		?>

		<div class="container" data-aos="fade-up">

			<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

				<div class="box featured">

					<?php

					$url_iframeA = $url_iframe[$i][0];
					$moneda      = $url_iframe[$i][1];
					$mmoneda     = $moneda;
					$imagen_mini = $url_iframe[$i][3];
					$formapago   = $url_iframe[$i][4];
					$url_iframeB = $url_iframe[$i][5];

					include 'ficha_tasa.php';

					?>

					<iframe id='iframe<?php echo $i; ?>1' name='iframe<?php echo $i; ?>1' src="<?php echo $url_iframeB; ?>" hidden /></iframe>

				</div>

			</div>

		</div>

		<br>

		<?php

		if ($key == '507982') {

			?>

			<link href="css/tasas.css" rel="stylesheet" id="bootstrap-css">

			<label id='visor_variaciones_alza'>MODO SUPERVISOR: DETECCIÓN Y GRABADO DE TASAS EN FUNCIONAMIENTO</label>

			<br><br>

			<?php

		}

	}

	?>

</section>