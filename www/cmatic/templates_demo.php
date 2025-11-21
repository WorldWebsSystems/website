<?php

	$template = $_GET[template];

	include 'abre_bd_query_sitios.php';

	$pagina_sitio = 'template: '.$template; 
	include 'registra_historial.php';

	$result99 = mysqli_query($connect, "SELECT * FROM templates where template='$template'");
	$row99 = mysqli_fetch_array($result99);
	$url = $row99[url];

	echo "<SCRIPT>window.location.href='".$url."';</SCRIPT>";

?>