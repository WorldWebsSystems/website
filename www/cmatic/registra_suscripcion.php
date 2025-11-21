<?php

	include 'template_estilo.php';

?>

<div align='center'>

<font size=3 color='white'>

<section id="suscripcion" class="suscripcion">

	<footer id="footer">

		<div class="footer-top">

			<div class="container">

				<div class="section-title">

					<img src="imagenes/clients/worldwebs.net/logos/logo_worldwebs.png" width=50 class="img-fluid animated" alt="">
					<h2><b><font size=5>Suscripción al Sitio Web</font></h2>

				</div>

				<div class="row">

					<div class="col-lg-12 col-md-6 footer-newsletter">

						<div class="row justify-content-center">

							<?php

							$email 		 = $_POST['email'];
							$susc_ingenieria = $_POST['susc_ingenieria'];
							$susc_webhosting = $_POST['susc_webhosting'];
							$susc_websites 	 = $_POST['susc_websites'];
							$susc_vps 	 = $_POST['susc_vps'];

							if ($susc_ingenieria) {$susc_ingenieria = 1;}
							if ($susc_webhosting) {$susc_webhosting = 1;}
							if ($susc_websites)   {$susc_websites = 1;}
							if ($susc_vps) 	      {$susc_vps = 1;}

							if ($email <> "") {

								include 'abre_bd_query_sitios.php';
								include 'detecta_ip.php';
								include 'fecha_hora.php';

								$consulta="SELECT * FROM suscripciones WHERE email = '$email'";
								$result = mysqli_query($connect, $consulta);
								$row = mysqli_fetch_array($result);
								$id  = $row[id];

								if ($row['email'] <> $email) {

									$consulta="insert into suscripciones (email,ingenieria,webhosting,websites,vps,fecha,hora,ciudad,pais,ip,status,informado) values ('$email','$susc_ingenieria','$susc_webhosting','$susc_websites','$susc_vps','$fecha','$hora','$ciudad','$pais','$ip','0','1')";
									$resultado=mysqli_query($connect,$consulta);

									if ($resultado) {

										include 'correo_suscripcion.php';

										$concepto = "Suscripción al sitio web ".$email;
										$id_empresa = 0;
										$usuario = "";
										include 'graba_historial.php';

										?>
										<h4><img src="imagenes/icono_ok.png" width=150 class="img-fluid animated" alt=""><br><br>
										Suscripción registrada con éxito.<br><br>Revise la bandeja de entrada o de spam, y verifique la autenticidad del correo electrónico.</h4>
										<?php

									} else {

										?>
										<h4><img src="imagenes/icono_error.png" width=150 class="img-fluid animated" alt=""><br><br>
										Error inesperado.<br><br>No se pudo registrar la suscripción.</h4>
										<?php

									}

								} else {

									?>
									<h4><img src="imagenes/icono_error.png" width=150 class="img-fluid animated" alt=""><br><br>
									El correo electrónico ya se encuentra suscrito en nuestros sistemas.</h4>
									<?php

								}

							} else {

								?>
								<h4><img src="imagenes/icono_error.png" width=150 class="img-fluid animated" alt=""><br><br>
								El correo electrónico introducido es inválido.</h4>
								<?php

							}

							?>

						</div>

					</div>

				</div>

			</div>

		</div>

	</footer>

</section>

</font>

</div>

<?php

	$pie = 1;

	include 'template_estilo.php';

?>