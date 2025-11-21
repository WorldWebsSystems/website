<?php

	$id = $_GET[id];

	include 'abre_bd_query_sitios.php';

	$resultado331 = mysqli_query($connect, "UPDATE red_registro SET status=1 WHERE id = '$id'");

	$mensaje = 'Registro No. ' . $id . ' aprobado por el Administrador del Sistema.';
	include 'mensaje_alerta.php';

?>