<?php

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

include 'detecta_ip.php';

$names	   = $_POST['name'];
$email     = $_POST['email'];
$telefonos = $_POST['telefonos'];
$eempresa  = $_POST['empresa'];
$aasunto   = $_POST['subject'];
$msg	   = $_POST['message'];

$findme   = ' ';
$pos = strpos($mystring, $msg);

if ($pos !== false) {

	$asunto = "Consulta a WorldWebs Systems c.a.";
	$mensaje = "Estimado(a) señor(a):\n\n";
	$mensaje .= "Su mensaje ha sido enviado:\n\n";
	$mensaje .= $names."\n";
	$mensaje .= $email."\n";
	$mensaje .= $telefonos."\n";
	$mensaje .= $eempresa."\n";
	$mensaje .= $aasunto."\n";
	$mensaje .= $msg."\n\n";
	$mensaje .= "WorldWebs Systems c.a.\n";
	$mensaje .= "(+58) 274 2714140 - (+58) 424 7756630\n";
	$mensaje .= "info@worldwebs.net\n";
	$mensaje .= "Facebook: worldwebssistems\n";
	$mensaje .= "Instagram: worldwebssistems\n";
	$mensaje .= "WhatsApp: https://wa.me/+584247756630\n\n\n";

    	$mensaje .= "Nota: no responda a este correo electrónico, porque no es revisado por nosotros.\n";
    	$mensaje .= "Su dirección Ip: ".$ip."\n";
    	$mensaje .= "Su localización: ".$ciudad.", ".$pais."\n";

    	$emailheader = "From: WorldWebs Systems c.a. <no-responder@worldwebs.net> \r\n";

	$mensaje = utf8_encode($mensaje);

	mail("info@worldwebs.net", $asunto, $mensaje, $emailheader);
	mail($email, $asunto, $mensaje, $emailheader);

}

echo "Mensaje enviado...";

?>
