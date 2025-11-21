<div align='center'>

<?php include 'cinta_clientes_fijos.php'; ?><br><br><br><br>

<font color='white'>

<section id="footer" class="footer">

	<footer id="footer">

		<div class="container">

          		<div class="col-lg-12 col-md-12 footer-newsletter">

				<div align='center'>
				<br><br><font size=5>Suscríbete a CMATIC <i>WebHostings</i> & <i>Servers</i></font>
				<p>Mediante esta suscripción, usted recibirá periódicamente en su correo electrónico, cualquier promoción u oferta de los servicios que ofrecemos a nuestros clientes. Para suscribirte, indica tu correo electrónico a continuación; y una vez suscrito, deberás revisar el mensaje que recibirás en tu bandeja de entrada o spam, y confirmar el correo electrónico en el link que encontrarás en dicho mensaje.</p>

				<br>


				<form id="formulario_suscripcion" action="registra_suscripcion_sitioweb.php" method="post">

					<strong>Correo electrónico:</strong> <font color="black"><input id='email' name='email' type="email" placeholder="@" required /></font>

					<input id='id_cliente' name='id_cliente' type="text" value="103" hidden />								<input id='carpeta' name='carpeta' type="text" value="<?php echo $carpeta; ?>" hidden />

					<div class="col-md-12">

              					<div class="form-group">

                					<br><br>
							Para finalizar la suscripción, por favor indique que es humano mediante la siguiente captcha:
                					<br><br>
							<?php include 'captcha.php'; ?><br>

						</div>

					</div>

					<button id="boton" name="boton" class="appsLand-btn subscribe-btn" onclick="window.location.href='#'" title="Por favor indique que es humano mediante la siguiente captcha" disabled />Suscribirse</button>

				</form>

          			</div>
          		</div>

          	</div>

	</div>

</section>

<br><br>

<section id="creditos" class="footer">

	<footer id="footer">

		<div class="container">

			<div class="copyright">

				<br>

				Sitio Web promocionado por:<br>

				<img src='imagenes/logo_worldwebs.png' width=50>

				<br>

				Copyright (<?php echo $ano; ?>)<br><a href="https://cmatic.live/" target="_blank">Corporación CMATIC de Venezuela.</a><br>
				<font size=1>Se prohibe la repoducción total o parcial del contenido de este sitio web, sin el consentimiento de sus propietarios.</font><br>
				Todos los derechos reservados.<br><br>
				Proyecto patrocinado por la<br>
				<strong><span><a href="https://cmatic.live/fundatics" target="_blank">Fundación para el Desarrollo e Investigación de Tecnologías de Innovación &copy;</a></span></strong><br><br>
				
       				<!-- All the links in the footer should remain intact. -->
       				<!-- You can delete the links only if you purchased the pro version. -->
       				<!-- Licensing information: https://bootstrapmade.com/license/ -->
       				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
       				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br><br>

      			</div>

		</div>

	</footer>

</section>

</font>