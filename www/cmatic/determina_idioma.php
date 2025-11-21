<?php

	$idioma   = $_GET["idioma"];

	if (($idioma == 'esp') or ($idioma == '')) {

		$idioma   = 1; // Idioma español

	}else{

		//$idioma   = 4; // Idioma inglés
		$idioma   = 1; // Idioma español
		$mensaje = 'Sitio web en el idioma seleccionado no disponible. Intente más tarde.';
		include 'mensaje_alerta.php';

	}

?>