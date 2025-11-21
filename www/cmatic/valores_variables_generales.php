<?php

//=============================CONFIGURACIÓN GENERAL:

$result2   			= mysqli_query($connect, "SELECT * FROM configuracion where id=1");
$row2 	   			= mysqli_fetch_array($result2);

$limite_up    			= $row2[limite_up];
$limite_quota 			= $row2[limite_quota];
$sitekey      			= $row2[sitekey];
$iva	      			= $row2[iva];
$descripcion_suscripcion	= $row2[descripcion_suscripcion];
$cookies			= $row2[cookies];
$privacidad			= $row2[privacidad];
$filas				= $row2[filas];
$columnas			= $row2[columnas];
$banda_baja 			= $row2[banda_baja];
$banda_alta 			= $row2[banda_alta];

//=============================SERVICIOS:

$result2 			= mysqli_query($connect, "SELECT * FROM servicios where status>0 order by status");
$row2 				= mysqli_fetch_array($result2);

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=2");
$row2 	  			= mysqli_fetch_array($result2);
$video_webhosting		= $row2[video];
$etiqueta_webhosting		= $row2[etiqueta];

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=5");
$row2 	  			= mysqli_fetch_array($result2);
$video_vps			= $row2[video];
$etiqueta_vps			= $row2[etiqueta];

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=4");
$row2 	  			= mysqli_fetch_array($result2);
$video_chat_ia			= $row2[video];
$etiqueta_chat_ia		= $row2[etiqueta];

?>
