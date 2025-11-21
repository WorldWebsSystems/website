<?php

//=============================VARIABLES GLOBALES:

$resultado2 		= mysqli_query($connect, "SELECT * FROM corporativo where id=$idioma");
$row2 			= mysqli_fetch_array($resultado2);

$id	 	 	= $row2[id];
$acercade		= $row2[acercade];
$descripcion_empresa	= $row2[descripcion_empresa];
$objetivos		= $row2[objetivos];
$mision			= $row2[mision];
$vision			= $row2[vision];
$valores		= $row2[valores];
$equipotrabajo		= $row2[equipotrabajo];
$video_ww		= $row2[video];

//=============================SERVICIOS:

$result2 			= mysqli_query($connect, "SELECT * FROM servicios where status>0 order by status");
$row2 				= mysqli_fetch_array($result2);

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=1");
$row2 	  			= mysqli_fetch_array($result2);
$descripcion_vps    		= $row2[descripcion];
$descripcion_vps_amplia    	= $row2[descripcion_amplia];
$video_vps		    	= $row2[video];

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=3");
$row2 	  			= mysqli_fetch_array($result2);
$descripcion_webhosting    	= $row2[descripcion];
$descripcion_webhosting_amplia  = $row2[descripcion_amplia];
$video_webhosting		= $row2[video];

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=4");
$row2 	  			= mysqli_fetch_array($result2);
$descripcion_chat_ia    	= $row2[descripcion];
$descripcion_chat_ia_amplia	= $row2[descripcion_amplia];
$video_chat		    	= $row2[video];

$result2  			= mysqli_query($connect, "SELECT * FROM servicios where id=6");
$row2 	  			= mysqli_fetch_array($result2);
$descripcion_ingenieria    	= $row2[descripcion];
$descripcion_ingenieria_amplia  = $row2[descripcion_amplia];
$video_ingenieria		= $row2[video];

$resultado2 			= mysqli_query($connect, "SELECT * FROM corporativo where id=2");
$row2 				= mysqli_fetch_array($resultado2);

$meta_descripcion_cmatic	= $row2[meta_descripcion];
$descripcion_empresa_cmatic	= $row2[descripcion_empresa];

$resultado2 			= mysqli_query($connect, "SELECT * FROM corporativo where id=3");
$row2 				= mysqli_fetch_array($resultado2);

$meta_descripcion_fundatics	= $row2[meta_descripcion];
$descripcion_empresa_fundatics	= $row2[descripcion_empresa];

?>