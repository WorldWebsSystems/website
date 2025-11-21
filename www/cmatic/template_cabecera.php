<?php

	if ($so <> 'movil') {
		echo "<br><br><br><br>";
		$ancho = 800;
	}else{
		$ancho = 350;
	}

	if ($_POST["pais"] == "") {

		$result = mysqli_query($connect, "SELECT * FROM paises where pais='$pais'");
		$row = mysqli_fetch_array($result);
		$pais_conexion = $row[id];
		$ppais_conexion = $pais;

	}else{

		$pais_conexion = $_POST["pais"];
		$result = mysqli_query($connect, "SELECT * FROM paises where id=$pais_conexion");
		$row = mysqli_fetch_array($result);
		$ppais_conexion = $row["pais"];

	}

	if ($_POST["estado"] == "") {


	}else{

		$estado_conexion = $_POST["estado"];
		$eestado = $_POST["estado"];
		$result = mysqli_query($connect, "SELECT * FROM clientes where estado='$estado_conexion'");
		$row = mysqli_fetch_array($result);
		$pais_conexion = $row["pais"];

		$result = mysqli_query($connect, "SELECT * FROM paises where id=$pais_conexion");
		$row = mysqli_fetch_array($result);
		$ppais_conexion = $row["pais"];

	}

	if ($row[url] <> "") {

		$url_bandera = $row[url];

	}else{

		$url_bandera = "band_xx.png";

	}

	include 'valores_links.php';

	$motor = 7;
	include 'motor_busqueda_7.php';

	include 'registra_historial.php';

