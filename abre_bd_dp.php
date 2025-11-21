<?php

$accesobd	= mysqli_connect("localhost","ncfgiils_webmast","WebMasterDP2019","ncfgiils_accesodp");
$resultado 	= mysqli_query($accesobd, "SELECT * FROM acceso_bd_dp WHERE id=4");
$row 		= mysqli_fetch_array($resultado);

?>
