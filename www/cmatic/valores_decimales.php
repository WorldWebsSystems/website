<?php

	if ($operar == '') {

		if ($valor_moneda >= 100000) {

			$decimales = 0;

		}else if ( ($valor_moneda >= 10000) and ($valor_moneda < 100000) ) {

			$decimales = 1;

		}else if ( ($valor_moneda >= 1000) and ($valor_moneda < 10000) ) {

			$decimales = 2;

		}else if ( ($valor_moneda >= 10) and ($valor_moneda < 1000) ) {

			$decimales = 2;

		}else if ( ($valor_moneda >= 1) and ($valor_moneda < 10) ) {

			$decimales = 2;

		}else{

			$decimales = 8;

		}

	}

	if ($operar <> '') {

		$resultado2 = mysqli_query($connect, "SELECT * FROM cuentas_trading where empresa='$empresa' and moneda='$operar' and departamento='$departamento' order by id desc limit 1");
		$row2 	    = mysqli_fetch_array($resultado2);

		$decimales = $row2[decimales];

		if ($decimales == 0) {

			if ($valor_moneda >= 100000) {

				$decimales = 0;

			}else if ( ($valor_moneda >= 10000) and ($valor_moneda < 100000) ) {

				$decimales = 0;

			}else if ( ($valor_moneda >= 1000) and ($valor_moneda < 10000) ) {

				$decimales = 1;

			}else if ( ($valor_moneda >= 10) and ($valor_moneda < 1000) ) {

				$decimales = 2;

			}else if ( ($valor_moneda >= 1) and ($valor_moneda < 10) ) {

				$decimales = 2;

			}else{

				$decimales = 8;

			}

			$dias_historico = 2;

		}

	}

?>