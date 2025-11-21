	<section id="list-topics" class="list-topics">

		<div class="container">

			<div class="list-topics-content">

				<div align='center'>

				<ul>

					<li>

						<div class="single-list-topics-content">

							<a href="#muestranosotros" class="icon-nosotros"><img src='../../imagenes/icono_nosotros.png' width='60' title='Descripción de nuestra empresa'></b>

							<div id="muestranosotros" class="modalDialog">

								<div>
									<div align='center'>
									<a href="#close" title="Close" class="close">X</a>
									<img src='../../../imagenes/icono_nosotros.png' width='60'><br>
									<h1><b><font color='black'>NOSOTROS:</b></h1><br>
									<font size = '2' color='black'><?php echo $nosotros; ?></font><br><br>
									<?php if ($row33[registrolegal] <> '') { ?>
										<font size = '3'><a href="<?php echo $row33[registrolegal]; ?>" target="_blank">Registro Legal</b></a>
									<?php } ?>
									<?php if ($row33[registrofiscal] <> '') { ?>
										&nbsp;&nbsp;&nbsp;&nbsp;<font size = '3'><a href="<?php echo $row33[registrofiscal]; ?>" target="_blank">Registro Fiscal</b></a>
									<?php } ?>
									<?php if ($row33[declaracionhacienda] <> '') { ?>
										&nbsp;&nbsp;&nbsp;&nbsp;<font size = '3'><a href="<?php echo $row33[declaracionhacienda]; ?>" target="_blank">Declaración de Hacienda</b></a>
									<?php } ?>

									<br><br>
									</div>
								</div>
							</div>

							<br><h2>Nosotros</a></h2>

						</div>

					</li>

					<li>

						<div class="single-list-topics-content">

							<a href="#muestramision" class="icon-mision"><img src='../../imagenes/icono_mision.png' width='60' title='Misión de la empresa o negocio'></b>

							<div id="muestramision" class="modalDialog">
								<div>
									<div align='center'>
									<a href="#close" title="Close" class="close">X</a>
									<img src='../../../imagenes/icono_mision.png' width='60'><br>
									<h1><b><font color='black'>MISIÓN:</b></h1><br>
									<font size = '2' color='black'><?php echo $mision; ?></font><br><br>
									</div>
								</div>
							</div>

							<br><h2>Misión</a></h2>

						</div>

					</li>

					<li>

						<div class="single-list-topics-content">

							<a href="#muestravision" class="icon-vision"><img src='../../imagenes/icono_vision.png' width='60' title='Misión de la empresa o negocio'></b>

							<div id="muestravision" class="modalDialog">
								<div>
									<div align='center'>
									<a href="#close" title="Close" class="close">X</a>
									<img src='../../../imagenes/icono_vision.png' width='60'><br>
									<h1><b><font color='black'>VISIÓN:</b></h1><br>
									<font size = '2' color='black'><?php echo $vision; ?></font><br><br>
									</div>
								</div>
							</div>

							<br><h2>Visión</a></h2>

						</div>

					</li>

					<li>

						<div class="single-list-topics-content">

							<a href="#muestravalores" class="icon-valores"><img src='../../imagenes/icono_valores.png' width='60' title='Misión de la empresa o negocio'></b>

							<div id="muestravalores" class="modalDialog">
								<div>
									<div align='center'>
									<a href="#close" title="Close" class="close">X</a>
									<img src='../../../imagenes/icono_valores.png' width='60'><br>
									<h1><b><font color='black'>VALORES:</b></h1><br>
									<font size = '2' color='black'><?php echo $valores; ?></font><br><br>
									</div>
								</div>
							</div>

							<br><h2>Valores</a></h2>

						</div>

					</li>

				</ul>

				</div>

			</div>

		</div>

	</section>
