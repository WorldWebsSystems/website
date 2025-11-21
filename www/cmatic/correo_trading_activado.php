<?php

			setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
			date_default_timezone_set('America/Caracas');

			$asunto = "Operación de trading de " . $operar . " activada";

			$mensaje_cabecera = "El Simulador de Trading (SIM4WW) de WorldWebs ha enviado este mensaje, a fin de notificarle que una operación  con " . $operar . " ha sido activada.\n\n";
			$mensaje_cabecera .= "Procedencia:\n";
			$mensaje_cabecera .= "Ip: " . $ip . "\n";
			$mensaje_cabecera .= "Ciudad: " . $ciudad . "\n";
			$mensaje_cabecera .= "País: " . $pais . "\n\n";

			$mensaje_correo = $mensaje_cabecera . $mensaje_correo;

			$emailheader = "From: WorldWebs.net | SIM4WW<no-responder@worldwebs.net> \r\n";

			mail('info@worldwebs.net', $asunto, $mensaje_correo, $emailheader);

?>