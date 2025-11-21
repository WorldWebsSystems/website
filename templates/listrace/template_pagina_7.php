<?php

if ($row33[publicidad] == 1) {
	
	?>

	<section id=publicidad"  class="services">

		<div class="container">

			<div class="section-title">

				<div align="center">

					<hr><br><b>PUBLICIDAD:</b><br><br>

					<?php

					include'../../index_1.php';

					?>

				</div>

			</div>

		</div>

	</section>

	<br><br>

	<?php

}
	
	?>

	<section id="suscripcion"  class="subscription">

		<div class="container">

			<div class="subscribe-title text-center">

				<h2>¿Usted desea recibir información de nuestra empresa?</h2>
				<p>Mediante esta suscripción, usted recibirñá periódicamente en su correo electrónico, cualquier promoción u oferta de los servicios que ofrecemos a nuestros clientes.</p>

			</div>

			<div class="row">

				<div class="col-sm-12">

					<div class="subscription-input-group">

						<form id="formulario_suscripcion" action="../../registra_suscripcion_sitioweb.php" method="post">

							<font color="black"><input id='email' name='email' type="email" class="subscription-input-form" placeholder="Introduzca su correo electrónico" required /></font>

							<input id='id_cliente' name='id_cliente' type="text" value="<?php echo $id_cliente; ?>" hidden />								<input id='carpeta' name='carpeta' type="text" value="<?php echo $carpeta; ?>" hidden />

							<div class="col-md-12">

              							<div class="form-group">

                							<br><br>
									Por favor indique que es humano mediante la siguiente captcha:
                							<br><br>
									<?php include '../../captcha.php'; ?><br><br>

              							</div>
           						</div>

							<button id="boton" name="boton" class="appsLand-btn subscribe-btn" onclick="window.location.href='#'" title="Por favor indique que es humano mediante la siguiente captcha" disabled />

								Suscribirse

							</button>

						</form>

					</div>

				</div>	

			</div>

		</div>

	</section>
