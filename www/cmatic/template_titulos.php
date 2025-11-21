<a href="<?php echo $link; ?>">
<img src="imagenes/<?php echo $imagen; ?>" width=50 class="img-fluid animated" alt=""><br>
<h2><b><font size=5><?php echo $menu1; ?></font></b></a></h2>

<h1>

<b><font size=3><?php echo $menu2; ?></font></b><br>

<?php

if ($numero_descripcion == 0) {

	if ($link_tarifas <> '') {

		?><font size=2><a href="<?php echo $link_tarifas; ?>"> Ver planes y tarifas</a></font><?php

	}else{

		?><font size=2>Gratuito en periodo de prueba</font><?php

	}

	?>

	</h1>

	<font size=2><a href="https://youtu.be/<?php echo $video; ?>" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Video promocional <i class="icofont-play-alt-2"></i></a></font>

	<br><br>

	<?php

}

?>