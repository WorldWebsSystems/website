<?php

	$ruta_sitioweb =  getcwd();

	$size_ruta = strlen($ruta_sitioweb);

	$carpeta = "";

	for ($i=$size_ruta; $i>=0; $i--) {

		$letra = substr($ruta_sitioweb, $i, 1);
	
		if ($letra <> '/'){

			$carpeta = $letra . $carpeta;

		}else{

			$i = -1;

		}

	}

	include '../../abre_bd_query_sitios.php';

	$resultado33 = mysqli_query($connect, "SELECT * FROM red where carpeta = '$carpeta'");

	$row33 = mysqli_fetch_array($resultado33);

	if ($row33[status] == 0) {

		$mensaje = 'El sitio web se encuentra inactivo. Por favor contacte al administrador de servidores de sitios web al +58 4247756630 o al correo electrónico info@tuww.net';
		include '../../mensaje_alerta.php';

		echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";

	}else{

		include '../../templates/'. $row33[template] .'/template_pagina.php';

	}

?>