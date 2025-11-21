<?php

	$motor = 8;
	include 'motor_busqueda_8.php';

	function ConocerPlan($id_tarifa) {

		?><font size=2><a href='conocer_plan.php?plan=<?php echo $id_tarifa; ?>' target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;">Conocer plan</a></font><?php

	}

	?>

	<section id="tarifas2" class="tarifas2">

		<div class="container" data-aos="fade-up">

			<?php

			if ($pagina_sitio <> 'inicio') {

				?><h2><b>Planes Disponibles:</b></h2><?php

			}

			?>

		</div>

	</section>

	<?php 

	$descripcion_amplia = false;
	$numero_descripcion = 0;

	$result1 = mysqli_query($connect, "SELECT * FROM planes where id_servicio=$iid_servicio and status=1 order by id");

	while ($row1 = mysqli_fetch_array($result1)){

		$id_plan     	= $row1[id];
		$plan	 	= $row1[plan];
		$detalle_amplio = $row1[detalle_amplio];
		$descripcion 	= $row1[descripcion];
		$descripcion1	= $descripcion;
		$url_imagen 	= $row1[url_imagen];
		$status 	= $row1[status];

		$result11 	= mysqli_query($connect, "SELECT count(*) as cantidad FROM planes_tarifas where id_plan=$id_plan and status=1");
		$row11 		= mysqli_fetch_array($result11);

		$cantidad 	= $row11[cantidad];

		if ($cantidad > 0) {

			$numero_descripcion++;
			$ffuncionDescripcion = "plan" . $numero_descripcion;

			?>

			<font size=<?php echo $fuente; ?>><b><input id="plan<?php echo $numero_descripcion; ?>" type='text' value='<?php echo $plan; ?>' style="border:none; text-align:center; width: 100%; heigth: 100%" disabled/></b></font>&nbsp;
			<input id="detalle_amplio<?php echo $numero_descripcion; ?>" type='text' value='<?php echo $detalle_amplio; ?>' hidden/>

			<?php

			include 'template_descripcion_boton.php';

			echo "<font size=3><br><a href='".$link_instructivos."?servicio=";

			if ($iid_servicio == 1) {

				?>vps' <?php

			}else if ($iid_servicio == 2) {

				?>websites' <?php

			}else if ($iid_servicio == 3) {

				?>webhosting' <?php

			}else if ($iid_servicio == 6) {

				?>ingenieria' <?php

			}

			?>target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;">¿Cómo contratar?</a></font>

			</font>

			<section id="detalleplanes" class="pricing">

				<div class="container" data-aos="fade-up">

					<div class="section-title">

						<?php

						$delay = 100;
						$contratando = 0;
						$c = 1;
						$i = 0;

						$result2 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id_servicio=$iid_servicio and id_plan=$id_plan and status=1 order by id");

						while ($row2 = mysqli_fetch_array($result2)){

							$id_tarifa 	   = $row2[id];
							$duracion 	   = $row2[duracion];
							$detalle  	   = $row2[detalle];
							$detalle_amplio2   = $row2[detalle_amplio];
							$descripcion2	   = $row2[descripcion];
							$MatrizPlan[$i][0] = $row2[id];
							$MatrizPlan[$i][1] = $row2[detalle];

							$motor = 3;
							include 'motor_busqueda.php';

							$numero_descripcion++;
							$ffuncionDescripcion = "plan" . $numero_descripcion;

							?>

							<font size=3>

							<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="<?php echo $delay; ?>">

								<div class="box featured">

									<strong><b><font size=4><input id="plan<?php echo $numero_descripcion; ?>" type='text' value='<?php echo $detalle; ?>' style="border:none; text-align:center; width: 100%; heigth: 100%" disabled/></font></b></strong>&nbsp;
									<input id="detalle_amplio<?php echo $numero_descripcion; ?>" type='text' value='<?php echo $detalle_amplio2; ?>' hidden/>

									<?php

									include 'template_descripcion_boton.php';

									?>

									<br>
									<font size=2>Duración: <?php echo $duracion; ?> meses</font><br>

									<?php

									ConocerPlan($MatrizPlan[$i][0]);

									echo "<font size=2>";

									if ($iid_servicio == 1) {

										?><a href="<?php echo $link_instructivos; ?>?servicio=vps#vps" 		 target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;"><?php echo $menu25; ?></a></font><br><br><?php

									}else{

										?><a href="<?php echo $link_instructivos; ?>?servicio=websites#websites" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;"><?php echo $menu25; ?></a></font><br><br><?php

									}

									include 'selecciona_plan.php';

									echo "<hr>";

									if ($iid_servicio == 1) {

										?>

										<div align='center'>

										<strong><font size=2>PRECIO MENSUAL:</font></strong><br><br>

										<font size=3><b>Windows</font></b> <img src='imagenes/icono_windows.png' width=20 title='Sistema operativo Microsoft&copy; Windows'><br>

										<table>

											<tr>

												<th style="text-align: right" valign="middle">
													<font size=3>USD</font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<?php
													if ($row2[status_w]==1) {
														?><b><font size=5 color='#37517e'><?php echo number_format($row2[tarifa_w], 2, '.', ','); ?></font></b><?php
													}else{
														?><font size=5>---</font><?php
													}
													?>
												</th>

												<th style="text-align: center" valign="middle">
														&nbsp;&nbsp;<font size=2><b>+IVA</b></font>
												</th>

											</tr>

											<tr>

												<th style="text-align: right" valign="middle">
													<font size=3>Bs.</font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<?php
													if ($row2[status_w]==1) {
														?><b><font size=4 color='#37517e'><?php echo number_format($row2[tarifa_w]*$bcv, 2, ',', '.'); ?></font></b><?php
													}else{
														?><font size=4>---</font><?php
													}
													?>
												</th>

												<th style="text-align: center" valign="middle">
													&nbsp;&nbsp;<font size=2><b>+IVA</b></font>
												</th>

											</tr>

										</table>

										<br>

										<font size=3><b>Linux</b></font> <img src='imagenes/icono_linux.png' width=20 title='Sistema operativo GNU Linux&trade;'></font><br>

										<table>

											<tr>

												<th style="text-align: right" valign="middle">
													<font size=3>USD</font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<?php
													if ($row2[status_l]==1) {
														?><b><font size=5 color='#37517e'><?php echo number_format($row2[tarifa_l], 2, '.', ','); ?></font></b><?php
													}else{
														?><font size=5>---</font><?php
													}
													?>
												</th>

												<th style="text-align: center" valign="middle">
														&nbsp;&nbsp;<font size=2><b>+IVA</b></font>
												</th>

											</tr>

											<tr>

												<th style="text-align: right" valign="middle">
													<font size=3>Bs.</font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<?php
													if ($row2[status_l]==1) {
														?><b><font size=4 color='#37517e'><?php echo number_format($row2[tarifa_l]*$bcv, 2, ',', '.'); ?></font></b><?php
													}else{
														?><font size=4>---</font><?php
													}
													?>
												</th>

												<th style="text-align: center" valign="middle">
													&nbsp;&nbsp;<font size=2><b>+IVA</b></font>
												</th>

											</tr>

										</table>

										</div>

										<?php

									}else if ($iid_servicio >= 2) {

										?>

										<div align='center'>

										<strong><font size=2>PRECIO MENSUAL:</font></strong>

										<table>

											<tr>
												<th style="text-align: right" valign="middle">
													<font size=3>USD</font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<font size=5 color='#37517e'><b><?php echo number_format($total_mensual, 2, '.', ','); ?></font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<font size=2><b>+IVA</b></font>
												</th>

											</tr>

											<tr>

												<th style="text-align: right" valign="middle">
													<font size=3>Bs.</font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<font size=4 color='#37517e'><b><?php echo number_format($total_mensual*$bcv, 2, ',', '.'); ?></font>&nbsp;&nbsp;
												</th>

												<th style="text-align: center" valign="middle">
													<font size=2><b>+IVA</b></font>
												</th>

											</tr>

										</table>

										</div>

										<?php

									}

									?>

									<hr><br>

									<strong><font size=2>DETALLES DEL PLAN:</font></strong>

									<br>

									<?php 

									ConocerPlan($MatrizPlan[$i][0]);

									echo "<br>";

									$motor = 2;
									include 'motor_busqueda.php';

									?>

									<br>

									<div align='left'>
									<font size=2><?php echo $descripcion; ?></font>
									</div>

								</div>

							</div>

							<?php 

							if ($c >= 3) {

								?>

									</div>

								</div>

								<br>

								<div class="container" data-aos="fade-up">

									<div class="section-title">

								<?php

								$c = 1;

							}else{

								$c++;

							}

							$delay = $delay + 300;
							$i++;

							echo "</font>";

						}

						?>

					</div>

				</div>

			</section>

			<?php

		}

	}

	$numero_descripcion = 0;

	echo "<hr>";

?>