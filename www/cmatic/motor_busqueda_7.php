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

	switch ($pppagina_sitio) {

    		case $menu_inicio:
        		$pagina_sitio = $menu_inicio;
        		break;

    		case $menu_nosotros;
        		$pagina_sitio = $menu_nosotros;
        		break;

    		case $menu_nosotros_objetivos;
        		$pagina_sitio = $menu_nosotros_objetivos;
        		break;

    		case $menu_nosotros_equipotrabajo;
        		$pagina_sitio = $menu_nosotros_equipotrabajo;
        		break;

    		case $menu_nosotros_valores;
        		$pagina_sitio = $menu_nosotros_valores;
        		break;

    		case $menu_nosotros_misionvision;
        		$pagina_sitio = $menu_nosotros_misionvision;
        		break;

    		case $menu_nosotros_patrocinantes;
        		$pagina_sitio = $menu_nosotros_patrocinantes;
        		break;

    		case $menu_cmatic;
        		$pagina_sitio = $menu_cmatic;
        		break;

    		case $menu_fundatics;
        		$pagina_sitio = $menu_fundatics;
        		break;

   		case $menu_ingenieria;
        		$pagina_sitio = $menu_ingenieria;
        		break;

   		case $menu_ingenieria_tarifas;
        		$pagina_sitio = $menu_ingenieria_tarifas;
        		break;

   		case $menu_vps;
        		$pagina_sitio = $menu_vps;
        		break;

   		case $menu_vps_tarifas;
        		$pagina_sitio = $menu_vps_tarifas;
        		break;

    		case $menu_websites;
        		$pagina_sitio = $menu_websites;
        		break;

    		case $menu_websites_tarifas;
        		$pagina_sitio = $menu_websites_tarifas;
        		break;

    		case $menu_webhosting;
        		$pagina_sitio = $menu_webhosting;
        		break;

    		case $menu_webhosting_tarifas;
        		$pagina_sitio = $menu_webhosting_tarifas;
        		break;

    		case $menu_ia_descripcion;
        		$pagina_sitio = $menu_ia_descripcion;
        		break;

    		case $menu_trading;
        		$pagina_sitio = $menu_trading;
        		break;

    		case $menu_trading_metodologia;
        		$pagina_sitio = $menu_trading_metodologia;
        		break;

    		case $menu_trading_simulador;
        		$pagina_sitio = $menu_trading_simulador;
        		break;

    		case $menu_trading_senales;
        		$pagina_sitio = $menu_trading_senales;
        		break;

    		case $menu_chat_ia;
        		$pagina_sitio = $menu_chat_ia;
        		break;

    		case $menu_carrito_compras;
        		$pagina_sitio = $menu_carrito_compras;
        		break;

    		case $menu_pago;
        		$pagina_sitio = $menu_pago;
        		break;

    		case $menu_contacto_formulario;
        		$pagina_sitio = $menu_contacto_formulario;
        		break;

    		case $contacto_email;
        		$pagina_sitio = $contacto_email;
        		break;

    		case $contacto_whatspapp;
        		$pagina_sitio = $contacto_whatsapp;
        		break;

    		case $menu_micuenta;
        		$pagina_sitio = $menu_micuenta;
        		break;

    		case $menu_dashboard;
        		$pagina_sitio = $menu_dashboard;
        		break;

    		case $menu_dashboard_login;
        		$pagina_sitio = $menu_dashboard_login;
        		break;

    		case $menu_dashboard_registro;
        		$pagina_sitio = $menu_dashboard_registro;
        		break;

    		case $menu_terminos_condiciones;
        		$pagina_sitio = $menu_terminos_condiciones;
        		break;

    		case $menu_acerca;
        		$pagina_sitio = $menu_acerca;
        		break;

	}

?>