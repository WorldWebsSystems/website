<?php

	$result911 = mysqli_query($connect, "SELECT * FROM localizaciones where id_servicio=$iid_servicio and id_plan=$row1[id] and status=1 order by localizacion");

	$regiones = "";

	while ($row911 = mysqli_fetch_array($result911)){

		$regiones = $regiones . $row911[localizacion] . "<br>";

	}

?>

<section id="why-us" class="cliens section-bg">

	<div class="accordion-list">

		<ul>
								
			<li>

				<a data-toggle="collapse" class="collapsed" href="#accordion-list-1">Regiones Disponibles 
				<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				<div id="accordion-list-1" class="collapse" data-parent=".accordion-list">

					<?php echo $regiones; ?>

       	     			</div>

			</li>