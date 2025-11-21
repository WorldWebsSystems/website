<section id="titulo" class="titulo">

	<div class="container" data-aos="fade-up">

		<?php 
		$titulo = $menu1771_desc;
		include 'worldwebs_titulo.php';

		$key = $_GET[key];
		$operar = $_GET[operar];

		if ($key <> '507982') {

			?>

			<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=300">

				<div class="box featured">

					Para ingresar al team de grupo de trading, verifique que usted es humano:<br><br>

					<form action="simulador_trading.php" method="post" target="_blank">

						<input type="text" name="nombres" id="nombres" placeholder="Sus nombres" data-rule="email" data-msg="Por favor indique sus nombres" required />

						<br><br>

						<input type="email" name="email" id="email" placeholder="Su correo electrónico" data-rule="email" data-msg="Por favor indique su correo electrónico" required />

						<br><br>

						<?php include 'captcha.php'; ?>

						<br><br>

                				<input id="boton" name="boton" type="submit" src='../imagenes/enviar_on.png' disabled /></div>

					</form>

				</div>

			</div>

			<?php

		}else{ 

			if ($operar == '') {

				?>

				<script language="JavaScript">

					function reload(){location.reload(true);}

	  				setInterval("frames['iframe1'].location.href = 'valor_cripto.php?moneda=BTC'",60000);
 					setInterval("frames['iframe2'].location.href = 'valor_cripto.php?moneda=BCH'",60000);
 					setInterval("frames['iframe3'].location.href = 'valor_cripto.php?moneda=WLD'",60000);

				</script>

				<div class="container" data-aos="fade-up">

					<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<iframe id='iframe1' name='iframe1' width="340" height="420" src="valor_cripto.php?moneda=BTC" frameborder="0" scrolling = "no" allowfullscreen></iframe><br><br>

						<a href='trading_simulador.php?operar=BTC&key=507982'>Operar BTC</a>

					</div>

					<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=400">

						<iframe id='iframe2' name='iframe2' width="340" height="420" src="valor_cripto.php?moneda=BCH" frameborder="0" scrolling = "no" allowfullscreen></iframe><br><br>

						<a href='trading_simulador.php?operar=BCH&key=507982'>Operar BCH</a>


					</div>

					<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=700">

						<iframe id='iframe3' name='iframe3' width="340" height="420" src="valor_cripto.php?moneda=WLD" frameborder="0" scrolling = "no" allowfullscreen></iframe><br><br>

						<a href='trading_simulador.php?operar=WLD&key=507982'>Operar WLD</a>


					</div>

				</div>

				<?php

			}else{

				if ($operar == 'BTC') {

					?>

					<script language="JavaScript">

						function reload(){location.reload(true);}

	  					setInterval("frames['iframe1'].location.href = 'valor_cripto.php?moneda=BTC'",60000);

					</script>

					<div class="container" data-aos="fade-up">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

							<iframe id='iframe1' name='iframe1' width="1000" height="500" src="valor_cripto.php?moneda=BTC&operar=BTC" frameborder="0" scrolling = "no" allowfullscreen></iframe>

						</div>

					</div>

					<?php

				}

				if ($operar == 'BCH') {

					?>

					<script language="JavaScript">

						function reload(){location.reload(true);}

	  					setInterval("frames['iframe2'].location.href = 'valor_cripto.php?moneda=BCH'",60000);

					</script>

					<div class="container" data-aos="fade-up">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=400">

							<iframe id='iframe2' name='iframe2' width="1000" height="500" src="valor_cripto.php?moneda=BCH&operar=BCH" frameborder="0" scrolling = "no" allowfullscreen></iframe>

						</div>

					</div>

					<?php

				}

				if ($operar == 'WLD') {

					?>

					<script language="JavaScript">

						function reload(){location.reload(true);}

	  					setInterval("frames['iframe3'].location.href = 'valor_cripto.php?moneda=WLD'",60000);

					</script>

					<div class="container" data-aos="fade-up">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=700">

							<iframe id='iframe3' name='iframe3' width="1000" height="500" src="valor_cripto.php?moneda=WLD&operar=WLD" frameborder="0" scrolling = "no" allowfullscreen></iframe>

						</div>

					</div>

					<?php

				}

			}

		}

		?>

	</div>

</section>