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

<style>

.html,body{
     /* Para que funcione correctamente en Smartphones y Tablets */
     height:100vh;
}
body {
     /* Ruta relativa o completa a la imagen */
     background-image: url(imagenes/banner.jpg);
     /* Centramos el fondo horizontal y verticalmente */
     background-position: center center;
     /* El fonde no se repite */
     background-repeat: no-repeat;
     /* Fijamos la imagen a la ventana para que no supere el alto de la ventana */
     background-attachment: fixed;
     /* El fonde se re-escala automáticamente */
     background-size: cover;
     /* Color de fondo si la imagen no se encuentra o mientras se está cargando */
     background-color: #FFF;
     /* Fuente para el texto */
     text-align: center;
     color: #000;
     font-family: "Times New Roman", Times, serif;
}

.imgRedonda {
    width:200px;
    height:200px;
    border-radius:100px;
}

</style> 

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<?php

	$pagina_inicio = 0;

	$tema 	   = $_GET[tema];
	$id   	   = $_GET[id];
	$secciones = $_GET[secciones];
	$actividad = $_GET[actividad];
	$pais 	   = $_GET[pais];

	include 'abre_bd_query_sitios.php';

	if ($pais == '') {

		include 'detecta_ip.php';

	}

	include 'detecta_so.php';
	include 'fecha_hora.php';
	//include 'template_chat_tawkto.php';
	include 'estilo.php';

	$resultado55 = mysqli_query($connect, "SELECT * FROM loc_paises where pais='$pais'");

	$row55 	     = mysqli_fetch_array($resultado55);

	$cod_pais    = $row55[id];

	$cantidad_sitiosweb = 0;

	$resultadositios = mysqli_query($connect, "SELECT count(*) as cantidad_sitiosweb FROM red where status = 1");

	$rowsitios       = mysqli_fetch_array($resultadositios);

	$cantidad_sitiosweb = $rowsitios[cantidad_sitiosweb];

	if ($tema == '') {

		$consulta_grande_where = " where red.status = 1 and loc_paises.id=$cod_pais ";

		$consulta_grande_group = " group by red.id_area order by red.prioridad desc, areas.area asc ";

	}else{

		$consulta_grande_where = " where red.status = 1 and red.id_area=$tema and loc_paises.id=$cod_pais ";

		$consulta_grande_group = " order by red.prioridad asc, red.actividad desc ";

	}

	if ($actividad <> '') {

		$consulta_grande_where = $consulta_grande_where . " and actividad = $actividad ";

	}

	$consulta_uniones = "SELECT count(*) as cantidad, red.*, loc_paises.*, areas.* FROM (((red INNER JOIN loc_ciudades ON red.id_ciudad = loc_ciudades.Id) INNER JOIN loc_estados ON loc_ciudades.idestado = loc_estados.Id) INNER JOIN loc_paises ON loc_estados.idpais = loc_paises.Id) INNER JOIN areas ON red.id_area = areas.Id ";

	$consulta_grande = $consulta_uniones . $consulta_grande_where . $consulta_grande_group;

	$resultado33  = mysqli_query($connect, $consulta_grande);

	$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $tema");

	$row331       = mysqli_fetch_array($resultado331);

	$area 	      = $row331[area];

	$imagen_area  = $row331[url_imagen];

	$resultado001 = mysqli_query($connect, "SELECT * FROM red where id = 103");

	$row001       = mysqli_fetch_array($resultado001);

	$id_red       = $row001[id];
	$siglas       = $row001[siglas];
	$nombre       = $row001[nombre];
	$lema 	      = $row001[lema];
	$descripcion  = $row001[descripcion];
	$carpeta      = $row001[carpeta];

	if ($tema == '') {

		?>

		<title><?php echo $siglas; ?> | <?php echo $nombre; ?> | <?php echo $lema; ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
		<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
		<meta property="og:image" content="imagenes/directorio.png" />

		<link href="imagenes/favicon.png" rel="icon">
		<link href="imagenes/apple-touch-icon.png" rel="apple-touch-icon">

		<?php

	}else{

		?>

		<title><?php echo $siglas; ?> | <?php echo $area; ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name=description content="<?php echo $row33[meta_descripcion]; ?>">
		<meta name=keywords content="<?php echo $row33[meta_keywords]; ?>">
		<meta property="og:image" content="<?php echo $row33[imagen]; ?>" />

		<link href="style.css" rel="stylesheet" id="bootstrap-css">

		<link href="imagenes/<?php echo $imagen_area; ?>" rel="icon">
		<link href="imagenes/apple-touch-icon.png" rel="apple-touch-icon">

		<?php

	}

?>
