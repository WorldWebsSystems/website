<?php

	include 'abre_bd_query_sitios.php';

	$resultado55 = mysqli_query($connect, "SELECT * FROM red_suscripciones order by email asc");

	while ($row55 = mysqli_fetch_array($resultado55)) {

		echo $row55[email] . ", ";

	}

?>
