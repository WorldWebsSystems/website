<?php

$resultado 		= mysqli_query($connect, "SELECT * FROM corporativo where id=$idioma");
$row 			= mysqli_fetch_array($resultado);

$id	 	 	= $row[id];
$codigo_cliente  	= $row[codigo_cliente];
$empresa 	 	= $row[empresa];
$descripcion_cliente 	= $row[descripcion];
$lema	 	 	= $row[lema];
$direccion 	 	= $row[direccion];
$email 		 	= $row[email];
$telefonos	 	= $row[telefonos];
$ciudad 	 	= $row[ciudad];
$estado 	 	= $row[estado];
$id_pais 	 	= $row[pais];

$resultado2 = mysqli_query($connect, "SELECT * FROM loc_paises where id=$id_pais");
$row2 = mysqli_fetch_array($resultado2);

$pais 	 	 	= $row2[pais];

$continente 	 	= $row[continente];

$carpeta 	 	= $row[carpeta];
$contrasena 	 	= $row[contrasena];

$contrato 	 	= $row[contrato];
$contrato_no 	 	= $row[contrato_no];
$contrato_inicio 	= $row[contrato_inicio];
$contrato_inicio_hora 	= $row[contrato_inicio_hora];
$contrato_fin 	 	= $row[contrato_fin];

$idarea	 	 	= $row[idsubarea];
$idsubarea 	 	= $row[idsubarea];
$idsubareaesp 	 	= $row[idsubareaesp];

$meta_descripcion	= $row[meta_descripcion];
$meta_keywords	 	= $row[meta_keywords];

$estilo 	 	= $row[estilo];

$twitterc	 	= $row[twitter];
$facebookc	 	= $row[facebook];
$instagramc	 	= $row[instagram];
$skypec		 	= $row[skype];
$linkedinc	 	= $row[linkedin];
$telegramc	 	= $row[telegram];
$coordenadas	 	= $row[coordenadas];

$url	 	 	= $row[url];
$url_imagen 	 	= $row[url_imagen];
$favicon 	 	= $row[favicon];
$video	 	 	= $row[video];

$catalogo 	 	= $row[catalogo];
$cmatic 	 	= $row[cmatic];
$verificado	 	= $row[verificado];
$status 	 	= $row[status];
$bloqueo 	 	= $row[bloqueo];
$publicidad 	 	= $row[publicidad];

$fecha_creacion	 	= $row[fecha_creacion];
$hora_creacion	 	= $row[hora_creacion];
$ip 		 	= $row[ip];

?>