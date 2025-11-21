<?php

	$id_area = $_GET[tema];

	include 'abre_bd_query_sitios.php';

	?>

				<table width='100%'>

					<tr>

						<?php

						$resultado33111 = mysqli_query($connect, "SELECT * FROM red where id_area = $id_area and status=1 group by actividad order by actividad asc");

						$nnn = 0;

						echo "<font size=2 color='black'>";

						while ($row33111 = mysqli_fetch_array($resultado33111)) {

							if ($nnn > 0) {

								echo ", ";

							}

							$resultado331111 = mysqli_query($connect, "SELECT * FROM areas_actividades where id = $row33111[actividad]");

							$row331111 = mysqli_fetch_array($resultado331111);

							echo "<a href='index.php?tema=" . $id_area . "&actividad=" .  $row331111[id] . "'><br>" . $row331111[actividad] . "</a>";

							$nnn++;

						}

						echo "</font>";

						?>

					</tr>

				</table>
