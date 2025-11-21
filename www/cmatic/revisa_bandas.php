<?php

	if ($operar <> '') {

		$seccion_motor_trading = 4;

		include 'ia.php';

		$result1 	   = mysqli_query($connect, "SELECT * FROM bandas where empresa='$empresa' and departamento='$departamento' and moneda='$operar' order by id desc limit 1");
		$row1 		   = mysqli_fetch_array($result1);

		$ttasa_banda_alta  = round($row1[tasa_banda_alta], 13);
		$ttasa_banda_media = round($row1[tasa_banda_media], 13);
		$ttasa_banda_baja  = round($row1[tasa_banda_baja], 13);

		$tasa_banda_alta  = round($tasa_banda_alta, 13);
		$tasa_banda_media = round($tasa_banda_media, 13);
		$tasa_banda_baja  = round($tasa_banda_baja, 13);

		//$mensaje =$ttasa_banda_alta."-".$ttasa_banda_baja."-".$ttasa_banda_media."-".$tasa_banda_alta."-".$tasa_banda_baja."-".$tasa_banda_media;
		//include 'mensaje_alerta.php';

		if (($ttasa_banda_alta <> $tasa_banda_alta) or ($ttasa_banda_baja <> $tasa_banda_baja)) {

			$consulta_nuevabanda = "insert into bandas (
				empresa,
				departamento,
				moneda,
				tasa_banda_baja,
				tasa_banda_media,
				tasa_banda_alta,
				periodo,
				historia,
				fecha,
				hora,
				ip,
				ciudad,
				pais
			) values (
				'$empresa',
				'$departamento',
				'$operar',
				'$tasa_banda_baja',
				'$tasa_banda_media',
				'$tasa_banda_alta',
				'$dias_historico',
				'$historia',
				'$fecha',
				'$hora',
				'$ip',
				'$ciudad',
				'$pais'
			)";

			$resultado_nuevabanda=mysqli_query($connect,$consulta_nuevabanda);

		}

	}

?>