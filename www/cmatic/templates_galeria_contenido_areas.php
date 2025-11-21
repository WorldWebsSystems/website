<?php 

echo "<div align=\"center\">";

	//***********************************************************************************************************Control de datos de BD

	echo "<font color='white'>";

		$consulta    = "SELECT * FROM templates where idarea=$idarea order by template asc";
		$resultado   = mysqli_query($connect, $consulta);

	echo "</font>";

	//***********************************************************************************************************Enlace al Motor de búsqueda

	$motor = 1;
	include 'motor_busqueda.php';

echo "</div>";

?>