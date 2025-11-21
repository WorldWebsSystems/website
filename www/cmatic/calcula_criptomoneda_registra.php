<?php

	$fecha_bd     = substr($ffecha,0,4). "-" . substr($ffecha,5,2) . "-" . substr($ffecha,8,2) . " " . substr($hhora,0,2). ":" . substr($hhora,3,2). ":" . substr($hhora,6,2). " " . substr($hhora,9,2);
	$fecha_actual = $fecha . " " . $hora;

	$transcurrido = strtotime($fecha_actual) - strtotime($fecha_bd);

	if ($transcurrido >= 5){

		$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda='$grabar_moneda'");

		$row2 = mysqli_fetch_array($resultado2);

		$website = $row2[website_tasa2];
		$match   = $row2[match2];

		$data = file_get_contents($website);

		if ( preg_match($match , $data , $cap ) ) {

			$ttasa = $cap[1];

			$valor_moneda = "";

			for ($ii = 0; $ii <= strlen($ttasa); $ii++) {

				if ( (substr($ttasa, $ii, 1) <> '$') and (substr($ttasa, $ii, 1) <> ',') ) {

					$valor_moneda = $valor_moneda . substr($ttasa, $ii, 1);

				}

			}

		}

		$consulta_nuevatasa = "insert into historico_criptos (
			moneda,
			tasa,
			fecha,
			hora,
			ip,
			ciudad,
			pais
		) values (
			'$grabar_moneda',
			'$valor_moneda',
			'$fecha',
			'$hora',
			'$ip',
			'',
			''
		)";

		$resultado_nuevatasa=mysqli_query($connect,$consulta_nuevatasa);

		$seccion_motor_trading = 4;

		include 'ia.php';

	}

?>