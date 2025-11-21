<?php

include 'detecta_ip.php';

$empresa = $ip;

?>

	<script>

	function Departamento(value, numero) {

		if (numero === '999999') {

			$("#departamento_999999").prop('disabled', false);

		}else{

			$("#departamento_999999").prop('disabled', true);

		}

		$("#boton_s").prop('disabled', false);

	}

	</script>

	<section id="login" class="pricing">

		<div class="container" data-aos="fade-up">

			<div class="box featured">

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

					<div align='center'>

						<label>Empresa:</label><br>
						<h2><?php echo $ip; ?></h2>
						<br><br>

						Seleccione departamento:<br><br>

					<font size='3'>

						<div align='center'>

						<form id="formulario" action="trading_simulador.php?operar=<?php echo $operar; ?>" method="post">

							<table>

								<tr>

									<td align='center'>

										<?php

										$i = 0;

										$resultado2 = mysqli_query($connect, "SELECT * FROM cuentas_trading Where empresa='$empresa' and moneda='$operar' order by departamento asc");

										while($row2 = mysqli_fetch_array($resultado2)) {

													$i++;

													?>
													<input onclick="Departamento(this.checked, '<?php echo $i; ?>') = !this.checked" id="sel_departamento_<?php echo $i; ?>" name="sel_departamento" type="radio" onclick="" value='<?php echo $i; ?>' style="height:35px; width:25px; vertical-align: middle;" required />&nbsp;

												</td>

												<td align='center'>

													<input id="departamento_<?php echo $i; ?>" name="departamento_<?php echo $i; ?>" type="text" value='<?php echo $row2[departamento]; ?>' placeholder='Sin nombre' size='25' style="border:none; text-align:left; width: 100%; heigth: 100%; background-color:transparent;" disabled /><br>

												</td>

											</tr>

											<tr>

												<td align='center'>

													<?php

										}

										?>

										<input onclick="Departamento(this.checked, '999999') = !this.checked" id="sel_departamento_999999" name="sel_departamento" type="radio" value='<?php echo $i; ?>' style="height:35px; width:25px; vertical-align: middle;" />&nbsp;

									</td>

									<td align='center'>

										<input id="departamento_999999" name="departamento_999999" type="text" placeholder='Nuevo departamento' size='25' text-align:center; width: 100%; heigth: 100%" disabled required /><br>

									</td>

								</tr>

							</table>

							<br><br>

							<div align='center'>

							<?php

							include 'captcha.php';

							?>

							<br><br>

							<input id="boton_s" name="boton_s" class="buy-btn" type="submit" value="Entrar" disabled />

						</form>

						</div>

					</font>

				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

				</div>

			</div>

		</div>

	</section>