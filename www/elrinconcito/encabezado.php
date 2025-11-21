<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2386237347587679"
     crossorigin="anonymous"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VJ4DC6SB8J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VJ4DC6SB8J');
</script>

	<?php 

	$idioma = $_GET['idioma'];

	if ($idioma == 'esp') {
		$texto = 'RESERVACIONES';
		$texto_cerrar = 'Cerrar';
	}elseif ($idioma == 'eng') {
		$texto = 'BOOKING';
		$texto_cerrar = 'Close';
	}elseif ($idioma == 'deu') {
		$texto = 'BUCHUNG';
		$texto_cerrar = 'Schliessen';
	}

	?>

	<title><?php echo $titulo_1; ?></title>
	<meta name=description content="<?php echo $titulo_2; ?>">
	<meta name=keywords content="<?php echo $titulo_3; ?>">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="shortcut icon" href="images/favicon.png" />

	<?php 

	include '../estilo.php';
	include 'detecta_so.php';

	$logo = "logo_swl2_w.png";

	if ($so == 'windows') {
		$logo_ancho = 150;
	}else{
		$logo_ancho = 100;
	}

	?>

	<div align='center'>

    		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

	    		<div class="container">

	      			<a class="navbar-brand" href="https://tuww.net/www/elrinconcito/"><img src='https://tuww.net/www/elrinconcito/images/logo_rinconcito.png' width='<?php echo $logo_ancho; ?>'></a>
	      			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        		<img src='https://tuww.net/www/elrinconcito/images/icono_menu_close.png' width='15'> <font color='white'>Menu</font>
	      			</button>

	      			<div class="collapse navbar-collapse" id="ftco-nav">

	        			<ul class="navbar-nav ml-auto">

	          				<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/" class="nav-link"><b><font color='white'><?php echo $menu_1; ?></font></b></a></li>
	        	  			<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/nosotros.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_2; ?></font></b></a></li>
	        		  		<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/cabanas.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_3; ?></font></b></a></li>
         					<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/tarifas.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_6; ?></font></b></a></li>
						<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/reservacion.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_8; ?></font></b></a></li>
						<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/pagos.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_9; ?></font></b></a></li>
         					<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/consulta.php" class="nav-link"><b><font color='white'><?php echo $menu_7; ?></font></b></a></li>
		          			<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/ubicacion.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_4; ?></font></b></a></li>
		          			<li class="nav-item"><a href="https://tuww.net/www/elrinconcito/esp/contacto.php" class="nav-link" target="_blank"><b><font color='white'><?php echo $menu_5; ?></font></b></a></li>

	        			</ul>

	      			</div>

	    		</div>

	  	</nav>

	</div>