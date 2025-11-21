<!DOCTYPE html>
<html lang="es">

<head>

</head>

<body>

<section id="chat_ia" class="titulo">

	<div class="container" data-aos="fade-up">

		<div class="section-title">

			<?php

			$result = mysqli_query($connect, "SELECT count(*) as vistas FROM historial where concepto='Visita a sitio web worldwebs.net | www.aichatting.net'");
			$row = mysqli_fetch_array($result);
			$vistas = $row[vistas];

			include 'valores_cliente_amplios.php';
			include 'chat_ia_descripcion.php';

			?>

		</div>

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

			<div class="box featured">

				<a href="https://youtu.be/VR61vl7Fb_U" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> ¿Cómo chatear con una Inteligencia Artificial IA? <i class="icofont-play-alt-2"></i></a><br>
				<?php echo "<br><font size=1>Conversaciones: <b>".$vistas."</b></font>"; ?>

			</div>

		</div>

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=300">

			<p align="justify">

				<?php echo $descripcion_chat_ia; ?><br><br>

				<?php echo $descripcion_chat_ia_amplia; ?><br><br>

				<?php include 'captcha.php'; ?><br><br>

				<a id='boton_s2' name='boton_s2' href="chat_ia_link.php?chat=1" target="_blank" class="fcc-btn"  onclick="window.open(this.href, this.target, 'top=0,left=300,width=750,height=670'); return false;" hidden />Opción No. 1: AIChatting©</a><br><br>

				<a id='boton_s3' name='boton_s3' href="chat_ia_link.php?chat=2" target="_blank" class="fcc-btn"  onclick="window.open(this.href, this.target, 'top=0,left=300,width=750,height=670'); return false;" hidden />Opción No. 2: GlobalDV©</a>

			</p>

		</div>

	</div>

</section>

</body>

</html>