<?php

	if ($_POST[pais] == "") {

		$result = mysqli_query($connect, "SELECT * FROM paises where pais='$pais'");
		$row = mysqli_fetch_array($result);
		$pais_conexion = $row[id];
		$ppais_conexion = $pais;

	}else{

		$pais_conexion = $_POST[pais];
		$result = mysqli_query($connect, "SELECT * FROM paises where id=$pais_conexion");
		$row = mysqli_fetch_array($result);
		$ppais_conexion = $row[pais];

	}

	if ($_POST[estado] == "") {


	}else{

		$estado_conexion = $_POST[estado];
		$eestado = $_POST[estado];
		$result = mysqli_query($connect, "SELECT * FROM clientes where estado='$estado_conexion'");
		$row = mysqli_fetch_array($result);
		$pais_conexion = $row[pais];

		$result = mysqli_query($connect, "SELECT * FROM paises where id=$pais_conexion");
		$row = mysqli_fetch_array($result);
		$ppais_conexion = $row[pais];

	}

	if ($row[url] <> "") {

		$url_bandera = $row[url];

	}else{

		$url_bandera = "band_xx.png";

	}

	include 'menu_links.php';

	include 'determina_pagina_inicio.php';

	include 'registra_historial.php';

?>

  	<!-- ======= Header ======= -->

  		<header id="header" class="fixed-top ">

    			<div class="container d-flex align-items-center">

				<table width='100%'>

					<tr>

						<td align='left' valign='center'>

							<a href="<?php echo $link_inicio; ?>"><img src='imagenes/clients/<?php echo $carpeta; ?>/logos/logo_worldwebs.png' height=80 title='Inicio'></a>

						</td>

						<td align='left'>

          						<div class="d-lg-flex">
            							<a href="#about" class="btn-get-started scrollto">Descargar</a>
          						</div>

						</td>

					</tr>

				</table>

    			</div>

  		</header>

	<!-- End Header -->