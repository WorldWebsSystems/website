<?php 

$cv1 = 1;
$cv2 = 1;
$cv3 = 1;
$cv4 = 1;
$cv5 = 1;
$cv6 = 1;
$cv7 = 1;

?>

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<header id="header">

	<div class="d-flex flex-column">

		<div class="profile">

			<img src="../../www/<?php echo $carpeta; ?>/<?php echo $imagen; ?>" alt="" class="img-fluid rounded-circle">

			<div class="social-links mt-3 text-center">

				<a href="https://www.x.com/<?php echo $row33[x]; ?>" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>

				<a href="https://www.facebook.com/<?php echo $row33[facebook]; ?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>

				<a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>

				<a href="https://www.linkedin.com/in/<?php echo $row33[linkedin]; ?>" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>

			</div>

		</div>

		<nav id="navbar" class="nav-menu navbar">

			<ul>

				<li><a href="https://cmatic.live/www/<?php echo $carpeta; ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
	
				<li><a href="https://cmatic.live/www/<?php echo $carpeta; ?>#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Perfil</span></a></li>

				<li><a href="https://cmatic.live/www/<?php echo $carpeta; ?>#experiencia" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Experiencia</span></a></li>

				<li><a href="https://cmatic.live/www/<?php echo $carpeta; ?>#resumen" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resumen Curricular</span></a></li>
	
				<li><a href='../../templates/<?php echo $row33[template]; ?>/imprime_cv_pdf.php?id=<?php echo $id_cliente; ?>&cv1=<?php echo $cv1; ?>&cv2=<?php echo $cv2; ?>&cv3=<?php echo $cv3; ?>&cv4=<?php echo $cv4; ?>&cv5=<?php echo $cv5; ?>&cv6=<?php echo $cv6; ?>&cv7=<?php echo $cv7; ?>' class="nav-link scrollto" target="_blank"><img src="../../imagenes/icono_pdf.png" height='25' title='Generar Resumen Curricular en PDF'>&nbsp;&nbsp;<span>Imprimir</span></a></li>

				<li><a href="https://cmatic.live/www/<?php echo $carpeta; ?>#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>

				<li><a href="?ver=publicaciones" class="nav-link scrollto"><img src="../../imagenes/icono_isbn.png" width='22'>&nbsp;&nbsp;<span>Publicaciones</span></a></li>

			</ul>

		</nav>

	</div>

</header>