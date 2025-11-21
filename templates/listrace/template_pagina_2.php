	<section class="top-area">

		<div class="header-area">

			<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            	<div class="navbar-header">

						<table width='100%'>

							<tr>

								<td align='left' width='3%'>

			               					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    					<i class="fa fa-bars"></i>
			                				</button>

			                				<a class="navbar-brand" href="index.php"></a><br>

								</td>

								<td align='center' valign='middle' width='30%'>

									<?php

									if (file_exists('logo.png')) {

										echo "<img src='logo.png' width='55'>";

									}else{

										echo "<img src='../../imagenes/" . $imagen_area . "' width='55'>";

									}

									?>

								</td>

								<td align='left' width='67%'>

									<?php

									if ($row33[siglas] <> '') {

										echo "<font size=" . $titulo1 . " color='black'><b>" . $row33[siglas] . "</b></font></b><br>";

									}

									if ($row33[nombre] <> '') {

										echo "<font size=" . $titulo2 . " color='black'><b>" . $row33[nombre] . "</b></font>";

									}

									?>

								</td>

							</tr>

						</table>

			            	</div>

			            	<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">

				            	<div align='center'>

			                	<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

			                    		<li><a href="index.php">Inicio</a></li>
			                    		<li><a href="index.php?menu=nosotros">Nosotros</a></li>
							<?php
							if ($row33[tienda] == 1) {
								?>
				                    		<li><a href='https://tuww.net/tiendasvirtuales.php?menu=<?php echo $carpeta; ?>'>Tienda Virtual</a></li>
								<?php
							}
							?>
			                    		<li><a href="index.php?menu=consulta">Contacto</a></li>
			                    		<li class="scroll"><a href="#creditos">?</a></li>
								
			                	</ul>

				            	</div>

			            	</div>

			        </div>

			    </nav>

		</div>

		<div class="clearfix"></div>

	</section>
