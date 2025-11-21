<?php

	if ($valor_moneda < 10 ) {

		$porcentaje_alarma = 5;

	}else if ($valor_moneda < 100 ) {

		$porcentaje_alarma = 4;

	}else if ($valor_moneda < 1000 ) {

		$porcentaje_alarma = 3;

	}else if ($valor_moneda < 10000 ) {

		$porcentaje_alarma = 2;

	}else if ($valor_moneda < 100000 ) {

		$porcentaje_alarma = 0.01;

	}else{

		$porcentaje_alarma = 0.5;

	}

	$variacion_exagerada = number_format((1 - ($valor_moneda_anterior / $valor_moneda)) * 100, 2, '.', ',');

	if ($variacion_exagerada > 0) {

		$variacion_simbolo = '&#129145;';

	}else if ($variacion_exagerada < 0) {

		$variacion_simbolo = '&#129155;';

	}else{

		$variacion_simbolo = '=';

	}

?>