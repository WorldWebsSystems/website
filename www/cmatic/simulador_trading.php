<?php

	$email = $_POST[email];
	$nombres = $_POST[nombres];

	include 'abre_bd_query_sitios.php';

	$pagina_sitio = 'Sistema Simulador de Trading'; 
	include 'registra_historial.php';

	$url = 'https://api.whatsapp.com/send?phone=584247756630&text=Estimados señores WorldWebs Systems c.a., tengo interés por conocer sobre el simulador de trading ofrecido por ustedes en su sitio web. Agradezco suministrarme toda la información correspondiente. '.'|%20'.$nombres.'|%20'.$email;

	echo "<SCRIPT>window.location.href='".$url."';</SCRIPT>";

?>