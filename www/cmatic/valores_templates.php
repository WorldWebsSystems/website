<?php

$result2  	= mysqli_query($connect, "SELECT * FROM templates where id=$id");
$row2 	  	= mysqli_fetch_array($result2);

$id_template    = $row2[id];
$template 	= $row2[template];
$url_imagen   	= $row2[url_imagen];
$idarea  	= $row2[idarea];
$creador  	= $row2[creador];


?>
