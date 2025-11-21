<!DOCTYPE html>
<html lang="es">

<head>

</head>

<body>

	<?php
	$ppagina_sitio = $pagina_sitio;
	?>

	<font size=2>

	<!-- ======= Cliens Section ======= -->

		<section id="cliens" class="cliens section-bg">

			<div class="container">

        			<div class="row" data-aos="zoom-in">

					<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">

						<?php
						$result2 = mysqli_query($connect, "SELECT count(*) as total_visitas FROM historial");
						$row2 = mysqli_fetch_array($result2);
						?>

						<table>
							<tr>
								<td align='center'>
									<img src="imagenes/icono_visitas.png" width="55" title='Visitas diarias al sitio web' class="img-fluid" alt="">
								</td>
							</tr>
							<tr>
								<td align='center'>
									<font size=6><b><?php echo number_format($row2[total_visitas]/1000, 2, ',', '.'); ?> k</font><br><h3><?php echo $cinta1; ?></b></h3>
								</td>
							</tr>
						</table>

					</div>

					<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">

						<?php
						$result2 = mysqli_query($connect, "SELECT count(*) as contratos FROM contratos");
						$row2 = mysqli_fetch_array($result2);
						$contratos = $row2[contratos] + 1424;
						?>

						<table>
							<tr>
								<td align='center'>
									<img src="imagenes/icono_contratos.png" width="58" title='Contratos de servicios realizados' class="img-fluid" alt="">
								</td>
							</tr>
							<tr>
								<td align='center'>
									<font size=6><b><?php echo number_format($contratos/1000, 2, ',', '.'); ?> k</font><br><h3><?php echo $cinta4; ?></b></h3>
								</td>
							</tr>
						</table>

					</div>

					<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">

						<?php
						$result2 = mysqli_query($connect, "SELECT count(*) as total_suscripciones FROM suscripciones where status=1");
						$row2 = mysqli_fetch_array($result2);
						?>

						<table>
							<tr>
								<td align='center'>
									<img src="imagenes/icono_suscrito.png" width="58" title='Suscripciones al boletín del noticias' class="img-fluid" alt="">
								</td>
							</tr>
							<tr>
								<td align='center'>
									<font size=6><b><?php echo $row2[total_suscripciones]; ?></font><br><h3><?php echo $cinta3; ?></b></h3>
								</td>
							</tr>
						</table>

					</div>

					<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">

						<?php
						$result2 = mysqli_query($connect, "SELECT count(*) as clientes FROM clientes");
						$row2 = mysqli_fetch_array($result2);
						?>

						<table>
							<tr>
								<td align='center'>
									<img src="imagenes/icono_usuarios.png" width="58" title='CLientes registrados en el sistema' class="img-fluid" alt="">
								</td>
							</tr>
							<tr>
								<td align='center'>
									<font size=6><b><?php echo $row2[clientes]; ?></font><br><h3><?php echo $cinta2; ?></b></h3>
								</td>
							</tr>
						</table>

					</div>

				</div>

			</div>

		</section>

	<!-- End Cliens Section -->

	</font>

	<br>

	<?php
	$pagina_sitio = $ppagina_sitio;

	include 'ruta_sitio.php';

	?>

	<br>

</body>

</html>