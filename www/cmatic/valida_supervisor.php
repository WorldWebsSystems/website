<?php

	if ($cod_aut == $contrasena) {
		$supervisor = 1;
		$mensaje = 'Modo supervisor activado.';
		include 'mensaje_alerta.php';
	}else{
		$supervisor = 0;
		$mensaje = 'Acceso denegado.';
		include 'mensaje_alerta.php';
	}

?>