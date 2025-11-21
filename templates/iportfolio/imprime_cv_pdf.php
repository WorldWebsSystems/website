<!DOCTYPE html>
<html lang="es">

<head>

	<style>

    		strong {
        		display: inline-block;
        		background-color: #f0f0f0;
        		border: 1px solid #ccc;
        		border-radius: 8px;
       			padding: 1px 1px;
        		margin: 1px 0;
    		}

	</style>

	<?php

	$id_cliente  = $_GET['id'];

	$cv1 = $_GET['cv1'];
	$cv2 = $_GET['cv2'];
	$cv3 = 0;
	$cv4 = $_GET['cv4'];
	$cv5 = $_GET['cv5'];
	$cv6 = $_GET['cv6'];
	$cv7 = $_GET['cv7'];

	include '../../abre_bd_query_sitios.php';

	?>

</head>

<body>

	<font face='arial'>

	<?php

	function Segmentar_Resumen($texto) {

		$texto = preg_replace_callback('/^([^:]+:)/', function($coincidencia) {
		return '<strong>' . trim($coincidencia[1]) . '</strong>';
		}, $texto);

		$texto = str_replace(';', ';<br>', $texto);

		$texto = preg_replace_callback('/;<br>\s*([^:<]+:)/', function($coincidencia) {
		return ';&nbsp;&nbsp;<strong>' . trim($coincidencia[1]) . '</strong>';
		}, $texto);

		return $texto;

	}

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

	$resultado33 = mysqli_query($connect, "SELECT * FROM red where id = $id_cliente");

	$row33 = mysqli_fetch_array($resultado33);

	?>

	<table width='100%'>

		<tr>

			<td align='center' widt='100%'>
				<font size='4'><b>RESUMEN CURRICULAR</b></font>
			</td>

		</tr>

	</table>

	<br>

	<table width='100%'>

		<tr>

			<td align='center' widt='30%'>
				<img src='../../www/<?php echo $row33[carpeta]; ?>/<?php echo $row33[imagen]; ?>' class='imgRedonda' height='107'>
			</td>

			<td align='right' widt='70%'>
				<font size='2'><b><?php echo $row33[siglas]; ?></b><br>
				<font size='2'><b><?php echo $row33[nombre]; ?></b><br>
				<font size='2'><?php echo $row33[descripcion]; ?><br>
				<font size='1'><i><b>Perfil:</b> <?php echo $row33[descripcion_amplia]; ?></i>
				</font>
			</td>

		</tr>

	</table>

	<hr><br>

	<font size='3'><b>Experiencia:</b></font>

	<p align="justify">

	<font size='2'>

	<?php

	$resumen =  '';

	$resultado4 = mysqli_query($connect, "SELECT * FROM cv_detalles where seo <> '' order by prioridad asc");

	while ($row4 = mysqli_fetch_array($resultado4)) {

		$resultado41 = mysqli_query($connect, "SELECT * FROM cv where id = $row4[id_cv] group by id_red");

		$row41 = mysqli_fetch_array($resultado41);

		if ($row41[id_red] == $id_cliente) {

			$resumen = $resumen . $row4[seo] . '; ';

		}

	}

	$experiencia = Segmentar_Resumen($resumen);

	echo $experiencia;

	?>

	</p>

	<b><br></b>

	<table width='100%'>

		<tr>

			<td align='center'>

				<?php

				$tipo = 1;

				$resultado4 = mysqli_query($connect, "SELECT * FROM cv where id_red = $row33[id] and status = 1 order by tipo asc");

				while ($row4 = mysqli_fetch_array($resultado4)) {

					if ($tipo == $row4[tipo]) {

						$tipo++;

						?>

						<?php

						switch ($row4[tipo]) {

							case 1:
								if ($cv1 == 1) {
									echo "<font size='3'><b>Formación Académica:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;
							case 2:
								if ($cv2 == 1) {
									echo "<font size='3'><b>Experiencia Profesional y Laboral:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;
							case 3:
								if ($cv3 == 1) {
									echo "<font size='3'><b>Cursos, Seminarios y Talleres:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;
							case 4:
								if ($cv4 == 1) {
									echo "<font size='3'><b>Congresos y Ponencias Nacionales e Internacionales:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;
							case 5:
								if ($cv5 == 1) {
									echo "<font size='3'><b>Actividades Extracurriculares:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;
							case 6:
								if ($cv6 == 1) {
									echo "<font size='3'><b>Idiomas:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;
							case 7:
								if ($cv7 == 1) {
									echo "<font size='3'><b>Recomendaciones:</b></font>";
									echo "<b><br><hr></b>";
								}
								break;

						}

						$resultado41 = mysqli_query($connect, "SELECT * FROM cv where id_red = $row33[id] and status = 1 and tipo = $tipo-1 order by actual desc, anohasta desc, meshasta desc, anodesde desc, mesdesde desc, titulo asc, descripcion asc");

						while ($row41 = mysqli_fetch_array($resultado41)) {

							if ( (($row41[tipo] == 1) and ($cv1 == 1)) or (($row41[tipo] == 2) and ($cv2 == 1)) or (($row41[tipo] == 3) and ($cv3 == 1)) or (($row41[tipo] == 4) and ($cv4 == 1)) or (($row41[tipo] == 5) and ($cv5 == 1)) or (($row41[tipo] == 6) and ($cv6 == 1)) or (($row41[tipo] == 7) and ($cv7 == 1)) ) {

								?>

								<table width='100%'>

								<tr>

									<td>

										<div align="left">

										<?php

										if ($row41[titulo] <> '') {

											echo "<font size='2'><b>" . strtoupper($row41[titulo]) . ".</b></font>";

										}

										echo "<br>";

										if ($row41[descripcion] <> '') {

											echo "<font size='2'><b>" . $row41[descripcion] . ".</b></font></b><br>";

										}

										echo "<font size='2'>" . $row41[ubicacion] . ".</font><br>";

										$resultado411 = mysqli_query($connect, "SELECT count(*) as count FROM cv_detalles where id_cv = $row41[id]");

										$row411 = mysqli_fetch_array($resultado411);

										$count = $row411[count];

										if ($count <> 0) {

											$resultado4111 = mysqli_query($connect, "SELECT * FROM cv_detalles where id_cv = $row41[id] order by actividad asc");

											echo "<font size='1'><b>DESCRIPCIÓN:</b></font><br>";

											echo "<table width='100%'>";

											while ($row4111 = mysqli_fetch_array($resultado4111)) {

												echo "<tr><td width='1%'>";

												echo "</td><td width='99%'>";

												echo "<font size='2'>• " . $row4111[actividad] . ".</font>";

												echo "</td></tr>";

											}

											echo "</table>";

										}

										?>

										</div>

									</td>

									<td>

										<div align="right">

										<?php

										if ($row41[actual] == 1) {

											$hasta = 'Actualidad';

										}else{

											$hasta = MesLetra($row41[meshasta]) . '/' . $row41[anohasta];

										}

										if ($hasta <> '/0') {

											echo "<font size='2'><b>" . MesLetra($row41[mesdesde]) . '/' . $row41[anodesde] . " - " . $hasta. "</b></font><br>";

											$duracion = calcula_antigucalcula_antiguedad($row41[anodesde] . '/' . $row41[mesdesde] . '/01' , $row41[anohasta] . '/' . $row41[meshasta] . '/01');

											if ($row41[tipo] == 2) {

												echo "<font size='2'>(" . $duracion . ")</font>";

											}

										}else{

											echo "<font size='2'><b>" . MesLetra($row41[mesdesde]) . '/' . $row41[anodesde]. "</b></font><br>";

										}

										?>

										</div>

									</td>

								</tr>

								</table>

								<br>

							<?php

							}

						}

					}

				}

				?>

			</td>

		</tr>

	</font>

<script>
window.onload = function() {
    window.print();
};
</script>

</body>

</html>