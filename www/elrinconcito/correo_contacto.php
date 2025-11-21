<?php

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

include '../detecta_ip.php';

$names	   = $_POST['names'];
$email     = $_POST['email'];
$telefonos = $_POST['telefonos'];
$aasunto   = $_POST['asunto'];
$msg	   = $_POST['mensaje'];

if ($idioma == 'esp') {

	$asunto = "Consulta a Stevie Wonder Land - Posada Boutique, El Yaque, Isla de Margarita, Venezuela";
	$mensaje = "Estimado(a) señor(a):\n\n";
	$mensaje .= "Su mensaje ha sido enviado...\n\n";
	$mensaje .= $names."\n\n";
	$mensaje .= $email."\n\n";
	$mensaje .= $telefonos."\n\n";
	$mensaje .= $aasunto."\n\n";
	$mensaje .= $msg."\n\n";
	$mensaje .= "Stevie Wonder Land - Posada Boutique\n";
	$mensaje .= "(+58) 424 8740741, (+58) 414 7905050, (+58) 414 3291300\n";
	$mensaje .= "stevie.wonder.land@hotmail.de\n";
	$mensaje .= "Facebook: posadasteviewonderland\n";
	$mensaje .= "Instagram: posadasteviewonderland\n";
	$mensaje .= "WhatsApp: https://wa.me/+584248740741\n\n\n";

    	$mensaje .= "Nota: no responda a este correo electrónico, porque no es revisado por nosotros.\n";
    	$mensaje .= "Su dirección Ip: ".$ip."\n";
    	$mensaje .= "Su localización: ".$ciudad.", ".$pais."\n";

    	$emailheader = "From: Stevie Wonder Land - Posada Boutique <no-responder@steviewonderland.com> \r\n";

}

if ($idioma == 'eng') {

	$asunto = "Ask Stevie Wonder Land - Boutique Inn, El Yaque, Margarita Island, Venezuela";
	$mensaje = "Dear sir:\n\n";
	$mensaje .= "your message has been sent...\n\n";
	$mensaje .= $names."\n\n";
	$mensaje .= $email."\n\n";
	$mensaje .= $telefonos."\n\n";
	$mensaje .= $aasunto."\n\n";
	$mensaje .= $msg."\n\n";
	$mensaje .= "Stevie Wonder Land - Boutique Inn\n";
	$mensaje .= "(+58) 424 8740741, (+58) 414 7905050, (+58) 414 3291300\n";
	$mensaje .= "stevie.wonder.land@hotmail.de\n";
	$mensaje .= "Facebook: posadasteviewonderland\n";
	$mensaje .= "Instagram: posadasteviewonderland\n";
	$mensaje .= "WhatsApp: https://wa.me/+584248740741\n\n\n";

    	$mensaje .= "Note: Please do not reply to this email, as it is not reviewed by us..\n";
    	$mensaje .= "Your IP address: ".$ip."\n";
    	$mensaje .= "Your location: ".$ciudad.", ".$pais."\n";

    	$emailheader = "From: Stevie Wonder Land - Boutique Inn <no-reply@steviewonderland.com> \r\n";

}

if ($idioma == 'deu') {

	$asunto = "Fragen Sie Stevie Wonder Land - Boutique Inn, El Yaque, Insel Margarita, Venezuela";
	$mensaje = "Sehr geehrter Herr / Frau:\n\n";
	$mensaje .= "Ihre Nachricht wurde gesendet...\n\n";
	$mensaje .= $names."\n\n";
	$mensaje .= $email."\n\n";
	$mensaje .= $telefonos."\n\n";
	$mensaje .= $aasunto."\n\n";
	$mensaje .= $msg."\n\n";
	$mensaje .= "Stevie Wonder Land - Boutique Inn\n";
	$mensaje .= "(+58) 424 8740741, (+58) 414 7905050, (+58) 414 3291300\n";
	$mensaje .= "stevie.wonder.land@hotmail.de\n";
	$mensaje .= "Facebook: posadasteviewonderland\n";
	$mensaje .= "Instagram: posadasteviewonderland\n";
	$mensaje .= "WhatsApp: https://wa.me/+584248740741\n\n\n";

    	$mensaje .= "Hinweis: Bitte antworten Sie nicht auf diese E-Mail, da sie nicht von uns überprüft wird..\n";
    	$mensaje .= "Ihre IP-Adresse: ".$ip."\n";
    	$mensaje .= "Ihr Standort: ".$ciudad.", ".$pais."\n";

    	$emailheader = "From: Stevie Wonder Land - Boutique Inn <antworte-nicht@steviewonderland.com> \r\n";

}

$mensaje = utf8_encode($mensaje);

//mail("info@steviewonderland.com", $asunto, $mensaje, $emailheader);
//mail($email, $asunto, $mensaje, $emailheader);

$url = 'index.php';
echo "<script>window.location='https://api.whatsapp.com/send?phone=584248740741&text=".$names."|%20".$email."|%20".$telefonos."|%20".$aasunto."|%20".$msg."';</script>";

?>