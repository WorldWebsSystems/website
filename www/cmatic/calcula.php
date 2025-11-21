<?php

	include 'fecha_hora.php';
	include 'abre_bd_query_sitios.php';

	$resultado2 	      = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='WLD' and fecha='$fechaant' order by id desc limit 1");
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

	$rango_tendencia = 120 * 60;

	$inicio_tendencia = strtotime($fecha_hora) - $rango_tendencia;

	$inicio_tendencia = date('Y-m-d h:i:s A', $inicio_tendencia);

	$iinicio_tendencia = strtotime($inicio_tendencia);

	$resultado2 = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='WLD' order by id desc");

	while ( ($row2 = mysqli_fetch_array($resultado2)) and ($band) ) {

	echo "tasas:";

		if ($ii == 1) {

			$ffecha	 	= $row2[fecha];
			$hhora	 	= $row2[hora];
			$valor_moneda 	= $row2[tasa];
			$fecha_moneda 	= substr($row2[fecha],8,2) . "-" . substr($row2[fecha],5,2) . "-" . substr($row2[fecha],0,4);
			$hora_moneda 	= $row2[hora];

			$valor_moneda_anterior 	= $valor_moneda;

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

			if ( ($row2[tasa] > $valor_moneda_anterior) or ($row2[tasa] < $valor_moneda_anterior) ) {

				$valor_moneda_anterior	= $row2[tasa];

				$fin_tendencia 	= $row2[fecha] . " " . $row2[hora];

				$ffin_tendencia	= strtotime($fin_tendencia);

				$diferencia_tendencia = intval($iinicio_tendencia) - intval($ffin_tendencia);

				echo $fin_tendencia . "." . $row2[tasa] ."<br>";

			}

		}

		$ii++;

		if (($diferencia_tendencia > $rango_tendencia) or ($operar == '')) {

			$band = false;

		}

	}

?>