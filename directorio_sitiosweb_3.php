<?php

if ($secciones == '') {

	$resultado3311 = mysqli_query($connect, "SELECT count(*) as cantidad FROM red where id_area = $row33[id_area]");

	$row3311 = mysqli_fetch_array($resultado3311);

	$cantidad_area = $row3311[cantidad];

	$resultado33111 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $actividad");

	$row33111 = mysqli_fetch_array($resultado33111);

	$titulo = '<?php echo mb_convert_case($row33111[actividad], MB_CASE_UPPER, "UTF-8"); ?>';

	?>

	<div align='center'>

		<br><br>

		<?php
		$titulo = 'SECCIÓN:';
		include 'worldwebs_titulo.php';
		?>
		<font size=5 color='black'><b><?php echo mb_convert_case($row33111[actividad], MB_CASE_UPPER, "UTF-8"); ?>:</font></b>

	</div>

	<?php

	$consulta_uniones = substr($consulta_uniones, 0, 7) . substr($consulta_uniones, 28, strlen($consulta_uniones));

	$consulta_grande_where = " where red.id_area = $tema and red.status = 1 and loc_paises.id=$cod_pais and red.actividad = $actividad ";

	$consulta_grande_group = " order by red.actividad asc ";

	$consulta_grande = $consulta_uniones . $consulta_grande_where . $consulta_grande_group;

	$resultado33 = mysqli_query($connect, $consulta_grande);

	while ($row33 = mysqli_fetch_array($resultado33)) {

		if ($row33[imagen] == '') {

			$imagen = '../imagenes/imagen_usuario_vacio.png';

		}else{

			$imagen = 'www/' . $row33[carpeta] . '/' . $row33[imagen];

		}

		if ($tema <> '') {

			mkdir('www/' . $row33[carpeta]);

			if (!file_exists('www/' . $row33[carpeta] . '/sitiowebpropio.txt')) {

				copy('index_cliente.php' , 'www/' . $row33[carpeta] . '/index.php');

			}

			copy('error_log' , 'www/' . $row33[carpeta] . '/error_log');

			echo "</a><br><br>";

			$resultado33111 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33[actividad]");

			$row33111 = mysqli_fetch_array($resultado33111);

			?>

			<br>

			<div class="icon-box">

				<?php

				if ($so == 'windows') {

					?>

					<table width='100%'>

						<tr>

							<td align='center' width='20%'>

								<font color='black'>

								<img src='<?php echo $imagen; ?>' width='80' class='imgRedonda'>

								<br>

								<font size=2>Creación: <?php echo $row33[fecha] . "<br>" . $row33[hora]; ?><br>

								<font size=2>Visitas: <?php echo $row33[visitas]; ?>

								</font>

							</td>

							<td align='left' width='2%'>

							</td>

							<td align='left' width='40%'>

								<font color='black'>

								<b>

								<?php

								include 'ficha_website.php';

								?>

								</b>

								<br>

								<font size=4>

								<?php

								if ($row33[email] <> '') {

									?><img src='../imagenes/imagen_email.png' height=18></i> <?php echo $row33[email] . "<br>";

								}

								if ($row33[celular] <> '') {

									?><img src='../imagenes/logo_whatsapp.png' height=18> <a href="https://wa.me/+58<?php echo $celular; ?>" target="_blank"><?php echo $row33[celular]; ?></a><br><?php

								}

								if ($row33[telefono] <> '') {

									?><img src='../imagenes/logo_telefono.png' height=18> <?php echo $row33[telefono] . "<br>";

								}

								if ($row33[instagram] <> '') {

									?><img src='../imagenes/logo_instagram.png' height=18> <a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank"><?php echo $row33[instagram] . "</a>"; ?><?php

								}

								?>

							</td>

							<td align='left' width='2%'>

							</td>
	
							<td align='left' width='36%'>

								<font color='black'>

								Sitio Web:<br>

								<?php

								if ($row33[url] == '') {

									echo "<b><font size=3><a href='directorio_sitiosweb.php?id=" . $row33[carpeta] . "' target='_blank'>cmatic.live/www/" . $row33[carpeta] . "</font></a></b>";

								}else{


									echo "<b><font size=3><a href='directorio_sitiosweb.php?id=" . $row33[carpeta] . "' target='_blank'>". $row33[url] . "</a></b>";
								}

								$tienda = 0;

								if ($row33[tienda] == true) {

									$tienda = $row33[tienda];

									?>

									<br><br>

									Tienda Virtual:<br>

									<a href='tiendavirtual.php?id=<?php echo $row33[carpeta]; ?>' target='_blank'><img src='../imagenes/tiendavirtual.png' width='70' title='Tienda virtual on line'></a>

									<?php

								}

								?>

							</td>

						</tr>

					</table>

					<?php

				}else{

					?>

					<table width='100%'>

						<tr>

							<td align='center' width='100%'>

								<font color='black'>

								<img src='<?php echo $imagen; ?>' height='70' class='imgRedonda'>

								<font size=2 color='black'>Creación: <?php echo $row33[fecha] . " | " . $row33[hora]; ?><br>

								<font size=2 color='black'>Visitas: <?php echo $row33[visitas]; ?>

								<br>

								<b>

								<?php

								include 'ficha_website.php';

								?>

								</b>

								<br>

								<?php

								if ($row33[celular] <> '') {

									?>WhatsApp: <a href="https://wa.me/+58<?php echo $row33[celular]; ?>" target="_blank"><?php echo $row33[celular] . "<br>"; ?></a><?php

								}

								if ($row33[telefono] <> '') {

									echo $row33[telefono] . "<br>";

								}

								if ($row33[instagram] <> '') {

									?>Instagram: <a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank"><?php echo $row33[instagram] . "<br>"; ?></a><?php

								}

								?>

								<br>Sitio Web:<br>

								<?php

								if ($row33[url] == '') {

									echo "<b><font size=3><a href='directorio_sitiosweb.php?id=" . $row33[carpeta] . "' target='_blank'>cmatic.live/www/" . $row33[carpeta] . "</a></b>";

								}else{


									echo "<b><font size=3><a href='directorio_sitiosweb.php?id=" . $row33[carpeta] . "' target='_blank'>". $row33[url] . "</a></b>";

								}

								?>

</font>

							</td>

						</tr>

					</table>

					<?php

				}

				?>

			</div>

			<?php

			}

		}

	}else{

		?>

		<div align="center">

		<br><br>

		<?php
		$titulo = 'SECCIONES:';
		include 'worldwebs_titulo.php';
		?>

		</div>

		<div align="center">

		<div class="col-md-6">

			<div class="icon-box">

				<br>

				<table>

					<tr>

						<td align='center'>

							<?php

							$i = 0;

							$consulta_grande_where = " where red.id_area = $tema and red.status = 1 and loc_paises.id=$cod_pais ";

							$consulta_grande_group = " group by red.actividad order by red.actividad asc ";

							$consulta_grande = $consulta_uniones . $consulta_grande_where . $consulta_grande_group;

							$resultado33111 = mysqli_query($connect, $consulta_grande);
										
							while ($row33111 = mysqli_fetch_array($resultado33111)) {

								$i++;

								$resultado331111 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33111[actividad]");

								$row331111 = mysqli_fetch_array($resultado331111);

								?>

								<td align='left'>

									<img src='imagenes/icono_vineta.png' height='10'>

									<?php

									$cantidad_sitios = $row33111[cantidad]; 

									?>

									<font color='black' size=4>
									<b><a href='directorio_sitiosweb.php?tema=<?php echo $tema; ?>&actividad=<?php echo $row331111[id]; ?>&pais=<?php echo $pais; ?>'><?php echo $row331111[actividad]; ?></b></a></font>

									<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=2 color='black'>Sitios Web: <b>(<?php echo $cantidad_sitios; ?>)</b></font>


									<br><br>

								</td>

					</tr>

					<tr>

						<td align='center'>


								<?php

							}

							?>

						</td>

					</tr>

				</table>

			</div>

		</div>

		</div>

		<?php

	}

?>