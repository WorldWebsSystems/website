	<link rel="stylesheet" href="css/style.css">

   	<style type="text/css">

	.social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	left: 0; /* Establecemos la barra en la izquierda */
	top: <?php if ($so <> 'windows') {echo "580";}else{echo "400";} ?>px; /* Bajamos la barra 560px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
	}

	.social ul {
		list-style: none;
	}

	.social ul li a {
		display: inline-block;
		color:#fff;
		background: #000;
		padding: 10px 15px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}

	.social ul li .icon-btc {background: #3b5998;} /* Establecemos los colores de cada red social, aprovechando su class */
	.social ul li .icon-bch {background: #7f69a5;}
	.social ul li .icon-wld {background: #a3805c;}

	.social ul li a:hover {
		background: #FFFFFF; /* Cambiamos el fondo cuando el usuario pase el mouse */
		padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
	}

    	</style>

	<div class="social">
		<ul>
			<li><a href="trading_simulador.php?key=<?php echo $key; ?>&operar=BTC" class="icon-btc" title='Operar con BTC'><img src='imagenes/logo_bitcoin.png' width='30'></b></a></li>
			<li><a href="trading_simulador.php?key=<?php echo $key; ?>&operar=BCH" class="icon-bch" title='Operar con BCH'><img src='imagenes/logo_bitcoincash.png' width='30'></b></a></li>
			<li><a href="trading_simulador.php?key=<?php echo $key; ?>&operar=WLD" class="icon-wld" title='Operar con WLD'><img src='imagenes/logo_worldcoin.png' width='30'></b></a></li>
		</ul>
	</div>

	<?php