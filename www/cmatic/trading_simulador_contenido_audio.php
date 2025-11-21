<script>

 $(document).ready(function(){

        $("#sonido_alarma_tasa_alta11").dblclick(function(){
		var monto = document.getElementById('sonido_alarma_tasa_alta11').value;
		alert("Tasa de alarma " + monto + " actualizado");
        });

        $("#sonido_alarma_tasa_baja12").dblclick(function(){
		var monto = document.getElementById('sonido_alarma_tasa_baja12').value;
		alert("Tasa de alarma " + monto + " actualizado");
        });

        $("#sonido_alarma_tasa_alta21").dblclick(function(){
		var monto = document.getElementById('sonido_alarma_tasa_alta21').value;
		alert("Tasa de alarma " + monto + " actualizado");
        });

        $("#sonido_alarma_tasa_baja22").dblclick(function(){
		var monto = document.getElementById('sonido_alarma_tasa_baja22').value;
		alert("Tasa de alarma " + monto + " actualizado");
        });

        $("#despertador_tasa_alta").dblclick(function(){
		var monto = document.getElementById('despertador_tasa_alta').value;
		alert("Tasa de despertador " + monto + " actualizado");
        });

        $("#despertador_tasa_baja").dblclick(function(){
		var monto = document.getElementById('despertador_tasa_baja').value;
		alert("Tasa de despertador " + monto + " actualizado");
        });
    });

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<table>

	<tr>

		<td>

			<img src='imagenes/icono_ia_mini.png' width='35'>&nbsp;

		</td>

		<td>

			<font size='2'><label>Asistente virtual (IA):</label></font>
			<img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('El bot de Inteligencia Artificial (IA) del simulador de trading SIM4WW de WorldWebs (mientras usted duerme, o hace otras actividades de su vida cotidiana) vigilará cada variación de la criptomoneda <?php echo $operar; ?>, y le notificará cualquier evento programado por usted, bien sea narrado, o mediante notificación a su correo electrónico, o al whatsapp')" >

		</td>

	</tr>

</table>

<br>

