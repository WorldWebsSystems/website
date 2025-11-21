<?php

	$id 	     	    = $row2[id];
	$servicio    	    = $row2[servicio];
	$promo 	     	    = $row2[promo];
	$descripcion 	    = $row2[descripcion];
	$descripcion_amplia = $row2[descripcion_amplia];
	$so	    	    = $row2[so];
	$etiqueta    	    = $row2[etiqueta];
	$video	     	    = $row2[video];
	$imagen	     	    = $row2[imagen];
	$terminos_contrato  = $row2[terminos_contrato];
	$status	     	    = $row2[status];

	switch ($id) {

		case 1:
			$link = $link_vps;
			break;

		case 2:
			$link = $link_websites;
			break;

		case 3:
			$link = $link_webhosting;
			break;

		case 6:
			$link = $link_ingenieria;
			break;

	}

?>