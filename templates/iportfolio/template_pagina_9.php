<section id="testimonials" class="testimonials section-bg">

	<div class="container">

		<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

			<div class="col-md-12">

				<div align="center">

				<?php

				if (file_exists('publicidad.jpg')) {

					if ($so <> 'movil') {
						$ancho_publicidad = 800;
						$imagen_publicidad = 'publicidad.jpg';
					}else{
						$ancho_publicidad = 350;
						$imagen_publicidad = 'publicidad_and.jpg';
					}

					?>

					<img src='<?php echo $imagen_publicidad; ?>' width='<?php echo $ancho_publicidad; ?>'>

					<br><br>

					<?php

				}

				?>

				</div>

			</div>

			<div class="swiper-wrapper">

				<div class="swiper-slide">

					<div class="testimonial-item" data-aos="fade-up">

						<img src="../../imagenes/icono_mision.png" height='80' class="testimonial-img" alt="">

						<h3>MISIÓN</h3>

						<p>

						<i class="bx bxs-quote-alt-left quote-icon-left"></i>

						<?php echo $mision; ?>.

						<i class="bx bxs-quote-alt-right quote-icon-right"></i>

						</p>

					</div>

				</div>

				<div class="swiper-slide">

					<div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
	
						<img src="../../imagenes/icono_vision.png" height='80' class="testimonial-img" alt="">

						<h3>VISIÓN</h3>

						<p>

						<i class="bx bxs-quote-alt-left quote-icon-left"></i>

						<?php echo $vision; ?>.

						<i class="bx bxs-quote-alt-right quote-icon-right"></i>

						</p>

					</div>

				</div>

				<div class="swiper-slide">

					<div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">

						<img src="../../imagenes/icono_objetivos.png" height='80' class="testimonial-img" alt="">

						<h3>OBJETIVOS</h3>

						<p>

						<i class="bx bxs-quote-alt-left quote-icon-left"></i>
	
						<?php echo $objetivos; ?>.
	
						<i class="bx bxs-quote-alt-right quote-icon-right"></i>

						</p>

					</div>

				</div>

				<div class="swiper-slide">

					<div class="testimonial-item" data-aos="fade-up" data-aos-delay="700">
	
						<img src="../../imagenes/icono_valores.png" height='80' class="testimonial-img" alt="">
	
						<h3>VALORES</h3>

						<p>

						<i class="bx bxs-quote-alt-left quote-icon-left"></i>

						<?php echo $valores; ?>.
	
						<i class="bx bxs-quote-alt-right quote-icon-right"></i>

						</p>

					</div>

				</div>

				</div>

			<div class="swiper-pagination"></div>

		</div>

	</div>

</section>

