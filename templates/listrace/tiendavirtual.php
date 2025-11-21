		<section id="tiendavirtual" class="blog">

			<div class="container">

				<div class="section-header">

					<h2>TIENDA VIRTUAL</h2>
					Versión Demostrativa

				</div>

			</div>

		</section>

		<section id="tiendavirtual" class="subscription">

			<div class="container">

				<div class="blog-content">

					<div class="row">

						<?php

						$i = 0;

						while ($i < 16) {

							$i++;

							?>

							<div class="col-md-3 col-sm-6">

								<div class="single-blog-item">

									<div class="single-blog-item-img">

										<a href="#muestraimagen<?php echo $i; ?>" class="icon-imagen<?php echo $i; ?>"><img src="../../imagenes/medidas-productos.jpg" alt="blog image"></a>

										<div id="muestraimagen<?php echo $i; ?>" class="modalDialog">
											<div>
												<div align='center'>
												<a href="#close" title="Close" class="close">X</a>
												<br><img src='../../../../imagenes/medidas-productos.jpg' width="<?php echo $ancho1; ?>" ><br><br>
												<a href="#muestraprecio<?php echo $i; ?>" class="icon-producto<?php echo $i; ?>">Comprar</b></a><br>
												</div>
											</div>
										</div>

									</div>

									<div class="single-blog-item-txt">

										<div align='center'>

										<h3 class="fw-bolder">Special Item</h3>

										<!-- Product price-->
										<span class="text-muted text-decoration-line-through">$20.00</span>
										$18.00

										<br><br>

                                						<a href="#muestraprecio<?php echo $i; ?>" class="icon-producto<?php echo $i; ?>">Seleccionar</b></a>
										<div id="muestraprecio<?php echo $i; ?>" class="modalDialog">
											<div>
												<div align='center'>
												<a href="#close" title="Close" class="close">X</a>
												<br><img src='../../../../imagenes/medidas-productos.jpg' width="200" ><br><br>
												<h1><b><font color='black'>PRODUCTO:</b></h1><br><br>
												<font size = '5' color='black'>muestraprecio<?php echo $i; ?></font><br><br><br>
												<a href="#muestraprecio<?php echo $i; ?>" class="icon-producto<?php echo $i; ?>">Pagar</b></a><br><br>
												</div>
											</div>
										</div>

										</div>
	
									</div>

								</div>

							</div>

							<?php

						}

						?>

					</div>

				</div>

			</div>
			
		</section>