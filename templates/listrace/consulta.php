	<font color='black'>

	<section id="consulta" class="works">

		<div class="container">

			<div class="section-header">

       	   			<h2>Consulta <i>On Line</i>:</h2>
        	   		<font size=3>Realice cualquier pregunta o consulta, y será atendido a la mayor brevedad.</font>

         		</div>

        	</div> 

	</section>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

         		<div class="col-md-12 heading-section text-center ftco-animate">

           			<form action="../../contacto_enviado.php" class="bg-white p-5 contact-form" method="post">

					<div class="row">

						<div class="col-md-8">

              						<div class="form-group">

                						<input id="names" name="names" type="text" class="form-control" placeholder="Nombre y apellido" required />
              						</div>
           					</div>

						<div class="col-md-4">

              						<div class="form-group">

                						<input id="empresa" name="empresa" type="text" class="form-control" placeholder="Nombre de la Empresa" required />
              						</div>
           					</div>

						<div class="col-md-4">

              						<div class="form-group">

                						<input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico" required />
              						</div>
           					</div>

						<div class="col-md-8">

              						<div class="form-group">

                						<input id="telefonos" name="telefonos" type="text" class="form-control" placeholder="Teléfonos">

              						</div>
           					</div>

						<div class="col-md-12">

              						<div class="form-group">

                						<input id="direccion" name="direccion" type="text" class="form-control" placeholder="Dirección del domicilio" required />
              						</div>
           					</div>

						<div class="col-md-12">

              						<div class="form-group">

                						<input id="asunto" name="asunto" type="text" class="form-control" placeholder="Asunto" required />
              						</div>
           					</div>

						<div class="col-md-12">

              						<div class="form-group">

                						<textarea id="mensaje" name="mensaje" textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Indique su inquietud" required /></textarea>

              						</div>
           					</div>

						<div class="col-md-12">

              						<div class="form-group">

                						<br><br>
								Por favor indique que es humano mediante la siguiente captcha:
                						<br><br>
								<?php include '../../captcha.php'; ?><br><br>

              						</div>
           					</div>

						<div class="col-md-12">

              						<div class="form-group">

								<input id="carpeta" name="carpeta" type="text" value="<?php echo $row33[carpeta]; ?>" placeholder="Carpeta" hidden />

                						<input id="boton" name="boton" type="submit" title="Por favor indique que es humano mediante el anterior captcha" value="Enviar mensaje" disabled />

              						</div>
           					</div>
               					
              				</div>

            			</form>

          		</div>

        	</div> 

	</section>

	<br><br><br>

