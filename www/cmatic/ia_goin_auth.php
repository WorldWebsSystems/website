<?php

	setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
	date_default_timezone_set('America/Caracas');

	$url = $_POST[url];
	$email_user = $_POST[email];
	$chat_ia = $_POST[chat_ia];

	include 'abre_bd_query_sitios.php';

	include 'registra_historial.php';

	include 'detecta_ip.php';

	$asunto = "Chat de " . $chat_ia . " accedido";

	$mensaje_cabecera = "Chat de Inteligencia Artificial accedido por " . $email_user .":\n\n";
	$mensaje_cabecera .= $chat_ia . "\n\n";
	$mensaje_cabecera .= "Procedencia:\n";
	$mensaje_cabecera .= "Ip: " . $ip . "\n";
	$mensaje_cabecera .= "Ciudad: " . $ciudad . "\n";
	$mensaje_cabecera .= "País: " . $pais . "\n\n";

	$mensaje_correo = $mensaje_cabecera . $mensaje_correo;

	$emailheader = "From: WorldWebs.net | Inteligencia Artificial (IA)<no-reply@worldwebs.net> \r\n";

	mail('info@worldwebs.net', $asunto, $mensaje_correo, $emailheader);
	mail($email_user, $asunto, $mensaje_correo, $emailheader);

	echo "<SCRIPT>window.location.href='".$url."';</SCRIPT>";

?>