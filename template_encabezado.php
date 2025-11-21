<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2386237347587679"
     crossorigin="anonymous"></script>

<meta name="google-adsense-account" content="ca-pub-2386237347587679">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VJ4DC6SB8J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VJ4DC6SB8J');
</script>

<?php

	include '../../detecta_ip.php';
	include '../../detecta_so.php';
	include '../../fecha_hora.php';

	copy('../../error_log' , '../../www/' . $row33[carpeta] . '/error_log');

	$id_cliente  = $row33[id];
	$actividad   = $row33[actividad];
	$descripcion = $row33[descripcion];
	$email 	     = $row33[email];
	$telefono    = $row33[telefono];
	$celular     = $row33[celular];
	$nosotros    = $row33[nosotros];
	$mision	     = $row33[mision];
	$vision	     = $row33[vision];
	$valores     = $row33[valores];
	$objetivos   = $row33[objetivos];

	$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $row33[id_area]");

	$row331       = mysqli_fetch_array($resultado331);

	$area 	     = $row331[area];

	if (file_exists('favicon.png')) {

		$imagen_favicon = "favicon.png";

	}else if (file_exists('favicon.ico')) {

		$imagen_favicon = "favicon.ico";

	}else{

		$imagen_favicon = '../../imagenes/' . $row331[url_imagen];

	}

	$imagen_area = $row331[url_imagen];

	if ($row33[imagen] == '') {

		$imagen = '../../imagenes/imagen_usuario_vacio.png';

	}else{

		$imagen = '../../www/' . $row33[carpeta] . '/' . $row33[imagen];

	}

	if ($row33[url] == '') {

		$url = $dominio_guiaclasificada . "/www/" . $row33[carpeta];

	}else{

		$url = $row33[url];

	}

	include '../../actualiza_seo.php';

	?>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
	<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
	<meta property="og:image" content="<?php echo $imagen; ?>" />

	<link rel="icon" type="image/png" href="<?php echo $imagen_favicon; ?>"/>
  	<link href="<?php echo $imagen; ?>" rel="apple-touch-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<?php
        
	if ($row33[fecha] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET fecha='$fecha' WHERE carpeta='$row33[carpeta]'");

	}

	if ($row33[hora] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET hora='$hora' WHERE carpeta='$row33[carpeta]'");

	}

	$municipio = '';

	$resultado8881= mysqli_query($connect, "SELECT * FROM loc_ciudades where id = $row33[id_ciudad]");

	$row8881= mysqli_fetch_array($resultado8881);

	$ciudad = $row8881[ciudad];

	$resultado888 = mysqli_query($connect, "SELECT * FROM loc_municipios where id_ciudad = $row8881[id]");

	$row888 = mysqli_fetch_array($resultado888);

	$municipio = $row888[municipio];

	$resultado8882= mysqli_query($connect, "SELECT * FROM loc_estados where id = $row8881[idestado]");

	$row8882= mysqli_fetch_array($resultado8882);

	$estado = $row8882[estado];

	$resultado8883= mysqli_query($connect, "SELECT * FROM loc_paises where id = $row8882[idpais]");

	$row8883= mysqli_fetch_array($resultado8883);

	$pais = $row8883[pais];
	$cod_telefono = $row8883[cod_telefono];

	$celular = '';

	for ($i = 0; $i <= strlen($row33[celular]); $i++) {

		$letra = substr($row33[celular], $i, 1);

		if (($letra / $letra == 1) or ($letra == '0')) {

			$celular = $celular . $letra;

		}

	}

	$resultado3311 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33[actividad]");

	$row3311 = mysqli_fetch_array($resultado3311);

	?>

	<title>

		<?php

		if ($row33[siglas] <> '') {echo $row33[siglas] . " | ";}

		if ($row33[nombre] <> '') {echo $row33[nombre] . " | ";}

		if ($row33[lema] <> '') {echo $row33[lema] . " | ";}

		if ($row33[direccion] <> '') {echo $row33[direccion] . " | ";}

		if ($row33[telefono] <> '') {echo $row33[telefono] . " | ";}

		if ($row33[celular] <> '') {echo $row33[celular] . " | ";}

		if ($row33[instagram] <> '') {echo $row33[instagram] . " | ";}

		if ($url <> '') {echo $url . " | ";}

		echo $municipio . " | " . $ciudad . " | " . $estado . " | " . $pais . " | ";

		echo $ciudad . ", " . $estado . ", " . $pais;

		?>

	</title>