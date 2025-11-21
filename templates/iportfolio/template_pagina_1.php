<?php

	include '../../template_encabezado.php';

	if ($so <> 'movil') {
		$ancho = 800;
		$alto = 800;
		$alto1 = 600;
		$alto2 = 315;
		$margen = 10;
	}else{
		$ancho = 320;
		$alto = 320;
		$alto1 = 320;
		$alto2 = 340;
		$margen = 20;
	}

	include '../../templates/iportfolio/style-modal.php';

	?>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../../templates/iportfolio/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="../../templates/iportfolio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../templates/iportfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../../templates/iportfolio/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../../templates/iportfolio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="../../templates/iportfolio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 	 <!-- Template Main CSS File -->
	<link href="../../templates/iportfolio/assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
	* Template Name: iPortfolio
	* Updated: Mar 10 2023 with Bootstrap v5.2.3
	* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
