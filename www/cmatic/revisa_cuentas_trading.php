<?php

	include 'fecha_hora.php';

	$empresa = $ip;

	$resultado2 = mysqli_query($connect, "SELECT * FROM cuentas_trading where empresa='$empresa' and moneda='$operar' and departamento='$departamento' order by id desc limit 1");
	$row2 	    = mysqli_fetch_array($resultado2);

	$iip = $row2[ip];

	if (($iip == '') and ($operar <> '')) {

		$valor_moneda = $monto;

		include 'valores_decimales.php';

		$sonido0 = "0";
		$sonido1 = "1";
		$sonido2 = "1";
		$sonido3 = "0";
		$sonido4 = "0";
		$sonido5 = "0";
		$sonido6 = "0";
		$sonido7 = "0";
		$sonido8 = "1";
		$sonido9 = "1";
		$sonido10 = "0";
		$sonido11 = "1";
		$sonido12 = "0";
		$sonido13 = "1";
		$sonido14 = "1";
		$sonido15 = "0";
		$sonido16 = "0";
		$sonido17 = "0";
		$sonido18 = "0";
		$sonido19 = "0";
		$sonido20 = "0"; //tendencia
		$sonido21 = "1";
		$sonido22 = "0";
		$sonido23 = "0";
		$sonido24 = "0";
		$sonido25 = "0";
		$sonido26 = "0";
		$sonido27 = "0";
		$sonido28 = "1";
		$sonido29 = "0";
		$sonido30 = "0";
		$whatsapp_trading = '9999999';
		$email_trading	  = 'richardrodr@gmail.com';
		$refresh  = 60000;
		$rango_tendencia = 900000;
		$porc_tendencia = 60;

		$despertador_tasa_baja 	= 0;
		$despertador_tasa_alta 	= 0;
		$alarma_tasa_baja 	= 0;
		$alarma_tasa_alta 	= 0;
		$alarma_tasa_baja2 	= 0;
		$alarma_tasa_alta2 	= 0;

		$mensaje = $mmmensaje;

		$consulta = "insert into cuentas_trading (
			empresa,
			departamento,
			sonido0,
			sonido1,
			sonido2,
			sonido3,
			sonido4,
			sonido5,
			sonido6,
			sonido7,
			sonido8,
			sonido9,
			sonido10,
			sonido11,
			sonido12,
			sonido13,
			sonido14,
			sonido15,
			sonido16,
			sonido17,
			sonido18,
			sonido19,
			sonido20,
			sonido21,
			sonido22,
			sonido23,
			sonido24,
			sonido25,
			sonido26,
			sonido27,
			sonido28,
			sonido29,
			sonido30,
			whatsapp_trading,
			email_trading,
			despertador_tasa_baja,
			despertador_tasa_alta,
			alarma_tasa_baja,
			alarma_tasa_alta,
			alarma_tasa_baja2,
			alarma_tasa_alta2,
			moneda,
			tasa,
			decimales,
			dias_historico,
			refresh,
			rango_tendencia,
			porc_tendencia,
			fecha,
			hora,
			ip,
			ciudad,
			pais,
			status
		) values (
			'$empresa',
			'',
			'$sonido0',
			'$sonido1',
			'$sonido2',
			'$sonido3',
			'$sonido4',
			'$sonido5',
			'$sonido6',
			'$sonido7',
			'$sonido8',
			'$sonido9',
			'$sonido10',
			'$sonido11',
			'$sonido12',
			'$sonido13',
			'$sonido14',
			'$sonido15',
			'$sonido16',
			'$sonido17',
			'$sonido18',
			'$sonido19',
			'$sonido20',
			'$sonido21',
			'$sonido22',
			'$sonido23',
			'$sonido24',
			'$sonido25',
			'$sonido26',
			'$sonido27',
			'$sonido28',
			'$sonido29',
			'$sonido30',
			'$whatsapp_trading',
			'$email_trading',
			'$despertador_tasa_baja',
			'$despertador_tasa_alta',
			'$alarma_tasa_baja',
			'$alarma_tasa_alta',
			'$alarma_tasa_baja2',
			'$alarma_tasa_alta2',
			'$operar',
			'$monto',
			'$decimales',
			'$dias_historico',
			'$refresh',
			'$rango_tendencia',
			'$porc_tendencia',
			'$fecha',
			'$hora',
			'$ip',
			'$ciudad',
			'$pais',
			'1'
		)";

		$resultado=mysqli_query($connect,$consulta);

	}else{

		$sonido0  = $row2[sonido0];
		$sonido1  = $row2[sonido1];
		$sonido2  = $row2[sonido2];
		$sonido3  = $row2[sonido3];
		$sonido4  = $row2[sonido4];
		$sonido5  = $row2[sonido5];
		$sonido6  = $row2[sonido6];
		$sonido7  = $row2[sonido7];
		$sonido8  = $row2[sonido8];
		$sonido9  = $row2[sonido9];
		$sonido10 = $row2[sonido10];
		$sonido11 = $row2[sonido11];
		$sonido12 = $row2[sonido12];
		$sonido13 = $row2[sonido13];
		$sonido14 = $row2[sonido14];
		$sonido15 = $row2[sonido15];
		$sonido16 = $row2[sonido16];
		$sonido17 = $row2[sonido17];
		$sonido18 = $row2[sonido18];
		$sonido19 = $row2[sonido19];
		$sonido20 = $row2[sonido20];
		$sonido21 = $row2[sonido21];
		$sonido22 = $row2[sonido22];
		$sonido23 = $row2[sonido23];
		$sonido24 = $row2[sonido24];
		$sonido25 = $row2[sonido25];
		$sonido26 = $row2[sonido26];
		$sonido27 = $row2[sonido27];
		$sonido28 = $row2[sonido28];
		$sonido29 = $row2[sonido29];
		$sonido30 = $row2[sonido30];
		$whatsapp_trading 	= $row2[whatsapp_trading];
		$email_trading	  	= $row2[email_trading];
		$alarma_tasa_alta 	= $row2[alarma_tasa_alta];
		$alarma_tasa_baja 	= $row2[alarma_tasa_baja];
		$alarma_tasa_alta2 	= $row2[alarma_tasa_alta2];
		$alarma_tasa_baja2 	= $row2[alarma_tasa_baja2];
		$despertador_tasa_alta 	= $row2[despertador_tasa_alta];
		$despertador_tasa_baja 	= $row2[despertador_tasa_baja];
		$moneda 		= $row2[moneda];
		$decimales 		= $row2[decimales];
		$dias_historico		= $row2[dias_historico];
		$refresh		= $row2[refresh];
		$rango_tendencia 	= $row2[rango_tendencia];
		$porc_tendencia 	= $row2[porc_tendencia];

	}

?>