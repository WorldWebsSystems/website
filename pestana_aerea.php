<script>

	function MostrarBarraCriptos() {

		$('#barra_criptos').prop('hidden', false);
		$('#boton_barra_criptos_muestra').prop('hidden', true);
		$('#boton_barra_criptos_oculta').prop('hidden', false);

	}

	function OcultarBarraCriptos() {

		$('#barra_criptos').prop('hidden', true);
		$('#boton_barra_criptos_muestra').prop('hidden', false);
		$('#boton_barra_criptos_oculta').prop('hidden', true);

	}

</script>

<?php

	if ($so == 'windows') {

		$distancia_top = 70;

	}else{

		$distancia_top = 70;

	}

	$pagina_web = basename($_SERVER['PHP_SELF']);

?>

<link rel="stylesheet" href="css/style.css">

<style type="text/css">

	.social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	left: 0; /* Establecemos la barra en la izquierda */
	top: <?php echo $distancia_top; ?>px; /* Bajamos la barra $distancia px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
	}

	.social ul {
		list-style: none;
	}

	.social ul li a {
		display: inline-block;
		color:#fff;
		background: #000;
		padding: 3px 3px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}

	.social ul li a:hover {
		background: #FF0000; /* Cambiamos el fondo cuando el usuario pase el mouse */
		padding: 3px 10px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
	}

</style>

<div align='left'>

<div class="social">

	<ul>

		<font size='2' face='arial'>

		<img src='imagenes/<?php echo $imagen_mini; ?>' width='24'> <label title='Criptomoneda activada para operar simulador de trading'><?php echo $formapago; ?>:</label><br>
		<a href='trading_simulador.php' title='Terminar operación de trading de <?php echo $operar; ?>'><i>Finalizar</i></a><br>

		<label id="boton_barra_criptos_muestra" name="boton_barra_criptos_muestra" onclick="MostrarBarraCriptos()" title='Cambiar a otra criptomoneda'><img src='imagenes/icono_barracriptos_off.png' width='60'></label>

		<label id="boton_barra_criptos_oculta" name="boton_barra_criptos_oculta" onclick="OcultarBarraCriptos()" title='Ocultar otras criptomonedas' hidden /><img src='imagenes/icono_barracriptos_on.png' width='60'></label>

		<br>

		<label id='barra_criptos' name='barra_criptos' hidden />

			<?php

			$i = 0;

			$resultado2  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda<>'$operar' and operar=1 and status=1 order by moneda asc");

			while ($row2 = mysqli_fetch_array($resultado2)) {

				$i++;

				?>

				<style type="text/css">

					.social ul li .icon-<?php echo $row2[moneda]; ?> {background: transparent;} /* Establecemos los colores de cada criptomoneda */

				</style>

				<li><a href="trading_simulador.php?operar=<?php echo $row2[moneda]; ?>" class="icon-<?php echo $row2[moneda]; ?>" title='Operar simulador de trading con <?php echo $row2[formapago]; ?>'><img src='imagenes/<?php echo $row2[imagen_mini]; ?>' width='24'></b> <font face='arial' color='black'><?php echo $row2[formapago]; ?></font></a></li>

				<?php

			}

			?>

		</label>

		</font>

	</ul>

</div>

</div>