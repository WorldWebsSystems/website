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

$fecha_inicio = strtotime($fecha_desde);
$fecha_fin = strtotime($ano . '-' . $mes . '-' . $dia);

$diferencia = $fecha_fin - $fecha_inicio;

echo "Diferencia en segundos: " . $diferencia . "<br>";

//Convertir a días, horas, minutos y segundos:
$dias = floor($diferencia / (60 * 60 * 24));
$horas = floor(($diferencia % (60 * 60 * 24)) / (60 * 60));
$minutos = floor(($diferencia % (60 * 60)) / 60);
$segundos = $diferencia % 60;

$calcula_antiguedad = $dias;

		return $calcula_antiguedad;

	}

?>

<section id="resumen" class="resume">

	<div class="container">

		<div class="section-title">

			<h2>Resumen Curricular:</h2>

<section id="formacion_academica" class="resume">

	<div class="container">

		<?php

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

		$tipo = 1;
		$delay = 100;

		$resultado4 = mysqli_query($connect, "SELECT * FROM cv where id_red = $row33[id] order by tipo asc, actual desc, anohasta desc, meshasta desc");

		while ($row4 = mysqli_fetch_array($resultado4)) {

			$delay = $delay + 300;

			if ($tipo == $row4[tipo]) {

				$tipo++;

				?>

				<div class="section-title">

					<u>

					<?php

					if ($row4[tipo] == 1) {

						echo "<h4><b>Formación Académica:</b></h2>";

					}

					if ($row4[tipo] == 2) {

						echo "<h4><b>Experiencia Profesional y Laboral:</b></h2>";

					}

					if ($row4[tipo] == 3) {

						echo "<h4><b>Cursos, Seminarios y Talleres:</b></h2>";

					}

					if ($row4[tipo] == 4) {

						echo "<h4><b>Productos y Servicios Desarrollados:</b></h2>";

					}

					if ($row4[tipo] == 5) {

						echo "<h4><b>Actividades Extracurriculares:</b></h2>";

					}

					?>

					</u>

				</div>

				<?php

			}

			?>

		<div class="row">

			<div class="col-lg-9" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

				<div align="left">

					<?php

					echo "<font size='4'><b>" . strtoupper($row4[descripcion]) . "</b></font>";

					?>

				</div>

			</div>

			<div class="col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

				<div align="right">

					<?php

					if ($row4[actual] == 1) {

						$hasta = 'Actualidad';

					}else{

						$hasta = MesLetra($row4[meshasta]) . '/' . $row4[anohasta];

					}

					echo "<font size='4'><b>" . MesLetra($row4[mesdesde]) . '/' . $row4[anodesde] . " - " . $hasta. "</b></font><br>";

					$duracion = calcula_antigucalcula_antiguedad($row4[anodesde] . '/' . $row4[mesdesde] . '/01' , $row4[anohasta] . '/' . $row4[meshasta] . '/01');

					echo "<font size='4'><b>" . $duracion . " días</b></font>";

					?>

				</div>

			</div>

			<div class="col-lg-12" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

				<div align="left">

					<?php

					echo "<font size='4'><b>" . $row4[ubicacion] . "</b></font>";

					?>

				</div>

			</div>

			<?php

			$resultado41 = mysqli_query($connect, "SELECT * FROM cv_detalles where id_cv = $row4[id]");

			while ($row41 = mysqli_fetch_array($resultado41)) {

				?>

					<div class="col-lg-9" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

						<div align="left">

							<?php

							echo "<font size='3'>• " . $row41[actividad] . "</font>";

							?>

						</div>

					</div>

					<div class="col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">

						<div align="left">

						</div>

					</div>

				<?php

			}

			?>

			<div class="col-lg-12" data-aos="fade-up" data-aos-delay="0">

				<br><br>

			</div>

		</div>

		<?php

		}

		?>

	</div>

</section>

		</div>

	</div>

</section>