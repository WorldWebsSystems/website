<section id="titulo" class="titulo">

	<div class="container" data-aos="fade-up">

		<?php

		include 'valores_cliente_amplios.php';

		$titulo = $menu01_desc;
		include 'worldwebs_titulo.php';

		?>

		<p align="justify">

			<?php
			echo $objetivos."<br>";

			?><br><br>Para dar cumplimiento al indicado objeto de nuestra empresa, se dispondrán de diversos servicios, descritos a continuación:<br><br>

		</p>

		<?php

		$descripcion_amplia = false;

		include 'ingenieria_descripcion.php';

		?><p align="justify"><?php

			echo $descripcion_ingenieria_amplia."<br><br>";
	
			$id_plan = 10;
			$id_plan_tarifa = 26;

			$result1 	= mysqli_query($connect, "SELECT * FROM planes where id=$id_plan");
			$row1 		= mysqli_fetch_array($result1);

			$descripcion 	= $row1[descripcion];
			$descripcion1	= $descripcion;

			$result1 	= mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_plan_tarifa");
			$row1 		= mysqli_fetch_array($result1);

			$descripcion2 	= $row1[descripcion];

			$motor = 6;
			include 'motor_busqueda_6.php';

			echo $descripcion."<br><br><br>";

		?></p><?php

		include 'webhosting_descripcion.php';

		?><p align="justify"><?php

			echo $descripcion_webhosting_amplia."<br><br>";
	
			$id_plan 	= 9;
			$id_plan_tarifa = 25;

			$result1 	= mysqli_query($connect, "SELECT * FROM planes where id=$id_plan");
			$row1 		= mysqli_fetch_array($result1);

			$descripcion  	= $row1[descripcion];
			$descripcion1 	= $row1[descripcion];

			$result1 	= mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_plan_tarifa");
			$row1 		= mysqli_fetch_array($result1);

			$descripcion2 	= $row1[descripcion];

			include 'motor_busqueda_6.php';

			echo $descripcion."<br><br><br>";

		?></p><?php

		include 'websites_descripcion.php';

		?><p align="justify"><?php

			echo $descripcion_websites_amplia."<br><br>";

			$id_plan = 8;
			$id_plan_tarifa = 17;

			$result1 = mysqli_query($connect, "SELECT * FROM planes where id=$id_plan");
			$row1 = mysqli_fetch_array($result1);

			$descripcion = $row1[descripcion];

			$result1 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_plan_tarifa");
			$row1 = mysqli_fetch_array($result1);

			$descripcion2 = $row1[descripcion];

			include 'motor_busqueda_6.php';

			echo $descripcion."<br><br><br>";

		?></p><?php

		include 'vps_descripcion.php';

		?><p align="justify"><?php

			echo $descripcion_vps_amplia."<br><br>";

			$id_plan = 1;
			$id_plan_tarifa = 8;

			$result1 = mysqli_query($connect, "SELECT * FROM planes where id=$id_plan");
			$row1 = mysqli_fetch_array($result1);

			$descripcion = $row1[descripcion];

			$result1 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_plan_tarifa");
			$row1 = mysqli_fetch_array($result1);

			$descripcion2 = $row1[descripcion];

			include 'motor_busqueda_6.php';

			echo $descripcion;

			?>

		</p>

	</div>

</section>

