<?php

		$consulta="insert into historial (
			concepto,
			ip,
			ciudad,
			pais,
			fecha,
			hora
		) values (
			'$concepto',
			'$ip',
			'$ciudad',
			'$pais',
			'$fecha',
			'$hora'
		)";

		$resultado=mysqli_query($connect,$consulta);

?>