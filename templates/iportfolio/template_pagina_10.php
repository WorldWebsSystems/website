<section id="contact" class="contact">

	<div class="container">

		<div class="section-title">

			<h2>Contacto</h2>

		</div>

		<div class="row" data-aos="fade-in">

			<div class="col-lg-5 d-flex align-items-stretch">

				<div class="info">

					<div class="address">

						<i class="bi bi-geo-alt"></i>

						<h4>Localización:</h4>

						<p><?php echo $row33[direccion] . ', ' . $ciudad . ', ' . $municipio . ', ' . $estado . ', ' . $pais; ?></p>

					</div>

					<div class="email">

						<i class="bi bi-envelope"></i>

						<h4>Correo electrónico:</h4>

						<p><?php echo $row33[email]; ?></p>

					</div>

					<div class="phone">

						<i class="bi bi-phone"></i>

						<h4>Teléfonos:</h4>

						<p><?php echo '+' . $cod_telefono . ' ' . $row33[telefono]; ?></p>

					</div>

					<div class="phone">

						<i class="bi bi-phone"></i>

						<h4>Celular:</h4>

						<p><?php echo '+' . $cod_telefono . ' ' . $row33[celular]; ?></p>

					</div>

					<iframe src="https://www.google.com/maps/embed?pb=<?php echo $row33[coordenadas]; ?>" frameborder="0" style="border:0; width: 100%; height: <?php echo $alto1; ?>px;" allowfullscreen></iframe>

				</div>

			</div>

			<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

				<form action="../../contacto_enviado.php" method="post" role="form" class="php-email-form">

					<div class="row">

						<div class="form-group">

							<h4>Formulario de contacto:</h4>

						</div>
	
						<div class="form-group col-md-6">
	
							<label for="name">Nombres</label>

							<input id="names" name="names" type="text" class="form-control" placeholder="Nombre y apellido" required />

						</div>

						<div class="form-group col-md-6">

							<label for="name">Empresa</label>

							<input id="empresa" name="empresa" type="text" class="form-control" placeholder="Empresa" required />

						</div>

						<div class="form-group col-md-6">

							<label for="name">Correo electrónico</label>

							<input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico" required />

						</div>

						<div class="form-group col-md-6">

							<label for="name">Teléfonos</label>

							<input id="telefonos" name="telefonos" type="text" class="form-control" placeholder="Teléfonos" required />
	
						</div>

						<div class="form-group col-md-12">

							<label for="name">Dirección</label>

							<input id="direccion" name="direccion" type="text" class="form-control" placeholder="Dirección" required />

						</div>

					</div>

					<div class="form-group">

						<label for="name">Asunto</label>

						<input id="asunto" name="asunto" type="text" class="form-control" placeholder="Asunto" required />

					</div>

					<div class="form-group">

						<label for="name">Mensaje</label>

						<textarea id="mensaje" name="mensaje" textarea rows="7" class="form-control" placeholder="Mensaje" required /></textarea>

						<div class="form-group">

                					<br><br>
							Por favor indique que es humano mediante la siguiente captcha:
                					<br><br>
							<?php include '../../captcha.php'; ?><br><br>

              					</div>

						<div class="my-3">

							<div class="loading">Enviando...</div>

							<div class="error-message"></div>

							<div class="sent-message">Su mensaje ha sido enviado. Muchas gracias!</div>

						</div>

						<div class="text-center"><button id='boton' name='boton' type="submit" title="Por favor indique que es humano mediante el anterior captcha" disabled />Enviar</button></div>

						<input id="carpeta" name="carpeta" type="text" value="<?php echo $carpeta; ?>" placeholder="Carpeta" hidden />

					</div>

				</form>

			</div>

		</div>

	</div>

</section>

