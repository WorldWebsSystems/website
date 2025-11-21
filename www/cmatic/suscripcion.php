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
					<h2><b><font size=5>Suscripción al Sitio Web</b></font></h2>
					<b><font size=2>Por favor enviarme toda la información sobre el(los) servicio(s) que ofrece WorldWebs Systems c.a. indicados abajo a:</b></font>

					<div class="col-lg-12 col-md-6 footer-newsletter">

						<div class="row justify-content-center">

							<div class="col-lg-12 col-md-6 footer-newsletter">
								<p><?php echo $descripcion_suscripcion; ?></p>
								<form id="formulario_suscripcion" action="registra_suscripcion.php" method="post">
									<font color='black'><input id="email" name="email" type="email" name="email" size="30" placeholder="<?php echo "Su correo electrónico"; ?>" required /></input></font>
									<input id="boton" name="boton" type="submit" value="Suscribirse" disabled />
							</div>

        					</div>

						<div align='left'>

									<input type="checkbox" id="susc_ingenieria" name="susc_ingenieria" style="height:35px; width:25px; vertical-align: middle;" />&nbsp;&nbsp;Ingeniería de Sistemas de Información - <i>Software</i></b><br>
									<input type="checkbox" id="susc_webhosting" name="susc_webhosting" style="height:35px; width:25px; vertical-align: middle;" />&nbsp;&nbsp;Almacenamiento de Sitios Web - <i>WebHosting</i></b><br>
									<input type="checkbox" id="susc_websites"   name="susc_websites"   style="height:35px; width:25px; vertical-align: middle;" />&nbsp;&nbsp;Desarrollo y publicación de Sitios Web - <i>WebSites</i></b><br>
									<input type="checkbox" id="susc_vps" 	    name="susc_vps" 	   style="height:35px; width:25px; vertical-align: middle;" />&nbsp;&nbsp;Servidor Privado Virtual - <i>VPS</i></b>

								</form>

						</div>

						<br>

						<div align='center'>
      						<?php include 'captcha.php'; ?>
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