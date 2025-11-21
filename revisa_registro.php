<?php

	function RevisaDato($dato,$tipo) {

		$c = 0;
		$registro_aprobado = 1;

		$long = strlen($dato);

		for ($i = 0; $i < $long; $i++) {

			$l = strtoupper(substr($dato, $i, 1));

			if (($l == 'B') or ($l == 'C') or ($l == 'D') or ($l == 'F') or ($l == 'G') or ($l == 'H') or ($l == 'J') or ($l == 'K') or ($l == 'L') or ($l == 'M') or ($l == 'N') or ($l == 'Ñ') or ($l == 'P') or ($l == 'Q') or ($l == 'R') or ($l == 'S') or ($l == 'T') or ($l == 'V') or ($l == 'W') or ($l == 'X') or ($l == 'Y') or ($l == 'Z')) {

				$c++;

				if ((($tipo == 1) and ($c > 3)) or (($tipo == 2) and ($c > 0))) {

					$i = $long + 10;

					$registro_aprobado = 0;

				}

			}else{

				$c = 0;

			}

		}

		return $registro_aprobado;

	}

	$ii = 0;

	while (($registro_aprobado == 1) and ($ii <= 11)) {

		$ii++;

		switch ($ii) {

			case 1:

				$registro_aprobado = RevisaDato($nombre,1);
				break;

			case 2:

				$registro_aprobado = RevisaDato($siglas,1);
				break;

			case 3:

				$registro_aprobado = RevisaDato($descripcion,1);
				break;

			case 4:

				$registro_aprobado = RevisaDato($descripcion_amplia,1);
				break;

			case 5:

				$registro_aprobado = RevisaDato($direccion,1);
				break;

			case 6:

				$registro_aprobado = RevisaDato($telefono,2);
				break;

			case 7:

				$registro_aprobado = RevisaDato($celular,2);
				break;

			case 8:

				$registro_aprobado = RevisaDato($id_ciudad,1);
				break;

			case 9:

				$registro_aprobado = RevisaDato($id_estado,1);
				break;

			case 10:

				$registro_aprobado = RevisaDato($id_municipio,1);
				break;

			case 11:

				$registro_aprobado = RevisaDato($id_pais,1);
				break;

		}

	}

?>