<font size='1'>

	<table width='100%'>

		<tr>

			<td align='left' width='200px'>

				<label>Criptómetro:</label>

				<table width='180px'>

					<tr>

						<td width='30%'>

							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  7)   = !this.checked" type="checkbox" id="sonido_tasaaltaexcedida" name="sonido_tasaaltaexcedida" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido7 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='130%'>

							Fuerte alza <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de alerta de fuerte alza de <?php echo $operar; ?> por encima de USD $ <?php echo number_format($alerta_bandaalta_excedida, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  6)   = !this.checked" type="checkbox" id="4tiempos_venta" name="4tiempos_venta" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido6 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Zona de venta #2 <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de recomendación para efectuar segunda venta <?php echo $operar; ?>, tasa entre USD $ <?php echo number_format($alerta_venta_2_desde, $decimales, '.', ','); ?> y USD $ <?php echo number_format($alerta_venta_2_hasta, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  8)   = !this.checked" type="checkbox" id="sonido_tasaaltaalcanzada" name="sonido_tasaaltaalcanzada" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido8 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Banda alta <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de notificación que indica que la tasa del <?php echo $operar; ?>, ha superado la banda alta por encima de USD $ <?php echo number_format($alerta_bandaalta_alcanzada, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  9)   = !this.checked" type="checkbox" id="sonido_tasaaltaproxima" name="sonido_tasaaltaproxima" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido9 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Pronto banda alta <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de notificación que indica que la tasa del <?php echo $operar; ?>, pronto alcanzará la banda alta de USD $ <?php echo number_format($alerta_bandaalta_alcanzada, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  10) = !this.checked" type="checkbox" id="sonido_zonaventa" name="sonido_zonaventa" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido10 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Zona de venta #1 <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de recomendación para efectuar primera venta <?php echo $operar; ?>, tasa entre USD $ <?php echo number_format($alerta_venta_1_desde, $decimales, '.', ','); ?> y USD $ <?php echo number_format($alerta_venta_1_hasta, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  11) = !this.checked" type="checkbox" id="sonido_zonaneutral" name="sonido_zonaneutral" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido11 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Zona neutral <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de notificación que indica que la tasa del <?php echo $operar; ?>, se encuentra dentro de la zona neutral entre USD $ <?php echo number_format($tasa_zonaneutral_baja, $decimales, '.', ','); ?> y USD $ <?php echo number_format($tasa_zonaneutral_alta, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  12) = !this.checked" type="checkbox" id="sonido_zonacompra" name="sonido_zonacompra" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido12 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Zona de compra #1 <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de recomendación para efectuar primera compra <?php echo $operar; ?>, tasa entre USD $ <?php echo number_format($alerta_compra_1_desde, $decimales, '.', ','); ?> y USD $ <?php echo number_format($alerta_compra_1_hasta, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  13) = !this.checked" type="checkbox" id="sonido_tasabajaproxima" name="sonido_tasabajaproxima" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido13 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Pronto banda baja <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de notificación que indica que la tasa del <?php echo $operar; ?>, pronto alcanzará la banda baja de USD $ <?php echo number_format($alerta_bandabaja_alcanzada, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  14) = !this.checked" type="checkbox" id="sonido_tasabajaalcanzada" name="sonido_tasabajaalcanzada" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido14 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Banda baja <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de notificación que indica que la tasa del <?php echo $operar; ?>, ha superado la banda baja por encima de USD $ <?php echo number_format($alerta_bandabaja_alcanzada, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  5)   = !this.checked" type="checkbox" id="4tiempos_compra" name="4tiempos_compra" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido5 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Zona de compra #2 <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de recomendación para efectuar segunda compra <?php echo $operar; ?>, tasa entre USD $ <?php echo number_format($alerta_compra_2_desde, $decimales, '.', ','); ?> y USD $ <?php echo number_format($alerta_compra_2_hasta, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  15) = !this.checked" type="checkbox" id="sonido_tasabajaexcedida" name="sonido_tasabajaexcedida" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido15 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Fuerte baja <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de alerta de fuerte baja de <?php echo $operar; ?> por debajo de USD $ <?php echo number_format($alerta_bandabaja_excedida, $decimales, '.', ','); ?>')" >

						</td>

					</tr>

				</table>

				<hr>

				<table width='180px'>

					<tr>

						<td width='30%'>

							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  28)   = !this.checked" type="checkbox" id="bot_trading" name="bot_trading" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido28 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='130%'>

							<i>Trading Bot</i> <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita el sistema automatizado que le orientará en las mejores oportunidades para comprar y vender <?php echo $operar; ?>, de acuerdo a la metología SIM4WW')" >

						</td>

					</tr>

					<tr>

						<td width='30%'>

							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  29)   = !this.checked" type="checkbox" id="rol_compras" name="rol_compras" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido29 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='130%'>

							Rol de compras <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita el sistema automatizado que le orientará en las mejores oportunidades para comprar <?php echo $operar; ?>, de acuerdo a la metología SIM4WW')" >

						</td>

					</tr>

					<tr>

						<td width='30%'>

							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  30)   = !this.checked" type="checkbox" id="rol_ventas" name="rol_ventas" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido30 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='130%'>

							Rol de ventas <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita el sistema automatizado que le orientará en las mejores oportunidades para vender <?php echo $operar; ?>, de acuerdo a la metología SIM4WW')" >

						</td>

					</tr>

				</table>

			<?php if ($so == 'windows') {echo "</td><td width='10px'>";}?>

			<?php if ($so == 'windows') {echo "</td><td width='200px'>";}else{echo "<hr>";} ?>

				<table width='180px'>

					<tr>

						<td width='30px'>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  1)  = !this.checked" type="checkbox" id="sonido_timbre" name="sonido_timbre" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido1 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='130px'>

							Timbre <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita el timbre que anuncia la narración de la tasa actual del <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  2)  = !this.checked" type="checkbox" id="sonido_narracion" name="sonido_narracion" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido2 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Narración de tasa <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de la tasa actual del <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  3)  = !this.checked" type="checkbox" id="sonido_fiat" name="sonido_fiat" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido3 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Fiat <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de la moneda fiat de la tasa de cambio del <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  4)  = !this.checked" type="checkbox" id="sonido_cripto" name="sonido_cripto" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido4 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Criptomoneda <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de la criptomoneda <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  18)  = !this.checked" type="checkbox" id="sonido_alerta_rally" name="sonido_alerta_rally" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido18 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Avaricia <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita alarma de notificación de superación de tasa sobre la banda alta, recomendando vender inmediatamente las criptomonedas <?php echo $operar; ?>, capturando las ganancias obtenidas ante una posible baja de la tasa')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  19)  = !this.checked" type="checkbox" id="sonido_alerta_caida" name="sonido_alerta_caida" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido19 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Pánico <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita alarma de notificación de superación de tasa debajo de la banda baja, recomendando vender inmediatamente las criptomonedas <?php echo $operar; ?>, previniendo pérdidas ante un posible inminente derrumbe de tasa')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  20)  = !this.checked" type="checkbox" id="sonido_tendencias" name="sonido_tendencias" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido20 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Tendencias <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración de la tendencia bajista/alcista del <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  21)  = !this.checked" type="checkbox" id="sonido_pronosticos" name="sonido_pronosticos" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido21 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Pronósticos <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la narración del pronóstico más probable del <?php echo $operar; ?>')" >

						</td>

					</tr>

				</table>

				<hr>

				<table width='180px'>

					<tr>

						<td width='40px'>
	
							<select onChange=Audio(this.checked, '<?php echo $operar; ?>',  100) id="cambia_decimales" name="cambia_decimales" style="height:20px; width:35px; vertical-align: middle;" disabled />
								<option value="0" <?php if ($decimales==0) {echo "selected";} ?>>0</option>
								<option value="1" <?php if ($decimales==1) {echo "selected";} ?>>1</option>
								<option value="2" <?php if ($decimales==2) {echo "selected";} ?>>2</option>
								<option value="3" <?php if ($decimales==3) {echo "selected";} ?>>3</option>
								<option value="4" <?php if ($decimales==4) {echo "selected";} ?>>4</option>
								<option value="5" <?php if ($decimales==5) {echo "selected";} ?>>5</option>
								<option value="6" <?php if ($decimales==6) {echo "selected";} ?>>6</option>
								<option value="7" <?php if ($decimales==7) {echo "selected";} ?>>7</option>
								<option value="8" <?php if ($decimales==8) {echo "selected";} ?>>8</option>
							</select>

						</td>

						<td width='120px'>

							Decimales <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Indica los dígitos que se mostrarán en la parte decimal de cada tasa del <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td width='40px'>
	
							<select onChange=Audio(this.checked, '<?php echo $dias_historico; ?>',  101) id="universo" name="universo" style="height:20px; width:35px; vertical-align: middle;" disabled />
								<option value="0" <?php if ($dias_historico==0) {echo "selected";} ?>>0</option>
								<option value="1" <?php if ($dias_historico==1) {echo "selected";} ?>>1</option>
								<option value="2" <?php if ($dias_historico==2) {echo "selected";} ?>>2</option>
								<option value="3" <?php if ($dias_historico==3) {echo "selected";} ?>>3</option>
								<option value="4" <?php if ($dias_historico==4) {echo "selected";} ?>>4</option>
								<option value="5" <?php if ($dias_historico==5) {echo "selected";} ?>>5</option>
								<option value="6" <?php if ($dias_historico==6) {echo "selected";} ?>>6</option>
								<option value="7" <?php if ($dias_historico==7) {echo "selected";} ?>>7</option>
							</select>

						</td>

						<td width='120px'>

							Universo <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Indica los días de teiempo que han transcurrido, tomados en consideración para el cálculo de las bandas de la cuenta de trading en <?php echo $operar; ?>')" >

						</td>

					</tr>

					<tr>

						<td width='40px'>
	
							<select onChange=Audio(this.checked, '<?php echo $refresh; ?>',  102) id="refresh" name="refresh" style="height:20px; width:40px; vertical-align: middle;" disabled />
								<option value="1" <?php if ($refresh==15000) {echo "selected";} ?>>15</option>
								<option value="2" <?php if ($refresh==30000) {echo "selected";} ?>>30</option>
								<option value="3" <?php if ($refresh==45000) {echo "selected";} ?>>45</option>
								<option value="4" <?php if ($refresh==60000) {echo "selected";} ?>>60</option>
								<option value="5" <?php if ($refresh==95000) {echo "selected";} ?>>95</option>
								<option value="6" <?php if ($refresh==120000) {echo "selected";} ?>>120</option>
							</select>

						</td>

						<td width='120px'>

							<i>Refresh</i> <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Indica el tiempo en segundos que transcurrirá para activar el audio de narración del Asistente Virtual (IA)')" >

						</td>

					</tr>

				</table>

			<?php if ($so == 'windows') {echo "</td><td width='10px'>";}?>

			<?php if ($so == 'windows') {echo "</td><td width='200px'>";}else{echo "<hr>";} ?>

				<label>Alarma No. 1:</label>

				<table width='180px'>

					<tr>

						<td width='30px'>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  22) = !this.checked" type="checkbox" id="sonido_alarma_alta11" name="sonido_alarma_alta11" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido22 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='90px'>

							Mayor a USD $ <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la alarma que notifica la superación de la tasa del <?php echo $operar; ?>, para que se active cuando sea SUPERIOR a USD $ <?php echo number_format($alarma_tasa_alta, $decimales, '.', ','); ?>')" >

						</td>

						<td width='40px'>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 22)" id="sonido_alarma_tasa_alta11" name="sonido_alarma_tasa_alta11" size='6' value='<?php echo $alarma_tasa_alta; ?>' />

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  23) = !this.checked" type="checkbox"  id="sonido_alarma_baja12" name="sonido_alarma_baja12" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido23 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Menor a USD $ <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la alarma que notifica la superación de la tasa del <?php echo $operar; ?>, para que se active cuando sea INFERIOR a USD $ <?php echo number_format($alarma_tasa_baja, $decimales, '.', ','); ?>')" >

						</td>

						<td>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 23)"  id="sonido_alarma_tasa_baja12" name="sonido_alarma_tasa_baja12" size='6' value='<?php echo $alarma_tasa_baja; ?>' />

						</td>

					</tr>

				</table>

				<br>

				<label>Alarma No. 2:</label>

				<table width='180px'>

					<tr>

						<td width='30px'>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  24) = !this.checked" type="checkbox" id="sonido_alarma_alta21" name="sonido_alarma_alta21" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido24 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='90px'>

							Mayor a USD $ <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la alarma que notifica la superación de la tasa del <?php echo $operar; ?>, para que se active cuando sea SUPERIOR a USD $ <?php echo number_format($alarma_tasa_alta2, $decimales, '.', ','); ?>')" >

						</td>

						<td width='40px'>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 24)" id="sonido_alarma_tasa_alta21" name="sonido_alarma_tasa_alta21" size='6' value='<?php echo $alarma_tasa_alta2; ?>' />

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  25) = !this.checked" type="checkbox"  id="sonido_alarma_baja22" name="sonido_alarma_baja22" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido25 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Menor a USD $ <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita la alarma que notifica la superación de la tasa del <?php echo $operar; ?>, para que se active cuando sea INFERIOR a USD $ <?php echo number_format($alarma_tasa_baja2, $decimales, '.', ','); ?>')" >

						</td>

						<td>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 25)"  id="sonido_alarma_tasa_baja22" name="sonido_alarma_tasa_baja22" size='6' value='<?php echo $alarma_tasa_baja2; ?>' />

						</td>

					</tr>

				</table>

				<hr>

				<label>Despertador:</label>

				<table width='180px'>

					<tr>

						<td width='30px'>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  16) = !this.checked" type="checkbox" id="despertador_alta" 	name="despertador_alta"	style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido16 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='90px'>

							Mayor a USD $ <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita el despertador que notifica la superación de la tasa del <?php echo $operar; ?>, para que se active cuando sea SUPERIOR a USD $ <?php echo number_format($tasa_banda_alta, $decimales, '.', ','); ?>')" >

						</td>

						<td width='40px'>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 16)" id="despertador_tasa_alta" name="despertador_tasa_alta" size='6' value='<?php echo $despertador_tasa_alta; ?>' />

						</td>

					</tr>

					<tr>

						<td>
	
							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  17) = !this.checked" type="checkbox" id="despertador_baja" 	name="despertador_baja" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido17 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td>

							Menor a USD $ <img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita el despertador que notifica la superación de la tasa del <?php echo $operar; ?>, para que se active cuando sea INFERIOR a USD $ <?php echo number_format($tasa_banda_baja, $decimales, '.', ','); ?>')" >

						</td>

						<td>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 17)" id="despertador_tasa_baja" name="despertador_tasa_baja" size='6' value='<?php echo $despertador_tasa_baja; ?>' />

						</td>

					</tr>

				</table>

				<hr>

				<label>Mensajes:</label>

				<table width='180px'>

					<tr>

						<td width='30px'>

							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  26) = !this.checked" type="checkbox" id="mensaje_whatsapp_1" name="mensaje_whatsapp_1" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido26 == '1') {echo 'checked';} ?> /></div>

						</td>

						<td width='50px' align='center'>

							<img src='imagenes/logo_whatsapp.png' height='15'>
							<img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Activa o desactiva la notificación mediante mensaje de texto a un número de WhatsApp')" >

						</td>

						<td width='100px'>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 26)" id="mensaje_whatsapp_2" name="mensaje_whatsapp_2" size='15' value='<?php echo $whatsapp_trading; ?>' disabled />

						</td>

					</tr>

					<tr>

						<td>

							<div align='center'><input onclick="Audio(this.checked, '<?php echo $operar; ?>',  27) = !this.checked" type="checkbox" id="mensaje_email_1" name="mensaje_email_1" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido27 == '1') {echo 'checked';} ?> /></div>

						</td>


						<td align='center'>

							<img src='imagenes/imagen_email.png' height='15'>
							<img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Activa o desactiva la notificación mediante mensaje de texto a un correo electrónico')" >

						</td>

						<td>

							<input type="text" onkeyup = "if(event.keyCode == 13) Audio(value, '<?php echo $operar; ?>', 27)" id="mensaje_email_2" name="mensaje_email_2" size='15' value='<?php echo $email_trading; ?>' disabled />

						</td>

					</tr>

				</table>

			
			</td>

		</tr>

	</table>

	<br><hr>

	<table width='100%'>

		<tr>

			<td align='center' width='100%'>

				<input onclick="Audio(this.checked, '<?php echo $operar; ?>',  0) = !this.checked" type="checkbox" id="sonido_silencio" name="sonido_silencio" style="height:15px; width:15px; vertical-align: middle;" <?php if ($sonido0 == '1') {echo 'checked';} ?> />&nbsp;&nbsp;Silencio 

				<img src='imagenes/icono_ayuda.png' height='12' title='¿Qué es esto?' onclick="alert('Habilita o deshabilita totalmente la narración del Asistente Virtual (IA)')" >

				<div align='center'>

					<font size='1'>

					<br><br>

					<input onclick='VerAlertasSonoras(0)' id='boton_sonidos2' name='boton_sonidos2' class='buy-btn' type='submit' value='Ocultar Asistente Virtual (IA)' />

					</font>

				</div>

			</td>

		</tr>

	</table>

</font>