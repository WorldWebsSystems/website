<?php

$result2 	  = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_tarifa");
$row2 		  = mysqli_fetch_array($result2);

$id_plan 	  = $row2[id_plan];
$detalle 	  = $row2[detalle];
$detalle_amplio   = $row2[detalle_amplio];
$duracion 	  = $row2[duracion];
$descripcion	  = $row2[descripcion];
$id_plan	  = $row2[id_plan];
$iid_servicio 	  = $row2[id_servicio];

?>
