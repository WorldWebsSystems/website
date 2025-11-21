<?php

	$ruta_sitio 	= $_SERVER['SCRIPT_NAME'];
	$long    	= strlen($ruta_sitio);
	$ruta_sitio 	= SUBSTR($ruta_sitio, 1, $long - 5);
	$pppagina_sitio = $ruta_sitio;
	$long    	= strlen($ruta_sitio);

	$band = 0;
	$i = 0;
	$rruta_sitio;

	while ($i <= $long) {

		$letra = substr($ruta_sitio,$i,1);
		if ($letra == "_") {
			$rruta_sitio = $rruta_sitio . " | ";
		}else{
			$rruta_sitio = $rruta_sitio . substr($ruta_sitio,$i,1);
		}
		$i++;

	}

	$ruta_sitio = 	$rruta_sitio;

echo $ruta_sitio;

?>