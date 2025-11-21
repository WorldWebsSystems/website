<?php

		$ddescripcion = $descripcion1 . $descripcion2;

		$longitud = strlen($ddescripcion);
		$desc = '';
		$nocode = false;
		$apuntador = '';
		$contador = 0;
		$no_disponible = false;

		for ($i = 0; $i <= $longitud; $i++) {

			$letra = substr($ddescripcion, $i, 1);

			if (($letra <> '^') and (!$nocode)) {

				$desc = $desc . $letra;

			}else{

				if ($letra <> '^') {

					if ($letra == 'A') {

						$subtitulo = true;

					}

					if ($letra == 'X') {

						$no_disponible = true;

					}

					$apuntador = $apuntador . $letra;

				}

				if (!$nocode) {

					$nocode = true;
					$subtitulo = false;
					$no_disponible = false;
	
				}else{

					if ($letra == '^') {

						if (!$subtitulo) {

							if ($no_disponible) {

								$apuntador = substr($apuntador, 1, strlen($apuntador));

							}

							$result11  = mysqli_query($connect, "SELECT * FROM servicios_detalles where id=$apuntador");
							$row11     = mysqli_fetch_array($result11);

							$apuntador = '';

							if ( ($row11[status] == 0) or ($no_disponible) ) {

								$apuntador = "<del>";

							}

							$horas_wm = '';

							if ($row11[id] == 34) {

								$result22  = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_tarifa");
								$row22     = mysqli_fetch_array($result22);

								$horas_wm = " (".$row22[horas_wm]." horas/mes)";

							}

							$apuntador = $apuntador . "<img src='imagenes/icono_check.png' height=15>".$row11[descripcion].$horas_wm."<br>";

							if ( ($row11[status] == 0) or ($no_disponible) ) {

								$apuntador = $apuntador . "</del>";

							}

							$MatrizDetallesPlanes[$contador][0] = $contador;
							$MatrizDetallesPlanes[$contador][1] = $row11[descripcion] . $horas_wm . $proximamente;
							$MatrizDetallesPlanes[$contador][2] = $row11[descripcion_amplia];
							$MatrizDetallesPlanes[$contador][3] = $row11[url_imagen];
							$MatrizDetallesPlanes[$contador][4] = $row11[status];

							$contador++;

						}else{

							$apuntador = substr($apuntador, 1, strlen($apuntador));

							$result11  = mysqli_query($connect, "SELECT * FROM servicios_subtitulos where id=$apuntador");
							$row11 	   = mysqli_fetch_array($result11);
							$apuntador = "<b>".$row11[descripcion]."</b><br>";

						}

						if ($descripcion_amplia) {

							$apuntador = $apuntador . "<br>" . $row11[descripcion_amplia] . "<br><br><br>";

						}

						$nocode = false;
						$desc = $desc . $apuntador;
						$apuntador = '';

					}

				}

			}

		}

		$descripcion = $desc;

?>