<?php

$resultado = mysqli_query($connect, "SELECT count(*) as cantidad FROM contratos where contrato='$contrato'");
$row 	   = mysqli_fetch_array($resultado);

if ($row[cantidad] == 0) {

	$consulta="insert into contratos (

		id_cliente,
		contrato,
		id_tarifa,
		t2,
		t3,
		t4,
		t5,
		t6,
		t7,
		t8,
		t9,
		t10,
		t11,
		contrato_aceptado,
		contrato_inicio,
		contrato_fin,
		contrato_inicio_hora,
		id_pago,
		fecha_pago,
		transaccion_pago,
		forma_pago,
		monto,
		observaciones,
		verificado,
		fecha,
		hora,
		ciudad,
		pais,
		ip

	) values (

		'$id_cliente',
		'$contrato',
		'$id_plan',
		'$t2',
		'$t3',
		'$t4',
		'$t5',
		'$t6',
		'$t7',
		'$t8',
		'$t9',
		'$t10',
		'$t11',
		'0',
		'',
		'',
		'',
		'',
		'',
		'',
		'$forma_pago',
		'$total_monto',
		'',
		'',
		'$fecha',
		'$hora',
		'$ciudad',
		'$pais',
		'$ip'

	)";

	$resultado=mysqli_query($connect,$consulta);

	$concepto = "Contrato aceptado: ".$contrato;
	$usuario = "";
	include 'graba_historial.php';

}

?>
