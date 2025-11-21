<?php

	$id = $_GET[id];
	$email = $_GET[email];

	include 'abre_bd_query_sitios.php';

	$resultado331 = mysqli_query($connect, "UPDATE red_registro SET confirmado=1 WHERE id = '$id' and email = '$email'");

	$mensaje = 'Correo electrónico ' . $email . ' confirmado por el usuario.';
	include 'mensaje_alerta.php';

?>