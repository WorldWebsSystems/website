<?php

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

$nombres   = $_POST['names'];
$email     = $_POST['email'];
$empresa     = $_POST['empresa'];
$telefonos = $_POST['telefonos'];
$direccion = $_POST['direccion'];
$aasunto   = $_POST['asunto'];
$msg	   = $_POST['mensaje'];
$carpeta   = $_POST['carpeta'];

include 'abre_bd_query_sitios.php';
include 'detecta_ip.php';
include 'fecha_hora.php';

$resultado = mysqli_query($connect, "SELECT * FROM red where carpeta = '$carpeta'");
$row = mysqli_fetch_array($resultado);
$id_carpeta = $row[id];

$asunto = "Consulta a " . $row[siglas] . " | " . $row[nombre];
$mensaje = "Estimado(a) señor(a):\n\n";
$mensaje .= "Su mensaje ha sido enviado exitosamente. Próximamente será contactado por un representante de la empresa/persona consultada, y recibirá atención a los requerimientos expuestos mediante el siguiente mensaje:\n\n";
$mensaje .= "Remitente: " . $nombres."\n";
$mensaje .= "Empresa: " . $empresa."\n";
$mensaje .= "Correo electrónico: " . $email."\n";
$mensaje .= "Teléfonos: " . $telefonos."\n";
$mensaje .= "Dirección: " . $direccion."\n";
$mensaje .= "Asunto: " . $aasunto."\n\n";
$mensaje .= "Mensaje:\n" . $msg."\n\n\n";
$mensaje .= $row[siglas] . " | " . $row[nombre] . "\n";
if ($row[telefonos] <> "") {
	$mensaje .= $row[telefonos] . "\n";
}
if ($row[celular] <> "") {
	$mensaje .= "WhatsApp: " . $row[celular] . "\n";
}
$mensaje .= $row[email] . "\n";
if ($row[instagram] <> "") {
	$mensaje .= "Instagram: " . $row[instagram] . "\n";
}

$mensaje .= "\n\n";

$mensaje .= "Su dirección Ip: ".$ip."\n";
$mensaje .= "Su localización: ".$ciudad.", ".$pais."\n";

$emailheader = "From: Consulta On Line [tuww.net/www/". $carpeta. "] <noreply@tuww.net> \r\n";

//mail("richardrodr@gmail.com", $asunto, $mensaje, $emailheader);
mail("info@tuww.net", $asunto, $mensaje, $emailheader);
mail($email, $asunto, $mensaje, $emailheader);

$consulta = "insert into consultas (

	nombres,
	empresa,
	direccion,
	email,
	telefonos,
	mensaje,
	id_red,
	fecha,
	hora,
	ip,
	ciudad,
	pais

) values (

	'$nombres',
	'$empresa',
	'$direccion',
	'$email',
	'$telefonos',
	'$msg',
	'$id_carpeta',
	'$fecha',
	'$hora',
	'$ip',
	'$ciudad',
	'$pais'

)";

$resultado = mysqli_query($connect,$consulta);

if ($carpeta == 'guiaclasificada') {
$concepto = "Consulta enviada al sitio web tuww.net/";
	$url = 'https://tuww.net/';
	include 'graba_historial.php';
}else{
	$concepto = "Consulta enviada al sitio web tuww.net/www/" . $carpeta;
	$url = 'https://tuww.net/www/' . $carpeta;
	include '../../graba_historial.php';
}

$mensaje = 'Mensaje enviado.';
include 'mensaje_alerta.php';

echo "<script>window.location='$url';</script>";

//echo "<html><head></head>"."<body onload=\"javascript:history.back()\">"."</body></html>";

?>