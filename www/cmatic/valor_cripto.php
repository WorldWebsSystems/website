<link href="css/tasas.css" rel="stylesheet" id="bootstrap-css">

<div align='center'>

	<?php

	include 'detecta_so.php';

	$moneda     	= $_GET[moneda];
	$operar     	= $_GET[operar];
	$key	    	= $_GET[key];
	$inicio	    	= $_GET[inicio];
	$tolerancia 	= $_GET[tolerancia];
	$dias_historico = $_GET[dias_historico];
	$anticipacion 	= $_GET[anticipacion];
	$exceso 	= $_GET[exceso];
	$email_trading	= $_GET[email_trading];
	$rango_tendencia= $_GET[rango_tendencia];
	$porc_tendencia = $_GET[porc_tendencia];

	$empresa = $ip;

	$autoriza_grabar = 0;

	include 'calcula_criptomoneda.php';

	$monto = $valor_moneda;

	if ( ($operar <> '') and ($sonido0 == 0) ) {

		include 'ia_asistente_virtual.php';

	}

	include 'valores_decimales.php';

	include 'revisa_bandas.php';

	$valor_moneda_inversa = 1 / $valor_moneda;

	if ($operar <> '') {

		include 'template_estilo.php';

		?>

		<b><font size='2'>Tasa USD $ por 1 <?php echo $moneda; ?>:</font></b>

		<br>

		<font size='2'><label title='¿Qué es esto?' onclick="alert('Tasa actual USD $ <?php echo number_format($valor_moneda, $decimales, '.', ','); ?> por 1 <?php echo $operar; ?>')"><b><input type="text" name="valor_moneda" id="valor_moneda" value='<?php echo number_format($valor_moneda, $decimales, '.', ','); ?>' style="font-size:40px; border:none; text-align:center; width: 100%; heigth: 100%" readonly /></b></label>

		<br>

		<b><font size='2'>Tasa <?php echo $operar; ?> por 1 USD $:</font></b>

		<br>

		<label title='¿Qué es esto?' onclick="alert('Tasa inversa actual de <?php echo $operar . " " . number_format($valor_moneda_inversa, 8, '.', ','); ?> por 1 USD $')"><b><input type="text" name="valor_moneda_inv" id="valor_moneda_inv" value='<?php echo number_format($valor_moneda_inversa, 8, '.', ','); ?>' style="font-size:20px; border:none; text-align:center; width: 100%; heigth: 100%" readonly /></b></label>

		<br>

		<label title='¿Qué es esto?' onclick="alert('Fecha y hora de tasa de <?php echo $operar; ?>')"><b><?php echo $fecha_moneda . " | " . $hora_moneda; ?></b></label>

		<br>

		<label title='Variación de la criptomoneda <?php echo $operar; ?>' onclick="alert('Variación de <?php echo $operar; ?>')"><img src='imagenes/icono_variaciones.png' height='15'></label>&nbsp;&nbsp;
		<b><font size='2'><label <?php if ($color_2 == 1) {echo "id='visor_variaciones_alza'"; }else{echo "id='visor_variaciones_baja'"; }?> onclick="alert('Variación de <?php echo $variacion_simbolo_dia_ant; ?>1d: <?php echo abs(number_format($variacion_exagerada_dia_ant, 2, '.', ',')); ?>% de la tasa actual (USD $ <?php echo number_format($valor_moneda, $decimales, '.', ','); ?>), con respecto a la última tasa del día de ayer [<?php echo $fecha_dia_ant; ?>] (USD $ <?php echo number_format($valor_moneda_dia_ant, $decimales, '.', ','); ?>)')"><font color='white'>&nbsp;<?php echo $variacion_simbolo_dia_ant; ?><?php echo abs(number_format($variacion_exagerada_dia_ant, 2, '.', ',')); ?>%&nbsp;</font></label>&nbsp;
		<label title='Tendencia de variación de la criptomoneda <?php echo $operar; ?>' onclick="alert('<?php if ($tendencia == 'baja') {echo "Tendencia de variación de " . $operar . " a la baja. [Probabilidad: " . number_format($curva_baja, 2, '.', ',') . "%]";}else if ($tendencia == 'alza') {echo "Tendencia de variación de " . $operar . " a la alza. [Probabilidad: " . number_format($curva_alta, 2, '.', ',') . "%]";}else{echo "No es posible determinar la tendencia de variación de la criptomoneda " . $operar;} ?>')"><?php if ($tendencia == 'alza') {echo "<img src='imagenes/imagen_flecha_arriba.png' height='12'";}else if ($tendencia == 'baja') {echo "<img src='imagenes/imagen_flecha_abajo.png' height='12'";}else{echo "<img src='imagenes/imagen_tasa_estable.png' height='12'";} ?>></label>

		<br>

		<a title='Histórico de la criptomoneda <?php echo $operar; ?>' href="historico_criptomoneda.php?moneda=<?php echo $operar; ?>" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=250,width=850,height=430'); return false;"><font size='2'><img src='imagenes/imagen_historico.png' height='12'></font></a>
		 | 
		<label title='Pronóstico de variación de la criptomoneda <?php echo $operar; ?>' onclick="alert('[IA] Pronóstico de variación de <?php echo $operar; ?>: Alza (<?php echo number_format($curva_alta, 2, '.', ','); ?>%) - Baja (<?php echo number_format($curva_baja, 2, '.', ','); ?>%). Espacio muestral: desde <?php echo $primera_fecha_tendencia . " hasta " . $ultima_tendencia . ' - ' . intval($diferencia_tendencia / 60 / 60 * 2) . ' minutos, ' . $ii . ' registros.'; ?>')"><img src='imagenes/imagen_pronostico.png' height='15'>&nbsp;&nbsp;<?php echo number_format($curva_alta, 2, '.', ','); ?>%<img src='imagenes/imagen_flecha_arriba.png' height='12'>&nbsp;&nbsp;&nbsp;<?php echo number_format($curva_baja, 2, '.', ','); ?>%<img src='imagenes/imagen_flecha_abajo.png' height='12'></label>

		</b>

		<br>

		</font>

		<?php

		if ($sonido0 == 0) {

			?>

			<script type="text/javascript">

				var canciones=<?php echo json_encode($playlist); ?>;

			</script>

			<audio controls height="100" width="100" onended="siguiente();" id="micontrol" autoplay>

				<source src="audios/n_vacio.mp3" type="audio/mpeg">
				<source src="audios/n_vacio.ogg" type="audio/ogg">

			</audio>

			<?php

		}else{

			?><img src='imagenes/asistente_virtual_off.png'><?php

		}

		$pie = 1;

		include 'template_estilo.php';

	}else{

		$seccion_motor_trading = 5;

		include 'ia.php'; // Procedimientos confidenciales de interpretación y deducción de IA

		if ($so == 'windows') {

			$ancho3 = 150;

		}else{

			$ancho3 = 150;

		}

		?>

		<table>

			<tr>

				<td width='<?php echo $ancho3; ?>px'>

					<div align='center'>

						<b><font face='arial' size='1'>Tasa USD $ por 1 <?php echo $moneda; ?>:</font></b><br>

					</div>

					<font size='2'><label title='¿Qué es esto?' onclick="alert('Tasa actual USD $ <?php echo number_format($valor_moneda, $decimales, '.', ','); ?> por 1 <?php echo $moneda; ?>')"><b><input type="text" name="valor_moneda" id="valor_moneda" value='<?php echo number_format($valor_moneda, $decimales, '.', ','); ?>' style="font-size:20px; border:none; text-align:center; width: 100%; heigth: 100%" readonly /></b></label>

					<?php

					if ($so == 'windows') {

						?>

						</td>

						<td width='<?php echo $ancho3; ?>px'>

						<?php

					}else{

						?>

						<br>

						<?php

					}

					?>

					<div align='center'>

						<b><font face='arial' size='1'>Tasa <?php echo $moneda; ?> por 1 USD $:</font></b>

					</div>

					<font size='2'><label onclick="alert('Tasa inversa actual de <?php echo $moneda . " " . number_format($valor_moneda_inversa, 8, '.', ','); ?> por 1 USD $')"><b>
					<input type="text" name="valor_moneda_inv" id="valor_moneda_inv" value='<?php echo number_format($valor_moneda_inversa, 8, '.', ','); ?>' style="font-size:20px; border:none; text-align:center; width: 100%; heigth: 100%" readonly /></b></label>

					<?php

					if ($so == 'windows') {

						?>

						</td>

						<td width='130px'>

						<?php

					}else{

						?>

						<br>

						<?php

					}

					?>

					<div align='center'>

						<b><font size='2' face='arial'>1d:<label <?php if ($color_2 == 1) {echo "id='visor_variaciones_alza'"; }else{echo "id='visor_variaciones_baja'"; }?> onclick="alert('Variación de <?php echo $variacion_simbolo_dia_ant; ?><?php echo abs(number_format($variacion_exagerada_dia_ant, 2, '.', ',')); ?>% de la tasa actual (USD $ <?php echo number_format($valor_moneda, $decimales, '.', ','); ?>), con respecto a la última tasa del día de ayer [<?php echo $fecha_dia_ant; ?>] (USD $ <?php echo number_format($valor_moneda_dia_ant, $decimales, '.', ','); ?>)')"><font color='white'>&nbsp;<?php echo $variacion_simbolo_dia_ant; ?><?php echo abs(number_format($variacion_exagerada_dia_ant, 2, '.', ',')); ?>%&nbsp;</font></label>

					</div>

				</td>

			</tr>

		</table>

		<?php

	}

	?>

</div>