<div align='center'>

	<?php

	include 'template_estilo.php';

	include 'abre_bd_query_sitios.php';

	include 'detecta_ip.php';
	include 'fecha_hora.php';

	$cuenta_trading = $_GET[cuenta];
	$transaccion 	= $_GET[transaccion];
	$monto 		= $_GET[monto];
	$cripto		= $_GET[moneda];
	$tasa_cambio	= $_GET[tasa];

	echo $cuenta_trading . "-".$monto . "-".$cripto . "-".$transaccion . "-".$tasa_cambio;


	if ($transaccion <> 0) {

		if (($transaccion == 1) or ($transaccion == 2)) {

			$retiro = 0;
			$deposito = $monto;

		}else if (($transaccion == 3) or ($transaccion == 4)) {

			$retiro = $monto;
			$deposito = 0;

		}else if (($transaccion == 5) or ($transaccion == 6)) {

			$retiro = $monto;
			$deposito = 0;

		}

		$concepto = '';		

		if ($transaccion == 1) {

			$concepto = "Apertura de cuenta";
			$moneda	= "USD$";

		}else if ($transaccion == 2) {

			$concepto = "Apertura de cuenta";
			$moneda	= $cripto;

		}else if ($transaccion == 3) {

			$concepto = "Retiro de fondos";
			$moneda	= "USD$";

		}else if ($transaccion == 4) {

			$concepto = "Retiro de fondos";
			$moneda	= $cripto;

		}else if ($transaccion == 5) {

			$concepto = "Compra de " . $cripto . " | Tasa: " . $tasa_cambio;
			$moneda	= "USD$";

		}else if ($transaccion == 6) {

			$concepto = "Venta de " . $cripto . " | Tasa: " . $tasa_cambio;
			$moneda	= $cripto;

		}

		include 'estado_cuenta_graba.php';

		if ($transaccion == 5) {

			$concepto = "Depósito de fondos";
			$retiro = 0;
			$deposito = $monto / $tasa_cambio;
			$moneda	= $cripto;
			include 'estado_cuenta_graba.php';

		}else if ($transaccion == 6) {

			$concepto = "Depósito de fondos";
			$retiro = 0;
			$deposito = $monto  / $tasa_cambio;
			$moneda	= $cripto;
			include 'estado_cuenta_graba.php';

		}

	}

	?>

	<table width='100%' border='2'>

		<tr>

			<td align='center' width='10%'>
				Fecha
			</td>

			<td align='center' width='10%'>
				Hora
			</td>

			<td align='center' width='22%'>
				Concepto
			</td>

			<td align='center' width='6%'>
				Moneda
			</td>

			<td align='center' width='13%'>
				Retiros
			</td>

			<td align='center' width='13%'>
				Depósitos
			</td>

			<td align='center' width='13%'>
				Saldo USD$
			</td>

			<td align='center' width='13%'>
				Saldo <?php echo $cripto; ?>
			</td>

		</tr>

	<?php

	$saldo_usd = 0;
	$saldo_cripto = 0;

	$resultado 	= mysqli_query($connect, "SELECT * FROM transacciones where cuenta_trading='$cuenta_trading' and status=1 order by id asc");

	while ($row = mysqli_fetch_array($resultado)) {

		$cuenta_trading = $row[cuenta_trading];
		$concepto 	= $row[concepto];
		$moneda 	= $row[moneda];
		$retiro 	= $row[retiro];
		$deposito 	= $row[deposito];
		$fecha 		= $row[fecha];
		$hora 		= $row[hora];
		$ip 		= $row[ip];
		$ciudad 	= $row[ciudad];
		$pais 		= $row[pais];

		if ($moneda == "USD$") {

			$saldo_usd = $saldo_usd + $deposito - $retiro;
			$decimales = 2;

		}else{

			$saldo_cripto = $saldo_cripto + $deposito - $retiro;
			$decimales = 8;

		}

		?>

		<tr>

			<td align='center'>
				<?php echo $fecha; ?>
			</td>

			<td align='center'>
				<?php echo $hora; ?>
			</td>

			<td>
				<?php echo $concepto; ?>
			</td>

			<td align='center'>
				<?php echo $moneda; ?>
			</td>

			<td align='right'>
				<?php if ($retiro <> 0) {echo number_format($retiro, $decimales, '.', ',');} ?>
			</td>

			<td align='right'>
				<?php if ($deposito <> 0) {echo number_format($deposito, $decimales, '.', ',');} ?>
			</td>

			<td align='right'>
				<?php if ($saldo_usd <> 0) {echo number_format($saldo_usd, 2, '.', ',');} ?>
			</td>

			<td align='right'>
				<?php if ($saldo_cripto <> 0) {echo number_format($saldo_cripto, 8, '.', ',');} ?>
			</td>

		</tr>

		<?php

	}

	?>

	</table>

	<?php

	$pie = 1;

	include 'template_estilo.php';

	?>

</div>