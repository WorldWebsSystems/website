						<section id="contact" class="contact">

							<div class="container" data-aos="fade-up">

          							<div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
								</div>

								<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

									<form action="registra_empresa.php" method="post" role="form" class="php-email-form">

										<table width='100%'>

              										<tr>

              											<td width='50%'>
              												<div class="form-group">
                  												<input type="text" name="carpeta" id="carpeta"  class="form-control" data-rule="minlen:3" placeholder="Usuario" data-msg="Por favor introduzca al menos 3 caracteres" required />
                  												<div class="validate"></div>
													</div>
              											</td>

              											<td width='50%'>
              												<div class="form-group">
        													<input type="email" name="email" id="email" class="form-control" data-rule="email" placeholder="Correo electrónico" data-msg="Por favor, introduzca un email válido" required />
                  												<div class="validate"></div>
													</div>
              											</td>

              										</tr>

              									</table>

             									<div class="mb-3">
                									<div class="loading">Registrando...</div>
                									<div class="error-message"></div>
                									<div class="sent-message">¡Registro efectuado!</div>
              									</div>

										<div align='center'>

											<?php include 'captcha.php'; ?><br>

											<div class="text-center"><button id='boton_s' name='boton_s' type="submit" disabled />Registrarme</button></div><br>
											<font size=2>Al presionar Registrarme, acepto los <a class="text" href='javascript:;' onclick="Ver_Terminos_Condiciones();" role="button">Términos y Condiciones</a></font>

										</div>

            								</form>

          							</div>

          							<div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
								</div>

      							</div>

    						</section><!-- End Contact Section -->

