<!-- ======= Clients Section ======= -->

    	<section id="clients" class="clients section-bg">

      		<div class="container">

        		<div class="row">

				<?php

				$resultado33 = mysqli_query($connect, "SELECT * FROM red where status = 1 and imagen<>'' order by id asc limit 1");
				$row33 = mysqli_fetch_array($resultado33);

				$primero = $row33[id];

				$resultado33 = mysqli_query($connect, "SELECT * FROM red where status = 1 and imagen<>'' order by id desc limit 1");
				$row33 = mysqli_fetch_array($resultado33);

				$ultimo = $row33[id];

				$resultado33 = mysqli_query($connect, "SELECT * FROM red where status = 1 and imagen<>''");

				$n = 0;

				while ($n < 6) {

					$random = rand($primero, $ultimo);

					$resultado33 = mysqli_query($connect, "SELECT * FROM red where status = 1 and imagen <> '' and id = $random");
					$row33 = mysqli_fetch_array($resultado33);

					if ($row33[id] > 0) {

						$cinta[$n][0] = $row33[id];
						if ($row33[siglas] <> '') {
							$cinta[$n][1] = substr($row33[siglas] , 0, 27);
						}else{
							$cinta[$n][1] = substr($row33[nombre] , 0, 27);
						}
						$cinta[$n][2] = substr($row33[actividad] , 0, 27);
						$cinta[$n][3] = $row33[carpeta];
						$cinta[$n][4] = $row33[imagen];

						$n++;

					}

				}

				$n = 0;

				while ($n < 6) {

					?>

          				<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">

						<table>
							<tr>
								<td>
            								<img src="<?php echo $cinta[$n][3] . '/' . $cinta[$n][4];?>" class="img-fluid" alt="">
								</td>
							</tr>
							<tr>
								<td>
									<b><font size=1><?php echo $cinta[$n][1]; ?></font></b><br>

									<b><font size=1><?php echo $cinta[$n][2]; ?></font></b><br>

									<?php

									echo "<b><font size=1><b><a href='https://tuww.net?id=" . $cinta[$n][3] . "' target='_blank'>tuww.net/" . $cinta[$n][3] . "</font></a></b>"; ?>

								</td>
							</tr>
						</table>

          				</div>

					<?php

					$n++;
				}

				?>

        		</div>

      		</div>

    	</section>

<!-- End Clients Section -->
