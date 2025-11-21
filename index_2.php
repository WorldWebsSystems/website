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

	<section id="tiendasvirtuales" class="services">

		<div class="container">

			<div class="row">

				<?php

				$accesobdT2	= mysqli_connect("localhost","ncfgiils_webmast","WebMasterDP2019","ncfgiils_accesodp");
				$resultadoT2 	= mysqli_query($accesobdT2, "SELECT * FROM acceso_bd_dp WHERE id=5");
				$rowT2 		= mysqli_fetch_array($resultadoT2);

				$connect001 = mysqli_connect("localhost",$rowT2[usuario],$rowT2[contrasena],$rowT2[bd]);
				$resultado001 = mysqli_query($connect001, "SELECT * FROM tienda_product");

				$i = 0;

				while ($row001 = mysqli_fetch_array($resultado001)) {

					$i++;

					?>

					<div class="col-md-3">

						<div class="icon-box">

							<div align='center'>

							<?php

							echo $row001[id_product];

							?>

							</div>
	
						</div>

					</div>

					<?php

				}

				?>

			</div>

		</div>
			
	</section>