?>

  	<!-- ======= Header ======= -->

  		<header id="header" class="fixed-top ">

    			<div class="container d-flex align-items-center">

				<table width='100%'>

					<tr>

						<td align='left' valign='center'>

							<a href="http://tuww.net/cmatic/"><img src='imagenes/clients/<?php echo $carpeta; ?>/logos/logo_worldwebs_2.png' height=40 title='Inicio'></a><br>

						</td>

						<td align='left'>

							<nav class="nav-menu d-none d-lg-block">

       								<ul>

								        <li><a href="<?php echo $link_inicio; ?>"><img src='imagenes/icono_home.png' height='20' title='Inicio'></a></li>

								        <li class="drop-down"><a href="#"><?php echo $menu01; ?></a>

										<ul>

								        		<li><a href="<?php echo $link_nosotros; ?>"><?php echo $menu02; ?></a></li>

											<li><a href="<?php echo $link_nosotros_objetivos; ?>"><?php echo $menu01_desc; ?></a></li>

								        		<li><a href="<?php echo $link_nosotros_misionvision; ?>"><?php echo $menu10; ?></a></li>

								        		<li><a href="<?php echo $link_nosotros_valores; ?>"><?php echo $menu09; ?></a></li>

								        		<li><a href="<?php echo $link_nosotros_equipotrabajo; ?>"><?php echo $menu03; ?></a></li>

								        		<li><a href="nosotros_youtube.php" target="_blank">Canal de Youtube</a></li>

								        		<li class="drop-down"><a href="<?php echo $link_nosotros_patrocinantes; ?>"><?php echo $menu04; ?></a>

												<ul>
													<li><a href="<?php echo $link_cmatic; ?>"><?php echo $menu05; ?></a></li>
													<li><a href="<?php echo $link_fundatics; ?>"><?php echo $menu06; ?></a></li>
												</ul>

											</li>


								        		<li class="drop-down"><a href="<?php echo $link_funproa; ?>" target="_blank"><?php echo $menu07; ?></a>

												<ul>
													<li><a href="<?php echo $link_funproa; ?>" target="_blank"><?php echo $menu071; ?></a></li>
													<li><a href="<?php echo $link_antitaurino; ?>" target="_blank"><?php echo $menu072; ?></a></li>
													
												</ul>

											</li>

										</ul>

									</li>

						       			<li class="drop-down"><a href="#">Servicios</a>

										<ul>

										       	<li class="drop-down"><a href="#">WebHosting</a>

												<ul>

										        		<li><a href="<?php echo $link_webhosting; ?>">Descripción</a></li>

										        		<li><a href="https://webhospedaje.com/clientes/aff.php?aff=135" target="_blank">WebHospedaje</a></li>

										        		<li><a href="https://tuww.net" target="_blank">Directorio</a></li>

												</ul>

											</li>

										       	<li class="drop-down"><a href="#">Ingeniería</a>

												<ul>

										        		<li><a href="ingenieria.php">Descripción</a></li>

										        		<li><a href="ingenieria_tarifas.php">Tarifas</a></li>

												</ul>

											</li>

										       	<li class="drop-down"><a href="#"><?php echo $menu17; ?></a>

												<ul>

										        		<li><a href="<?php echo $link_vps; ?>">Descripción</a></li>

										        		<li><a href="<?php echo $link_vps_tarifas; ?>"><?php echo $menu172; ?></a></li>

												</ul>

											</li>

								        		<li><a href="<?php echo "www/"; ?>" target="_blank">Guía Clasificada</a></li>

								        		<li><a href="<?php echo "tienda/index.php?id=cmatic&tienda=1"; ?>" target="_blank">Tienda virtual</a></li>

										</ul>

									</li>


						        		<li class="drop-down"><a href="#"><?php echo $menu24; ?></a>

										<ul>

											<li><a href="ia_descripcion.php">Descripción</a></li>

											<li class="drop-down"><a href="#"><i>Criptomonedas</i></a>

												<ul>

													<li class="drop-down"><a href="#">Fetch.ai (FET)</a>

													<li class="drop-down"><a href="https://linqai.com/">LinqAI (LNQ)</a>

													<li class="drop-down"><a href="https://oceanprotocol.com/">Ocean Protocol (OCEAN)</a>

													<li class="drop-down"><a href="https://rendernetwork.com/">Render (RNDR)</a>

													<li class="drop-down"><a href="https://singularitynet.io/">SingularityNET (AGIX)</a>

													<li class="drop-down"><a href="https://ton.org/">TonCoin (TON)</a>

													<li class="drop-down"><a href="https://app.getgrass.io/register/?referralCode=3Xk4qSAV3iafAky">TouchGrass (GRASS)</a>

													<li class="drop-down"><a href="https://worldcoin.org/">WorldCoin (WLD)</a>

												</ul>

											</li>

											<li class="drop-down"><a href="#"><i>Software</i></a>

												<ul>

													<li class="drop-down"><a href="#">ChatBots</a>

														<ul>

															<li class="drop-down"><a href="#">Amazon &#169;</a>

																<ul>

																	<li><a href="ia_q.php" target="_blank">Q &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Anthropic &#169;</a>

																<ul>

																	<li><a href="ia_claudeia.php" target="_blank">Claude IA &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Databricks &#169;</a>

																<ul>

																	<li><a href="ia_dbrx.php" target="_blank">HuggingChat &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Google &#169;</a>

																<ul>

																	<li><a href="ia_gemini.php" target="_blank">Gemini &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Haiper &#169;</a>

																<ul>

																	<li><a href="ia_haiper.php" target="_blank">Haiper AI &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Meta &#169;</a>

																<ul>

																	<li><a href="ia_llama.php" target="_blank">Llama 3 AI &#169;</a></li>

																	<li><a href="ia_metaai.php" target="_blank">Meta AI &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Microsoft &#169;</a>

																<ul>

																	<li><a href="ia_copilot.php" target="_blank">Copilot &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">OpenAI &#169;</a>

																<ul>

																	<li><a href="ia_chatgpt.php" target="_blank">ChatGPT-3.5 / ChatGPT-4 &#169;</a></li>

																	<li><a href="ia_chatgpt-4o.php" target="_blank">ChatGPT-4o &#169;</a></li>

																	<li><a href="ia_arena.php" target="_blank">ChatGPT2 &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Perplexity AI &#169;</a>

																<ul>

																	<li><a href="ia_perplexityai.php" target="_blank">Perplexity AI &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">xAI &#169;</a>

																<ul>

																	<li><a href="ia_grok.php" target="_blank">Grok &#169;</a></li>

																</ul>

															</li>

														</ul>

													</li>

													<li class="drop-down"><a href="#">Videos</a>

														<ul>

															<li class="drop-down"><a href="#">OpenAI &#169;</a>

																<ul>

																	<li><a href="ia_sora.php" target="_blank">Sora &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">HailuoAI &#169;</a>

																<ul>

																	<li><a href="ia_hailuoai.php" target="_blank">HailuoAI &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">SengshuTech &#169;</a>

																<ul>

																	<li><a href="ia_vidu.php" target="_blank">Vidu &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Tranquillitatis &#169;</a>

																<ul>

																	<li><a href="ia_noisee.php" target="_blank">noisee AI &#169;</a></li>

																</ul>

															</li>

														</ul>

													</li>

													<li class="drop-down"><a href="#">Audios</a>

														<ul>

															<li class="drop-down"><a href="#">OpenAI &#169;</a>

																<ul>

																	<li><a href="ia_voice.php" target="_blank">Voice Engine &#169;</a></li>

																</ul>

															</li>

															<li class="drop-down"><a href="#">Loudly GmbH &#169;</a>

																<ul>

																	<li><a href="ia_loudly.php" target="_blank">Loudly &#169;</a></li>

																</ul>

															</li>

														</ul>

													</li>

												</ul>

											</li>

											<li class="drop-down"><a href="#"><i>Hardware</i></a>

												<ul>


													<li class="drop-down"><a href="#">Computación cuántica</a>

														<ul>

															<li class="drop-down"><a href="#">Microchips</a>

																<ul>

																	<li><a href="ia_compcuantica.php" target="_blank">NVIDIA &#169;</a></li>

																	<li><a href="ia_neuralink.php" target="_blank">NeuraLink &#169;</a></li>

																</ul>

															</li>

														</ul>

													</li>
													
													<li class="drop-down"><a href="#">Robótica</a>

														<ul>

															<li class="drop-down"><a href="#">Humanoides</a>

																<ul>

																	<li><a href="ia_astribot.php" target="_blank">Astribot &#169;</a></li>

																	<li><a href="ia_darpa.php" target="_blank">DARPA US Gov</a></li>

																	<li><a href="ia_ethzurich.php" target="_blank">ETH Zurich &#169;</a></li>

																	<li><a href="ia_figureai.php" target="_blank">Figure AI &#169;</a></li>

																	<li><a href="ia_robotica.php" target="_blank">Hanson Robotics &#169;</a></li>

																	<li><a href="ia_profluent.php" target="_blank">ProFluent &#169;</a></li>

																	<li><a href="ia_supcon.php" target="_blank">SUPCON &#169;</a></li>

																</ul>

															</li>

														</ul>

													</li>

												</ul>

											</li>

										</ul>

									</li>

									<li class="drop-down"><a href="#"><?php echo $menu23; ?></a>

										<ul>

								        		<li><a href="<?php echo $link_contacto_formulario; ?>">Formulario</a></li>

								        		<li><a href="mailto:<?php echo $email; ?>">Correo electrónico</a></li>

								        		<li><a href="https://wa.me/+584247756630" target="_blank">WhatsApp</a></li>

										</ul>

									</li>

     							        	<li>

										<a href="<?php echo $link_acerca; ?>" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;">?</a>

									</li>

        							</ul>

      							</nav>

						</td>

						<td align='center' valign='center'>

	     						<a href="https://tuww.net/cmatic/index.php?idioma=esp"><img src='imagenes/band_ve.png' height=17 title='Sitio web en idioma español'></a>

						</td>

						<td align='center' valign='center'>

	     						&nbsp;&nbsp;

						</td>

						<td align='center' valign='center'>

							<a href="https://tuww.net/cmatic/index.php?idioma=eng"><img src='imagenes/band_us.png' height=17 title='Sitio web en idioma inglés'></a>

						</td>

						<td align='center' valign='center'>

	     						<img src='imagenes/espace.jpg'  height=17>

						</td>

					</tr>

				</table>

    			</div>

  		</header>

	<!-- End Header -->

