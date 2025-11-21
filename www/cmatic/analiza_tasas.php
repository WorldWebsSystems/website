<?php

$tolerancia = 1.05;

echo "monto: ".$tasa_banda_alta;

$alerta_bandaalta_superada = $tasa_banda_alta * $tolerancia;
$alerta_bandaalta_alcanzada = $tasa_banda_alta;
$alerta_bandaalta_proxima = $tasa_banda_alta / $tolerancia;

$alerta_bandamedia_vender = $tasa_banda_media * $tolerancia;
$alerta_bandamedia_comprar = $tasa_banda_media / $tolerancia;

$alerta_bandabaja_proxima = $tasa_banda_baja / $tolerancia;
$alerta_bandabaja_alcanzada = $tasa_banda_baja;
$alerta_bandabaja_superada = $tasa_banda_baja * $tolerancia;

$alerta_atencion = "audios/" . "alerta_atencion" . ",";

if ($mmmonto > $alerta_bandaalta_proxima) {
	$alerta = $alerta_atencion . "audios/" . "alerta_bandaalta_proxima" . ",";
}

if ($mmmonto >= $alerta_bandaalta_alcanzada) {
	$alerta = $alerta_atencion . "audios/" . "alerta_bandaalta_alcanzada" . ",";
}

if ($mmmonto > $alerta_bandaalta_superada) {
	$alerta = $alerta_atencion . "audios/" . "alerta_bandaalta_superada" . ",";
}

if ($mmmonto < $alerta_bandabaja_proxima) {
	$alerta = $alerta_atencion . "audios/" . "alerta_bandabaja_proxima" . ",";
}

if ($mmmonto <= $alerta_bandabaja_alcanzada) {
	$alerta = $alerta_atencion . "audios/" . "alerta_bandabaja_alcanzada" . ",";
}

if ($mmmonto < $alerta_bandabaja_superada) {
	$alerta = $alerta_atencion . "audios/" . "alerta_bandabaja_superada" . ",";
}

?>