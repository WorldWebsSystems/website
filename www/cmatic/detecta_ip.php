<?php

$meta   = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$ip     ="{$_SERVER['REMOTE_ADDR']}";
$ciudad = $meta['geoplugin_city'];
$pais   = $meta['geoplugin_countryName'];

?>
