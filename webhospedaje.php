<!DOCTYPE html>
<html lang="es">

<head>

</head>

<body>

	<?php

	include 'abre_bd_query_sitios.php';
	include 'detecta_ip.php';
	include 'fecha_hora.php';

	$carpeta=$_GET['menu'];

	$resultado55 = mysqli_query($connect, "SELECT * FROM red where carpeta='$carpeta'");

	$row55 	     = mysqli_fetch_array($resultado55);

	$id_red = $row55[id];

	$concepto = "Visita a servicio externo de WebHospedaje.com";
	include 'graba_historial.php';

	$url = 'https://webhospedaje.com/clientes/aff.php?aff=135';
	echo "<script>window.location='$url';</script>";
	?>

</body>

</html>