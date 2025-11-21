<?php

    setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
    date_default_timezone_set('America/Caracas');

	include 'abre_bd_query_sitios.php';

	$email 		= $_POST[email];
	$id_cliente 	= $_POST[id_cliente];
	$carpeta 	= $_POST[carpeta];

	$resultado33 = mysqli_query($connect, "SELECT count(*) as cantidad FROM red_suscripciones where email = '$email' and id_cliente = $id_cliente");

	$row33 = mysqli_fetch_array($resultado33);

	if ($row33[cantidad] == 0) {

		$resultado331 = mysqli_query($connect, "SELECT * FROM red where carpeta = '$carpeta'");

		$row331 = mysqli_fetch_array($resultado331);

		include 'detecta_ip.php';

		include 'fecha_hora.php';

		$consulta="insert into red_suscripciones (
			email,
			id_cliente,
			fecha,
			hora,
			ciudad,
			pais,
			ip,
			status,
			informado
		) values (
			'$email',
			'$id_cliente',
			'$fecha',
			'$hora',
			'$ciudad',
			'$pais',
			'$ip',
			'1',
			'0'
		)";

		$resultado=mysqli_query($connect,$consulta);

		$asunto = "Suscripción al sitio web\n";
		$mensaje = "Se ha recibido una suscripción al sitio web, por parte de " . $email ."\n";
   		$emailheader = "From: Suscripcion Sitio Web - tuww.net/www/" . $carpeta . " <no-responderh@tuww.net> \r\n";
		//mail($row331[email], $asunto, $mensaje, $emailheader);
		mail($email, $asunto, $mensaje, $emailheader);

		$concepto = "Suscripcion registrada a tuww.net/" . $carpeta;
		include 'graba_historial.php';

		$mensaje = 'La suscripción del correo electrónico ' . $email . ', ha sido registrada con éxito.';
		include 'mensaje_alerta.php';

		if ($carpeta == 'guiaclasificada') {

			$url = 'https://tuww.net/' . '?menu=suscripcion_exitosa';

		}else{

			$url = 'https://tuww.net/www/' . $carpeta . '?menu=suscripcion_exitosa';

		}
		echo "<script>window.location='$url';</script>";

	}else{

		$mensaje = 'Imposible registrar el correo electrónico ' . $email . ', debido a que ya se encuentra suscrito en nuestros registros.';
		include 'mensaje_alerta.php';

		echo "<html><head></head>"."<body onload=\"javascript:history.back()\">"."</body></html>";

	}

?>