<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>CMATIC Servers & Hostings</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
	<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
	<meta property="og:image" content="imagenes/directorio.png" />

	<link href="style.css" rel="stylesheet" id="bootstrap-css">

	<link href="imagenes/directorio.png" rel="icon">
	<link href="imagenes/apple-touch-icon.png" rel="apple-touch-icon">

	<?php

	include 'estilo.php';
	include 'template_chat_tawkto.php';

	include 'abre_bd_query_sitios.php';

	?>

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>

<body style="background-color:#F0EFEF;">

	<?php

include 'encabezado.php';

include 'fecha_hora.php';
include 'detecta_ip.php';

$servicio 		= $_POST['servicio'];
$plan	 		= $_POST['plan'];

$nombre 		= $_POST['nombre'];
$siglas 		= $_POST['siglas'];
$descripcion 		= $_POST['descripcion'];
$descripcion_amplia 	= $_POST['descripcion_amplia'];
$nosotros	 	= '';
$mision		 	= '';
$vision		 	= '';
$valores	 	= '';
$objetivos	 	= '';
$direccion 		= $_POST['direccion'];
$id_ciudad 		= $_POST['id_ciudad'];
$id_municipio 		= $_POST['municipio'];
$id_estado 		= $_POST['estado'];
$id_pais 		= $_POST['pais'];
$telefono 		= $_POST['telefono'];
$celular 		= $_POST['celular'];
$email 			= $_POST['email'];
$instagram 		= $_POST['instagram'];
$facebook 		= $_POST['facebook'];
$x	 		= $_POST['x'];
$tiktok 		= $_POST['tiktok'];
$linkedin 		= $_POST['linkedin'];
$youtube 		= $_POST['youtube'];
$registrolegal 		= '';
$registrofiscal		= '';
$declaracionhacienda	= '';
$tienda 		= '0';

$registro_aprobado = 1;

include 'revisa_registro.php';

$resultado55 = mysqli_query($connect, "SELECT count(*) as count FROM red_registro where email = '$email'");

$row55 = mysqli_fetch_array($resultado55);

$count = $row55[count];

if (($registro_aprobado == 1) and ($count == 0)) {

	include 'abre_bd_query_sitios.php';

	$consulta = "insert into red_registro (

		servicio,
		plan,
		siglas,
		nombre,
		descripcion,
		descripcion_amplia,
		direccion,
		id_ciudad,
		id_municipio,
		id_estado,
		id_pais,
		telefono,
		celular,
		email,
		instagram,
		facebook,
		x,
		tiktok,
		linkedin,
		youtube,
		registrolegal,
		registrofiscal,
		declaracionhacienda,
		tienda,
		fecha,
		hora,
		ip,
		ciudad,
		pais,
		confirmado,
		status

	) values (

		'$servicio',
		'$plan',
		'$siglas',
		'$nombre',
		'$descripcion',
		'$descripcion_amplia',
		'$direccion',
		'$id_ciudad',
		'$id_municipio',
		'$id_estado',
		'$id_pais',
		'$telefono',
		'$celular',
		'$email',
		'$instagram',
		'$facebook',
		'$x',
		'$tiktok',
		'$linkedin',
		'$youtube',
		'$registrolegal',
		'$registrofiscal',
		'$declaracionhacienda',
		'$tienda',
		'$fecha',
		'$hora',
		'$ip',
		'$ciudad',
		'$pais',
		'0',
		'0'
	)";

	$resultado = mysqli_query($connect,$consulta);

	if ($resultado) {

		$resultado55 = mysqli_query($connect, "SELECT max(id) as id FROM red_registro");

		$row55 = mysqli_fetch_array($resultado55);

		$id = $row55[id];

		include 'correo_registro_usuario.php';

		$id_red = 103;

		$concepto = "Solicitud de Registro de Usuario " . $email . " en tuww.net";
		include 'graba_historial.php';

		$mensaje = 'Usuario registrado con éxito. Por favor revise la bandeja de entrada o spam de su correo electrónico, y confirme el correo electrónico.';
		include 'mensaje_alerta.php';

		$url = 'https://tuww.net';
		echo "<script>window.location='$url';</script>";
	
	}else{

		$mensaje = 'Error al momento de procesar el registro. Por favor repita nuevamente la solicitud de registro de usuario.';
		include 'mensaje_alerta.php';

		echo "<html><head></head>"."<body onload=\"javascript:history.back()\">"."</body></html>";

	}

}else{

	if ($registro_aprobado == 0) {

		$mensaje = 'Al parecer ha ingresado datos errados. Favor introduzca los datos de manera correcta. El registro del usuario ha sido rechazado.';
		include 'mensaje_alerta.php';

	}

	if ($count > 0) {

		$mensaje = 'El correo electrónico ya se encuentra registrado en nuestro sistema. El registro del usuario ha sido rechazado.';
		include 'mensaje_alerta.php';

	}

	echo "<html><head></head>"."<body onload=\"javascript:history.back()\">"."</body></html>";

}

$pie = 1;

include 'estilo.php';

?>


</body>

</html>


