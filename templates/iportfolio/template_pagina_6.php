<?php

	function calcula_antigucalcula_antiguedad($fecha_desde, $fecha_hasta){

		if ($fecha_hasta <> '0/0/01') {

			$dia=date("d",strtotime($fecha_hasta));
			$mes=date("m",strtotime($fecha_hasta));
			$ano=date("Y",strtotime($fecha_hasta));

		}else{

			$dia=date("d");
			$mes=date("m");
			$ano=date("Y");

		}

		$fecha_hasta = $ano . '-' . $mes . '-' . $dia;
    		$inicio = new DateTime($fecha_desde);
    		$fin = new DateTime($fecha_hasta);
    		$diferencia = $inicio->diff($fin);
    		$anios = $diferencia->y;
    		$meses = $diferencia->m;

		if ($anios <> 0) {

    			$calcula_antiguedad = "$anios años, $meses meses";

		}else{

    			$calcula_antiguedad = "$meses meses";

		}

		return $calcula_antiguedad;

	}


	function MesLetra($mes) {

		switch ($mes) {

			case 1:
				$MesLetra = 'Ene';
				break;

			case 2:
				$MesLetra = 'Feb';
				break;

			case 3:
				$MesLetra = 'Mar';
				break;

			case 4:
				$MesLetra = 'Abr';
				break;

			case 5:
				$MesLetra = 'May';
				break;

			case 6:
				$MesLetra = 'Jun';
				break;

			case 7:
				$MesLetra = 'Jul';
				break;

			case 8:
				$MesLetra = 'Ago';
				break;

			case 9:
				$MesLetra = 'Sep';
				break;

			case 10:
				$MesLetra = 'Oct';
				break;

			case 11:
				$MesLetra = 'Nov';
				break;

			case 12:
				$MesLetra = 'Dic';
				break;

		}

		return $MesLetra;

	}

?>

<section id="resumen" class="resume">

	<div class="container">

		<div class="section-title">

			<h2>Resumen Curricular: <a href='../../templates/<?php echo $row33[template]; ?>/imprime_cv_pdf.php?id=<?php echo $id_cliente; ?>&cv1=<?php echo $cv1; ?>&cv2=<?php echo $cv2; ?>&cv3=<?php echo $cv3; ?>&cv4=<?php echo $cv4; ?>&cv5=<?php echo $cv5; ?>&cv6=<?php echo $cv6; ?>&cv7=<?php echo $cv7; ?>' target="_blank"><img src="../../imagenes/icono_pdf.png" height='30' title='Generar Resumen Curricular en PDF'></a></h2>

