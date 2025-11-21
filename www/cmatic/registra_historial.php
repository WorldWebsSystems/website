<?php

	$concepto = 'Visita a sitio web worldwebs.net | ' . $pagina_sitio;

	include 'fecha_hora.php';
	include 'detecta_ip.php';

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

		//include 'correo_visita.php';

?>