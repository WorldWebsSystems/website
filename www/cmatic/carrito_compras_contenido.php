<?php

include 'cronometro.php';

$orden 	   = $_GET[orden];

if ($orden == 0) {

	$id_tarifa = $_GET[agregar];

	include 'valores_tarifas.php';
	include 'valores_planes.php';

	$orden = rand(1000000, 9999999);
	$descripcion_amplia = false;

	?>

	<section id="planestarifas" class="pricing">

		<div class="container" data-aos="fade-up">

			<div class="row">

				<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

            				<div class="box featured">

						<section id="carritocompras" class="pricing">

							<div class="section-title">

								<h2>Formulación del Pedido</h2>

							</div>

							<br>

							<?php

							$contratando = 1;
							$descripcion1 = $descripcion;

							include $pagina_sitio.'_contenido_tarifas.php';

							?>

							<ul>
								<?php include 'scroll_tarifas.php'; ?>
							</ul>

						</section>

            				</div>

          			</div>

        		</div>

      		</div>

    	</section>

	<?php

}else{

	$id_tarifa = $_POST[id_tarifa];

	$contrato = $orden;

	include 'valores_tarifas.php';

	?>

	<script>

	function MuestraDatosPago(value) {

		if (value) {

			alert('Contrato aceptado por el usuario.');

			$("#datos_pago").prop('hidden', false);
			$("#contrato").prop('hidden', true);
			$("#terminos").prop('disabled', true);
		}

	}

	</script>

	<section id="contrato" class="pricing">

		<div class="container" data-aos="fade-up">

			<div class="section-title">

				<?php

				$result2   	   = mysqli_query($connect, "SELECT * FROM configuracion where id=1");
				$row2 	   	   = mysqli_fetch_array($result2);
				$terminos_contrato = $row2[terminos_contrato];

				?>

				<font size=<?php echo $fuente; ?>>

				<h2>Contrato de Servicios</h2><br>
				<h3><b><font size=<?php echo $fuente; ?>><?php echo $servicio; ?></b></h3>

				<br>

				<font size=2>

				<div align='left'>

					<div class="row">
						<textarea id="terminos_contrato" class="input" name="observaciones" rows="20" cols="200" placeholder="<?php echo $terminos_contrato; ?>" style="font-size:20px" readonly /></textarea>
					</div>

				</div>

				</font>

				<br><br>

				<input id='terminos' name='terminos' type="checkbox" value="1" name="chVerTutoriales" onclick="MuestraDatosPago(checked)" />

				<font size='<?php echo $fuente; ?>'>Aceptar términos y condiciones del contrato (2023)</font>

			</div>

		</div>

	</section>

	<section id="datos_pago" class="pricing" hidden/>

		<div class="container" data-aos="fade-up">

			<div class="section-title">

				<h2>Pago de Orden # <?php echo $orden; ?></h2><br>

					<h3><font size=2>Estimado cliente, usted ha aceptado los términos y condiciones del anterior contrato.<br>
					Por favor proceda a realizar el pago correspondiente de acuerdo a los datos abajo indicados, dentro del siguiente tiempo:</font></h3>

					<?php
					$cron_horas    = intval($restante / 60 / 60 );
					$cron_minutos  = intval(60 * (($restante / 60 / 60) - $cron_horas));
					$cron_segundos = intval(60 * ((60 * (($restante / 60 / 60) - $cron_horas)) - $cron_minutos));
					?>

					<font size=2>

					<input id="horas" name="horas" size="1" value="<?php echo $cron_horas; ?>" readonly />:
					<input id="minutos" name="minutos" size="1" value="<?php echo $cron_minutos; ?>" readonly />:
					<input id="segundos" name="segundos" size="1" value="<?php echo $cron_segundos; ?>" readonly />
					<input id="time" name="time" size="1" value="<?php echo $restante; ?>" hidden/>
					<input id="restante" name="restante" size="1" hidden/>

					<script language="javascript">
						init();
					</script>

					</font>				

					<br><br><br>

					<h2><b>PAGO DE SERVICIO</b></h2>

					<br>

					<h3><b><font size=<?php echo $fuente; ?>>Contrato #: <?php echo $orden; ?></font></b></h3>

					<br>

					<?php include 'formas_pago_opciones.php'; ?>

					<br><br>

					<font size=1>Observaciones:<br><b>En caso de fallas por el uso de plataformas de pago de terceros, no nos nos hacemos responsables por pérdida de fondos por fallas en las transferencias, quedando bajo total responsabilidad del cliente.</b></font>

					<br><br><hr>

				<?php

				$orden = 0;

				?>

			</div>

		</div>

	</section>

	<?php

}

?>

<div align='center'>