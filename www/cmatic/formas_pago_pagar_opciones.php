<?php

$email 	     = $_POST[email];
$contrasena  = $_POST[contrasena];

$result1  	= mysqli_query($connect, "SELECT count(*) as validado FROM clientes where email='$email' and contrasena='$contrasena'");
$row1 	  	= mysqli_fetch_array($result1);
$validado	= $row1[validado];

if ($validado <> 0) {

	$carrito     = $_POST[carrito];
	$forma_pago  = $_POST[forma_pago];
	$total_monto = $_POST[total_monto];

	include 'valores_forma_pago.php';

	switch ($tipo) {

		case 1:

			include 'api_tarjetas.php';
        		break;

		case 2:

			include 'api_paypal.php';
        		break;

		case 3:

			include 'api_zelle.php';
        		break;

		case 4:

			include 'api_billeteras.php';
        		break;

		case 5:

			include 'api_criptomonedas.php';
        		break;

	}

}else{

	$result1  	= mysqli_query($connect, "SELECT count(*) as validado FROM clientes where email='$email'");
	$row1 	  	= mysqli_fetch_array($result1);
	$validado	= $row1[validado];

	if ($validado == 0) {

		$consulta="SELECT count(*) as ya_suscrito FROM suscripciones WHERE email = '$email'";
		$result = mysqli_query($connect, $consulta);
		$row = mysqli_fetch_array($result);
		$ya_suscrito = $row[ya_suscrito];

		if ($ya_suscrito == 0) {

			$consulta="insert into suscripciones (email,fecha,hora,ciudad,pais,ip,status) values ('$email','$fecha','$hora','$ciudad','$pais','$ip','0')";
			$resultado=mysqli_query($connect,$consulta);

			include 'correo_suscripcion.php';

			$concepto = "Suscripción al sitio web ".$email;
			$id_empresa = 0;
			$usuario = "";
			include 'graba_historial.php';

		}

		$consulta="insert into clientes (email,usuario,contrasena,fecha,hora,ciudad,pais,ip,status) values ('$email','','$contrasena','$fecha','$hora','$ciudad','$pais','$ip','0')";
		$resultado=mysqli_query($connect,$consulta);

		$mensaje = 'Usuario registrado con éxito. Por favor revise su correo electrónico para confirmar su registro.';
		include 'mensaje_alerta.php';

		$concepto = "Registro de usuario: ".$email;
		$id_empresa = 0;
		$usuario = "";
		include 'graba_historial.php';

	}else{

		$mensaje = 'La contraseña introducida no concuerda con el correo electrónico: '.$email;
		include 'mensaje_alerta.php';

		echo "<html><head></head>"."<body onload=\"javascript:history.back()\">"."</body></html>";

	}

}

?>