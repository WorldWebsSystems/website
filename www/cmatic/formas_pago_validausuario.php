<!DOCTYPE html>
<html lang="es">

<head>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="popup.css">

</head>

<body>

	<font size=3>

	<div class="contenedor">
		<article>
			<font size=1><button id="btn-abrir-popup" class="btn-abrir-popup" hidden />Comprar</button></font>
			<label id='comprar_off' name='comprar_off'><img src='imagenes/comprar_off.png'></label>
		</article>

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<h2><b>Validación de usuario:</b></h2>
				<br><br>

				<form id="formulario" action="carrito_compras.php?orden=<?php echo $orden; ?>" method="post">

					<label><input id="email" name="email" type='email' style='text-align:left;' size="25" placeholder="Correo electrónico" required /></label><br>
					<label><input id="contrasena" name="contrasena" type='password' style='text-align:left;' size="25" placeholder="Contraseña" required /></label><br>
					<input id="id_tarifa" name="id_tarifa" type='text' hidden />
					<input id="forma_pago" name="forma_pago" type='text' hidden />
					<input id="total_monto" name="total_monto" type='text' hidden />
					<br>
					<?php include 'captcha.php'; ?><br>

				<form>

				<form action="#">
					<label id='aceptar_off' name='aceptar_off'><img src='imagenes/aceptar_off.png' /></label>
					<input id="boton_s" name="boton_s" class="btn-submit" type="submit" value='Aceptar' hidden />
					&nbsp;&nbsp;&nbsp;
					<a href="#" id="btn-cerrar-popup" name="btn-cerrar-popup" ><img src='imagenes/cancelar_on.png'></a>
				</form>
			</div>
		</div>
	</div>

	<script src="popup.js"></script>

</body>

</html>