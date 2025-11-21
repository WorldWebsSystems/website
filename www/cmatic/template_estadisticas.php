<script>

	function Numero_Estadistica(valor) {

		var valor = new Intl.NumberFormat('en-US', { currency: 'USD', style: 'decimal', minimumFractionDigits: 2 }).format(moneda);

		return valor;

	}

</script>

<div align='left'>

	<!-- ======= Skills Section ======= -->

		<section id="skills" class="skills">

			<div class="container" data-aos="fade-up">

				<div class="row">

					<div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">

						<?php

						$result1  = mysqli_query($connect, "SELECT pais, count(*) as total FROM historial");
						$row1 = mysqli_fetch_array($result1);
						$total = $row1[total];

						$result1  = mysqli_query($connect, "SELECT pais, count(*) as cantidad FROM historial group by pais order by cantidad desc");

						?>

						<div class="skills-content">

							<?php

							$i = 0;
							$cantidad_restante = 0;

							while ($row1 = mysqli_fetch_array($result1)) {

								$i++;

								if ($i <= 7) {

									$porcentaje = $row1[cantidad] * 100 / $total;

									?>

									<div class="progress">

										<font size=2>
										<span class="skill"><?php echo $row1[pais]; ?> <i class="val"><?php echo number_format($porcentaje, 2, '.', ',') . "%"; ?></i></span>
										<div class="progress-bar-wrap">
											<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $porcentaje; ?>" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										</font>

									</div>

									<?php	

								}else{

									$cantidad_restante = $cantidad_restante + $row1[cantidad];

								}

							}

							$porcentaje_restante = $cantidad_restante * 100 / $total;

							?>

							<font size=3>

							<div class="progress">

								<font size=2>
								<span class="skill">OTROS PAÍSES <i class="val"><?php echo number_format($porcentaje_restante, 2, '.', ',') . "%"; ?></i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $porcentaje_restante; ?>" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								</font>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

	<!-- End Skills Section -->

<div align='center'>

</div>