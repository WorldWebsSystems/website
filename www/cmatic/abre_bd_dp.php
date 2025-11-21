<?php

$accesobd 	= mysqli_connect("localhost", "ncfgiils_webmast", "WebMasterDP2019", "ncfgiils_accesodp");

$query 		= "SELECT * FROM acceso_bd_dp WHERE id=4";

$resultado 	= mysqli_query($accesobd, $query);

$row 		= mysqli_fetch_assoc($resultado);

?>
