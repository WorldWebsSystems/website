<?php

switch ($seccion_motor_trading) {

case 1:

	//IA para determinar los cuatro tiempos de la metodología a partir de las bandas

	?>

	<script language="JavaScript">

		function Revisa4W() {

			var vvalor_moneda = parseFloat(<?php echo $vvalor_moneda; ?>);

			$("#carrito1").prop('hidden', true);
			$("#carrito2").prop('hidden', true);
			$("#carrito3").prop('hidden', true);
			$("#carrito4").prop('hidden', true);
			$("#carrito5").prop('hidden', true);
			$("#carrito6").prop('hidden', true);

			var compra_1_desde = parseFloat(document.getElementById('compra_1_desde').value);
			var compra_1_hasta = parseFloat(document.getElementById('compra_1_hasta').value);
			var compra_2_desde = parseFloat(document.getElementById('compra_2_desde').value);
			var compra_2_hasta = parseFloat(document.getElementById('compra_2_hasta').value);
			var compra_3_desde = parseFloat(document.getElementById('compra_3_desde').value);
			var compra_3_hasta = parseFloat(document.getElementById('compra_3_hasta').value);

			if ((vvalor_moneda >= compra_1_desde) && (vvalor_moneda <= compra_1_hasta)) {

				$("#carrito1").prop('hidden', false);

			}

			if ((vvalor_moneda >= compra_2_desde) && (vvalor_moneda < compra_2_hasta)) {

				$("#carrito2").prop('hidden', false);

			}

			if ((vvalor_moneda >= compra_3_desde) && (vvalor_moneda < compra_3_hasta)) {

				$("#carrito3").prop('hidden', false);

			}

			var venta_1_desde = parseFloat(document.getElementById('venta_1_desde').value);
			var venta_1_hasta = parseFloat(document.getElementById('venta_1_hasta').value);
			var venta_2_desde = parseFloat(document.getElementById('venta_2_desde').value);
			var venta_2_hasta = parseFloat(document.getElementById('venta_2_hasta').value);
			var venta_3_desde = parseFloat(document.getElementById('venta_3_desde').value);
			var venta_3_hasta = parseFloat(document.getElementById('venta_3_hasta').value);

			if ((vvalor_moneda >= venta_1_desde) && (vvalor_moneda <= venta_1_hasta)) {

				$("#carrito4").prop('hidden', false);

			}

			if ((vvalor_moneda >= venta_2_desde) && (vvalor_moneda < venta_2_hasta)) {

				$("#carrito5").prop('hidden', false);

			}

			if ((vvalor_moneda >= venta_3_desde) && (vvalor_moneda < venta_3_hasta)) {

				$("#carrito6").prop('hidden', false);

			}

		}

	</script>

	<?php

	break;

case 2:

	//IA para simulador de trading

	$result1 	  = mysqli_query($connect, "SELECT * FROM bandas where empresa='$empresa' and departamento='$departamento' and moneda='$operar' order by id desc limit 1");
	$row1 		  = mysqli_fetch_array($result1);
	$tasa_banda_alta  = $row1[tasa_banda_alta];
	$tasa_banda_baja  = $row1[tasa_banda_baja];
	$tasa_banda_media = $row1[tasa_banda_media];
	$historia	  = $row1[historia];
	$fecha_moneda	  = $row1[fecha];

	?>

	<script language="JavaScript">

		function VerAlertasSonoras(value) {

			if (value === 1) {

				$("#alertas_sonoras").prop('hidden', false);
				$("#boton_sonidos1").prop('hidden', true);

			}else{

				$("#alertas_sonoras").prop('hidden', true);
				$("#boton_sonidos1").prop('hidden', false);

			}

		}

		function DesbloqueaCriptometro() {

			$("#4tiempos_compra").prop('disabled', false);
			$("#4tiempos_venta").prop('disabled', false);
			$("#sonido_tasaaltaexcedida").prop('disabled', false);
			$("#sonido_tasaaltaalcanzada").prop('disabled', false);
			$("#sonido_tasaaltaproxima").prop('disabled', false);
			$("#sonido_zonaventa").prop('disabled', false);
			$("#sonido_zonaneutral").prop('disabled', false);
			$("#sonido_zonacompra").prop('disabled', false);
			$("#sonido_tasabajaproxima").prop('disabled', false);
			$("#sonido_tasabajaalcanzada").prop('disabled', false);
			$("#sonido_tasabajaexcedida").prop('disabled', false);
			$("#sonido_pronosticos").prop('disabled', false);

		}

		function DesbloqueaCasillasAudios() {

			$("#sonido_timbre").prop('disabled', false);
			$("#sonido_narracion").prop('disabled', false);
			$("#sonido_fiat").prop('disabled', false);
			$("#sonido_cripto").prop('disabled', false);
			DesbloqueaCriptometro();
			$("#sonido_alarma_alta11").prop('disabled', false);
			$("#sonido_alarma_tasa_alta11").prop('disabled', false);
			$("#sonido_alarma_baja12").prop('disabled', false);
			$("#sonido_alarma_tasa_baja12").prop('disabled', false);
			$("#sonido_alarma_alta21").prop('disabled', false);
			$("#sonido_alarma_tasa_alta21").prop('disabled', false);
			$("#sonido_alarma_baja22").prop('disabled', false);
			$("#sonido_alarma_tasa_baja22").prop('disabled', false);
			$("#sonido_alerta_rally").prop('disabled', false);
			$("#sonido_alerta_caida").prop('disabled', false);
			$("#sonido_tendencias").prop('disabled', false);
			$("#mensaje_whatsapp_1").prop('disabled', false);
			$("#mensaje_whatsapp_2").prop('disabled', true);
			$("#mensaje_email_1").prop('disabled', false);
			$("#mensaje_email_2").prop('disabled', true);
			$("#bot_trading").prop('disabled', false);

		}

		function BloqueaCriptometro() {

			$("#4tiempos_compra").prop('disabled', true);
			$("#4tiempos_venta").prop('disabled', true);
			$("#4tiempos_compra").prop('disabled', true);
			$("#4tiempos_venta").prop('disabled', true);
			$("#sonido_tasaaltaexcedida").prop('disabled', true);
			$("#sonido_tasaaltaalcanzada").prop('disabled', true);
			$("#sonido_tasaaltaproxima").prop('disabled', true);
			$("#sonido_zonaventa").prop('disabled', true);
			$("#sonido_zonaneutral").prop('disabled', true);
			$("#sonido_zonacompra").prop('disabled', true);
			$("#sonido_tasabajaproxima").prop('disabled', true);
			$("#sonido_tasabajaalcanzada").prop('disabled', true);
			$("#sonido_tasabajaexcedida").prop('disabled', true);
			$("#sonido_pronosticos").prop('disabled', true);

		}

		function BloqueaCasillasAudios() {

			$("#sonido_timbre").prop('disabled', true);
			$("#sonido_narracion").prop('disabled', true);
			$("#sonido_fiat").prop('disabled', true);
			$("#sonido_cripto").prop('disabled', true);
			BloqueaCriptometro();
			$("#sonido_alarma_alta11").prop('disabled', true);
			$("#sonido_alarma_tasa_alta11").prop('disabled', true);
			$("#sonido_alarma_baja12").prop('disabled', true);
			$("#sonido_alarma_tasa_baja12").prop('disabled', true);
			$("#sonido_alarma_alta21").prop('disabled', true);
			$("#sonido_alarma_tasa_alta21").prop('disabled', true);
			$("#sonido_alarma_baja22").prop('disabled', true);
			$("#sonido_alarma_tasa_baja22").prop('disabled', true);
			$("#sonido_alerta_rally").prop('disabled', true);
			$("#sonido_alerta_caida").prop('disabled', true);
			$("#sonido_tendencias").prop('disabled', true);
			$("#mensaje_whatsapp_1").prop('disabled', true);
			$("#mensaje_whatsapp_2").prop('disabled', true);
			$("#mensaje_email_1").prop('disabled', true);
			$("#mensaje_email_2").prop('disabled', true);
			$("#bot_trading").prop('disabled', true);

		}

		function DesbloqueaTodasCasillasAudios() {

			if ( ( !(document.getElementById('despertador_baja').checked) ) && ( !(document.getElementById('despertador_alta').checked) ) ) {

				DesbloqueaCasillasAudios();

			}

			$("#despertador_alta").prop('disabled', false);
			$("#despertador_tasa_alta").prop('disabled', false);
			$("#despertador_baja").prop('disabled', false);
			$("#despertador_tasa_baja").prop('disabled', false);

		}

		function BloqueaTodasCasillasAudios() {

			BloqueaCasillasAudios();

			$("#despertador_alta").prop('disabled', true);
			$("#despertador_tasa_alta").prop('disabled', true);
			$("#despertador_baja").prop('disabled', true);
			$("#despertador_tasa_baja").prop('disabled', true);

		}

		function BloqueaBotTrading() {

			$("#rol_compras").prop('disabled', true);
			$("#rol_ventas").prop('disabled', true);

		}

		function DesbloqueaBotTrading() {

			$("#rol_compras").prop('disabled', false);
			$("#rol_ventas").prop('disabled', false);

		}

		function ChequeaAsistenteVirtual() {

			if  ( (document.getElementById('despertador_baja').checked) || (document.getElementById('despertador_alta').checked) )  {

				BloqueaCasillasAudios();

			}

			if  (document.getElementById('sonido_silencio').checked) {

				BloqueaTodasCasillasAudios();

			}

			if  (document.getElementById('bot_trading').checked) {

				BloqueaCriptometro();
				DesbloqueaBotTrading();

			}else{

				BloqueaBotTrading();

			}

		}

		function Audio(value, operar, adicional) {

			frames['graba_cambio_sonido'].location.href = 'graba_cambio_sonido.php?value=' + value + '&adicional=' + adicional + '&operar=' + operar;

			if ( (adicional === 16) || (adicional === 17) ) {

				if (value === true) {

					BloqueaCasillasAudios();

				}else if (value === false) {

					if ( ( (adicional === 16) && !(document.getElementById('despertador_baja').checked) ) || ( (adicional === 17) && !(document.getElementById('despertador_alta').checked) ) ) {

						DesbloqueaCasillasAudios();

					}

				}

			}

			if (adicional === 28) {

				if (value === true) {

					BloqueaCriptometro();
					DesbloqueaBotTrading();

				}else{

					DesbloqueaCriptometro();
					BloqueaBotTrading();

				}

			}

			if (adicional === 0) {

				if (value === true) {

					BloqueaTodasCasillasAudios();
					BloqueaBotTrading();

				}else{

					DesbloqueaTodasCasillasAudios();
					DesbloqueaBotTrading();

				}

			}

		}

		function IA_trading(transaccion) {

			var moneda = document.getElementById('moneda').value;

			let monto;

			if (transaccion === 1) {
				var signo_moneda = 'USD$';
			}else{
				var signo_moneda = 'criptomoneda';
			}

			var decimales = 8;

			monto = prompt("Introduce monto de la inversión inicial en " + signo_moneda + ":");

			if (parseFloat(monto) > 0) {

			  	if ( (transaccion === 1) || (transaccion === 2) )  {

					var cuenta_trading = AsignarCuenta();

					$("#cuenta_trading").prop('disabled', false);
					document.getElementById('cuenta_trading').value = cuenta_trading;
					$("#cuenta_trading").prop('disabled', true);

					$("#captcha").prop('hidden', true);
					$("#boton_deposito").prop('disabled', true);
					$("#boton_deposito_cripto").prop('disabled', true);

				}

			  	if (transaccion === 1) {

					$("#capital").prop('disabled', false);
					document.getElementById('capital').value = Moneda(monto);
					$("#capital").prop('disabled', true);

					$("#saldo_usd").prop('disabled', false);
					document.getElementById('saldo_usd').value = Moneda(monto);
					$("#saldo_usd").prop('disabled', true);

					$("#boton_retiro_usd").prop('disabled', false);

			   	}else if (transaccion === 2) {

					var vvalor_moneda= (parseFloat(<?php echo $vvalor_moneda; ?>)).toFixed(2);

					$("#capital_cripto").prop('disabled', false);
					document.getElementById('capital_cripto').value = (parseFloat(monto)).toFixed(decimales);
					$("#capital_cripto").prop('disabled', true);

					$("#capital").prop('disabled', false);
					document.getElementById('capital').value = Moneda(monto * vvalor_moneda);
					$("#capital").prop('disabled', true);

					$("#saldo_cripto").prop('disabled', false);
					document.getElementById('saldo_cripto').value = (parseFloat(monto)).toFixed(decimales);
					$("#saldo_cripto").prop('disabled', true);

					$("#boton_retiro_cripto").prop('disabled', false);

			   	}else if (transaccion === 3) {

					var saldo_usd = Moneda(parseFloat( $("#saldo_usd").val() ));
					var cuenta_trading = document.getElementById('cuenta_trading').value;

					if (saldo_usd - monto < 0) {

						alert("El saldo en USD$ es insuficiente.");

					}else{

						$("#saldo_usd").prop('disabled', false);
						document.getElementById('saldo_usd').value = (parseFloat(Moneda(saldo_usd - monto))).toFixed(2);
						$("#saldo_usd").prop('disabled', true);

					}

				}else if (transaccion === 4) {

					var saldo_cripto = Moneda(parseFloat( $("#saldo_cripto").val() ));
					var cuenta_trading = document.getElementById('cuenta_trading').value;

					if (saldo_cripto - monto < 0) {

						alert("El saldo en " + signo_moneda + " es insuficiente.");

					}else{

						$("#saldo_cripto").prop('disabled', false);
						document.getElementById('saldo_cripto').value = (parseFloat(Moneda(saldo_cripto - monto))).toFixed(decimales);
						$("#saldo_cripto").prop('disabled', true);

					}

				}

				frames['iframe'].location.href = 'estado_cuenta.php?cuenta=' + cuenta_trading + '&transaccion=' + transaccion + '&monto=' + monto + '&moneda=' + moneda;

			}else{

				alert('Monto inválido.');

			}

		}

		function Moneda(moneda) {

			var mmoneda = new Intl.NumberFormat('en-US', { currency: 'USD', style: 'decimal', minimumFractionDigits: 2 }).format(moneda);

			return mmoneda;

		}

		function Trading(tipo, carrito) {

			let monto_cambio;
			let tasa_cambio;
			var moneda = document.getElementById('moneda').value;
			var cuenta_trading = document.getElementById('cuenta_trading').value;

			var capital = document.getElementById('capital').value;
			var capital_cuarto = parseFloat(capital) / 3;

			if ( capital != '$0.00' ) {

				var compra_1_desde = parseFloat(document.getElementById('compra_1_desde').value);
				var compra_1_hasta = parseFloat(document.getElementById('compra_1_hasta').value);
				var compra_2_desde = parseFloat(document.getElementById('compra_2_desde').value);
				var compra_2_hasta = parseFloat(document.getElementById('compra_2_hasta').value);
				var compra_3_desde = parseFloat(document.getElementById('compra_3_desde').value);
				var compra_3_hasta = parseFloat(document.getElementById('compra_3_hasta').value);

				var venta_1_desde = parseFloat(document.getElementById('venta_1_desde').value);
				var venta_1_hasta = parseFloat(document.getElementById('venta_1_hasta').value);
				var venta_2_desde = parseFloat(document.getElementById('venta_2_desde').value);
				var venta_2_hasta = parseFloat(document.getElementById('venta_2_hasta').value);
				var venta_3_desde = parseFloat(document.getElementById('venta_3_desde').value);
				var venta_3_hasta = parseFloat(document.getElementById('venta_3_hasta').value);

				if (carrito === 1) {

					var tasa_compra_desde = compra_1_desde;
					var tasa_compra_hasta = compra_1_hasta;

				}else if (carrito === 2) {

					var tasa_compra_desde = compra_2_desde;
					var tasa_compra_hasta = compra_2_hasta;

				}else if (carrito === 3) {

					var tasa_compra_desde = compra_3_desde;
					var tasa_compra_hasta = compra_3_hasta;

				}else if (carrito === 4) {

					var tasa_venta_desde = venta_4_desde;
					var tasa_venta_hasta = compra_4_hasta;

				}else if (carrito === 5) {

					var tasa_venta_desde = venta_5_desde;
					var tasa_venta_hasta = compra_5_hasta;

				}else if (carrito === 6) {

					var tasa_venta_desde = venta_6_desde;
					var tasa_venta_hasta = compra_6_hasta;

				}

				if (tipo == 1) {

					var transaccion = 5;
					tasa_cambio = prompt("Introduce tasa de cambio para convertir USD$ " + capital_cuarto +" a " + moneda + ":\nDesde: USD$ " + tasa_compra_desde + "\nHasta: USD$ " + tasa_compra_hasta);

				}else{

					var transaccion = 6;
					tasa_cambio = prompt("Introduce tasa de cambio para convertir USD$ " + capital_cuarto +" a " + moneda + ":\nDesde: USD$ " + tasa_compra_desde + "\nHasta: USD$ " + tasa_compra_hasta);

				}

				if ( tasa_cambio > 0 ) {

					frames['iframe'].location.href = 'estado_cuenta.php?cuenta=' + cuenta_trading + '&transaccion=' + transaccion + '&monto=' + capital_cuarto + '&moneda=' + moneda + '&tasa=' + tasa_cambio;
					$("#boton_retiro_cripto").prop('disabled', false);

				}else{

					alert('Monto inválido.');

				}

			}

		}

		function AsignarCuenta() {

			return (parseFloat( Math.random() * (99999999 - 0) + 0 )).toFixed(0);

		}

		function Limpiar_trading() {

			var moneda = document.getElementById('moneda').value;
			var cuenta_trading = document.getElementById('cuenta_trading').value;

			var decimales = 8;

			var opcion = confirm("¿Está usted seguro que desea cerrar la cuenta # " + cuenta_trading + "?");

			if (opcion == true) {

				alert("La cuenta " + cuenta_trading + " del plan de trading ha sido cerrada.");

				$("#cuenta_trading").prop('disabled', false);
				document.getElementById('cuenta_trading').value = "00000000";
				$("#cuenta_trading").prop('disabled', true);

				$("#capital").prop('disabled', false);
				document.getElementById('capital').value = "0.00";
				$("#capital").prop('disabled', true);

				$("#capital_cripto").prop('disabled', false);
				document.getElementById('capital_cripto').value = parseFloat(0).toFixed(decimales);
				$("#capital_cripto").prop('disabled', true);

				$("#saldo_usd").prop('disabled', false);
				document.getElementById('saldo_usd').value = "0.00";
				$("#saldo_usd").prop('disabled', true);

				$("#saldo_cripto").prop('disabled', false);
				document.getElementById('saldo_cripto').value = parseFloat(0).toFixed(decimales);
				$("#saldo_cripto").prop('disabled', true);

				$("#boton_deposito").prop('disabled', false);
				$("#boton_deposito_cripto").prop('disabled', false);
				$("#boton_retiro_usd").prop('disabled', true);
				$("#boton_retiro_cripto").prop('disabled', true);

			}

		}

	</script>

	<?php

	break;

case 3:

	break;

case 4:

	//IA para determinar las bandas para el trading

	$tasa_banda_alta  = 0;
	$tasa_banda_baja  = 0;
	$tasa_banda_media = 0;

	$historia = "";

	if ( (($am_pm == "AM") and (intval($hour) <= 6)) or (($am_pm == "AM") and (intval($hour) == 12)) ) {

		$ddias_historico = $dias_historico + 1;

	}else{

		$ddias_historico = $dias_historico;

	}

	//$ddias_historico = $dias_historico;

	for ($i = $ddias_historico; $i >= 0; $i--) {

		$fechasemanaant	= date(Y, $time - 86400 * $i) . "-" . date(m, $time - 86400 * $i) . "-" . date(d, $time - 86400 * $i);

		$result1 	  = mysqli_query($connect, "SELECT max(tasa) as tasa_banda_alta FROM historico_criptos where moneda='$grabar_moneda' and fecha = '$fechasemanaant'");
		$row1 		  = mysqli_fetch_array($result1);
		$tasa_banda_alta  = $tasa_banda_alta + $row1[tasa_banda_alta];

		$result2 	  = mysqli_query($connect, "SELECT min(tasa) as tasa_banda_baja FROM historico_criptos where moneda='$grabar_moneda' and fecha = '$fechasemanaant'");
		$row2 		  = mysqli_fetch_array($result2);
		$tasa_banda_baja  = $tasa_banda_baja + $row2[tasa_banda_baja];

		$historia = $historia . $fechasemanaant . ":" . $row2[tasa_banda_baja] . "|" . $row1[tasa_banda_alta] . "&";

	}

	$tasa_banda_alta  = $tasa_banda_alta / ($ddias_historico + 1);
	$tasa_banda_baja  = $tasa_banda_baja / ($ddias_historico + 1);
	$tasa_banda_media = ($tasa_banda_alta + $tasa_banda_baja) / 2;

	break;

case 5:

	//IA Para el cálculo de todas las variables del simulador 4WW

	$valor_moneda = $monto;

	if ($valor_moneda < 10 ) {

		$porcentaje_alarma = 20;

	}else if (($valor_moneda >= 10 ) and ($valor_moneda < 100 )) {

		$porcentaje_alarma = 17.5;

	}else if (($valor_moneda >= 100 ) and ($valor_moneda < 1000 )) {

		$porcentaje_alarma = 15;

	}else if (($valor_moneda >= 1000 ) and ($valor_moneda < 100000 )) {

		$porcentaje_alarma = 12.5;

	}else if (($valor_moneda >= 100000 ) and ($valor_moneda < 1000000 )) {

		$porcentaje_alarma = 10;

	}else if ($valor_moneda >= 1000000 ) {

		$porcentaje_alarma = 7.5;

	}

	$variacion_exagerada = (1 - ($valor_moneda_anterior / $valor_moneda)) * 100;

	if ($variacion_exagerada > 0) {

		$variacion_simbolo = '+';
		$color_1 = '#0DCF00';

	}else if ($variacion_exagerada < 0) {

		$variacion_simbolo = '-';
		$color_1 = 'red';

	}else{

		$color_1 = '#0DCF00';
		$variacion_simbolo = '=';

	}

	$variacion_exagerada_dia_ant = (1 - ($valor_moneda_dia_ant / $valor_moneda)) * 100;

	if ($variacion_exagerada_dia_ant > 0) {

		$variacion_simbolo_dia_ant = '+';
		$color_2 = 1;

	}else if ($variacion_exagerada_dia_ant < 0) {

		$variacion_simbolo_dia_ant = '-';
		$color_2 = 2;

	}else{

		$variacion_simbolo_dia_ant = '=';
		$color_2 = 1;

	}

	$tolerancia = 1 + (($tasa_banda_media - $tasa_banda_baja) / 2 / $tasa_banda_baja);

	$exceso = 1 + ($porcentaje_alarma / 100);

	$alerta_bandaalta_excedida  = $tasa_banda_alta * $exceso; //Fuerte alza
	$alerta_bandaalta_alcanzada = $tasa_banda_alta;

	$alerta_venta_1_desde = $tasa_banda_media * $tolerancia;
	$alerta_venta_1_hasta = $tasa_banda_alta;
	$alerta_venta_2_desde = $alerta_venta_1_hasta;
	$alerta_venta_2_hasta = $alerta_venta_2_desde * $tolerancia;

	$alerta_venta_3_desde = $alerta_bandaalta_excedida;

	$tasa_zonaneutral_alta = $tasa_banda_media * $tolerancia;
	$tasa_zonaneutral_baja = $tasa_banda_media / $tolerancia;
	$tasa_zonaneutral_media_dif = ($tasa_zonaneutral_alta - $tasa_zonaneutral_baja) / 3;

	$tasa_zonaneutral_media_baja = $tasa_zonaneutral_baja + $tasa_zonaneutral_media_dif;
	$tasa_zonaneutral_media_alta = $tasa_zonaneutral_alta - $tasa_zonaneutral_media_dif;

	$alerta_bandabaja_proxima   = ($tasa_banda_baja + $tasa_zonaneutral_baja) / 2; //Proxima baja
	$alerta_bandaalta_proxima   = ($tasa_banda_alta + $tasa_zonaneutral_alta) / 2; //Próxima alta

	$alerta_bandabaja_alcanzada = $tasa_banda_baja;
	$alerta_bandabaja_excedida  = $tasa_banda_baja / $exceso;

	$alerta_compra_1_hasta = $tasa_banda_media / $tolerancia;
	$alerta_compra_1_desde = $tasa_banda_baja;
	$alerta_compra_2_hasta = $alerta_compra_1_desde;
	$alerta_compra_2_desde = $alerta_compra_2_hasta / $tolerancia;

	$alerta_compra_3_hasta = $alerta_bandabaja_excedida;

	break;

}

?>