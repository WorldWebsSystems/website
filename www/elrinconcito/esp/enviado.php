<html>
<body>
<?php
    setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
    date_default_timezone_set('America/Caracas');

$link = mysqli_connect('localhost','fundatic_root','r21622162');
mysqli_select_db($link, 'fundatic_er');

$nombres = $_POST["nombre"];
$nacionalidad = $_POST["nacionalidad"];
$cedula = $_POST["identificacion"];
$telefonos = $_POST["telefonos"];
$email = $_POST["email"];
$residencia = $_POST["residencia"];
$fechallegada = $_POST["llegada"];
$fechasalida = $_POST["salida"];
$adultos = $_POST["adultos"];
$ninos = $_POST["ninos"];
$infoadicional = $_POST["mensaje"];

$result = mysqli_query($link, "SELECT * FROM consultasonline WHERE nombres = '$nombres' and nacionalidad = '$nacionalidad' and cedula = '$cedula' and telefonos = '$telefonos' and email = '$email' and residencia = '$residencia' and fechallegada = '$fechallegada' and fechasalida = '$fechasalida' and adultos = '$adultos' and ninos = '$ninos' and infoadicional = '$infoadicional'");

$i = mysqli_num_rows($result);

if ($i < 1) {
    $de = $_POST["nombre"] . " ";
    $tiquet = date("dmy") . date("Gis");
    $asunto = "[Pre-Reservación No. " . $tiquet . "] El Rinconcito, Posada & Cabañas - El Valle, Estado Mérida\n";
    $mensaje .= "\n";
    $mensaje .= "Pre-Reservación No.: " . $tiquet ."\n";
    $mensaje .= "Nombres: " . utf8_decode($_POST["nombre"]) ."\n";
    $mensaje .= "Nacionalidad: " . utf8_decode($_POST["nacionalidad"]) ."\n";
    $mensaje .= "Cédula de Identidad/Pasaporte: " . utf8_decode($_POST["identificacion"]) ."\n";
    $mensaje .= "Teléfonos: " . utf8_decode($_POST["telefonos"]) ."\n";
    $mensaje .= "Residencia: " . utf8_decode($_POST["residencia"]) ."\n";
    $mensaje .= "Correo electrónico: " . utf8_decode($_POST["email"]) ."\n";
    $mensaje .= "Fecha de llegada: " . utf8_decode($_POST["llegada"]) ."\n";
    $mensaje .= "Fecha de salida: " . utf8_decode($_POST["salida"]) ."\n";
    $mensaje .= "Visitantes: [Adultos: " . utf8_decode($_POST["adultos"]) . "]. [Niños: " . utf8_decode($_POST["ninos"]) ."]\n";
    $mensaje .= "Información adicional: " . utf8_decode($_POST["mensaje"]) ."\n";
    $mensaje .= "\n";
    $mensaje .= "Nota: Este correo solo es para verificación de disponibilidad de hospedaje en el período indicado; y no implica reservación alguna.\n";
    $mensaje .= "Para comprobar la disponibilidad, el turista debe esperar respuesta de nuestra administración mediante un e-mail o llamada telefónica.\n";
    $mensaje .= "Si el turista lo desea, también puede comunicarse con nosotros vía telefónica para agilizar el trámite.\n";
    $mensaje .= "El Rinconcito, Posada & Cabañas no se hace responsable de errores en los datos suministrados por el turista interesado.\n";
    $mensaje .= "\n";
    $mensaje .= "Contacto para hacer la reserva:\n";
    $mensaje .= "Dirección: Vía El Valle, sector Las Cuadras, Mérida Estado Mérida, Venezuela\n";
    $mensaje .= "Teléfonos:\n";
    $mensaje .= "Fijo: (+58) 414-7252508\n";
    $mensaje .= "Móvil: (+58) 274-2715029\n";
    $mensaje .= "E-mail: reservacioneselrinconcito@gmail.com\n";
    $mensaje .= "www.elrinconcito.com.ve\n";
    $mensaje .= "\n";
    $mensaje .= "Nota: no responda a este correo electrónico, porque no es revisado por nosotros.\n";

    $meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
    $ciudad = $meta['geoplugin_city'];
    $pais = $meta['geoplugin_countryName'];
    $mensaje .= "Su dirección IP es: {$_SERVER['REMOTE_ADDR']}, correspondiente a la ciudad de " . $ciudad . ", " . $pais . "\n";

    $emailheader = "From: Consulta en línea - " . $de . " <no-responder@elrinconcito.com.ve> \r\n";

    include '../envia_correos.php';

    include '../registra_consulta.php';

    $result = mysqli_query($link, "SELECT * FROM suscripciones WHERE email = '$email'");
    $i = mysqli_num_rows($result);

    if ($i < 1) {
	include '../registra_suscripcion.php';
    }

    echo '¡¡¡Listo!!! Su consulta a El Rinconcito, Posada & Cabañas, se ha enviado correctamente. <br>';
    echo 'Se registró la consulta como Pre-Reservación No.: ' . $tiquet . '<br>';
    echo 'Hemos enviado un correo electrónico a ' . $_POST["email"] . '.<br>';
    echo 'Si no ha visto el correo electrónico en unos minutos, compruebe su filtro de spam en un mensaje enviado desde no-responder@elrinconcito.com.ve.<br>';
    echo "Su dirección Ip es: {$_SERVER['REMOTE_ADDR']}, correspondiente a la ciudad de " . $ciudad . ", " . $pais;
}
else {
	echo "Los datos de la consulta ya fueron realizados.";
}

?>
</body>
</html>