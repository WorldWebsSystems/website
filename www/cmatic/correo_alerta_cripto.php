<!DOCTYPE html>
<html lang='es'>

<head>

	<meta charset="utf-8">

</head>

<body>

<?php

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');

if ($valor_moneda < $banda_baja) {

	$asunto = $fecha . "|" . $hora . ": Alerta Tasa por DEBAJO de la banda baja de $ " . $banda_baja . " por BCH";
	$mensaje = "Tasa: ". $valor_moneda ."\n\n";

}else if (($valor_moneda >= $banda_baja) and ($valor_moneda <= $banda_alta)) {

	$asunto = $fecha . "|" . $hora . ": Tasa por ENCIMA de la banda baja de $ " . $banda_baja . " por BCH";
	$mensaje = "Tasa: ". $valor_moneda ."\n\n";

}else if ($valor_moneda > $banda_alta) {

	$asunto = $fecha . "|" . $hora . ": Alerta Tasa por ENCIMA de la banda alta de $ " . $banda_alta . " por BCH";
	$mensaje = "Tasa: ". $valor_moneda ."\n\n";
}

$emailheader = "From: WORLDWEBS | Monitor de criptomoneda BCH <no-responder@worldwebs.net> \r\n";

$mensaje = utf8_encode($mensaje);

mail("richardrodr@gmail.com", $asunto, $mensaje, $emailheader);

?>

</body>

</html>