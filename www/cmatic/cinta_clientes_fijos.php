<marquee>

<?php

	$resultado33 = mysqli_query($connect, "SELECT * FROM red where publicidad = 1 and status = 1");

	$n = 1;

	while (($row33 = mysqli_fetch_array($resultado33)) or ($n < 11)) {

		if ($row33[publicidad] == 0) {

			?>

			<a href="https://wa.me/+584247756630" target="_blank">
			<img src='imagenes/publicidad.jpg' height='150'>
			</a>

			<?php

		}else{

			$resultado331 = mysqli_query($connect, "SELECT * FROM publicidad_red where id_red = $row33[id]");

			?>

			<a href="https://wa.me/+584247756630" target="_blank">
			<img src='imagenes/<?php echo $row331[imagen]; ?>' height='150'>
			</a>

			<?php

		}

		$n++;

	}

?>

</marquee>