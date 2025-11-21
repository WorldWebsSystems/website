<?php

	function busca_edad($fecha_nacimiento){

		$dia=date("d");
		$mes=date("m");
		$ano=date("Y");

		$dianaz=date("d",strtotime($fecha_nacimiento));
		$mesnaz=date("m",strtotime($fecha_nacimiento));
		$anonaz=date("Y",strtotime($fecha_nacimiento));

		if (($mesnaz == $mes) && ($dianaz > $dia)) {
			$ano=($ano-1); 
		}

		if ($mesnaz > $mes) {
			$ano=($ano-1);
		}

		$edad=($ano-$anonaz);

		return $edad;

	}

	function Segmentar_Resumen($texto) {

		$texto = preg_replace_callback('/^([^:]+:)/', function($coincidencia) {
		return '<strong>' . trim($coincidencia[1]) . '</strong>';
		}, $texto);

		$texto = str_replace(';', ';<br>', $texto);

		$texto = preg_replace_callback('/;<br>\s*([^:<]+:)/', function($coincidencia) {
		return ';&nbsp;&nbsp;<strong>' . trim($coincidencia[1]) . '</strong>';
		}, $texto);

		return $texto;

	}

	function calcula_antiguedad($fecha_desde, $fecha_hasta){

		if ($fecha_hasta <> '0/0/01') {

			$dia=date("d",strtotime($fecha_hasta));
			$mes=date("m",strtotime($fecha_hasta));
			$ano=date("Y",strtotime($fecha_hasta));

		}else{

			$dia=date("d");
			$mes=date("m");
			$ano=date("Y");

		}

		$fecha_hasta = $ano . '-' . $mes . '-' . $dia;
    		$inicio = new DateTime($fecha_desde);
    		$fin = new DateTime($fecha_hasta);
    		$diferencia = $inicio->diff($fin);
    		$anios = $diferencia->y;
    		$meses = $diferencia->m;

		if ($anios <> 0) {

    			$calcula_antiguedad = "$anios años, $meses meses";

		}else{

    			$calcula_antiguedad = "$meses meses";

		}

		return $calcula_antiguedad;

	}


	function MesLetra($mes) {

		switch ($mes) {

			case 1:
				$MesLetra = 'Ene';
				break;

			case 2:
				$MesLetra = 'Feb';
				break;

			case 3:
				$MesLetra = 'Mar';
				break;

			case 4:
				$MesLetra = 'Abr';
				break;

			case 5:
				$MesLetra = 'May';
				break;

			case 6:
				$MesLetra = 'Jun';
				break;

			case 7:
				$MesLetra = 'Jul';
				break;

			case 8:
				$MesLetra = 'Ago';
				break;

			case 9:
				$MesLetra = 'Sep';
				break;

			case 10:
				$MesLetra = 'Oct';
				break;

			case 11:
				$MesLetra = 'Nov';
				break;

			case 12:
				$MesLetra = 'Dic';
				break;

		}

		return $MesLetra;

	}

?>