<section id="formacion_academica" class="resume">

			<?php

			$tipo = 1;
			$delay = 100;

			$resultado4 = mysqli_query($connect, "SELECT * FROM cv where id_red = $row33[id] and status = 1 and tipo > 0 order by tipo asc, actual desc, anohasta desc, meshasta desc, anodesde desc, mesdesde desc, titulo asc, descripcion asc");

			while ($row4 = mysqli_fetch_array($resultado4)) {

				$delay = $delay + 300;

				if ($tipo == $row4[tipo]) {

					$tipo++;

					?>

					<div class="section-title">

						<hr><br><u>

						<?php

						switch ($row4[tipo]) {

							case 1:
								echo "<h4><b>Formación Académica:</b></h4>";
								break;
							case 2:
								echo "<h4><b>Experiencia Profesional y Laboral:</b></h4>";
								break;
							case 3:
								echo "<h4><b>Cursos, Seminarios y Talleres:</b></h4>";
								break;
							case 4:
								echo "<h4><b>Congresos y Ponencias Nacionales e Internacionales:</b></h4>";
								break;
							case 5:
								echo "<h4><b>Actividades Extracurriculares:</b></h4>";
								break;

						}

						?>

						</u>

					</div>

					<?php

				}

				?>

				<div class="row">

					<div class="col-lg-8" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

						<div align="left">

						<?php

						if ($row4[titulo] <> '') {

							echo "<font size='4'><b>" . strtoupper($row4[titulo]) . ".</b></font>";

						}

						echo "<br>";

						if ($row4[descripcion] <> '') {

							echo "<font size='4'><b>" . $row4[descripcion] . ".</b></font></b><br>";

						}

						echo "<font size='3'>" . $row4[ubicacion] . ".</font><br>";

						$resultado41 = mysqli_query($connect, "SELECT count(*) as count FROM cv_detalles where id_cv = $row4[id]");

						$row41 = mysqli_fetch_array($resultado41);

						$count = $row41[count];
	
						if ($count <> 0) {

							$resultado41 = mysqli_query($connect, "SELECT * FROM cv_detalles where id_cv = $row4[id] order by actividad asc");

							echo "<font size='1'><b>DESCRIPCIÓN:</b></font><br>";

							echo "<table width='100%'>";

							while ($row41 = mysqli_fetch_array($resultado41)) {

								echo "<tr><td width='3%'>";

								echo "<tr><td width='1%'>";

								echo "<font size='3'>• ";

								echo "</td><td width='96%'>";

								if ($row41[codigo] == '') {

									if ($row41[copyright] == 0) {

										$ver_imagen = 'icono_verimagen.png';
										$url_cv_detalle = $row41[url];
										$titulo = 'Ver documento';

									}else{

										$ver_imagen = 'icono_verimagen_off.png';
										$url_cv_detalle = "";
										$titulo = 'No disponible';

									}

								}else{

									$url_cv_detalle = 'http://isbn.cenal.gob.ve/catalogo.php?mode=resultados_rapidos&palabra=' . $row41[codigo];
									$ver_imagen = 'icono_publicacion.png';
									$titulo = 'Publicación ISBN: ' . $row41[codigo];

								}

								if ($url_cv_detalle <> '') {

									?>

									<a href="<?php echo $url_cv_detalle; ?>" target="_blank">

									<img src="../../imagenes/<?php echo $ver_imagen;  ?>" width="20" title='<?php echo $titulo;  ?>'></a>

									<?php

								}else{

									?>

									<img src="../../imagenes/icono_verimagen_off.png" width="20" title='Detalles no disponibles'></a>

									<?php

								}

								if ($row41[copyright] == 0) {

									?>

									<a href="<?php echo $row41[url]; ?>" target="_blank"><img src="../../imagenes/software_libre.png" width="20" title='Licencia GNU'></a>

									<?php

								}else{

									?>

									<img src="../../imagenes/icono_copyright.png" width="15" title='Copyright - Solicitar información al autor'></a>

									<?php

								}

								echo $row41[actividad] . ".</font>";

								echo "</td></tr>";

							}

							echo "</table>";

						}

						?>

						</div>

					</div>

					<div class="col-lg-1" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

						<?php

						if ($row4[imagen] <> '') {

							?>

							<a href="<?php echo $row4[imagen]; ?>" target="_blank"><img src="../../imagenes/icono_verimagen.png" height="20" title='Ver imagen'></a>

							<?php

						}

						?>

					</div>

					<div class="col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

						<div align="right">

						<?php

						if ($row4[actual] == 1) {

							$hasta = 'Actualidad';

						}else{

							$hasta = MesLetra($row4[meshasta]) . '/' . $row4[anohasta];

						}

						if ($hasta <> '/0') {

							echo "<font size='3'><b>" . MesLetra($row4[mesdesde]) . '/' . $row4[anodesde] . " - " . $hasta. "</b></font><br>";

							$duracion = calcula_antigucalcula_antiguedad($row4[anodesde] . '/' . $row4[mesdesde] . '/01' , $row4[anohasta] . '/' . $row4[meshasta] . '/01');

							echo "<font size='3'>(" . $duracion . ")</font>";

						}else{

							echo "<font size='3'><b>" . MesLetra($row4[mesdesde]) . '/' . $row4[anodesde]. "</b></font><br>";

						}

						?>

						</div>

					</div>

					<div class="col-lg-12" data-aos="fade-up" data-aos-delay="0">

						<br><br>

					</div>

				</div>

				<?php

			}

			?>

		</div>

	</div>

</section>