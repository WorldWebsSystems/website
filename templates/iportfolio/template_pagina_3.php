<style>
    strong {
        display: inline-block;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 4px 8px;
        margin: 4px 0;
    }
</style>

<?php

	function busca_edad($fecha_nacimiento){

		$dia=date("d");
		$mes=date("m");
		$ano=date("Y");

		$dianaz=date("d",strtotime($fecha_nacimiento));
		$mesnaz=date("m",strtotime($fecha_nacimiento));
		$anonaz=date("Y",strtotime($fecha_nacimiento));

		if (($mesnaz == $mes) && ($dianaz > $dia)) {
			$ano=($ano-1); 
		}

		if ($mesnaz > $mes) {
			$ano=($ano-1);
		}

		$edad=($ano-$anonaz);

		return $edad;

	}

	$edad = busca_edad($row33[fecha_nacto]);

	function Segmentar_Resumen($texto) {

		$texto = preg_replace_callback('/^([^:]+:)/', function($coincidencia) {
		return '<strong>' . trim($coincidencia[1]) . '</strong>';
		}, $texto);

		$texto = str_replace(';', ';<br>', $texto);

		$texto = preg_replace_callback('/;<br>\s*([^:<]+:)/', function($coincidencia) {
		return ';<br><strong>' . trim($coincidencia[1]) . '</strong>';
		}, $texto);

		return $texto;

	}

?>

<section id="about" class="about">

	<div class="container">

		<div class="section-title">

			<h2>Perfil</h2>

			<p><?php echo $row33[descripcion]; ?></p>

		</div>

		<div class="row">

			<div class="col-lg-4" data-aos="fade-right">

				<a href="<?php echo $imagen; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $row33[siglas]; ?>"><img src="<?php echo $imagen; ?>" class="img-fluid" alt=""></i></a>

			</div>

			<div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

				<h3><?php echo $row33[nombre]; ?>.</h3>

				<p class="fst-italic">

				<?php echo $row33[lema]; ?>.

				</p>

				<div class="row">

					<div class="col-lg-6">

						<ul>

							<li><i class="bi bi-chevron-right"></i> <strong>Cédula/Id:</strong> <span><?php echo $row33[cedula]; ?></span></li>

							<li><i class="bi bi-chevron-right"></i> <strong>Nacimiento:</strong> <span><?php echo $row33[lugar_nacto] . ', ' . $row33[fecha_nacto]; ?></span></li>

							<li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span><?php echo $edad; ?></span></li>

							<li><i class="bi bi-chevron-right"></i> <strong>Residencia:</strong> <span><?php echo $ciudad . ', ' . $municipio . ', ' . $estado . ', ' . $pais; ?></span></li>

						</ul>

					</div>

					<div class="col-lg-6">

						<ul>

							<li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span><?php echo $url; ?></span></li>

							<li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span><?php echo $row33[email]; ?></span></li>

							<li><i class="bi bi-chevron-right"></i> <strong>Teléfonos:</strong> <span><?php echo $row33[telefono]; ?></span></li>

							<li><i class="bi bi-chevron-right"></i> <strong>WhatsApp:</strong> <span><?php echo $row33[celular]; ?></span></li>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<?php

if ($row33[descripcion_amplia] <> '') {

	?>

	<section id="experiencia" class="about">

		<div class="container">

			<div class="section-title">

				<div class="section-title">

					<h2>Experiencia:</h2>

				</div>

			</div>

			<div class="row">

				<div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">

					<div align="left">

					<p>

					<?php

					$experiencia = Segmentar_Resumen($resumen);

					echo $experiencia;

					?>.

					</p>

					</div>

				</div>

			</div>

		</div>

	</section>

	<?php

}

?>
