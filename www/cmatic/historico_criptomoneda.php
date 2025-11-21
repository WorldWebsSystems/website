<?php

	include 'fecha_hora.php';

	include 'detecta_so.php';

	function MesLetra($mes) {

		switch ($mes) {

			case '01':
				$MesLetra = 'Enero';
				break;

			case '02':
				$MesLetra = 'Febrero';
				break;

			case '03':
				$MesLetra = 'Marzo';
				break;

			case '04':
				$MesLetra = 'Abril';
				break;

			case '05':
				$MesLetra = 'Mayo';
				break;

			case '06':
				$MesLetra = 'Junio';
				break;

			case '07':
				$MesLetra = 'Julio';
				break;

			case '08':
				$MesLetra = 'Agosto';
				break;

			case '09':
				$MesLetra = 'Septiembre';
				break;

			case '10':
				$MesLetra = 'Octubre';
				break;

			case '11':
				$MesLetra = 'Noviembre';
				break;

			case '12':
				$MesLetra = 'Diciembre';
				break;

		}

		return $MesLetra;

	}

	function DatosMuestralesBandas($historia, $dias) {

		$hhistoria = '';

		$long = strlen($historia);

		for ($ii = 0; $ii <= $long; $ii++) {

			$letra = substr($historia, $ii, 1);

			if ($letra <> '&') {

				if ( ($letra <> ':') and ($letra <> '|') ) {

					$hhistoria = $hhistoria . $letra;

				}else{

					if ($letra == ':') {

						$hhistoria = $hhistoria . ": Tasa más baja: ";

					}else if ($letra == '|') {

						$hhistoria = $hhistoria . " | Tasa más alta: ";

					}

				}

			}else{

				if ($letra == '&') {

					$hhistoria = $hhistoria . "<br>";

				}

			}

		}

		return $hhistoria;

	}

	include 'template_estilo.php';

	$moneda    = $_GET[moneda];
	$fecha_sel = $_GET[fecha];

	include 'abre_bd_query_sitios.php';

	$resultado2 	= mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$moneda'");
	$row2 		= mysqli_fetch_array($resultado2);

	$imagen_mini = $row2[imagen_mini];
	$formapago   = $row2[formapago];

	$resultado2  = mysqli_query($connect, "SELECT * FROM bandas where moneda='$moneda' order by id desc limit 1");
	$row2 	     = mysqli_fetch_array($resultado2);

	$historia    = $row2[historia];

	$time	     = time();
	$atras 	     = 86400 * $row2[periodo];

	$fecha_inicio	= date(Y, $time - $atras) . "-" . date(m, $time - $atras) . "-" . date(d, $time - $atras);

	?>

	<br>

	<div class="container" data-aos="fade-up">

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

			<div align='center'>

				<font size='6'>

				<label>HISTÓRICO DE CRIPTOMONEDA</label><br>

				<img src='imagenes/<?php echo $imagen_mini; ?>' width='60'>&nbsp;<b><br><?php echo $formapago; ?></b><br>

				<br>

				<?php

				if ($fecha_sel == '') {

					echo "<br>";

					$i = 0;

					$mes_ant = '';

					$nuevo_mes = 1;

					$resultado2 = mysqli_query($connect, "SELECT fecha FROM historico_criptos where moneda='$moneda' group by fecha order by id asc");

					while ($row2 = mysqli_fetch_array($resultado2)) {

						$i++;

						$dia = substr($row2[fecha],8,2);
						$mes = substr($row2[fecha],5,2);
						$ano = substr($row2[fecha],0,4);

						if ($nuevo_mes == 1) {

							echo "Mes: <b>" . MesLetra($mes) . "-" . $ano .":</b><br><br>";

						}

						$ffecha = $dia . "-" . $mes . "-" . $ano;

						?>

						<a href='https://worldwebs.net/historico_criptomoneda.php?moneda=<?php echo $moneda; ?>&fecha=<?php echo $row2[fecha]; ?>'>[<?php echo $ffecha; ?>] </a>

						<?php

						if ($i >= 4) {
							echo "<br>";
							$i = 0;
						}

						if ( ($mes <> $mes_ant) and ($mes_ant <> '') ) {

							echo "<br><br><hr><br>";
							$i = 0;
							$nuevo_mes = 1;

						}else{

							$nuevo_mes = 0;

						}

						$mes_ant = $mes;

					}

				}else{

					?>

					<a href="historico_criptomoneda.php?moneda=<?php echo $moneda; ?>"><font size='2'>Ver histórico</font></a><br><br>

						<?php

						$resultado2 = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$moneda' order by id desc limit 1");
						$row2 	    = mysqli_fetch_array($resultado2);

						$valor_moneda = $row2[tasa];

						include 'valores_decimales.php';

						$valor_moneda_anterior = 0;
						$variacion_exagerada = 0;
						$variaciones_total = 0;
						$variacion_alza = 0;
						$variacion_baja = 0;

						$i = 0;

						$tasa_mas_baja = 0;
						$tasa_mas_alta = 0;

						$resultado2 = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$moneda' and fecha='$fecha_sel' order by id asc");

						while ($row2 = mysqli_fetch_array($resultado2)) {

							$valor_moneda = $row2[tasa];

							$ffecha = substr($row2[fecha],8,2). "-" . substr($row2[fecha],5,2) . "-" . substr($row2[fecha],0,4);

							if ($valor_moneda_anterior == 0) {

								echo "Fecha: <b>" . $ffecha . ":</b><br>";
								echo "<font size='4'>Última actualización: <b>" . $fecha . " | ". $hora . "</b></font><br><br>";

							}

							$variacion_exagerada = (1 - ($valor_moneda_anterior / $valor_moneda)) * 100;

							if ($variacion_exagerada == 100) {

								$variacion_exagerada = 0;

							}

							if ($variacion_exagerada > 0) {

								$variacion_simbolo = '+';
								$color_1 = '#0174ff';
								$variacion_alza = $variacion_alza + $variacion_exagerada;

							}else if ($variacion_exagerada < 0) {

								$variacion_simbolo = '-';
								$color_1 = 'red';
								$variacion_baja = $variacion_baja + $variacion_exagerada;

							}else{

								$color_1 = '#0174ff';
								$variacion_simbolo = '=';

							}

							if (($tasa_mas_baja == 0) and ($tasa_mas_alta == 0)) {

								$tasa_mas_baja = $valor_moneda;
								$tasa_mas_alta = $valor_moneda;

							}

							if ($valor_moneda < $tasa_mas_baja) {

								$tasa_mas_baja = $valor_moneda;
								$tasa_baja_cambiada = 1;

							}else{

								$tasa_baja_cambiada = 0;

							}

							if ($valor_moneda > $tasa_mas_alta) {

								$tasa_mas_alta = $valor_moneda;
								$tasa_alta_cambiada = 1;

							}else{

								$tasa_alta_cambiada = 0;

							}

							$historico_tasa[2][0] = "<b>" . $row2[hora] . "</b>";
							$historico_tasa[2][1] = "USD $ " . "<b>" . number_format($row2[tasa], $decimales, '.', ',') . "</b>";
							$historico_tasa[2][2] = $moneda . " <b>" . number_format(1 / $row2[tasa], 8, '.', ',') . "</b>";
							$historico_tasa[2][3] = "<b><font color=" . $color_1 . ">" . $variacion_simbolo . abs(number_format($variacion_exagerada, 8, '.', ',')) . "%</font></b>";

							if ($tasa_alta_cambiada == 1) {

								$i++;

								$historico_tasa[3][0] = "<b>" . $row2[hora] . "</b>";
								$historico_tasa[3][1] = "USD $ " . "<b>" . number_format($row2[tasa], $decimales, '.', ',') . "</b>";
								$historico_tasa[3][2] = $moneda . " <b>" . number_format(1 / $row2[tasa], 8, '.', ',') . "</b>";
								$historico_tasa[3][3] = "<b><font color=" . $color_1 . ">" . $variacion_simbolo . abs(number_format($variacion_exagerada, 8, '.', ',')) . "%</font></b>";
								$tasa_alta = $row2[tasa];

							}

							if ($tasa_baja_cambiada == 1) {

								$i++;

								$historico_tasa[1][0] = "<b>" . $row2[hora] . "</b>";
								$historico_tasa[1][1] = "USD $ " . "<b>" . number_format($row2[tasa], $decimales, '.', ',') . "</b>";
								$historico_tasa[1][2] = $moneda . " <b>" . number_format(1 / $row2[tasa], 8, '.', ',') . "</b>";
								$historico_tasa[1][3] = "<b><font color=" . $color_1 . ">" . $variacion_simbolo . abs(number_format($variacion_exagerada, 8, '.', ',')) . "%</font></b>";

								$tasa_baja = $row2[tasa];

							}

							$valor_moneda_anterior = $valor_moneda;

						}

						$variacion_total = $variacion_alza + $variacion_baja;

						if ($variacion_total > 0) {

							$variacion_simbolo_2 = '+';
							$color_2 = '#0174ff';

						}else if ($variacion_total < 0) {

							$variacion_simbolo_2 = '-';
							$color_2 = 'red';

						}else{

							$color_2 = '#0174ff';
							$variacion_simbolo_2 = '=';

						}

						echo "<font size='4'>Variación acumulada: <b><font color='<?php echo $color_2; ?>'>" . $variacion_simbolo_2 . number_format($variacion_total, 4, '.', ',') . "%</b></font><br><br>";

						$tasa_promedio = ( $tasa_alta + $tasa_baja ) / 2;

						?>

						<font size=6>

						<?php echo "<b>Tasa promedio:</b> USD $ <b>" . number_format($tasa_promedio, $decimales, '.', ',') . "</b>"; ?>

						<br><br>

						<table border='1'>

						<?php

						if ($so == 'windows') {

							echo "<tr>";

						}

						$ii = 4;

						$valor_moneda_anterior = 0;

						while ($ii > 1) {

							$ii--;

							if ($so <> 'windows') {

								echo "<tr>";

							}

							?>

								<td align='center'>

									<b>

									<br>

									<font size=6>

									<?php

									if ($ii == 1) {

										echo "Tasa más baja:";

									}

									if ($ii == 2) {

										echo "Tasa actual:";

									}

									if ($ii == 3) {

										echo "Tasa más alta:";

									}

									?>

									<br>

									</b>

									<br>

									<font size=6>

									<?php echo $historico_tasa[$ii][0]; ?>

									<br>

									<font size=8>

									<?php echo $historico_tasa[$ii][1]; ?>

									<br>

									<font size=6>

									<?php echo $historico_tasa[$ii][2]; ?>

									<br>

									<font size=6>

									<?php echo $historico_tasa[$ii][3]; ?>

									<br><br>

									</font>

								</td>

							<?php

							if ($so <> 'windows') {

								echo "</tr>";

							}

						}

						if ($so == 'windows') {

							echo "</tr>";

						}

						?>

					</table>

					<?php

				}

				?>
	
				<br><br><br><br><br>

				</font>

			</div>

		</div>

	</div>

<?php

	$pie = 1;

	include 'template_estilo.php';

?>