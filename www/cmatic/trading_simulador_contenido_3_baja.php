	<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

			<label>Tasa banda baja:</label><input type="text" name="tasa_banda_baja" id="tasa_banda_baja" value='<?php echo number_format($tasa_banda_baja, $decimales, '.', ','); ?>' style="font-size:30px; text-align:center; width: 100%; heigth: 100%" value='<?php echo "Monto en USD$"; ?>' disabled required />
			<font size='1'><br><br></font><img src='imagenes/icono_flecha.png' width='40'><br>
			<b><font color='green' size='2'>Zona para comprar <?php echo $operar; ?></font></b>

		</div>

	<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

		<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

			<input type="text" name="zona_compra_desde" id="zona_compra_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_compra_2_desde, $decimales, '.', ','); ?>' disabled />

		</div>

		<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

			<input type="text" name="zona_compra_hasta" id="zona_compra_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_compra_1_hasta, $decimales, '.', ','); ?>' disabled />

		</div>

		<?php if ($so <> 'windows') {echo "<br><br><hr><br>";} ?>

	</div>

</div>
