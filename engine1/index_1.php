	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

	<section id="inicio" class="services">

		<div class="container">

			<div class="section-title">

				<b><font color='black' size=4>Nuestros clientes:</b></font>

			</div>

		</div>

		<div class="container">

			<div class="row">

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="https://tuww.net/www/elrinconcito/images/publicidad.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="https://tuww.net/www/steviewonderland/images/publicidad.jpg" alt="tu mejor opción en un Hostal-Apartamento" title="tu mejor opción en un Hostal-Apartamento" id="wows1_1"/></li>
		<li><img src="https://tuww.net/www/franamagnetic/publicidad.jpg" alt="en el Valle de Benasque, España" title="en el Valle de Benasque, España" id="wows1_2"/></li>
		<li><img src="https://tuww.net/www/elysaulpadel/publicidad.jp" alt="confortables habitaciones" title="confortables habitaciones" id="wows1_3"/></li>
		<li><img src="https://tuww.net/www/cmatic/publicidad.jpg" alt="para descansar y recuperar energías" title="para descansar y recuperar energías" id="wows1_4"/></li>
		<li><img src="https://tuww.net/www/funproa/publicidad.jpg" alt="para un nuevo día de vacaciones" title="para un nuevo día de vacaciones" id="wows1_5"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/diapositiva11.jpg" alt="wowslider.com" title="y descansar plenamente" id="wows1_10"/></a></li>
		<li><img src="data1/images/diapositiva12.jpg" alt="disfrutando el Valle de Benasque, España" title="disfrutando el Valle de Benasque, España" id="wows1_11"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="https://tuww.net/www/elrinconcito/images/publicidad.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="https://tuww.net/www/steviewonderland/images/publicidad.jpg" alt="tu mejor opción en un Hostal-Apartamento"/>2</span></a>
		<a href="#" title=""><span><img src="https://tuww.net/www/franamagnetic/publicidad.jpg" alt="en el Valle de Benasque, España"/>3</span></a>
		<a href="#" title=""><span><img src="https://tuww.net/www/elysaulpadel/publicidad.jpg" alt="confortables habitaciones"/>4</span></a>
		<a href="#" title=""><span><img src="https://tuww.net/www/cmatic/publicidad.jpg" alt="para descansar y recuperar energías"/>5</span></a>
		<a href="#" title=""><span><img src="https://tuww.net/www/funproa/publicidad.jpg" alt="para un nuevo día de vacaciones"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslideshow</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->




	<?php

	$aleatorio = 5;

	while ($aleatorio >= 0) {

		if ($aleatorio == 0) {
			$imagen_publicidad = 'https://tuww.net/www/elrinconcito/images/publicidad_and.jpg';
			$url_publicidad = 'https://tuww.net/www/elrinconcito/';
		}

		if ($aleatorio == 1) {
			$imagen_publicidad = 'https://tuww.net/www/steviewonderland/images/publicidad_and.jpg';
			$url_publicidad = 'https://steviewonderland.com/';
		}

		if ($aleatorio == 2) {
			$imagen_publicidad = 'https://tuww.net/www/franamagnetic/publicidad_and.jpg';
			$url_publicidad = 'https://tuww.net/www/franamagnetic/';
		}

		if ($aleatorio == 3) {
			$imagen_publicidad = 'https://tuww.net/www/elysaulpadel/publicidad_and.jpg';
			$url_publicidad = 'https://tuww.net/www/elysaulpadel/';
		}

		if ($aleatorio == 4) {
			$imagen_publicidad = 'https://tuww.net/www/cmatic/publicidad_and.jpg';
			$url_publicidad = 'https://tuww.net/www/cmatic/';
		}

		if ($aleatorio == 5) {
			$imagen_publicidad = 'https://tuww.net/www/funproa/publicidad_and.jpg';
			$url_publicidad = 'https://tuww.net/www/funproa/';
		}

		?>

		<div class="col-md-4">

			<a href="<?php echo $url_publicidad; ?>" target="_blank"><img src='<?php echo $imagen_publicidad; ?>'height='389' width='340'></a><br><br>

		</div>

		<?php

		$aleatorio--;

	}

	?>

			</div>

		</div>

	</section>
