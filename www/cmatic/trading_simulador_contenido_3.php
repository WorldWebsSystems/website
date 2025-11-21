<?php

	$monto 			= $vvalor_moneda;
	$sel_departamento 	= $_POST[sel_departamento];
	$departamento 		= '';

	include 'detecta_so.php';

	include 'revisa_cuentas_trading.php';

	//include 'revisa_bandas.php';

	include 'template_operar_trading.php';

	$seccion_motor_trading = 2;
	include 'ia.php';

	$seccion_motor_trading = 5;
	include 'ia.php';

	$url_iframe_grafico = "valor_cripto_grafico.php?grafico=" . $grafico . "&so=" . $so;
	$url_iframeA = "valor_cripto.php?key=" . $key . "&operar=" . $operar . "&tolerancia=" . $tolerancia . "&dias_historico=" . $dias_historico . "&anticipacion=" . $anticipacion . "&exceso=" . $exceso . "&departamento=" . $departamento . "&email_trading=" . $email_trading . "&rango_tendencia=" . $rango_tendencia . "&porc_tendencia=" . $porc_tendencia;

	?>

	<script language="JavaScript">

		function reload(){location.reload(true);}

		setInterval("frames['iframe_grafico'].location.href = '<?php echo $url_iframe_grafico; ?>'", <?php echo $refresh; ?>);
		setInterval("frames['iframe1'].location.href = '<?php echo $url_iframeA; ?>'", <?php echo $refresh; ?>);
		setInterval(Revisa4W, <?php echo $refresh; ?>);

		setInterval("frames['marquee_criptos'].location.href = 'marquee_criptos.php?operar=<?php echo $operar; ?>'", <?php echo $refresh; ?>);

	</script>

	<label hidden><iframe id='graba_cambio_sonido' name='graba_cambio_sonido' width="<?php echo $ancho; ?>" height="<?php echo $alto2; ?>" src="graba_cambio_sonido.php" frameborder="0" scrolling = "no" allowfullscreen style="border:none;"></iframe></label>

	<section id="valor_moneda" class="pricing">

		<div class="container" data-aos="fade-up">

			<?php

			if ($so <> 'windows') {

				?>

				<div class="box featured">

					<div class="section-title">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

							<label>Pánel de Monitoreo de Criptomoneda <?php echo $formapago; ?></label><br>

							<label><iframe id='marquee_criptos' name='marquee_criptos' width="<?php echo $ancho; ?>" height="27" src="marquee_criptos.php?operar=<?php echo $operar; ?>" frameborder="0" scrolling = "no" allowfullscreen style="border:none;"></iframe></label>

						</div>

					</div>

					<div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div align='center'>							

							<?php

							$i = 1;

							include 'ficha_tasa.php';

							?>

						</div>

					</div>

					<div class="col-lg-7 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div align='center'>

							<div align='center'>

								<label>

									<font size='1'><input onclick='VerAlertasSonoras(1)' id='boton_sonidos1' name='boton_sonidos1' class='buy-btn' type='submit' value='Asistente virtual (IA)' /></font>

								</label>

							</div>

							<label id='alertas_sonoras' name='alertas_sonoras' hidden />

								<hr><br>

								<?php

								include 'trading_simulador_contenido_audio.php';

								?>

							</label>

						</div>

					</div>

				</div>

				<br>

				<div class="box featured">

					<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div align='center'>

						<iframe id='iframe_grafico' name='iframe_grafico' width="<?php echo $ancho * $mult; ?>" height="<?php echo $alto2; ?>" src="<?php echo $url_iframe_grafico; ?>" frameborder="0" scrolling = "no" allowfullscreen style="border:none;"></iframe>

						</div>

					</div>

				</div>

				<?php

			}else{

				?>

				<div class="box featured">

					<div class="section-title">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

							<label>Pánel de Monitoreo de Criptomoneda <?php echo $formapago; ?></label><br>

							<label><iframe id='marquee_criptos' name='marquee_criptos' width="<?php echo $ancho * $mult; ?>" height="27" src="marquee_criptos.php?operar=<?php echo $operar; ?>" frameborder="0" scrolling = "no" allowfullscreen style="border:none;"></iframe></label>

						</div>

					</div>

					<div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div align='center'>

							<?php

							$i = 1;

							include 'ficha_tasa.php';

							?>

						</div>

					</div>

					<div class="col-lg-7 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div align='center'>

							<iframe id='iframe_grafico' name='iframe_grafico' width="<?php echo $ancho; ?>" height="<?php echo $alto2; ?>" src="<?php echo $url_iframe_grafico; ?>" frameborder="0" scrolling = "no" allowfullscreen style="border:none;"></iframe>

						</div>

					</div>

					<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

						<?php if ($so == 'windows') {echo "<hr>";} ?>

						<?php

						if ($so == 'windows') {

							?>

							<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

								<br>

								<div align='center'>

								<img src='imagenes/medidor_trading.png' width="985">

								</div>

								<table width='100%'>

									<tr>

										<?php

										for ($i = 1; $i <=29; $i++) {

											?>

											<td align='center'>

												<?php $num_icono=$i; include 'termometro_cripto.php'; ?>

											</td>

											<?php

										}

										?>

									</tr>

								</table>

							</div>

							<?php

						}else{

							?>

							<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

								<br>

								<div align='left'>

								<img src='imagenes/medidor_trading_and.png' width="<?php echo $ancho-55; ?>">

								</div>

							</div>

							<?php

						}

						?>

						<?php if ($so <> 'windows') {echo "<br><br><hr><br>";} ?>

					</div>

					<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div align='center'>

							<div align='center'>

								<label>

									<font size='1'><input onclick='VerAlertasSonoras(1)' id='boton_sonidos1' name='boton_sonidos1' class='buy-btn' type='submit' value='Asistente virtual (IA)' /></font>

								</label>

							</div>

							<label id='alertas_sonoras' name='alertas_sonoras' hidden />

								<hr><br>

								<?php

								include 'trading_simulador_contenido_audio.php';

								?>

							</label>

						</div>

					</div>

				</div>

				<?php

			}

			?>

		</div>

		<br>

		<div class="container" data-aos="fade-up">

			<div class="box featured">

				<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

					<div class="section-title">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

							<div class="section-title">

								<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

									<label>Fase 1</label><br>
									<label title='¿Qué es esto?' onclick="alert('Un <i>bot</i> de Inteligencia Artificial, realiza el despliegue de la estrategia de trading basada en unas bandas determinadas por la Inteligencia Artificial (IA) desarrollada por WORLDWEBS ©, recomendadas para operar, tanto para comprar, así como para vender criptomonedas')"><i>Trading</i> de Criptomoneda <?php echo $operar; ?><img src='imagenes/icono_ayuda.png' height='15'></label><br>
									<a href="historico_criptomoneda.php?moneda=<?php echo $operar; ?>" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;"><font size='2'>Ver histórico</font></a><br>
									<br>

								</div>

							</div>

							<?php

							if ($so == 'windows') {

								include 'trading_simulador_contenido_3_baja.php';

							}else{

								include 'trading_simulador_contenido_3_alta.php';

							}

							$url_revisa_bandas = "trading_simulador_contenido_bandas.php?bandaalta=" . $tasa_banda_alta . "&bandamedia=" . $tasa_banda_media . "&bandabaja=" . $tasa_banda_baja . "&operar=" . $operar . "&empresa=" . $empresa . "&departamento=" . $departamento;

							?>

							<script>

								ChequeaAsistenteVirtual();
								setInterval("frames['frame_revisa_bandas'].location.href = '<?php echo $url_revisa_bandas; ?>'", 1800000);

							</script>

							<label hidden><iframe id='frame_revisa_bandas' name='frame_revisa_bandas' src="<?php echo $url_revisa_bandas; ?>"></iframe></label>

							<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">

								<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

									<label>Tasa banda media:</label><input type="text" name="tasa_banda_media" id="tasa_banda_media" value='<?php echo number_format($tasa_banda_media, $decimales, '.', ','); ?>' style="font-size:30px; text-align:center; width: 100%; heigth: 100%" value='<?php echo "Monto en USD$"; ?>' disabled required />
									<font size='1'><br><br></font><img src='imagenes/icono_flecha.png' width='40'><br>
									<b><font color='red' size='2'>Zona neutral</font></b><br>

								</div>

								<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

									<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">
										<input type="text" name="compra_neutral_desde" id="compra_neutral_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($tasa_zonaneutral_baja, $decimales, '.', ','); ?>' disabled />
									</div>
									<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">
										<input type="text" name="venta_neutral_hasta" id="venta_neutral_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($tasa_zonaneutral_alta, $decimales, '.', ','); ?>' disabled />
									</div>

									<?php if ($so <> 'windows') {echo "<br><br><hr><br>";} ?>

								</div>

							</div>

							<?php 

							if ($so == 'windows') {

								include 'trading_simulador_contenido_3_alta.php';

							}else{

								include 'trading_simulador_contenido_3_baja.php';

							}

							?>

						</div>

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

							<br>

							<input type="text" name="moneda" id="moneda" value='<?php echo $operar; ?>' hidden />

							<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

								<div class="box featured">

									<div class="section-title">

										<div class="col-lg-1 mt-4 mt-lg-0" data-aos-delay="100">

										</div>

										<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">
											<font size='2'><label>Transacción</label>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Desde</label>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Hasta</label></font>
										</div>

									</div>

									<hr>

									<div class="section-title">

										<div class="col-lg-1 mt-4 mt-lg-0" data-aos-delay="100">
											<font size='2'><?php $carrito = 1; include 'valor_cripto_cambio.php'; ?>
										</div>

										<div align='left'>
										<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Compra #1:</label></font>
										</div>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="compra_1_desde" id="compra_1_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_compra_1_desde, $decimales, '.', ','); ?>' disabled />
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="compra_1_hasta" id="compra_1_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_compra_1_hasta, $decimales, '.', ','); ?>' disabled />
										</div>

									</div>

									<div class="section-title">

										<div class="col-lg-1 mt-4 mt-lg-0" data-aos-delay="100">
											<font size='2'><?php $carrito = 2; include 'valor_cripto_cambio.php'; ?>
										</div>

										<div align='left'>
											<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Compra #2:</label></font>
											</div>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="compra_2_desde" id="compra_2_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_compra_2_desde, $decimales, '.', ','); ?>' disabled />
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="compra_2_hasta" id="compra_2_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_compra_2_hasta, $decimales, '.', ','); ?>' disabled />
										</div>

									</div>

								</div>

							</div>

							<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

								<div class="box featured">

									<div class="section-title">

										<div class="col-lg-1 mt-4 mt-lg-0" data-aos-delay="100">

										</div>

										<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">
											<font size='2'><label>Transacción</label>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Desde</label>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Hasta</label></font>
										</div>

									</div>

									<hr>

									<div class="section-title">

										<div class="col-lg-1 mt-4 mt-lg-0" data-aos-delay="100">
											<font size='2'><?php $carrito = 4; include 'valor_cripto_cambio.php'; ?>
										</div>

										<div align='left'>
										<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">
											<label>Venta #1:</label></font>
										</div>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="venta_1_desde" id="venta_1_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_venta_1_desde, $decimales, '.', ','); ?>' disabled />
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="venta_1_hasta" id="venta_1_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_venta_1_hasta, $decimales, '.', ','); ?>' disabled />
										</div>

									</div>

									<div class="section-title">

										<div class="col-lg-1 mt-4 mt-lg-0" data-aos-delay="100">
											<font size='2'><?php $carrito = 5; include 'valor_cripto_cambio.php'; ?>
										</div>

										<div align='left'>
											<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">
												<label>Venta #2:</label></font>
											</div>
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="venta_2_desde" id="venta_2_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_venta_2_desde, $decimales, '.', ','); ?>' disabled />
										</div>

										<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">
											<input type="text" name="venta_2_hasta" id="venta_2_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_venta_2_hasta, $decimales, '.', ','); ?>' disabled />
										</div>

									</div>

								</div>

							</div>

						</div>

						<script type="text/javascript">

							Revisa4W();

						</script>

					</div>

				</div>

			</div>

		</div>

		<br>

		<div class="container" data-aos="fade-up">

			<div class="box featured">

				<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

					<div class="section-title">

						<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

							<div class="section-title">

								<label>Fase 2</label><br>
								<label title='¿Qué es esto?' onclick="alert('Para iniciar la simulación de su trading, proceda a abrir una cuenta con dinero ficticio, para simular un plan de trading')">INVERSIÓN <img src='imagenes/icono_ayuda.png' height='15'></label><br><br>

								<label><font size='3'>Para abrir una cuenta de inversión ficticia, por favor verifique que usted es humano:</font></label><br><br>

								<?php include 'captcha.php'; ?>

								<label id='fase2_instruccion_1' name='fase2_instruccion_1' hidden /><font size='3'>A continuación, proceda a abrir su cuenta ficticia, indicando el tipo de moneda del depósito inicial:</font></label>

								<br>

							</div>

						</div>

						<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

							<label><input type="submit" id="boton_deposito" name="boton_deposito" onclick='IA_trading(1);' value="Abrir cuenta USD$" style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled /></label><br><br>

						</div>

						<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

							<label><input type="submit" id="boton_deposito_cripto" name="boton_deposito_cripto" onclick='IA_trading(2);' value="Abrir cuenta <?php echo $operar; ?>" style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled /></label><br><br>

						</div>

					</div>

				</div>

				<label id='fase2_instruccion_2' name='fase2_instruccion_2' hidden />

					<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

						<div class="section-title">

							<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

								<input type="submit" id="boton_retiro_usd" name="boton_retiro_usd" onclick='IA_trading(3);' value="Retirar USD$" style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled />

							</div>

							<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

								<input type="submit"  id="boton_retiro_cripto" name="boton_retiro_cripto" onclick='IA_trading(4);' value="Retirar <?php echo $operar; ?>" style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled /><br><br>

							</div>

						</div>

					</div>

				</label>

				<div class="section-title">

					<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

						<div class="col-lg-2 mt-4 mt-lg-0" data-aos-delay="100">

							<label><font size=2>Cuenta de Trading#:</font></label>
							<input type="text" name="cuenta_trading" id="cuenta_trading" value='00000000' style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled />

						</div>

						<div class="col-lg-2 mt-4 mt-lg-0" data-aos-delay="100">

							<label><font size=2>Inversión incial USD$:</font></label>
							<input type="text" name="capital" id="capital" value='0.00' style="font-size:20px; text-align:center; width: 100%; heigth: 100%" value='Monto en USD$' disabled />

						</div>

						<div class="col-lg-2 mt-4 mt-lg-0" data-aos-delay="100">

							<label><font size=2>Saldo actual USD$:</font></label><input type="text" name="saldo_usd" id="saldo_usd" value='0.00' style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled />

						</div>

						<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">

							<label><font size=2>Inversión inicial <?php echo $operar; ?>:</font></label>
							<input type="text" name="capital_cripto" id="capital_cripto" value='<?php echo $valorcero; ?>' style="font-size:20px; text-align:center; width: 100%; heigth: 100%" value='Monto en <?php echo $operar; ?>' disabled />

						</div>

						<div class="col-lg-3 mt-4 mt-lg-0" data-aos-delay="100">

							<label><font size=2>Saldo actual <?php echo $operar; ?>:</font></label><input type="text" name="saldo_cripto" id="saldo_cripto" value='<?php echo $valorcero; ?>' style="font-size:20px; text-align:center; width: 100%; heigth: 100%" disabled />

						</div>

					</div>

					<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

						<br>

						<font color='red' size='2'><label onclick='Limpiar_trading();' title='Presione para empezar de nuevo todo el plan de trading' />Cerrar cuenta</label></font>

					</div>

				</div>

				<font size='2'><label>Movimientos de la Cuenta:</label></font><br>

				<iframe id='iframe' name='iframe' width="<?php echo $ancho * 2; ?>" height="<?php echo $alto2; ?>" src="estado_cuenta.php" frameborder="0" allowfullscreen></iframe>

			</div>

		</div>

	</section>

	<?php

	include 'donaciones.php';

?>