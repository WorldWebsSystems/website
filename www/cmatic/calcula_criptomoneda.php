<?php

	include 'fecha_hora.php';
	include 'abre_bd_query_sitios.php';

	if ($operar <> "") {

		$grabar_moneda = $operar;

	}else{

		$grabar_moneda = $moneda;

	}

	$resultado2 	      = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$grabar_moneda' and fecha='$fechaant' order by id desc limit 1");
	$row2 		      = mysqli_fetch_array($resultado2);

	$valor_moneda_dia_ant = $row2[tasa];
	$fecha_dia_ant 	      = substr($row2[fecha],8,2). "-" . substr($row2[fecha],5,2) . "-" . substr($row2[fecha],0,4);
	$hora_dia_ant 	      = $row2[hora];

	$band 			= true;
	$ii 			= 1;
	$tendencia_alza		= 0;
	$tendencia_estable	= 0;
	$tendencia_baja		= 0;
	$curva_alta		= 0;
	$curva_total		= 0;
	$curva_baja		= 0;

	$diferencia_tendencia 	= 0;

	$resultado2 	      = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$grabar_moneda' order by id desc limit 10000");

	while ( ($row2 = mysqli_fetch_array($resultado2)) and ($band) ) {

		$resultado3 = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$row2[moneda]'");

		$row3 = mysqli_fetch_array($resultado3);

		if ($row3[status] == 1) {

			if ($ii == 1) {

				$ffecha	 	= $row2[fecha];
				$hhora	 	= $row2[hora];
				$valor_moneda 	= $row2[tasa];
				$fecha_moneda 	= substr($row2[fecha],8,2) . "-" . substr($row2[fecha],5,2) . "-" . substr($row2[fecha],0,4);
				$hora_moneda 	= $row2[hora];

				$valor_moneda_anterior 	= $valor_moneda;

				$ultima_tendencia = $fecha_moneda . " " . $hora_moneda;
				$anterior_tendencia = strtotime($ultima_tendencia);

			}

			if ($ii > 1) {

				if ($row2[tasa] > $valor_moneda_anterior) {

					$tendencia_baja++;
					$curva_total = $curva_total + $row2[tasa] - $valor_moneda_anterior;
					$curva_baja = $curva_baja + $row2[tasa] - $valor_moneda_anterior;

				}else if ($row2[tasa] < $valor_moneda_anterior) {

					$tendencia_alza++;
					$curva_total = $curva_total + $valor_moneda_anterior - $row2[tasa];
					$curva_alta = $curva_alta + $valor_moneda_anterior - $row2[tasa];

				}else{

					$tendencia_estable++;
					$ii--;

				}

				if (($row2[tasa] > $valor_moneda_anterior) or ($row2[tasa] < $valor_moneda_anterior)) {

					$primera_fecha_tendencia = substr($row2[fecha],8,2) . "-" . substr($row2[fecha],5,2) . "-" . substr($row2[fecha],0,4) . " " . $row2[hora];

					$nueva_tendencia = strtotime($primera_fecha_tendencia);

					$diferencia_tendencia = $diferencia_tendencia + $anterior_tendencia - $nueva_tendencia;

				}

				$valor_moneda_anterior	= $row2[tasa];

			}

			$ii++;

			if ( ($operar == '') or ($diferencia_tendencia >= $rango_tendencia) ) {

				$band = false;

			}

		}

	}

	$tendencia = $curva_total * $porc_tendencia / 100;
	$ttendencia = $tendencia;

	if ($curva_alta >= $tendencia ) {

		$tendencia = "alza";

	}else if ($curva_baja >= $tendencia ) {

		$tendencia = "baja";

	}else{

		$tendencia = "---";

	}

	$curva_alta = ($curva_alta * 100 / $curva_total);
	$curva_baja = ($curva_baja * 100 / $curva_total);

	if ($autoriza_grabar == 1) {

		include 'calcula_criptomoneda_registra.php';

	}else{

		$empresa = $ip;

		$consulta = "Update cuentas_trading Set tasa='$valor_moneda' Where empresa='$empresa' and moneda='$operar' and departamento='$departamento'";

		$resultado=mysqli_query($connect,$consulta);

	}

?>