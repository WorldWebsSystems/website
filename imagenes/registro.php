<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$servicio = $_GET[servicio];

	include 'index_encabezado.php';

	?>

</head>

<body style="background-color:#F0EFEF;">

	<?php

	if ($so <> 'movil') {
		$ancho_publicidad = 800;
	}else{
		$ancho_publicidad = 350;
	}

	include 'dimensiones.php';

	include 'encabezado.php';

	?>

	<br><br><br><br>

	<div align='center'>

	<font size=4>

	<section id="services" class="services">

		<div class="container">

			<div class="section-title">

				<div class="row">

					<div class="col-md-12">

						<img src='imagenes/directorio.png' height='75'><br>

						<p><font size=4>Guía Clasificada &#169;</font></p>
						<h2><font color='black'>(Oct, 2024)</font></h2>

						<br><br>

						<b><font color='black' size=5>Paso No. 1:<br>REGISTRO DE USUARIO:</font></b><br>

						<br><br>Para contratar cualquiera de nuestros <a href='servicios.php'>servicios</a>, deberá registrarse de manera obligatoria como usuario de nuestra plataforma, completando el siguiente "Perfil Básico".<br><br><br>

					</div>

				</div>

			</div>

		</div>

	</section>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

			<div class="section-title">

				<div class="row">

					<div class="col-md-12">

						<b><font color='black' size=5>PERFIL BÁSICO:</font></b>

					</div>

				</div>

			</div>

         			<div class="col-md-12 heading-section text-center ftco-animate">

           				<form action="registro_enviado.php" class="bg-white p-5 contact-form" method="post">

						<div class="row">

							<div class="col-md-8">

              							<div class="form-group">

                							<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre de la empresa" required />
              							</div>
           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="siglas" name="siglas" type="text" class="form-control" placeholder="Siglas de la empresa" required />
              							</div>

           						</div>

							<div class="col-md-12">

              							<div class="form-group">

                							<input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Descripción breve de la empresa" required />
              							</div>

           						</div>

							<div class="col-md-12">

              							<div class="form-group">

                							<input id="descripcion_amplia" name="descripcion_amplia" type="text" class="form-control" placeholder="Descripción amplia de la empresa" required />
              							</div>

           						</div>

							<div class="col-md-12">

              							<div class="form-group">

                							<input id="direccion" name="direccion" type="text" class="form-control" placeholder="Dirección del domicilio" required />
              							</div>

           						</div>

							<div class="col-md-3">

              							<div class="form-group">

                							<input id="id_ciudad" name="id_ciudad" type="text" class="form-control" placeholder="Ciudad" required />
              							</div>

           						</div>

							<div class="col-md-3">

              							<div class="form-group">

                							<input id="municipio" name="municipio" type="text" class="form-control" placeholder="Municipio" required />
              							</div>

           						</div>

							<div class="col-md-3">

              							<div class="form-group">

                							<input id="estado" name="estado" type="text" class="form-control" placeholder="Región" required />
              							</div>

           						</div>

							<div class="col-md-3">

              							<div class="form-group">

                							<input id="pais" name="pais" type="text" class="form-control" placeholder="País" required />
              							</div>

           						</div>

							<div class="col-md-3">

              							<div class="form-group">

                							<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Teléfono fijo" required />
              							</div>

           						</div>

							<div class="col-md-3">

              							<div class="form-group">

                							<input id="celular" name="celular" type="text" class="form-control" placeholder="Teléfono móvil" required />
              							</div>

           						</div>

							<div class="col-md-6">

              							<div class="form-group">

                							<input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico" required />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="instagram" name="instagram" type="text" class="form-control" placeholder="instagram.com/[opcional]" />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="facebook" name="facebook" type="text" class="form-control" placeholder="facebook.com/[opcional]" />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="x" name="x" type="text" class="form-control" placeholder="x.com/[opcional]" />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="tiktok" name="tiktok" type="text" class="form-control" placeholder="tiktok.com/@[opcional]" />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="linkedin" name="linkedin" type="text" class="form-control" placeholder="linkedin.com/in/[opcional]"  />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="youtube" name="youtube" type="text" class="form-control" placeholder="youtube.com/watch?v=[opcional]"  />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="registrolegal" name="registrolegal" type="text" class="form-control" placeholder="Url Registro Legal (opcional)"  />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="registrofiscal" name="registrofiscal" type="text" class="form-control" placeholder="Url Registro de Hacienda (opcional)"  />
              							</div>

           						</div>

							<div class="col-md-4">

              							<div class="form-group">

                							<input id="declaracionhacienda" name="declaracionhacienda" type="text" class="form-control" placeholder="Url Declaración de Hacienda (opcional)"  />
              							</div>

           						</div>

          					</div>

              					<div class="form-group">

							<br><br>

							A continuación verifica que eres humano (a) y presiona el botón "Registro"

							<br><br>

							<?php include 'captcha.php'; ?>

							<br>

							<input id="boton" name="boton" type="submit" src='imagenes/boton_registro_off.png' class="btn btn-primary py-3 px-5" disabled />

              					</div>

            				</form>

          			</div>

 		</div>

	</section>

	<?php

	if ($servicio == 'sitioweb') {

	?>

	<section id="services" class="services">

		<div class="container">

			<div class="section-title">

				<div class="row">

					<div class="col-md-12">

						<b><font color='black' size=5>Paso No. 2:<br>GALERÍA DE IMÁGENES:</font></b><br>

						<br><br>Una vez cumplido con el anterior Paso No. 1, revise la bandeja de entrada o spam de su correo electrónico, y confirme dicho correo en el link que encontrará en el mensaje. Una vez revisada la solicitud de registro, recibirá de parte del paersonal de Guía Clasificada, un correo electrónico contentivo de la aprobación de la solicitud de registro de usuario, y recibirá las instrucciones para remitirnos las imágenes necesarias para ser incluidas en la versión básica gratuita de su sitio web (<i>landinge page</i>), cuyas imágenes deberán cumplir las siguientes normativas.<br><br><br>

						<img src='imagenes/Diapositiva3.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>
						<img src='imagenes/Diapositiva4.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>
						<img src='imagenes/Diapositiva5.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>
						<img src='imagenes/Diapositiva6.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>
						<img src='imagenes/Diapositiva7.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section id="services" class="services">

		<div class="container">

			<div class="section-title">

				<div class="row">

					<div class="col-md-12">

						<b><font color='black' size=5>Paso No. 3:<br>COMPLETAR DATOS DEL SITIO WEB:</font></b><br>

						<br><br>Una vez cumplido con el anterior Paso No. 2, revise la bandeja de entrada o spam de su correo electrónico, recibirá las instrucciones para completar los datos del sitio web, mediante los siguientes pasos.<br><br><br>

						<img src='imagenes/Diapositiva9.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>
						<img src='imagenes/Diapositiva10.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>
						<img src='imagenes/Diapositiva11.JPG' width="<?php echo $ancho_publicidad; ?>"><br><br>

					</div>

				</div>

			</div>

		</div>

	</section>

	<?php

	}

	if ($servicio == 'tiendavirtual') {

		echo 'Información no disponible. Por favor intente más tarde.<br><br>También puede comunicarse con el departamento de Ventas al +58 4247756630, info@tuww.net';

	}

	if ($servicio == 'webhosting') {

		echo 'Información no disponible. Por favor intente más tarde.<br><br>También puede comunicarse con el departamento de Ventas al +58 4247756630, info@tuww.net';

	}

	if ($servicio == 'software') {

		echo 'Información no disponible. Por favor intente más tarde.<br><br>También puede comunicarse con el departamento de Ventas al +58 4247756630, info@tuww.net';

	}

	?>

	echo "<div align='center'>";

	include 'cinta_clientes_fijos.php';

	echo "</div><br><br><br>";

	include'pie_pagina.php';

	$pie = 1;

	include 'estilo.php';

	?>

</body>

</html>


