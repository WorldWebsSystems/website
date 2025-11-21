	<div class="col-lg-4 mt-4 mt-lg-0" data-aos-delay="100">

		<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

			<label>Tasa banda alta:</label><input type="text" name="tasa_banda_alta" id="tasa_banda_alta" value='<?php echo number_format($tasa_banda_alta, $decimales, '.', ','); ?>' style="font-size:30px; text-align:center; width: 100%; heigth: 100%" value='<?php echo "Monto en USD$"; ?>' disabled required />
			<font size='1'><br><br></font><img src='imagenes/icono_flecha.png' width='40'><br>
			<b><font color='green' size='2'>Zona para vender <?php echo $operar; ?></font></b>

		</div>

	<div class="col-lg-12 mt-4 mt-lg-0" data-aos-delay="100">

		<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

			<input type="text" name="zona_venta_desde" id="zona_venta_desde" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_venta_1_desde, $decimales, '.', ','); ?>' disabled />

		</div>

		<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="100">

			<input type="text" name="zona_venta_hasta" id="zona_venta_hasta" style="font-size:15px; text-align:center; width: 100%; heigth: 100%" value='<?php echo number_format($alerta_venta_2_hasta, $decimales, '.', ','); ?>' disabled />

		</div>

		<?php if ($so <> 'windows') {echo "<br><br><hr><br>";} ?>

	</div>

</div>