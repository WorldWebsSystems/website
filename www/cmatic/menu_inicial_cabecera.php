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

							<nav class="nav-menu d-none d-lg-block">

       								<ul>

								        <li><a href="<?php echo $link_inicio; ?>"><img src='imagenes/icono_home.png' height='20' title='Inicio'></a></li>

								        <li class="drop-down"><a href="<?php echo $link_nosotros; ?>"><?php echo $menu02; ?></a>

										<ul>

								        		<li><a href="<?php echo $link_nosotros_equipotrabajo; ?>"><?php echo $menu03; ?></a>

								        		<li class="drop-down"><a href="<?php echo $link_nosotros_patrocinantes; ?>"><?php echo $menu04; ?></a>

												<ul>
													<li><a href="<?php echo $link_nosotros_cmatic; ?>"><?php echo $menu05; ?></a></li>
													<li><a href="<?php echo $link_nosotros_fundatics; ?>"><?php echo $menu06; ?></a></li>
												</ul>

											</li>

										</ul>

									</li>

									<li><a href="<?php echo $link_vps; ?>"><?php echo $menu17; ?></a></li>

									<li><a href="<?php echo $link_proxys; ?>"><?php echo $menu19; ?></a></li>

								        <li><a href="https://tawk.to/chat/64148cb34247f20fefe68575/1gro4b7j7" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=5,width=344,height=456'); return false;">Chat en vivo</a></li>

									<li class="drop-down"><a href="<?php echo $link_dashboard; ?>"><?php echo $menu30; ?></a>

										<ul>

											<li><a href="<?php echo $link_dashboard_login; ?>"><?php echo $menu32; ?></a></li>
											<li><a href="<?php echo $link_dashboard_registro; ?>"><?php echo $menu31; ?><font color='red'></font></a></li>

										</ul>

									</li>

     							        	<li><a href="<?php echo $link_acerca; ?>" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;">?</a></li>

        							</ul>

      							</nav>

						</td>

					</tr>

				</table>

    			</div>

  		</header>

	<!-- End Header -->