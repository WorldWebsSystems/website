<?php

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

include '../detecta_ip.php';

$names	   = $_POST['names'];
$email     = $_POST['email'];
$telefonos = $_POST['telefonos'];
$aasunto   = $_POST['asunto'];
$msg	   = $_POST['mensaje'];

	$asunto = "Consulta a El Rinconcito, Posada & Cabañas, El Valle, Mérida, Mérida, Venezuela";
	$mensaje = "Estimado(a) señor(a):\n\n";
	$mensaje .= "Su mensaje ha sido enviado...\n\n";
	$mensaje .= $names."\n\n";
	$mensaje .= $email."\n\n";
	$mensaje .= $telefonos."\n\n";
	$mensaje .= $aasunto."\n\n";
	$mensaje .= $msg."\n\n";
	$mensaje .= "El Rinconcito, Posada & Cabañas\n";
	$mensaje .= "(+58) 414 7252508, (+58) 274 2715029\n";
	$mensaje .= "reservacioneselrinconcito@gmail.com\n";
	$mensaje .= "Instagram: elrinconcito_merida\n";
	$mensaje .= "WhatsApp: https://wa.me/+5804147252508\n\n\n";

    	$mensaje .= "Su dirección Ip: ".$ip."\n";
    	$mensaje .= "Su localización: ".$ciudad.", ".$pais."\n";

    	$emailheader = "From: El Rinconcito, Posada - Cabañas <elrinconcito@tuww.net> \r\n";

$mensaje = utf8_encode($mensaje);

mail("elrinconcito@tuww.net", $asunto, $mensaje, $emailheader);
mail($email, $asunto, $mensaje, $emailheader);

$mensaje = 'Mensaje enviado.\nAdicionalmente, le sugerimos contactarnos a nuestras otras formas de contacto indicados en este sitio web.';
include 'mensaje_alerta.php';

echo "<script>window.location='https://api.whatsapp.com/send?phone=584147252508&text="."Hola, me llamo ".$names.",%20mí correo electrónico es%20".$email."%20y mis teléfonos son%20".$telefonos."%20el motivo de mi mensaje es por%20".$aasunto.",%20y deseo exponerles lo siguiente:%20".$msg.".%20Espero pronta respuesta. Gracias"."';</script>";

?>