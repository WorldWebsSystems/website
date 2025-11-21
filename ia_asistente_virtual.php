<script src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">

	var sonando = 0;

	function siguiente() {

		var miAudio=document.getElementById("micontrol");

		if(sonando==(canciones.length-1)) {

			sonando=100;

		}else{

			sonando+=1;

		}

		$("#micontrol source").each(function(){

		if($(this).attr("type")=="audio/mpeg")

			$(this).attr("src",canciones[sonando]+".mp3");

		else if($(this).attr("type")=="audio/ogg")

			$(this).attr("src",canciones[sonando]+".ogg");

		});
        
		miAudio.load();

		miAudio.play();

	}

</script>

<?php

	Function DepuraDecimales($dec) {

		$len = strlen($dec);

		if ($len > 2) {

			$band = true;

			$i = $len;

			$dec_original = $dec;

			while ($band == true) {

				$ultimo_digito = substr($dec, $i - 1, 1);			

				if ($ultimo_digito == '0') {

					$i--;

					$dec = substr($dec, 0, $i);

				}else{

					$band = false;

				}

			}

		}

		return $dec;

	}

	Function l($mmonto, $bbandera, $EsDecimales, $decimales) {

		$unidadletras 	 = "";
 		$decimaletras 	 = "";
	 	$centesimaletras = "";
	 	$unidadaudio 	 = "";
		$decimaaudio 	 = "";
 		$centesimaaudio  = "";
		$decimalaudio 	 = "";
 		$lon 		 = strlen($mmonto);
	
		if ($EsDecimales) {

			$ddecimales = "." . $mmonto;

			$LongDecimales = strlen($ddecimales);

			$Band = false;

			for ($i = 0; $i <= $LongDecimales - 1; $i++) {

				$letra = substr($ddecimales, $i, 1);

				if (($letra <> '0') and ($i > 3)) {

					//$Band = true;

				}

				if (!$Band) {

					switch ($letra) {

		    				case '0':

							$ddecimalaudio = "audios/" . "n_0" . ",";
        						break;

		    				case '1':

							$ddecimalaudio = "audios/" . "n_1" . ",";
        						break;

		    				case '2':

							$ddecimalaudio = "audios/" . "n_2" . ",";
        						break;

		    				case '3':

							$ddecimalaudio = "audios/" . "n_3" . ",";
        						break;

		    				case '4':

							$ddecimalaudio = "audios/" . "n_4" . ",";
	        					break;

		    				case '5':

							$ddecimalaudio = "audios/" . "n_5" . ",";
	        					break;

		    				case '6':

							$ddecimalaudio = "audios/" . "n_6" . ",";
        						break;

		    				case '7':

							$ddecimalaudio = "audios/" . "n_7" . ",";
        						break;

		    				case '8':

							$ddecimalaudio = "audios/" . "n_8" . ",";
	        					break;

		    				case '9':

							$ddecimalaudio = "audios/" . "n_9" . ",";
        						break;

		    				case '.':

							if ($decimales > 0) {

								$ddecimalaudio = "audios/" . "n_con" . ",";

							}
        						break;

					}

					$decimalaudio = $decimalaudio . $ddecimalaudio;

				}

			}

		 }else{

		 	if ($lon > 0) {

				$unidad = substr($mmonto, $lon - 1, 1);

		 		switch ($unidad) {

		    			case '0':

						if ($mmonto == 0) {

							$unidadaudio = "audios/" . "n_0" . ",";
 							$unidadletras = "CERO";

						}
        					break;

		 			case "1":

						$unidadaudio  = "audios/" . "n_1c" . ",";
 						$unidadletras = "UN";

	 					if (($bbandera) and ($sonido3 == 0)) {

							$unidadaudio  = "audios/" . "n_1" . ",";
 							$unidadletras = "UNO";

	 					}

						break;

	 				case "2":

						$unidadaudio  = "audios/" . "n_2" . ",";
			 			$unidadletras = "DOS";
						break;

	 				case "3":

						$unidadaudio  = "audios/" . "n_3" . ",";
 						$unidadletras = "TRES";
						break;

		 			case "4":

						$unidadaudio  = "audios/" . "n_4" . ",";
 						$unidadletras = "CUATRO";
						break;

					case "5":

						$unidadaudio  = "audios/" . "n_5" . ",";
			 			$unidadletras = "CINCO";
						break;

	 				case "6":

						$unidadaudio  = "audios/" . "n_6" . ",";
 						$unidadletras = "SEIS";
						break;

		 			case "7":

						$unidadaudio  = "audios/" . "n_7" . ",";
 						$unidadletras = "SIETE";
						break;

	 				case "8":

						$unidadaudio  = "audios/" . "n_8" . ",";
			 			$unidadletras = "OCHO";
						break;

	 				case "9":

						$unidadaudio  = "audios/" . "n_9" . ",";
 						$unidadletras = "NUEVE";
						break;

		 		}

		 	}

			if ($lon > 1) {

				$decima = substr($mmonto, $lon - 2, 1);

	 			switch ($decima) {

	 				case "1":

						if (($unidad >= "1") And ($unidad <= "5")) {

							$decimaaudio  = "";
 							$decimaletras = "";

				 			if ($unidad == "1") {

								$unidadaudio  = "audios/" . "n_11" . ",";
 								$unidadletras = "ONCE";

			 				}else if ($unidad == "2") {

								$unidadaudio  = "audios/" . "n_12" . ",";
								$unidadletras = "DOCE";

			 				}else if ($unidad == "3") {

								$unidadaudio  = "audios/" . "n_13" . ",";
								$unidadletras = "TRECE";

			 				}else if ($unidad == "4") {

								$unidadaudio  = "audios/" . "n_14" . ",";
								$unidadletras = "CATORCE";

			 				}else if ($unidad == "5") {

								$unidadaudio  = "audios/" . "n_15" . ",";
								$unidadletras = "QUINCE";

			 				}

 							$decimaaudio  = "";
							$decimaletras = "";

						}else{

							$decimaaudio  = "audios/" . "n_10" . ",";
							$decimaletras = "DIEZ";

						}

						break;

	 				case "2":

						$decimaaudio  = "audios/" . "n_20" . ",";
						$decimaletras = "VEINTE";
						break;

					case "3":

						$decimaaudio  = "audios/" . "n_30" . ",";
						$decimaletras = "TREINTA";
						break;

 					case "4":

						$decimaaudio  = "audios/" . "n_40" . ",";
						$decimaletras = "CUARENTA";
						break;

 					case "5":

						$decimaaudio  = "audios/" . "n_50" . ",";
						$decimaletras = "CINCUENTA";
						break;

	 				case "6":

						$decimaaudio  = "audios/" . "n_60" . ",";
						$decimaletras = "SESENTA";
						break;

 					case "7":

						$decimaaudio  = "audios/" . "n_70" . ",";
						$decimaletras = "SETENTA";
						break;

 					case "8":

						$decimaaudio  = "audios/" . "n_80" . ",";
						$decimaletras = "OCHENTA";
						break;

 					case "9":

						$decimaaudio  = "audios/" . "n_90" . ",";
						$decimaletras = "NOVENTA";
						break;

	 			}

 			}

 			if ($lon > 2) {

				$centesima = substr($mmonto, $lon - 3, 1);

 				switch ($centesima) {

 					case "1":

						$centesimaaudio  = "audios/" . "n_100" . ",";

						if (substr($mmonto, $lon - 3, 3) == '100') {
							$centesimaaudio  = "audios/" . "n_100c" . ",";
 							$centesimaletras = "CIEN";
						}else{
							$centesimaaudio  = "audios/" . "n_100" . ",";
 							$centesimaletras = "CIENTO";
						}

						break;

 					case "2":

						$centesimaaudio  = "audios/" . "n_200" . ",";
						$centesimaletras = "DOSCIENTOS";
						break;

 					case "3":

						$centesimaaudio  = "audios/" . "n_300" . ",";
						$centesimaletras = "TRESCIENTOS";
						break;

 					case "4":

						$centesimaaudio  = "audios/" . "n_400" . ",";
						$centesimaletras = "CUATROCIENTOS";
						break;

 					case "5":

						$centesimaaudio  = "audios/" . "n_500" . ",";
						$centesimaletras = "QUINIENTOS";
						break;

 					case "6":

						$centesimaaudio  = "audios/" . "n_600" . ",";
						$centesimaletras = "SEISCIENTOS";
						break;

 					case "7":

						$centesimaaudio  = "audios/" . "n_700" . ",";
						$centesimaletras = "SETECIENTOS";
						break;

 					case "8":

						$centesimaaudio  = "audios/" . "n_800" . ",";
						$centesimaletras = "OCHOCIENTOS";
						break;

 					case "9":

						$centesimaaudio  = "audios/" . "n_900" . ",";
						$centesimaletras = "NOVECIENTOS";
						break;

				}

 			}
 
			if (($unidadletras <> "") And ($decimaletras <> "")) {

 				$unedecimas = " Y ";
				$unedecimasaudio = "audios/" . "n_y" . ",";

 			}else{

 				$unedecimas = "";
				$unedecimasaudio = "";

 			}

		}

 		//$l = $centesimaletras . " " . $decimaletras . $unedecimas . $unidadletras;

 		$a = $centesimaaudio . $decimaaudio . $unedecimasaudio . $unidadaudio . $decimalaudio;

		return $a;

	}

	//Algoritmos de Asistente Virtual:

	include 'detecta_ip.php';

	include 'revisa_cuentas_trading.php';

	$mmonto = $valor_moneda; // Valor del número de entrada que será narrado con voz de IA, y convertido a letras

	$monto   = round($mmonto, $decimales);
	$mmmonto = round($mmonto, $decimales);

	$alerta = "";

	$mensaje_correo = '';
	$mensaje_whatsapp = '';

	$seccion_motor_trading = 4;

	include 'ia.php'; // Procedimientos confidenciales de interpretación y deducción de IA

	$seccion_motor_trading = 5;

	include 'ia.php'; // Procedimientos confidenciales de interpretación y deducción de IA

	$alerta = "";

	$asistente_virtual = 'audios';

	//Timbre:

	if ($sonido1 == 1) {

		$sonido = 1;

		if ($sonido28 == 1) {

			$alerta = $alerta . "audios/" . "n_tono1" . ",";

		}else{

			$alerta = $alerta . "audios/" . "n_tono2" . ",";

		}

	}

	$mensaje = $valor_moneda . " - " . $valor_moneda_anterior;
	//include 'mensaje_alerta.php';

	//Narración de la tasa de entrada (capacidad máxima: 999.999.999)
	if ( ($sonido2 == 1) and ($valor_moneda <> $valor_moneda_resp) ) {

		$sonido = 2;

		$centenasletras = "";
		$MilesLetras 	= "";
		$MillonesLetras = "";
		$decimalletras 	= "";
		$Centenas 	= "";
		$Miles 	  	= "";
		$Millones 	= "";
		$MilMillones 	= "";
		$Billones 	= "";
		$MilBillones 	= "";
		$decim 		= "";
		$letra 		= "";
		$monto_decimal	= number_format($monto, $decimales);
		$dec 		= substr($monto_decimal, strlen($monto_decimal) - $decimales, $decimales);

		if ($decimales == 0) {

			$decim = '';

		}else{

			$decim = " CON " . $dec . " CENTAVOS";

		}

		$monto 		= Intval($monto);
		$long_monto 	= strlen($monto);

		$c = 0;

		for ($digito = $long_monto; $digito >= 1; $digito--) {

			$c++;
			$letra = substr($monto, $digito - 1, 1);

			if (($c >= 1) and ($c <= 3)) {

				$Centenas = $letra . $Centenas ;

			}

			if (($c >= 4) and ($c <= 6)) {

				$Miles = $letra . $Miles;

			}

			if (($c >= 7) and ($c <= 9)) {

				$Millones = $letra . $Millones;

			}

			if (($c >= 10) and ($c <= 12)) {

				$MilMillones = $letra . $MilMillones;

			}

			if (($c >= 13) and ($c <= 15)) {

				$Billones = $letra . $Billones;

			}

			if (($c >= 16) and ($c <= 18)) {

				$MilBillones = $letra . $MilBillones;

			}

		}

		For ($i = 0; $i <= 6; $i++) {

 			if ($i == 0) {

 				$monto = DepuraDecimales($dec);
				$bandera = False;
				$EsDecimales = True;

 			}else if ($i == 1) {

 				$monto = $Centenas;
				$bandera = True;
				$EsDecimales = False;

 			}else if ($i == 2) {

 				$monto = $Miles;
				$bandera = False;
				$EsDecimales = False;

 			}else if ($i == 3) {

 				$monto = $Millones;
				$bandera = False;
				$EsDecimales = False;

 			}else if ($i == 4) {

 				$monto = $MilMillones;
				$bandera = False;
				$EsDecimales = False;

 			}else if ($i == 5) {

 				$monto = $Billones;
				$bandera = False;
				$EsDecimales = False;

 			}else if ($i == 6) {

 				$monto = $MilBillones;
				$bandera = False;
				$EsDecimales = False;

 			}

 			$letra = l($monto, $bandera, $EsDecimales, $decimales);

 			if ($i == 0) {

 				$DecimalLetrasAudio = $letra;

 			}else if ($i == 1) {

 				$centenasletras = $letra;
				$centenasletrasaudio = $letra;

 			}else if ($i == 2) {

 				$MilesLetras = $letra;
				$MilesLetrasAudio = $letra;

 			}else if ($i == 3) {

 				$MillonesLetras = $letra;
				$MillonesLetrasAudio = $letra;

 			}else if ($i == 4) {

 				$MilMillonesLetras = $letra;
				$MilMillonesLetrasAudio = $letra;

 			}else if ($i == 5) {

 				$BillonesLetras = $letra;
				$MillonesLetrasAudio = $letra;

 			}else if ($i == 6) {

 				$MilBillonesLetras = $letra;
				$MilBillonesLetrasAudio = $letra;

 			}

		}

		$MilBillonesLetras = LTrim($MilBillonesLetras);
		$BillonesLetras    = LTrim($BillonesLetras);
		$MilMillonesLetras = LTrim($MilMillonesLetras);
		$MillonesLetras    = LTrim($MillonesLetras);
		$MilesLetras 	   = LTrim($MilesLetras);

		if ($MilBillonesLetras <> "") {

			$UneMilBillon = " MIL BILLONES ";
			$UneMilBillonAudio = "audios/" . "n_mil_billones" . ",";

		}

		if ($BillonesLetras <> "") {

 			if ($BillonesLetras == "UN") {

 				$UneBillon = " BILLÓN ";
				$UneBillonAudio = "audios/" . "n_billon" . ",";

 			}else{

 				$UneBillon = " BILLONES ";
				$UneBillonAudio = "audios/" . "n_billones" . ",";

 			}

		}

		if ($MilMillonesLetras <> "") {

			$UneMilMillon = " MIL MILLONES ";
			$UneMilMillonAudio = "audios/" . "n_mil_millones" . ",";

		}

		if ($MillonesLetras <> "") {

 			if ($MillonesLetras == "UN") {

 				$UneMillon = " MILLÓN ";
				$UneMillonAudio = "audios/" . "n_millon" . ",";

 			}else{

 				$UneMillon = " MILLONES ";
				$UneMillonAudio = "audios/" . "n_millones" . ",";

 			}

		}

		if ($MilesLetras <> "") {

 			$UneMil = " MIL ";
			$UneMilAudio = "audios/" . "n_mil" . ",";

		}

		$alerta = $alerta . $MilBillonesLetrasAudio . $UneMilBillonAudio . $BillonesLetrasAudio . $UneBillonAudio . $MilMillonesLetrasAudio . $UneMilMillonAudio . $MillonesLetrasAudio . $UneMillonAudio . $MilesLetrasAudio . $UneMilAudio . $centenasletrasaudio;

		//Fiat (dólares)
		if ($sonido3 == 1) {

			switch ($asistente_virtual) {

				case "audios":

					$alerta = $alerta . "audios/" . "fiat_dolares" . ",";

					break;

				case "4w":

					break;

			}

		}

		//$MONTOLETRAS = $MilBillonesLetras . $UneMilBillon . $BillonesLetras . $UneBillon . $MilMillonesLetras . $UneMilMillon . $MillonesLetras . $UneMillon . $MilesLetras . $UneMil . $centenasletras . $decim . " DE USD$";

		$alerta = $alerta . $DecimalLetrasAudio;

		//Fiat (centavos)
		if (($sonido3 == 1) and ($decimales > 0)) {

			switch ($asistente_virtual) {

				case "audios":

					$alerta = $alerta . "audios/" . "fiat_centavos" . ",";

					break;

				case "4w":

					break;

			}

		}

		//Criptomoneda
		if ($sonido4 == 1) {

			switch ($asistente_virtual) {

				case "audios":

					$alerta = $alerta . "audios/" . "cripto_porun" . ",";

					$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$operar'");

					$row2 = mysqli_fetch_array($resultado2);

					$audio = $row2[audio];

					$alerta = $alerta . "audios/" . $audio . ",";

					break;

				case "4w":

					break;

			}

		}

	}

	if ($sonido28 == 0) {

		//Rally alcista
		if ($sonido7 == 1) {

			$sonido = 7;

			switch ($asistente_virtual) {

				case "audios":

					if ($mmmonto >= $alerta_bandaalta_excedida) {

						$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

						$alerta = $alerta . "audios/" . "alerta_fuerte_subida" . ",";

						$mensaje_correo .= '¡Atención! Fuerte subida de tasa.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Segunda venta
		if ($sonido6 == 1) {

			$sonido = 6;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto >= $alerta_venta_2_desde) and ($mmmonto <= $alerta_venta_2_hasta) ) {

						$alerta = $alerta . "audios/" . "alerta_zona_venta" . ",";

						$alerta = $alerta . "audios/" . "alerta_venta2" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de venta: Efectuar segunda venta.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Tasa alta alcanzada
		if ($sonido8 == 1) {

			$sonido = 8;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto >= $alerta_bandaalta_alcanzada) and ($mmmonto < $alerta_bandaalta_excedida) ) {

						//$alerta = $alerta . "audios/" . "alerta_bandaalta_alcanzada" . ",";

						$mensaje_correo .= 'La tasa actual se encuentra por encima de la banda alta.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Tasa alta próxima
		if ($sonido9 == 1) {

			$sonido = 9;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto >= $alerta_bandaalta_proxima) and ($mmmonto < $alerta_bandaalta_alcanzada) ) {

						$alerta = $alerta . "audios/" . "alerta_venta" . ",";

						$alerta = $alerta . "audios/" . "alerta_bandaalta_proxima" . ",";

						$mensaje_correo .= 'Banda alta, próximamente será alcanzada.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Primera venta
		if ($sonido10 == 1) {

			$sonido = 10;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto >= $alerta_venta_1_desde) and ($mmmonto <= $alerta_venta_1_hasta) ) {

						$alerta = $alerta . "audios/" . "alerta_zona_venta" . ",";

						$alerta = $alerta . "audios/" . "alerta_venta1" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de venta: Efectuar primera venta.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Zona neutral
		if ($sonido11 == 1) {

			$sonido = 11;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto > $tasa_zonaneutral_media_alta) and ($mmmonto < $tasa_zonaneutral_alta) ) {

						$alerta = $alerta . "audios/" . "alerta_zona_neutral_alta" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de neutral alta.';

					}

					if (($mmmonto >= $tasa_zonaneutral_media_baja) and ($mmmonto <= $tasa_zonaneutral_media_alta)) {

						$alerta = $alerta . "audios/" . "alerta_zona_neutral_media" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de neutral media.';

					}

					if (($mmmonto > $tasa_zonaneutral_baja) and ($mmmonto < $tasa_zonaneutral_media_baja)) {

						$alerta = $alerta . "audios/" . "alerta_zona_neutral_baja" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de neutral baja.';

					}

					$mensaje_correo .= '';

					break;

				case "4w":

					break;

			}

		}

		//Primera compra
		if ($sonido12 == 1) {

			$sonido = 12;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto >= $alerta_compra_1_desde) and ($mmmonto <= $alerta_compra_1_hasta) ) {

						$alerta = $alerta . "audios/" . "alerta_zona_compra" . ",";

						$alerta = $alerta . "audios/" . "alerta_compra1" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de compra: Efectuar primera compra.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Tasa baja próxima
		if ($sonido13 == 1) {

			$sonido = 13;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto <= $alerta_bandabaja_proxima) and ($mmmonto > $alerta_bandabaja_alcanzada) ) {

						$alerta = $alerta . "audios/" . "alerta_bandabaja_proxima" . ",";

						$mensaje_correo .= 'Banda baja próximamente será alcanzada.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Tasa baja alcanzada
		if ($sonido14 == 1) {

			$sonido = 14;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto <= $alerta_bandabaja_alcanzada) and ($mmmonto > $alerta_bandabaja_excedida) ) {

						//$alerta = $alerta . "audios/" . "alerta_bandabaja_alcanzada" . ",";

						$mensaje_correo .= 'La tasa actual se encuentra por debajo de la banda baja.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Segunda compra
		if ($sonido5 == 1) {

			$sonido = 5;

			switch ($asistente_virtual) {

				case "audios":

					if ( ($mmmonto >= $alerta_compra_2_desde) and ($mmmonto <= $alerta_compra_2_hasta) ) {

						$alerta = $alerta . "audios/" . "alerta_zona_compra" . ",";

						$alerta = $alerta . "audios/" . "alerta_compra2" . ",";

						$mensaje_correo .= 'Tasa ubicada en zona de compra: Efectuar segunda compra.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Derrumbe de tasa
		if ($sonido15 == 1) {

			$sonido = 15;

			switch ($asistente_virtual) {

				case "audios":

					if ($mmmonto <= $alerta_bandabaja_excedida) {

						$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

						$alerta = $alerta . "audios/" . "alerta_fuerte_bajada" . ",";

						$mensaje_correo .= '¡Atención! Fuerte bajada de tasa.';

					}

					break;

				case "4w":

					break;

			}

		}

		//Pronóstico de tasa
		if ($sonido21 == 1) {

			$sonido = 21;

			switch ($asistente_virtual) {

				case "audios":

					break;

				case "4w":

					break;

			}

		}

	}else{

		$sonido = 28;

		if ( ($mmmonto >= $alerta_venta_2_desde) and ($mmmonto <= $alerta_venta_2_hasta) ) {

			if ($sonido30 == 1) {

				$alerta = $alerta . "audios/" . "bottrading_bandaalta" . ",";

				$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

				$alerta = $alerta . "audios/" . "bottrading_venta2" . ",";

			}

		}

		if ( ($mmmonto >= $alerta_venta_1_desde) and ($mmmonto <= $alerta_venta_1_hasta) ) {

			if ($sonido30 == 1) {

				$alerta = $alerta . "audios/" . "bottrading_bandaalta" . ",";

				$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

				$alerta = $alerta . "audios/" . "bottrading_venta1" . ",";

			}

		}

		if ( ($mmmonto > $tasa_zonaneutral_media_alta) and ($mmmonto < $alerta_venta_1_desde) ) {

		}

		if ( ($mmmonto >= $tasa_zonaneutral_media_baja) and ($mmmonto <= $tasa_zonaneutral_media_alta) ) {

			if ( ($sonido30 == 1) or ($sonido29 == 1) ) {

				$alerta = $alerta . "audios/" . "bottrading_bandamedia" . ",";
				//$alerta = $alerta . "audios/" . "bottrading_distribuir5050" . ",";

			}

		}

		if ( ($mmmonto < $tasa_zonaneutral_media_baja) and ($mmmonto > $alerta_compra_1_hasta) ) {

		}

		if ( ($mmmonto >= $alerta_compra_1_desde) and ($mmmonto <= $alerta_compra_1_hasta) ) {

			if ($sonido29 == 1) {

				$alerta = $alerta . "audios/" . "bottrading_bandabaja" . ",";

				$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

				$alerta = $alerta . "audios/" . "bottrading_compra1" . ",";

			}

		}

		if ( ($mmmonto >= $alerta_compra_2_desde) and ($mmmonto <= $alerta_compra_2_hasta) ) {

			if ($sonido29 == 1) {

				$alerta = $alerta . "audios/" . "bottrading_bandabaja" . ",";

				$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

				$alerta = $alerta . "audios/" . "bottrading_compra2" . ",";

			}

		}

	}

	//Avaricia
	if ($sonido18 == 1) {

		$sonido = 18;

		switch ($asistente_virtual) {

			case "audios":

				if ($mmmonto >= $alerta_venta_2_hasta) {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "bottrading_avaricia" . ",";

					$mensaje_correo .= 'ATENCIÓN. el valor de la criptomoneda se encuentra muy por encima del rango permitido. Sus ganancias están en un valor muy satisfactorio. Se recomienda vender todas las criptomonedas que posea';

				}

				break;

			case "4w":

				break;

		}

	}

	//Pánico
	if ($sonido19 == 1) {

		$sonido = 19;

		switch ($asistente_virtual) {

			case "audios":

				if ($mmmonto < $alerta_compra_2_desde) {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "bottrading_panico" . ",";

					$mensaje_correo .= 'ATENCIÓN. el valor de la criptomoneda se encuentra muy por debajo del rango permitido. Debe inmediatamente vender todas las criptomonedas que posea';

				}

			break;

			case "4w":

				break;

		}

	}


	//Tendencia
	if ($sonido20 == 1) {

		switch ($asistente_virtual) {

			case "audios":

				if ($tendencia == 'alza') {

					$alerta = $alerta . "audios/" . "alerta_tasa_tendenciaalza" . ",";

				}else if ($tendencia == 'fuerte_alza') {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "alerta_tasa_tendenciaalza" . ",";

				}else if ($tendencia == 'baja') {

					$alerta = $alerta . "audios/" . "alerta_tasa_tendenciabaja" . ",";

				}

				break;

			case "4w":

				break;

		}

	}

	//Alarma tasa alta1
	if ($sonido22 == 1) {

		$sonido = 22;

		switch ($asistente_virtual) {

			case "audios":

				if ($mmmonto >= $alarma_tasa_alta) {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "alerta_alarma_tasaalta" . ",";

					$mensaje_correo .= '¡Alarma 1 de tasa alta activada!\n\nTasa actual:' . $operar . ' ' . $valor_moneda;

					$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$operar'");

					$row2 = mysqli_fetch_array($resultado2);

					$audio = $row2[audio];

					$alerta = $alerta . "audios/" . "alarma_correspondiente_a" . ",";

					$alerta = $alerta . "audios/" . $audio . ",";

				}

				break;

			case "4w":

				break;

		}

	}

	//Alarma tasa baja1
	if ($sonido23 == 1) {

		$sonido = 23;

		switch ($asistente_virtual) {

			case "audios":

				if ($mmmonto <= $alarma_tasa_baja) {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "alerta_alarma_tasabaja" . ",";

					$mensaje_correo .= '¡Alarma 1 de tasa baja activada!\nTasa actual:' . $operar . ' ' . $valor_moneda;

					$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$operar'");

					$row2 = mysqli_fetch_array($resultado2);

					$audio = $row2[audio];

					$alerta = $alerta . "audios/" . "alarma_correspondiente_a" . ",";

					$alerta = $alerta . "audios/" . $audio . ",";

				}

				break;

			case "4w":

				break;

		}

	}

	//Alarma tasa alta2
	if ($sonido24 == 1) {

		$sonido = 24;

		switch ($asistente_virtual) {

			case "audios":

				if ($mmmonto >= $alarma_tasa_alta2) {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "alerta_alarma_tasaalta" . ",";

					$mensaje_correo .= '¡Alarma 2 de tasa alta activada!\n\nTasa actual:' . $operar . ' ' . $valor_moneda;

					$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$operar'");

					$row2 = mysqli_fetch_array($resultado2);

					$audio = $row2[audio];

					$alerta = $alerta . "audios/" . "alarma_correspondiente_a" . ",";

					$alerta = $alerta . "audios/" . $audio . ",";

				}

				break;

			case "4w":

				break;

		}

	}

	//Alarma tasa baja2
	if ($sonido25 == 1) {

		$sonido = 25;

		switch ($asistente_virtual) {

			case "audios":

				if ($mmmonto <= $alarma_tasa_baja2) {

					$alerta = $alerta . "audios/" . "alerta_alarma" . ",";

					$alerta = $alerta . "audios/" . "alerta_alarma_tasabaja" . ",";

					$mensaje_correo .= '¡Alarma 2 de tasa baja activada!\nTasa actual:' . $operar . ' ' . $valor_moneda;

					$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$operar'");

					$row2 = mysqli_fetch_array($resultado2);

					$audio = $row2[audio];

					$alerta = $alerta . "audios/" . "alarma_correspondiente_a" . ",";

					$alerta = $alerta . "audios/" . $audio . ",";

				}

				break;

			case "4w":

				break;

		}

	}

	//Despertador tasa alta
	if ($sonido16 == 1) {

		$sonido = 16;

		$alerta = "";

		if ($mmmonto >= $despertador_tasa_alta) {

			$alerta = "audios/" . "alerta_despertador" . ",";

			$alerta = $alerta . "audios/" . "alarma_despertador_alta" . ",";

			$mensaje_correo .= '¡Alarma despertadora de tasa alta activada!\n\nTasa actual:' . $operar . ' ' . $valor_moneda;

		}

	}

	//Despertador tasa baja
	if ($sonido17 == 1) {

		$sonido = 17;

		$alerta = "";

		if ($mmmonto <= $despertador_tasa_baja) {

			$alerta = "audios/" . "alerta_despertador" . ",";

			$alerta = $alerta . "audios/" . "alarma_despertador_baja" . ",";

			$mensaje_correo .= '¡Alarma despertadora de tasa baja activada!\nTasa actual:' . $operar . ' ' . $valor_moneda;

		}

	}

	//================================

	//Mensaje enviado a email:

	if ( ($mensaje_correo <> '') and ($sonido27 == 1) and ($email_trading <> '') ) {

		setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
		date_default_timezone_set('America/Caracas');

		$asunto = "¡Operación de Trading requiere de su atención!";

		$mensaje_cabecera = "El Simulador de Trading de WorldWebs (SIM4WW) ha enviado este mensaje, a fin de notificarle que existe un alerta en su cuenta de trading:\n\n";
		$mensaje_cabecera .= "Empresa: " . $empresa . "\n";
		$mensaje_cabecera .= "Departamento: " . $departamento . "\n";
		$mensaje_cabecera .= "Trading: " . $operar . "\n\n";
		$mensaje_cabecera .= "Motivo del alerta:\n\n";

		$mensaje_correo .= "\n\n";

		$mensaje_correo .= "Para soporte o cualquier consulta que desee formularnos, puede contactarnos a:\n";
		$mensaje_correo .= "E-mail: info@worldwebs.net\n";
		$mensaje_correo .= "\n";
		$mensaje_correo .= "Nota: no responda a este correo electrónico, porque no es revisado por nosotros.\n";
		$mensaje_correo .= "Su dirección Ip: ".$ip."\n";
		$mensaje_correo .= "Su localización: ".$ciudad.", ".$pais."\n";

		$mensaje_correo = $mensaje_cabecera . $mensaje_correo;

		$emailheader = "From: CMATIC | SIM4WW<no-responder@tuww.net> \r\n";

		$email_trading = "bot_trading@tuww.net";

		mail($email_trading, $asunto, $mensaje_correo, $emailheader);

	}

	//================================

	//Mensaje enviado a WhatsApp:

	if ($mensaje_whatsapp <> '') {

		//En desarrollo...

	}

	//================================

	$playlist[0] = 'n_vacio';

	$registro = 1;

	for ($i=0; $i <= strlen($alerta); $i++) {

		$letra = substr($alerta, $i, 1);

		if ($letra <> ',') {

			$playlist[$registro] = $playlist[$registro] . $letra;

		}else{

			$registro++;

		}

	}

?>