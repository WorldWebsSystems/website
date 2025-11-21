<?php

setlocale(LC_TIME, 'es_VE'); // Localiza en español Venezuela
date_default_timezone_set('America/Caracas');

$time = time();

$dia      = date('d', $time);
$mes      = date('m', $time);
$ano      = date('Y', $time);
$hour     = date('h', $time);
$minutos  = date('i', $time);
$segundos = date('s', $time);
$am_pm    = date('A', $time);

$fechaant     = date('Y', $time - 86400) . "-" . date('m', $time - 86400) . "-" . date('d', $time - 86400);
$fecha        = $ano . "-" . $mes . "-" . $dia;
$fecha_actual = $dia . "-" . $mes . "-" . $ano;
$hora         = $hour . ":" . $minutos . ":" . $segundos . " " . $am_pm;
$hora_actual  = $hour . ":" . $minutos . " " . $am_pm;
$fecha_hora   = $fecha . " " . $hora;

//devuelve $fecha y $hora al sistema

?>
