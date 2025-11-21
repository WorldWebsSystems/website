<?php

if ($so <> 'movil') {
	$ancho_publicidad = 800;
}else{
	$ancho_publicidad = 350;
}

if ($so <> 'movil') {
	$imagen_publicidad = 'publicidad.jpg';
}else{
	$imagen_publicidad = 'publicidad_and.jpg';
}

?>

<img src='https://tuww.net/www/elrinconcito/images/<?php echo $imagen_publicidad; ?>' width='<?php echo $ancho_publicidad; ?>'>

<br><br>

<a href="https://steviewonderland.com/" target="_blank"><img src='https://tuww.net/www/steviewonderland/images/<?php echo $imagen_publicidad; ?>' width='<?php echo $ancho_publicidad; ?>'></a>