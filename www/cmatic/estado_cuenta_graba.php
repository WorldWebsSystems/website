<?php

		$consulta="insert into transacciones (
			cuenta_trading,
			concepto,
			moneda,
			retiro,
			deposito,
			fecha,
			hora,
			ip,
			ciudad,
			pais,
			status
		) values (
			'$cuenta_trading',
			'$concepto',
			'$moneda',
			'$retiro',
			'$deposito',
			'$fecha',
			'$hora',
			'$ip',
			'$ciudad',
			'$pais',
			'1'
		)";

		$resultado=mysqli_query($connect,$consulta);

?>