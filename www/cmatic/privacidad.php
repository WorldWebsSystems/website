<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	include 'template_encabezado.php';

	?>


</head>

<body>

<font face = 'arial'>

<div align = 'center'>

	<?php

	include 'fecha_hora.php';

	?>

	<img src='imagenes/clients/<?php echo $carpeta; ?>/logos/logo_worldwebs.png' height=80><br>
	<font size=3><b><?php echo $descripcion; ?></b></font>

	<br><br>

	<?php echo $privacidad; ?>

	<br><br>

	&copy; Copyright (<?php echo $ano; ?>) 
	<strong><span><a href="#" target="_blank">WorldWebs Systems c.a.</a></span></strong>.<br>
	Todos los derechos reservados.

	<br><br><br>

</div>

</font>

</body>

</html>