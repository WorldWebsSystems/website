<?php

	$key 		  = $_GET[key];
	$operar 	  = $_GET[operar];
	$sel_departamento = $_POST[sel_departamento];

	include 'valores_trading.php';

	$resultado2 	= mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$operar' order by id desc limit 1");
	$row2 		= mysqli_fetch_array($resultado2);

	$vvalor_moneda 	= $row2[tasa];

	$seccion_motor_trading = 1;

	include 'ia.php';

?>

<section id="titulo" class="titulo">

	<div class="container" data-aos="fade-up">

		<?php

		$titulo = 'SIM4WW ©';
		include 'worldwebs_titulo.php';

		if ($operar == '') {

			?>

			<font size='4'><b>SIMULADOR DE TRADING DE CRIPTOMONEDAS</b></font><br>
			<font size='2'>Versión prototipo [feb-2024]</font><br>

			<font size='2'><i>Para su uso libre, de Venezuela para el mundo...</i><br><b><font color='red'>El trading puede generar ganancias, pero también puede ocasionar pérdidas parciales o totales de dinero.<br>¡Tenga mucha precaución con el trading de criptomonedas!</b></font>

			<?php

		}

		if ($operar <> '') {

			$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$operar' and operar=1");

			$row2 = mysqli_fetch_array($resultado2);

			$grafico     = $row2[grafico];
			$moneda      = $row2[moneda];
			$mmoneda     = $moneda;
			$imagen_mini = $row2[imagen_mini];
			$formapago   = $row2[formapago];

			?>

			<font size='3'><b>OPERAR CON:</b></font>

			<br>

			<img src='imagenes/<?php echo $imagen_mini; ?>' width='60'>&nbsp;<br>

			<font size='3'><b><?php echo $formapago; ?></b></font>

			<?php

		}

		?>

		<br><br>

		<?php include 'donaciones.php'; ?>

	</div>

	<?php

	include 'dimensiones.php';

	if ($operar == '') {

		include 'trading_simulador_contenido_1.php';

	}else{

		if ($sel_departamento == '') {

			include 'trading_simulador_contenido_2.php';

		}else{

			include 'trading_simulador_contenido_3.php';
			
		}

	}

	?>

</section>