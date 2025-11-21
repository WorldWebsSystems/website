<?php

	include 'detecta_so.php';

	$moneda     	= $_GET[moneda];
	$operar     	= $_GET[operar];
	$key	    	= $_GET[key];
	$inicio	    	= $_GET[inicio];
	$tolerancia 	= $_GET[tolerancia];
	$dias_historico = $_GET[dias_historico];
	$anticipacion 	= $_GET[anticipacion];
	$exceso 	= $_GET[exceso];
	$ip	 	= $_GET[ip];

	if ($key == '507982') {

		$autoriza_grabar = 1;

	}

	$autoriza_grabar = 1; //permiso para grabar a todos los usuarios

	include 'calcula_criptomoneda.php';

?>