<div class="row">

	<div class="col-md-12">

		<div align="center">

			<b><font size=4 color='black'>SELECCIONE CATEGORÍA:</font></b>

		<div>

	<div>

<div>

<br>

<div class="row">

	<?php

	while ($row33 = mysqli_fetch_array($resultado33)) {

		?>

		<div class="col-md-12">

			<?php

			$id_area = $row33[id_area];

			$descripcion_empresa = $row33[descripcion];

			$resultado331 = mysqli_query($connect, "SELECT * FROM areas where id = $row33[id_area]");

			$row331 = mysqli_fetch_array($resultado331);

			$consulta_grande_where = " where red.id_area = $row33[id_area] and red.status=1 and loc_paises.id=$cod_pais ";

			$consulta_grande_group = " group by red.actividad order by red.actividad asc ";

			if ($so <> 'windows') {

				$fuente = 2;
				$ancho1 = 30;
				$ancho11 = 100;
				$ancho2 = 70;
				$alineacion = 'left';

			}else{

				$fuente = 3;
				$ancho1 = 20;
				$ancho11 = 25;
				$ancho2 = 80;
				$alineacion = 'center';

			}

			?>

			<div class="icon-box">

				<table width='100%'>

					<tr>

						<td align='center' valign='center' width='<?php echo $ancho1;?>%'>

							<img src='../imagenes/<?php echo $row331[url_imagen];?>' height='70'>

						</td>

						<td align='left' valign='left' width='<?php echo $ancho2;?>%'>

							<?php

							if ($tema == '') {

								?>

								<a href="directorio_sitiosweb.php?tema=<?php echo $row33[id_area]; ?>&secciones=1&pais=<?php echo $pais; ?>">

								<?php

								echo "<b><font size=" . $fuente .">" . $row331[area] . "</a></b><br>";

							}

							echo "</font>";

							?>

						</td>

					</tr>

				</table>

				<hr>

				<?php

				//echo "<font size=2 color='black'><b> Secciones (" . $cantidad_area . "):</b></font><br>";

				$ii = 1;

				?>

				<font size=2 color='black'>

				<table width='100%'>

					<tr>

						<?php

						$consulta_grande_where = " where red.id_area = $row33[id_area] and red.status = 1 and loc_paises.id=$cod_pais ";

						$consulta_grande_group = " group by red.actividad order by red.actividad asc ";

						$consulta_grande = $consulta_uniones . $consulta_grande_where . $consulta_grande_group;

						$resultado33111 = mysqli_query($connect, $consulta_grande);
										
						while ($row33111 = mysqli_fetch_array($resultado33111)) {

							?>

							<td align='<?php echo $alineacion; ?>' width='<?php echo $ancho11;?>%'>

								<?php

								$resultado99 = mysqli_query($connect, "SELECT count(*) as cantidad_seccion FROM red where id_area = $row33[id_area] and actividad = $row33[actividad] and status=1");

								$row99 = mysqli_fetch_array($resultado99);

								$cantidad_seccion = $row99[cantidad_seccion];

								$i++;
								$ii++;

								$resultado331111 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33111[actividad]");

								$row331111 = mysqli_fetch_array($resultado331111);

								?>

								<font color='black'>

								<a href='directorio_sitiosweb.php?tema=<?php echo $row33[id_area]; ?>&actividad=<?php echo $row331111[id]; ?>&pais=<?php echo $pais; ?>'><?php echo $row331111[actividad]; ?></a> (<?php echo $cantidad_seccion; ?>)</font>

								<?php

								if ( (($ii > 4) and ($so == 'windows')) or (($ii > 0) and ($so <> 'windows')) ) {

									echo "</tr><tr>";

									$ii = 0;

								}

								?>

							</td>

							<?php

						}

						?>

					</tr>

				</table>

				</font>

			</div>

		</div>

		<?php

	}

	?>

</div>
