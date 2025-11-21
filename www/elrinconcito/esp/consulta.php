<!DOCTYPE html>
<html lang="es">

<head>

	<?php include 'encabezado.php'; ?>

</head>

<body>

	<font size=4>

	<?php
	include '../dimensiones.php';
	?>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

      			<div class="row justify-content-center mb-5 pb-3">

         			<div class="col-md-12 heading-section text-center ftco-animate">

	          			<span class="subheading">El Rinconcito<br>Posada & Cabañas</span>
        	   			<h2 class="mb-4">Consulta <i>On Line</i>:</h2>
        	   			<strong>Realice cualquier pregunta con toda confianza</strong>

         			</div>

         			<div class="col-md-12 heading-section text-center ftco-animate">

           				<form action="contacto_enviado.php" class="bg-white p-5 contact-form" method="post">

              					<div class="form-group">
                					<input id="names" name="names" type="text" class="form-control" placeholder="Nombre y apellido" required />
              					</div>
              					<div class="form-group">
                					<input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico" required />
              					</div>
              					<div class="form-group">
        	        				<input id="telefonos" name="telefonos" type="text" class="form-control" placeholder="Teléfonos">
	             				</div>
              					<div class="form-group">
                					<input id="asunto" name="asunto" type="text" class="form-control" placeholder="Asunto" required />
              					</div>
              					<div class="form-group">
                					<textarea id="mensaje" name="mensaje" textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Indique su inquietud" required /></textarea>
              					</div>
              					<div class="form-group">
							<?php include '../captcha.php'; ?>
							<img id="aceptar_off" src='../images/boton_send_esp.png' title='Verifique que es humano para enviar el mensaje'>
                					<input id="boton_s" name="boton_s" type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5" hidden />
              					</div>

            				</form>

          			</div>

         			<div class="col-md-12 heading-section text-center ftco-animate">

	          			<span class="subheading">El Rinconcito, Posada & Cabañas</span>
        	   			<h2 class="mb-4">¿Cómo llegar?</h2>

         			</div>

         		</div>

      			<div class="row justify-content-center mb-5 pb-3">

         			<div class="col-md-12 heading-section text-center ftco-animate">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126229.83206578865!2d-71.22755986093749!3d8.626471845719921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6481824685a12f%3A0x22aa22c8cb98745e!2sEl%20Rinconcito%2C%20Posada%20%26%20Cabanas!5e0!3m2!1ses-419!2sve!4v1740964548462!5m2!1ses-419!2sve" height="300" width='<?php echo $fuente1; ?>' style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

         			</div>

        		</div> 

		</div>

	<?php include 'pie_pagina.php'; ?>

</body>

</html>