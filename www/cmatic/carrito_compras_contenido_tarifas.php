<script> 

	function Ver_Terminos_Condiciones() {open('terminos_condiciones.php?id=<?php echo $id_tarifa; ?>','','top=120,left=300,width=750,height=430') ; }

	function ActivaCompra(forma_pago, id_tarifa) {

		if (forma_pago) {
			$("#comprar_off").prop('hidden', true);
			$("#btn-abrir-popup").prop('hidden', false);
		}else{
			$("#comprar_off").prop('hidden', false);
			$("#btn-abrir-popup").prop('hidden', true);
		}

		var montototal = $("#total").val();

		$("#terminos").prop('disabled', false);

		document.getElementById('forma_pago').value = forma_pago;
		document.getElementById('id_tarifa').value = id_tarifa;
		document.getElementById('total_monto').value = montototal;

	}

</script>

<div align ='center'>

	<?php

	$motor = 4;
	include 'motor_busqueda.php';

	?>

	<body onload="nav1(<?php echo $id_tarifa; ?>)">

	<h3><b><font size=<?php echo $fuente; ?>><?php echo $plan; ?></font></b></h3>

<div align ='left'>

	<font size=3>

	Orden #: <b><?php echo $orden; ?></b><br><br>

	<font size=<?php echo $fuente; ?>>

	Plan:<br>

	<label><?php echo $detalle;?></label><br>

	<label><font size=2><a href='conocer_plan.php?plan=<?php echo $id_tarifa; ?>'  target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;">conocer plan</a></font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<label><font size=2><a href="<?php echo $link; ?>#tarifas" class="btn-get-started scrollto">cambiar plan</a></font></label>

	<br>

	<font size=2>

	Duración del contrato: <?php echo $duracion; ?> meses.

	<font size=3>

	<br><hr><br>

	<label>Detalles del Plan:</label><br>

	<?php

	$motor = 2;
	include 'motor_busqueda.php';

	echo $descripcion;

	?>

	<br>

	Sub-total: <b>$ <?php echo number_format($subtotal, 2, '.', ','); ?></b><br>
	(Duración del contrato: <?php echo $duracion; ?> meses.)

	<br><br><br>

	<div align ='center'>

	<h3>Paso 1: Servicios adicionales</h3><br>

	<div align ='left'>

	<?php

	if ($iid_servicio <> 1) {

		if ($id_tarifa <= 3) { 

			?>

			<input onclick="nav11(this.checked, 1) = !this.checked" type="checkbox" id="redessociales" 	name="redessociales" 	style="height:35px; width:25px; vertical-align: middle;" <?php if ($id_tarifa >= 2) {echo 'checked disabled';} ?> />&nbsp;&nbsp;Redes sociales: 	<b>&nbsp;$ <? echo number_format($ppprecio_redessociales, 2, '.', ','); ?></b><br>
			<input onclick="nav11(this.checked, 2) = !this.checked" type="checkbox" id="chat" 		name="chat" 		style="height:35px; width:25px; vertical-align: middle;" <?php if ($id_tarifa >= 2) {echo 'checked disabled';} ?> />&nbsp;&nbsp;Chat en vivo: 		<b>&nbsp;$ <? echo number_format($ppprecio_chatvivo, 2, '.', ','); ?></b><br>
			<input onclick="nav11(this.checked, 4) = !this.checked" type="checkbox" id="dominio" 		name="dominio" 		style="height:35px; width:25px; vertical-align: middle;" <?php if ($id_tarifa >= 2) {echo 'checked disabled';} ?> />&nbsp;&nbsp;Dominio: 		<b>&nbsp;$ <? echo number_format($ppprecio_registrodominio, 2, '.', ','); ?></b><br>
			<input onclick="nav11(this.checked, 3) = !this.checked" type="checkbox" id="contenido" 		name="contenido" 	style="height:35px; width:25px; vertical-align: middle;" <?php if ($id_tarifa >= 3) {echo 'checked disabled';} ?> />&nbsp;&nbsp;Contenido informativo: 	<b>&nbsp;$ <? echo number_format($ppprecio_contenidoinformativo, 2, '.', ','); ?></b><br>

			<?php

		}

		if (($id_tarifa >= 12) and ($id_tarifa <= 17)) {  

			?>

			<input type="checkbox" id="propiedad" name="propiedad" style="height:35px; width:25px; vertical-align: middle;" checked disabled />&nbsp;&nbsp;Derechos de Propiedad Intelectual:				<b>&nbsp;&nbsp;$ <? echo number_format($ppprecio_propiedadintelectual, 2, '.', ','); ?></b><br>

			<input type="checkbox" id="webmaster" name="webmaster" style="height:35px; width:25px; vertical-align: middle;" checked disabled />&nbsp;&nbsp;Servicios de WebMaster:						<b>&nbsp;&nbsp;$ <? echo number_format($ppprecio_webmaster10, 2, '.', ','); ?></b><br>

			<input type="checkbox" id="catalogo" name="catalogo" style="height:35px; width:25px; vertical-align: middle;" disabled />&nbsp;&nbsp;<del>Catálogo de ventas <i>on line</i>:</del><i><font size=2 color='red'>	&nbsp;&nbsp;próximamente</i></font><br>

			<?php

			if (($id_tarifa >= 15) and ($id_tarifa <= 17)) {  

				?><input type="checkbox" id="sistemas" name="sistemas" style="height:35px; width:25px; vertical-align: middle;" disabled />&nbsp;&nbsp;<del>Sistemas administrativos <i>on line</i>:</del><i><font size=2 color='red'>&nbsp;&nbsp;próximamente</i></font><br><?php

			}

		}

		?>

		<br><br><br>

		<div align ='center'>

		<h3>Paso 2: Configuración del servicio</h3><br>

		<div align ='left'>

		<label>Tema: </label><i><font size=2 color='red'>&nbsp;&nbsp;requerido (*)</i></font><br>
		<select onChange=nav2(this.value) id="area" name="area" required="required" disabled />
		</select><br><br>

		<label>Plantilla (<i>Template</i>): </label><i><font size=2 color='red'>&nbsp;&nbsp;requerido (*)</i></font><br>
		<select onChange=nav3(this.value) id="template" name="template" required="required" disabled />
		</select><br><br>

		<label>Autorenovable: </label><i><font size=2 color='red'>&nbsp;&nbsp;requerido (*)</i></font><br>
		<select onChange=nav4(this.value) id="autorenovable" name="autorenovable" required="required" disabled />
		</select>

		<?php

	}else{

		?>

		<br><br><br>

		<div align ='center'>

		<h3>Paso 2: Configuración del servicio</h3><br>

		<div align ='left'>

		<label>Región/Ciudad:</label><i><font size=2 color='red'>&nbsp;&nbsp;requerido (*)</i></font><br>

		<select onChange=nav2(this.value) id="regionciudad" name="regionciudad" required="required" disabled/>
		<option value="">Seleccione</option>
		</select>

		<br><br>

		<label>Sistema operativo:</label><i><font size=2 color='red'>&nbsp;&nbsp;requerido (*)</i></font><br>

		<select onChange=nav3(this.value) id="sistemaoperativo" name="sistemaoperativo" required="required" disabled/>
		<option value="">Seleccione</option>
		</select>

		<br><br>

		<label>Autorenovable:</label><i><font size=2 color='red'>&nbsp;&nbsp;requerido (*)</i></font><br>

		<select onChange=nav4(this.value) id="autorenovable" name="autorenovable" required="required" disabled/>
			<option value="">Seleccione</option>
		</select>

		<?php

	}

	?>

	<div align ='center'>

	<font size=3>

	<br><br><br>
	<h3><b>Total a pagar:</b><br>
	(Duración del contrato: <?php echo $duracion; ?> meses.)</h3>

	<table>

		<tr>

			<th valign="middle" align="center">

				Sub-Total:&nbsp;

			</th>

			<th valign="middle" align="center">

				<label>US$</label>

			</th>

			<th valign="middle" align="center">

				<label title='Dólar estadounidense'><input id="monto" name="monto" type='double' style='text-align:right; border:none;' size="8" value="0.00" disabled/></label>

			</th>

		</tr>

		<tr>

			<th valign="middle" align="center">

				IVA (<?php echo $iva; ?>%):&nbsp;

			</th>

			<th valign="middle" align="center">

				<label>US$</label>

			</th>

			<th valign="middle" align="center">

				<label title='Dólar estadounidense'><input id="iva" name="iva" type='double' style='text-align:right; border:none;' size="8" value="0.00" disabled/></label>

			</th>

		</tr>

		<tr>

			<th valign="middle" align="center">

				Monto total:&nbsp;

			</th>

			<th valign="middle" align="center">

				<label>US$</label>

			</th>

			<th valign="middle" align="center">

				<label title='Dólar estadounidense'><input id="total" name="total" type='double' style='text-align:right; border:none;' size="8" value="0.00" disabled/></label>

			</th>

		</tr>

	</table>

	<br><br>

	<h3><b>Paso 3: Formas de Pago</b></h3>

	<br>

	<font size=2 color='red'><i>Debe seleccionar una opción (*)</i></font>

	<section id="formas_pago" class="formas_pago">

		<div class="container" data-aos="fade-up">

			<div class="section-title">

				<?php

				for ($c = 0; $c < count($MatrizPagos); $c++){

					?>

					<div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">

						<label title='<?php if (($MatrizPagos[$c][4] == '0') or (($MatrizPagos[$c][5] == ''))) {echo 'Este método de pago no se encuentra disponible por los momentos';} ?>'>
						<input id="<?php echo $MatrizPagos[$c][2]; ?>" name="pago" type="radio" value="<?php echo $MatrizPagos[$c][2]; ?>" onclick="ActivaCompra(<?php echo $c + 1; ?>, <?php echo $id_tarifa; ?>)" style="height:35px; width:25px; vertical-align: middle;" disabled />&nbsp;</label>
						<label title='<?php echo $MatrizPagos[$c][1]; ?>'><img src='imagenes/<?php echo $MatrizPagos[$c][3]; ?>' height=25></label>

					</div>

					<?php

				}

				?>

			</div>

		</div>

	</section>

	<hr><br>

	<div align='center'>

		<?php include 'selecciona_plan.php'; ?>

	</div>

</div>

