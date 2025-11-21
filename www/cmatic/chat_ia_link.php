<?php

	$chat = $_GET[chat];

	include 'abre_bd_query_sitios.php';

	if ($chat == 1) {
		$url = 'https://www.aichatting.net/es/';
		$pagina_sitio = 'AIChatting';
	}else
	if ($chat == 2) {
		$url = 'https://wa.me/+584244078772';
		$pagina_sitio = 'AIGlobalDV';
	}

	include 'registra_historial.php';

	echo "<SCRIPT>window.location.href='".$url."';</SCRIPT>";

?>