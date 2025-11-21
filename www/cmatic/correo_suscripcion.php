<!DOCTYPE html>
<html lang='es'>

<head>

	<meta charset="utf-8">

</head>

<body>

<?php

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

$informacion  = $_GET[informacion];
$verificacion = $_GET[verificacion];

if (($informacion == '') and ($verificacion == '')) {

	$asunto = "Suscripción al sitio web de WorldWebs Systems c.a. | worldwebs.net";
	$mensaje = "Estimado(a) señor(a) ". $email .":\n\n";
	$mensaje .= "La suscripción del correo electrónico al sitio web www.worldwebs.net ha sido efectuada con éxito, y usted autoriza a WorldWebs para hacerle llegar cualquier información correspondiente a nuestros servicios, una vez que usted verifique la autenticidad de este correo electrónico, haciendo click en el siguiente link: https://worldwebs.net/correo_suscripcion.php?email=".$email."&verificacion=1.\n\n";
	$mensaje .= "Si no desea seguir recibiendo información sobre nuestros servicios, haga caso omiso al presente correo, e inmediatamente será dado de baja de nuestras bases de datos.\n\n";
	$mensaje .= "WORLDWEBS ®, es un sistema de información y una marca comercial registrada mediante el fondo de comercio WorldWebs Systems c.a., dedicada a la Ingeniería de Software, mediante el diseño y desarrollo de todo tipo de sistemas de información para promover la mayor productividad de las empresas, cuyos sistemas se ponen a disposición de nuestros clientes, mediante la venta del código fuente o bajo la modalidad de alquiler (arrendamiento), a través de acceso on line; todo lo cual permita a nuestros clientes y a sus propios clientes, acceder a tales sistemas de manera rápida, segura, económica y confiable.\n\n";
	$mensaje .= "Además, como parte complementaria de los sistemas de información, WORLDWEBS ® cuenta con un DataCenter conformado por servidores privados virtuales (VPS), así como servidores de hospedaje para la publicación de sitios web (WebHosting), también disponibles para nuestros clientes; incluyendo el desarrollo de tales sitios web, mediante modernas plantillas o templates, elegantes y funcionales, incluyendo en sus desarrollos todo los que corresponden a sus partes, tanto el FrontEnd como el BackEnd.\n\n";
	$mensaje .= "Si desea información sobre nuestros servicios, seleccione el link del servicio que sea de su interés, y prontamente, un ejecutivo de ventas de nuestra empresa, le contactará para darle toda la información sobre:\n\n";
	$mensaje .= "- Ingeniería de Software: https://worldwebs.net/correo_suscripcion.php?email=".$email."&informacion=6\n";
	$mensaje .= "- Contratación de WebHosting: https://worldwebs.net/correo_suscripcion.php?email=".$email."&informacion=3\n";
	$mensaje .= "- Elaboración de WebSites: https://worldwebs.net/correo_suscripcion.php?email=".$email."&informacion=2\n";
	$mensaje .= "- Alquiler de Servidor Privado Viurtual - VPS: https://worldwebs.net/correo_suscripcion.php?email=".$email."&informacion=1\n\n";
	$mensaje .= "WORLDWEBS ®, agradece de antemano, el interés que pueda prestar al presente correo, y le invitamos a realizar cualquier pregunta, sin compromiso alguno, y de antemano, les deseamos el mejor de los éxitos, para usted, su negocio, o empresa.\n\n";
	$mensaje .= "Ing. Richard Rodríguez Salazar\n";
	$mensaje .= "CEO de WorldWebs Systems c.a.®\n";
	$mensaje .= "R.I.F.: J-40104715-7\n";
	$mensaje .= "Corporación CMATIC de Venezuela ®\n";
	$mensaje .= "R.I.F.: V-11360777-3\n";
	$mensaje .= "+58 424 7756630 - 274 2714140\n";
	$mensaje .= "info@worldwebs.net\n";
	$mensaje .= "Facebook: worldwebssystems\n";
	$mensaje .= "Twitter: worldwebsnet\n";
	$mensaje .= "Instagram: worldwebssystems\n\n\n";

	include 'correo_pie.php';

	$mensaje = utf8_encode($mensaje);

	mail("info@worldwebs.net", $asunto, $mensaje, $emailheader);
	mail($email, $asunto, $mensaje, $emailheader);

}else{

	$eemail = $_GET[email];

	include 'detecta_ip.php';
	include 'abre_bd_query_sitios.php';

	if ($verificacion == '') {

		$result = mysqli_query($connect, "SELECT * FROM suscripciones where email='$eemail'");
		$row 	= mysqli_fetch_array($result);

		$vps 	    = $row[vps];
		$webhosting = $row[webhosting];
		$websites   = $row[websites];
		$ingenieria = $row[ingenieria];

		switch ($informacion) {

			case "1":
				$informacion = 'Servidor Privado Virtual - VPS';
				$vps = 1;
				break;
			case "2":
				$informacion = 'Creación y publicación de Sitios Web - WebSites';
				$websites = 1;
				break;
			case "3":
				$informacion = 'Alojamiento de Sitios Web - WebHosting';
				$webhosting = 1;
				break;
			case "6":
				$informacion = 'Desarrollo e Ingeniería de Software';
				$ingenieria = 1;
				break;

		}

		$asunto = "Información sobre ".$informacion.": ".$eemail;
		$mensaje = $eemail ." ha solicitado información sobre ".$informacion.".\n\n";

		$mmensaje = "Solicitud de información realizada por ".$eemail." enviada con éxito.";

		echo ("
		<script language='javascript'>
			alert('".$mmensaje."');
		</script>
		");


	}else{

		$asunto = "Verificación de correo electrónico: ".$eemail;
		$mensaje = "El correo electrónico ".$eemail ." ha sido verificado con éxito.\n\n";

		$mmensaje = "Verificación de correo electrónico ".$eemail." realizada con éxito.";
		echo ("
		<script language='javascript'>
			alert('".$mmensaje."');
		</script>
		");

	}

	$consulta="Update suscripciones Set ingenieria='$ingenieria', webhosting='$webhosting', websites='$websites', vps='$vps', status = '1'
	Where email='$eemail'";

	$resultado=mysqli_query($connect,$consulta);

	include 'correo_pie.php';

	$mensaje = utf8_encode($mensaje);

	mail("info@worldwebs.net", $asunto, $mensaje, $emailheader);
	mail($eemail, $asunto, $mensaje, $emailheader);

	echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";


}

?>

</body>

</html>