<div align='left'>

	<?php

	$delay = 100;

	$result2 = mysqli_query($connect, "SELECT * FROM planes where id=$id_plan");
	$row2 = mysqli_fetch_array($result2);
	$descripcion = $row2[descripcion];
	$descripcion1 = $descripcion;

	$result2 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_plan_tarifa");
	$row2 = mysqli_fetch_array($result2);
	$descripcion2 = $row2[descripcion];

	$motor = 2;
	include 'motor_busqueda_2.php';

	?>

	<section id="detalleplanes" class="pricing">

		<div class="container" data-aos="fade-up">

			<?php

			$i = 0;
			$c = 1;

			while ($i < $contador) {

				if ($c == 1) { 
					?><div class="row"><?php 
				} 

				?>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

					<div class="box">

						<div align='center'>

							<br>

							<table>

								<tr>

									<td valign='middle' align='center' height="150">

										<?php

										if ($MatrizDetallesPlanes[$i][3] == '') {
											$imagen = $url_imagen;
										}else{
											$imagen = $MatrizDetallesPlanes[$i][3];
										}

										?>

										<img src='imagenes/<?php echo $imagen; ?>' height=80><font size=1><br><br></font>

										<h3><abbr title='<?php echo $MatrizDetallesPlanes[$i][2]; ?>'><?php echo $MatrizDetallesPlanes[$i][1]; ?></abbr>

										<?php 

										if ($MatrizDetallesPlanes[$i][4] == 0) {

											echo "<br><font size=1 color='red'>No disponible</font>";

										}

										?>

										</h3>

									</th>

								</tr>

							</table>

						</div>

					</div>

				</div>

				<?php 

				if ($c >= 3) {
					?>

					</div>

					<br>

					<?php 
					$c = 1;
				}else{
					$c++;
				}

				$delay = $delay + 100;

				$i++;

			}

		?>

		</div>

	</section>

</div>