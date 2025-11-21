<style>

.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 2000;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}
.modalDialog > div {
	width: <?php echo $ancho; ?>px;
	position: relative;
	margin: <?php echo $margen; ?>% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }

</style>

<?php

	if ($so <> 'movil') {
		$ancho = 600;
		$ancho1 = 560;
		$alto1 = 315;
		$anchocirculo = 300;
		$radio = 150;
		$margen = 10;
	}else{
		$ancho = 320;
		$ancho1 = 300;
		$alto1 = 170;
		$anchocirculo = 200;
		$radio = 100;
		$margen = 20;
	}

	?>

	<section id="tiendavirtual" class="blog">

		<div class="container">

			<div class="section-header">

				Un sitio web es una colección de páginas web interrelacionadas y accesibles a través de internet bajo un nombre de dominio único. Estas páginas presentan información y recursos digitales (como texto, imágenes, videos, enlaces, y elementos interactivos) organizados de manera coherente, con el propósito de comunicar, informar, entretener, ofrecer servicios o facilitar alguna interacción con los usuarios.<br><br>

				Asimismo, un sitio web de comercio electrónico (<i>ecommerce</i>) es una plataforma digital que, además de poseer todas las características fundamentales de un sitio web (páginas interconectadas accesibles por un dominio con contenido digital), está específicamente diseñado, estructurado y equipado para facilitar la compra y venta de productos o servicios directamente a través de internet. Esto implica la inclusión de funcionalidades esenciales como catálogos de productos detallados, un sistema de carrito de compras, pasarelas de pago seguras para procesar transacciones financieras, gestión de inventario, y a menudo, sistemas de seguimiento de pedidos y atención al cliente. Su objetivo principal es convertir visitantes en clientes mediante una experiencia de compra online completa.<br><br>

				Los tipos de sitios web que ofrecemos a nuestros clientes son los siguientes:<br><br><br>

🔧 								<h3>1. <i>Landing Page</i> (página de aterrizaje):</h3><br>

				&check; Es una página web única diseñada para que el visitante realice una acción específica de conversión.<br><br><br>

🔧 								<h3>2. <i>One Page</i> (sitio web de una sola página):</h3><br>

				&check; Es un sitio web completo cuyo contenido se presenta en una única página larga, navegable mediante scroll entre secciones.<br><br><br>

🔧 								<h3>3. Sitios Web Corporativos:</h3><br>

				&check; Es la presencia online oficial de una empresa, diseñada para presentar su identidad, servicios y generar credibilidad.<br><br><br>

🔧 								<h3>4. Catálogo de productos:</h3><br>

				&check; Es una presentación digital organizada de los artículos de una empresa, enfocada en informar más que en vender directamente online.<br><br><br>

🔧 								<h3>5. Tienda en linea (<i>PrestaShop, Shopify, WooCommerce</i>):</h3><br>

				&check; s un sitio web que permite vender productos o servicios directamente por internet.<br><br><br>

🔧 								<h3>6. <i>Blog</i>:</h3><br>

				&check; Es un sitio o sección web donde se publican artículos periódicamente sobre temas específicos para informar, opinar o atraer audiencia.
			</div>

		</div>

	</section>