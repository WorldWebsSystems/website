<?php

$email 	     = $_POST[email];
$contrasena  = $_POST[contrasena];

$result1  	= mysqli_query($connect, "SELECT id, count(*) as validado FROM clientes where email='$email' and contrasena='$contrasena'");
$row1 	  	= mysqli_fetch_array($result1);
$validado	= $row1[validado];

include 'fecha_hora.php';
include 'detecta_ip.php';

if ($validado <> 0) {

	$id_cliente  = $row1[id];

	$forma_pago  = $_POST[forma_pago];
	$total_monto = $_POST[total_monto];
	$carrito     = $_POST[carrito];
	$t2 = 0;
	$t3 = 0;
	$t4 = 0;
	$t5 = 0;
	$t6 = 0;
	$t7 = 0;
	$t8 = 0;
	$t9 = 0;
	$t10 = 0;
	$t11 = 0;

	include 'valores_forma_pago.php';

	include 'registra_contrato.php';

	switch ($tipo) {

		case $tipo:

			include 'formas_pago_opciones_api_'.$tipo.'.php';
        		break;

	}

}else{

	include 'registro_usuario.php';

}

?>