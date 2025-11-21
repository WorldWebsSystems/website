<?php

$result1 	= mysqli_query($connect, "SELECT * FROM planes where id=$id_plan");
$row1 		= mysqli_fetch_array($result1);

$id_plan     	= $row1[id];
$plan	 	= $row1[plan];
$detalle_amplio = $row1[detalle_amplio];
$descripcion 	= $row1[descripcion];
//$id_servicio 	= $row1[id_servicio];
$url_imagen 	= $row1[url_imagen];
$status 	= $row1[status];

?>
