<?php

if ($so <> 'movil') {
	$ancho_publicidad = 800;
}else{
	$ancho_publicidad = 350;
}

$aleatorio = rand(0, 7);

if ($so <> 'movil') {

	if ($aleatorio == 0) {
		$imagen_publicidad = 'https://cmatic.live/www/elrinconcito/images/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/elrinconcito/';
	}

	if ($aleatorio == 1) {
		$imagen_publicidad = 'https://cmatic.live/www/elrinconcito/images/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/elrinconcito/';
	}

	if ($aleatorio == 2) {
		$imagen_publicidad = 'https://cmatic.live/www/franamagnetic/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/franamagnetic/';
	}

	if ($aleatorio == 3) {
		$imagen_publicidad = 'https://cmatic.live/www/elysaulpadel/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/elysaulpadel/';
	}

	if (($aleatorio == 4) or ($aleatorio == 5)) {
		$imagen_publicidad = 'https://cmatic.live/www/cmatic/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/cmatic/';
	}

	if ($aleatorio == 6) {
		$imagen_publicidad = 'https://cmatic.live/www/funproa/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/funproa/';
	}

	if ($aleatorio == 7) {
		$imagen_publicidad = 'https://cmatic.live/www/richardrodr/publicidad.jpg';
		$url_publicidad = 'https://cmatic.live/www/richardrodr/';
	}

}else{

	if ($aleatorio == 0) {
		$imagen_publicidad = 'https://cmatic.live/www/elrinconcito/images/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/elrinconcito/';
	}

	if ($aleatorio == 1) {
		$imagen_publicidad = 'https://cmatic.live/www/elrinconcito/images/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/elrinconcito/';
	}

	if ($aleatorio == 2) {
		$imagen_publicidad = 'https://cmatic.live/www/franamagnetic/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/franamagnetic/';
	}

	if ($aleatorio == 3) {
		$imagen_publicidad = 'https://cmatic.live/www/elysaulpadel/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/elysaulpadel/';
	}

	if (($aleatorio == 4) or ($aleatorio == 5)) {
		$imagen_publicidad = 'https://cmatic.live/www/cmatic/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/cmatic/';
	}

	if ($aleatorio == 6) {
		$imagen_publicidad = 'https://cmatic.live/www/funproa/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/funproa/';
	}

	if ($aleatorio == 7) {
		$imagen_publicidad = 'https://cmatic.live/www/richardrodr/publicidad_and.jpg';
		$url_publicidad = 'https://cmatic.live/www/richardrodr/';
	}

}

?>

<a href="<?php echo $url_publicidad; ?>" target="_blank"><img src='<?php echo $imagen_publicidad; ?>' width='<?php echo $ancho_publicidad; ?>'></a>