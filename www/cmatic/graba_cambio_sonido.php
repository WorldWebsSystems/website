<?php

	$value 	      = $_GET[value];
	$adicional    = $_GET[adicional];
	$operar       = $_GET[operar];
	$decimales    = $_GET[decimales];
	$monto	      = $value;

	include 'detecta_ip.php';

	$empresa      = $ip;
	$departamento = '';

	include 'abre_bd_query_sitios.php';

	$resultado2 = mysqli_query($connect, "SELECT * FROM cuentas_trading where empresa='$empresa' and moneda='$operar' and departamento='$departamento' order by id desc limit 1");
	$row2 	    = mysqli_fetch_array($resultado2);

	$decimales  = $row2[decimales];

	switch ($adicional) {

		case 0:

			$sonido = 'sonido0';
			break;

		case 1:

			$sonido = 'sonido1';
			break;

		case 2:

			$sonido = 'sonido2';
			break;

		case 3:

			$sonido = 'sonido3';
			break;

		case 4:

			$sonido = 'sonido4';
			break;

		case 5:

			$sonido = 'sonido5';
			break;

		case 6:

			$sonido = 'sonido6';
			break;

		case 7:

			$sonido = 'sonido7';
			break;

		case 8:

			$sonido = 'sonido8';
			break;

		case 9:

			$sonido = 'sonido9';
			break;


		case 10:

			$sonido = 'sonido10';
			break;

		case 11:

			$sonido = 'sonido11';
			break;

		case 12:

			$sonido = 'sonido12';
			break;

		case 13:

			$sonido = 'sonido13';
			break;

		case 14:

			$sonido = 'sonido14';
			break;


		case 15:

			$sonido = 'sonido15';
			break;

		case 16:

			$mensaje     = 'Despertador tasa alta actualizado.';

			$despertador = 'despertador_tasa_alta';
			$sonido      = 'sonido16';
			break;

		case 17:

			$mensaje     = 'Despertador tasa baja actualizado.';

			$despertador = 'despertador_tasa_baja';
			$sonido      = 'sonido17';
			break;

		case 18:

			$sonido = 'sonido18';
			break;

		case 19:

			$sonido = 'sonido19';
			break;

		case 20:

			$sonido = 'sonido20';
			break;

		case 21:

			$sonido = 'sonido21';
			break;

		case 22:

			$mensaje     = 'Alarma de tasa alta actualizada para activarse cuando sea superior a USD$ ' . number_format($value, $decimales, '.', ',');

			$alarma = 'alarma_tasa_alta';

			$sonido = 'sonido22';
			break;

		case 23:

			$mensaje     = 'Alarma de tasa baja actualizada para activarse cuando sea inferior a USD$ ' . number_format($value, $decimales, '.', ',');

			$alarma = 'alarma_tasa_baja';

			$sonido = 'sonido23';
			break;

		case 24:

			$mensaje     = 'Alarma de tasa alta actualizada para activarse cuando sea superior a USD$ ' . number_format($value, $decimales, '.', ',');

			$alarma = 'alarma_tasa_alta2';

			$sonido = 'sonido24';
			break;

		case 25:

			$mensaje     = 'Alarma de tasa baja actualizada para activarse cuando sea inferior a USD$ ' . number_format($value, $decimales, '.', ',');

			$alarma = 'alarma_tasa_baja2';

			$sonido = 'sonido25';
			break;

		case 26:

			$sonido = 'sonido26';
			break;

		case 27:

			$sonido = 'sonido27';
			break;

		case 28:

			$sonido = 'sonido28';
			break;

		case 29:

			$sonido = 'sonido29';
			break;

		case 30:

			$sonido = 'sonido30';
			break;

		case 100:

			$mensaje     = 'Función temporalmente fuera de servicio. Intente más tarde.';

			include 'mensaje_alerta.php';

			break;

	}

	if ( ($value == 'true') or ($value == 'false') ) {

		$consulta2 = "Update cuentas_trading Set " . $sonido ."=$value Where empresa='$empresa' and moneda='$operar' and departamento='$departamento'";

	}else{

		if ( ($adicional == 16) or ($adicional == 17) ) {

			$consulta2 = "Update cuentas_trading Set " . $despertador ."=$value Where empresa='$empresa' and moneda='$operar' and departamento='$departamento'";

			include 'mensaje_alerta.php';

		}


		if ( ($adicional == 22) or ($adicional == 23) or ($adicional == 24) or ($adicional == 25) ) {

			$consulta2 = "Update cuentas_trading Set " . $alarma ."=$value Where empresa='$empresa' and moneda='$operar' and departamento='$departamento'";

			include 'mensaje_alerta.php';

		}

	}

	$resultado2= mysqli_query($connect,$consulta2);

?>