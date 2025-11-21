<script language='javascript'>

	function nav1(value) {

		window.location='directorio_sitiosweb.php?pais=' + value;

	}

</script>

<br><br>

<div align="center">

	<?php

	if ($tema == '') {

		?>

		<div class="row">

			<div class="col-md-12">

				<img src='imagenes/icono_igsitioweb.png' height='75'><br>

				<p><font size=4>DIRECTORIO MUNDIAL DE SITIOS WEB</i>

			</div>	

		</div>

		<?php

	}else{

		?>

		<div class="row">

			<div class="col-md-12">

				<img src='imagenes/<?php echo $imagen_area; ?>' height='80'><br>

				<font size=5><b><?php echo $area; ?>:</b></font><br><br>

				<label id='boton' name='boton' disabled /><a href="directorio_sitiosweb.php" class="get-started-btn ml-auto">Todas las categorías</a></label><br>

				<p><b><font size=4 color='white'>DIRECTORIO DE SITIOS WEB:</font></b></p>

			</div>		

		</div>

		<?php

	}

	include 'fecha_hora.php';

	if ($so == 'windows') {

		$ancho = '100';
		$alto  = '70';
		$ancho_inst = '250';

	}else{

		$ancho = '150';
		$alto  = '50';
		$ancho_inst = '350';

	}

	?>

	<br>

	<table width='100%'>

		<tr>

			<td align='right' width='45%'>

				<strong><font color='black'>PAÍS:</font></strong>

			</td>

			<td width='5%'>

			</td>

			<td width='50%'>

				<select onChange=nav1(this.value) id="id_pais" name="id_pais" required="required" />

					<option value="">Seleccione</option>

					<?php

					$resultado001 = mysqli_query($connect, "SELECT red.*, loc_paises.* FROM ((red INNER JOIN loc_ciudades ON red.id_ciudad = loc_ciudades.Id) INNER JOIN loc_estados ON loc_ciudades.idestado = loc_estados.Id) INNER JOIN loc_paises ON loc_estados.idpais = loc_paises.Id where red.status = 1 group by loc_paises.pais order by loc_paises.pais asc");

					while ($row001 = mysqli_fetch_array($resultado001)) {

						?>

						<option value='<?php echo $row001[pais] . "' "; if ($pais == $row001[pais]) {echo ' SELECTED';} ?>><?php echo $row001[pais]; ?></option>

						<?php

					}

					?>

				</select>

			</td>

		</tr>

		<tr>

			<td align='right'>

				<strong><font color='black'>REGIÓN:</font></strong>

			</td>

			<td>

			</td>

			<td>

				<select onChange=nav2(this.value) id="id_pais" name="id_pais" required="required" disabled />

					<option value="">Seleccione</option>

				</select>

			</td>

		</tr>

		<tr>

			<td align='right'>

				<strong><font color='black'>CIUDAD:</font></strong>

			</td>

			<td>

			</td>

			<td>

				<select onChange=nav3(this.value) id="id_pais" name="id_pais" required="required" disabled  />

					<option value="">Seleccione</option>

				</select>

			</td>

		</tr>

	</table>

</div>

<br>