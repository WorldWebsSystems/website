<font color='black'>

	<?php

	if ($row33[fecha] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET fecha='$fecha' WHERE carpeta='$row33[carpeta]'");

	}

	if ($row33[hora] == '') {

		$resultado888 = mysqli_query($connect, "UPDATE red SET hora='$hora' WHERE carpeta='$row33[carpeta]'");

	}

	$resultado8881= mysqli_query($connect, "SELECT * FROM loc_ciudades where id = $row33[id_ciudad]");

	$row8881= mysqli_fetch_array($resultado8881);

	$ciudad = $row8881[ciudad];

	$resultado888 = mysqli_query($connect, "SELECT * FROM loc_municipios where id_ciudad = $row33[id_ciudad]");

	$row888 = mysqli_fetch_array($resultado888);

	$municipio = $row888[municipio];

	$resultado8882= mysqli_query($connect, "SELECT * FROM loc_estados where id = $row8881[idestado]");

	$row8882= mysqli_fetch_array($resultado8882);

	$estado = $row8882[estado];

	$resultado8883= mysqli_query($connect, "SELECT * FROM loc_paises where id = $row8882[idpais]");

	$row8883= mysqli_fetch_array($resultado8883);

	$pais = $row8883[pais];

	?>

	<table>

		<tr>

			<td>

				<?php

				if (file_exists('www/'. $row33[carpeta] . '/logo.png')) {

					echo "<img src='www/". $row33[carpeta] . "/logo.png' height='40'>";

				}

				?>

			</td>

			<td>

				<?php

				if ($row33[siglas] <> '') {

					echo "<font size=5><b>" . mb_convert_case($row33[siglas], MB_CASE_UPPER, "UTF-8") . "</b></font><br>";

				}

				?>

			</td>

		</tr>

	</table>

	<?php

	if ($row33[nombre] <> '') {

		echo "<font size=4><b>" . $row33[nombre] . "</b></font><br>";

	}

	if ($row33[red.descripcion] <> '') {

		echo $row33[red.descripcion] . "<br>";

	}

	if ($row33[direccion] <> '') {

		echo $row33[direccion] . "<br>";

	}

	echo "<font size=3><b>";

	if ($municipio <> '') {

		echo "Municipio " . $municipio;

	}

	echo "<br>" . $ciudad . ', '. $estado . '<br>'. $pais . "</b>";

	?>

</font>