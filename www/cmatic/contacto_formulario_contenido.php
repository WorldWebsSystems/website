<!-- ======= Contact Section ======= -->

	<section id="contact" class="contact">

		<div class="container" data-aos="fade-up">
			<?php 
			$titulo = "Contacto";
			include 'worldwebs_titulo.php';
			?>

		</div>

		<div class="container">

			<div class="row mt-5">

          			<div class="col-lg-4">

            				<div class="info">

            					<div align="left">

            					<br>

              					<div class="address">

                					<i class="icofont-google-map"></i>
                					<h4>Dirección:</h4>
                					<p><?php echo $direccion; ?></p>
							<p><?php echo $ciudad; ?> Estado <?php echo $estado; ?></p>
              						<p><?php echo $pais; ?></p>

              					</div>

              					<div class="email">

                					<i class="icofont-envelope"></i>
                					<h4>Correo electrónico:</h4>
                					<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

              					</div>

              					<div class="phone">

                					<i class="icofont-phone"></i>
                					<h4>Teléfonos:</h4>
                					<p>+58 274 2714140 (Oficina)</p>
                					<p><a href="https://wa.me/+584247756630" target="_blank">+58 424 7756630 (WhatsApp)</a></p>

              					</div>

              					<div class="phone">

                					<i class="bx bxl-facebook"></i>
                					<h4>Facebook:</h4>
                					<p><a href="https://www.instagram.com/<?php echo $facebookc; ?>" target="_blank"><?php echo $facebookc; ?></a></p>

              					</div>

              					<div class="phone">

                					<i class="ri-instagram-fill"></i>
                					<h4>Instagram:</h4>
                					<p><a href="https://www.instagram.com/<?php echo $instagramc; ?>" target="_blank"><?php echo $instagramc; ?></a></p>

              					</div>

            					<br>

              					</div>

            				</div>

          			</div>

				<div class="col-lg-8 mt-5 mt-lg-0">

					<form action="contacto_formulario_enviado.php" method="post" role="form" class="php-email-form">

						<br>

						<div class="form-row">
							<div class="col-md-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Sus nombres y apellidos" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
								<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Su correo electrónico" data-rule="email" data-msg="Por favor indique su correo electrónico" required />
								<div class="validate"></div>
                					</div>
                					<div class="col-md-6 form-group">
                  						<input type="text" name="telefonos" class="form-control" id="telefonos" placeholder="Sus teléfonos" data-rule="minlen:4" data-msg="Por favor indique sus teléfonos de contacto" required />
                  						<div class="validate"></div>
                					</div>
                					<div class="col-md-6 form-group">
                  						<input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nombre de su empresa" data-rule="minlen:4" data-msg="Por favor indique el nombre de su empresa" />
                  						<div class="validate"></div>
                					</div>
              					</div>
              					<div class="form-group">
                					<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                					<div class="validate"></div>
              					</div>
              					<div class="form-group">
                					<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escriba el mensaje que desea escibirnos" placeholder="Mensaje" required /></textarea>
                					<div class="validate"></div>
              					</div>
              					<div class="form-group">
							<?php include 'captcha.php'; ?>
              					</div>
              					<div class="mb-3">
                					<div class="loading">Loading</div>
                					<div class="error-message"></div>
                					<div class="sent-message">Su mensaje ha sido enviado. Pronto un ejecutivo de ventas le dará respuesta. ¡ Muchas gracias!</div>
              					</div>

						<div class="text-center"><img id="aceptar_off" name="aceptar_off" src='../imagenes/enviar_off.png' title='Por favor, verifique que es humano para enviar el mensaje'></div>
                				<div class="text-center"><input id="boton_s" name="boton_s" type="submit" src='../imagenes/enviar_on.png' class="btn btn-primary py-3 px-5" hidden /></div>

						<br>

            				</form>

          			</div>

        		</div>

      		</div>

		<div class="container" data-aos="fade-up">

    			<div class="mapa">

      				<div class="container">

        				<div class="row">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.6667100085792!2d-71.1887910742011!3d8.563902734648883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e64878969da1db1%3A0xfa14660366e7b25d!2sC.%209%20Las%20Rosas%2C%20M%C3%A9rida%205115%2C%20M%C3%A9rida!5e0!3m2!1ses!2sve!4v1679872822951!5m2!1ses!2sve" width="1200" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        				</div>

      				</div>

    			</div>

		</div>

    	</section>

<!-- End Contact Section -->