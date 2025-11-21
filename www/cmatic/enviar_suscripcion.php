<?php

	$email = $_GET['email'];

	include 'abre_bd_query_sitios.php';

	$consulta="Update suscripciones Set informado='1'
	Where email='$email'";

	$resultado=mysqli_query($connect,$consulta);

	include 'correo_suscripcion.php';

	echo "<SCRIPT>window.location='suscritos.php';</SCRIPT>";

?>