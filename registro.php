<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$servicio = $_GET['servicio'];
	$plan  	  = $_GET['plan'];

	if ($servicio == 'webhosting') {

		$procedimiento = 'CREAR UN WEBHOSTING';

	}

	if ($servicio == 'sitioweb') {

		$procedimiento = 'CREAR UN SITIO WEB';

	}

	if ($servicio == 'software') {

		$procedimiento = 'DESARROLLAR <i>SOFTWARE</i>';

	}

	if ($servicio == 'agenteia') {

		$procedimiento = 'CREAR UN AGENTE IA';

	}

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

	<font size=4 color='black'>

	<?php

	if ($servicio == '') {

		include 'registro_0.php';

	}

	if ($servicio <> '') {

		include 'registro_1.php';

	}

	if ($servicio == 'sitioweb') {

		include 'registro_2.php';

	}

	if ($servicio == 'agenteia') {

		include 'registro_3.php';

	}

	if ($servicio == 'webhosting') {

		include 'registro_4.php';

	}

	if ($servicio == 'software') {

		include 'registro_5.php';

	}

	if ($servicio <> '') {

		include 'registro_6.php';

	}

	echo "<div align='center'>";

	echo "</div><br><br><br>";

	include'pie_pagina.php';

	$pie = 1;

	include 'estilo.php';

	?>

</body>

</html>


