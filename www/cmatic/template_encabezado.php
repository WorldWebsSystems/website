<?php

	$cod_aut  = $_POST["cod_aut"];

	$ruta_sitioweb =  getcwd();

	$size_ruta = strlen($ruta_sitioweb);

	$carpeta = "";

	for ($i=$size_ruta; $i>=0; $i--) {

		$letra = substr($ruta_sitioweb, $i, 1);
	
		if ($letra <> '/'){

			$carpeta = $letra . $carpeta;

		}else{

			$i = -1;

		}

	}

	$mensaje = $carpeta;
	include '../../mensaje_alerta.php';

	include 'abre_bd_query_sitios.php';

	$resultado   = mysqli_query($connect, "SELECT * FROM corporativo where carpeta= '$carpeta'");
	$row         = mysqli_fetch_array($resultado);
	$id 	     = $row[id];

	$id_empresa  = $row[id];
	$carpeta     = $row[carpeta];
	$ccarpeta    = $carpeta;

	include 'valores_cliente.php';

	if ($cod_aut <> '') {

		include 'valida_supervisor.php';

	}

	include 'valores_variables_generales.php';

	?>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php echo $descripcion_cliente." | ".$lema; ?></title>
	<meta name="google-site-verification" content="bvLyy0YX06uOnySAu3A0hqHUXzzwFYm7HJ-I1Q9iAyc" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="<?php echo $meta_descripcion; ?>">
	<meta name=keywords content="<?php echo $meta_keywords; ?>">
	<meta property="og:image" content="imagenes/clients/<?php echo $carpeta; ?>/logos/<?php echo $url_imagen; ?>" />

	<link rel="icon" type="image/png" href="imagenes/clients/<?php echo $carpeta; ?>/logos/<?php echo $favicon; ?>"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
	<link href="css/style.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/chat.js"></script>