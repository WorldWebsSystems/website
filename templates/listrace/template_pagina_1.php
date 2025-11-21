<?php

	include '../../template_encabezado.php';

	if ($so <> 'movil') {
		$ancho = 600;
		$ancho1 = 560;
		$alto1 = 315;
		$anchocirculo = 300;
		$radio = 150;
		$margen = 10;
		$distancia_top = 100;
		$titulo1 = 4;
		$titulo2 = 3;
	}else{
		$ancho = 320;
		$ancho1 = 300;
		$alto1 = 170;
		$anchocirculo = 200;
		$radio = 100;
		$margen = 20;
		$distancia_top = 140;
		$titulo1 = 3;
		$titulo2 = 2;
	}

	include '../../templates/listrace/style-redonda.php';

	include '../../templates/listrace/style-modal.php';

	include '../../templates/listrace/style-iconos.php';

	?>

        <link rel="stylesheet" href="../../templates/listrace/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../templates/listrace/assets/css/linearicons.css">
        <link rel="stylesheet" href="../../templates/listrace/assets/css/animate.css">
        <link rel="stylesheet" href="../../templates/listrace/assets/css/flaticon.css">
        <link rel="stylesheet" href="../../templates/listrace/assets/css/slick.css">
	<link rel="stylesheet" href="../../templates/listrace/assets/css/slick-theme.css">
        <link rel="stylesheet" href="../../templates/listrace/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../templates/listrace/assets/css/bootsnav.css" >	
        <link rel="stylesheet" href="../../templates/listrace/assets/css/style.css">
        <link rel="stylesheet" href="../../templates/listrace/assets/css/responsive.css">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>