<?php

	$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $tema");

	$row331 = mysqli_fetch_array($resultado331);

	$area = $row331[area];

	$resultado3311 = mysqli_query($connect, "SELECT count(*) as cantidad FROM red where id_area = $row33[id_area]");

	$row3311 = mysqli_fetch_array($resultado3311);

	$cantidad_area = $row3311[cantidad];

	?>

	<div class="section-title">

		<div align="center">

			<font size=5><b><?php echo $area; ?>:</b></font><br><br>
			<label id='boton' name='boton' disabled /><a href="index.php" class="get-started-btn ml-auto">Todas las categorías</a></label>

		</div>

		<br><br>

		<?php

		while ($row33 = mysqli_fetch_array($resultado33)) {

			if ($row33[imagen] == '') {

				$imagen = '../imagenes/imagen_usuario_vacio.png';

			}else{

				$imagen = $row33[carpeta] . '/' . $row33[imagen];

			}

			if ($tema <> '') {

				mkdir($row33[carpeta]);

				if (!file_exists($row33[carpeta] . '/sitiowebpropio.txt')) {

					copy('index_cliente.php' , $row33[carpeta] . '/index.php');
					copy('error_log' , $row33[carpeta] . '/error_log');

				}

				echo "</a><br><br>";

				$resultado33111 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33[actividad]");

				$row33111 = mysqli_fetch_array($resultado33111);

				?><div align='center'><b><font size=5><b><?php echo mb_convert_case($row33111[actividad], MB_CASE_UPPER, "UTF-8"); ?>:</font></b></div><br><?php

				if ($so == 'windows') {

					?>

					<table width='100%'>

						<tr>

							<td align='center' width='25%'>

								<img src='<?php echo $imagen; ?>' width='100' class='imgRedonda' title='Próximamente se habilitarán las funciones para incluir imágenes y editar el contenido'><br><br>

							<font size=2>Visitas: <b><?php echo $row33[visitas]; ?></b>

							</td>

							<td align='left' width='2%'>

							</td>

							<td align='left' width='46%'>

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
	
							<td align='left' width='25%'>

								Sitio Web:<br>

								<?php

								echo "<b><font size=3><a href='index.php?id=" . $row33[carpeta] . "' target='_blank'>tuww.net/www/" . $row33[carpeta] . "</font></a></b>";

								?>

							</td>

						</tr>

					</table>

					<br><br><hr>

					<?php

				}else{

					?>

					<table width='100%'>

						<tr>

							<td align='center' width='100%'>

								<img src='../imagenes/<?php echo $imagen; ?>' width='100' class='imgRedonda'><br><br>
								<font size=2>Visitas: <b><?php echo $row33[visitas]; ?></b>

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

								echo "<font size=3><b><a href='index.php?id=" . $row33[carpeta] . "' target='_blank'>tuww.net/www/" . $row33[carpeta] . "</a></font></b><br><br>";

								?>

							</td>

						</tr>

					</table>

					<br><hr>

					<?php

				}

			}

		}

		?>

	</div>