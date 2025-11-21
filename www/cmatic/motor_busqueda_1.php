		<script language="javascript">
			function AbrePage(value) {
				$("#form_selector").submit();
			}
		</script>

		<?php

		//**********************************Crea matrices con catálogo de todos los temas:

		$cant_templates = $filas * $columnas;
		$page = 1;
		$fila = 1;
		$i    = 1;

		while ($row = mysqli_fetch_array($resultado)) {

			$indice[$fila][0] = $fila;			//===> Matriz con todos los títulos (Matriz A)
			$indice[$fila][1] = $page;
			$indice[$fila][2] = $row[year];
			$indice[$fila][3] = $row[mes];

			if ($page == $pagina) {
				$indice_pagina[$i][0] = $fila;		//===> Matriz con los títulos solo de la página activa (Matriz B)
				$indice_pagina[$i][1] = $page;
				$indice_pagina[$i][2] = $row[id];
				$i++;
			}

			$cambia_pagina = ($fila / $cant_templates) - intval($fila / $cant_templates);

			if ($cambia_pagina == 0 ) {
				$page++;
			}

			$fila++;

		}

		//*******************************************************************************************************************Selectores de páginas: (utiliza Matriz A)

		$cantidad = $fila - 1;
		$paginas = $cantidad / $cant_templates;

		if ( ($paginas - intval($paginas)) <> 0 ) {
			$paginas = intval($paginas) + 1;
		}else{
			$paginas = intval($paginas);
		}

		echo "<table width='100%'>";

			echo "<tr valign='top'>";

				echo "<td width='36%'>";

				echo "</td>";

				if ($pagina <> 1) {

					echo "<td width='2%' align='center'>";
						$p = 1;
						include 'link_selector.php';
						?><img src='../imagenes/boton_primero.png' height='20' title='<?php echo utf8_encode('Primera página'); ?>'></a><?php
					echo "</td>";

					echo "<td width='2%' align='center'>";
						echo "<font size=2>";
						$p = $pagina-1;
						include 'link_selector.php';
						?><img src='../imagenes/boton_anterior.png' height='20' title='<?php echo utf8_encode('Anterior página'); ?>'></a><?php
					echo "</td>";

				}else{

					echo "<td width='2%' align='center'>";
						?><img src='../imagenes/boton_primero.png' height='20' title='<?php echo utf8_encode('Primera página'); ?>'></a><?php
					echo "</td>";

					echo "<td width='2%' align='center'>";
						?><img src='../imagenes/boton_anterior.png' height='20' title='<?php echo utf8_encode('Anterior página'); ?>'></a><?php
					echo "</td>";

				}

				echo "</td>";

				echo "<td width='12%' align='center'>";
					?>
					<form id="form_selector" action="titulos.php?clase=<?php echo $clase_sel; ?>&categoria=<?php echo $categoria_sel; ?>&pagina=&letra_sel=<?php echo $letra_sel; ?>" method="post">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<?php
					echo utf8_encode("<font size=3 color='white'>Página: </font><select onChange=AbrePage(this.value) name='page' name='page' style='font-size:15px' class=menudespl title='".utf8_encode('Mostrar página de títulos disponibles')."'>");
						for ($i = 1; $i <= $paginas; $i++) {
							?><option value=<?php echo $i; if ($i==$pagina) {echo " selected";}?>><?php echo $i; ?></option><?php
						}
					echo "</select>";
					echo "<font size=3 color='white'> de ".$paginas."</font>";
					?>
						<input id="selector_pagina" name="selector_pagina" type="text" value="1" hidden/>
						<input id="boton" name="boton" type="submit" value="Buscar" hidden/>
					</form>
					<?php
				echo "</td>";

				if ($pagina <> $paginas) {

					echo "<td width='2%' align='center'>";
						echo "<font size=2>";
						$p = $pagina+1;
						include 'link_selector.php';
						?><img src='../imagenes/boton_siguiente.png' height='20' title='<?php echo utf8_encode('Siguiente página'); ?>'></a><?php
					echo "</td>";

					echo "<td width='2%' align='center'>";
						echo "<font size=2>";
						$p = $paginas;
						include 'link_selector.php';
						?><img src='../imagenes/boton_ultimo.png' height='20' title='<?php echo utf8_encode('Última página'); ?>'></a><?php
					echo "</td>";

				}else{

					echo "<td width='2%' align='center'>";
						?><img src='../imagenes/boton_siguiente.png' height='20' title='<?php echo utf8_encode('Siguiente página'); ?>'></a><?php
					echo "</td>";

					echo "<td width='2%' align='center'>";
						?><img src='../imagenes/boton_ultimo.png' height='20' title='<?php echo utf8_encode('Última página'); ?>'></a><?php
					echo "</td>";

				}

				echo "<td width='36%'>";

				echo "</td>";

			echo "</tr>";

		echo "</table>";

		echo "<hr>";

		//***************************************************************************************************************************Despliega títulos (utiliza Matriz B)

		$fila = 1;

		?>

		<div align="center">

			<section id="pricing" class="pricing">

				<div class="row">

					<?php

					$c = 0;

					while ($fila <= $filas * $columnas){

						if ($indice_pagina[$fila][1] == $pagina) {

							$id = $indice_pagina[$fila][2];

							include 'valores_templates.php';

							?>

							<div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">

		            					<div class="box">

			            					<div align="left">

									<?php

									include 'link_template.php';

									?>

									<table>
										<tr>
											<td>
												<font size=2>Template: </font>
											</td>

											<td>
												<font size=2><strong><?php echo $template; ?></strong></font>
											</td>
										</tr>
										<tr>
											<td>
												<font size=2>Creador: </font>
											</td>
											<td>
												<font size=2><strong><?php echo $creador; ?></strong></font>
											</td>
										</tr>
									</table>

									<br>

									<img src="templates/<?php echo $template; ?>/<?php echo $url_imagen; ?>" width=200 class="pic-image" alt="Pic" title='<?php echo $titulo.' | '.$titulo_ingles; ?>' /></a>

									<br><br>

			            					<div align="center">

									<input id="boton_s" name="boton_s" class="buy-btn" type="submit" value="Ver DEMO"  />

									</div>

								</div>

					        	</div>

							<?php

						}

						$fila++;

					}

					?>

				</div>

			</section>

		</div>