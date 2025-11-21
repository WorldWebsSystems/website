<?php

	if ($g == '') {

		$consulta="insert into historial (
			id_red,
			concepto,
			ip,
			ciudad,
			pais,
			fecha,
			hora
		) values (
			'$id_red',
			'$concepto',
			'$ip',
			'$ciudad',
			'$pais',
			'$fecha',
			'$hora'
		)";

		$resultado=mysqli_query($connect,$consulta);

	}

	$resultado999 = mysqli_query($connect, "SELECT count(*) as count FROM historial where fecha = '$fecha' and id_red = $id_red");

	$row999       = mysqli_fetch_array($resultado999);

	$count     = $row999[count];

	if ($count <= 1) {

		$visitas = $row33[visitas] + 1;

		$resultado331 = mysqli_query($connect, "UPDATE red SET visitas=$visitas WHERE carpeta = '$carpeta'");

	}else{

		$visitas = $row33[visitas];

	}

?>