<?php

//-------------BOTÓN DE TARIFAS DEL SITIO WEB---------------//

if ($contratando == 0) {
	?><form id="formulario" action="carrito_compras.php?agregar=<?php echo $MatrizPlan[$i][0]; ?>" method="post"><?php
		?><input id="boton_s" name="boton_s" class="buy-btn" type="submit" value="Pedir ahora" /><?php
}


if ($contratando == 1) {
	include 'formas_pago_validausuario.php';
}

if ($contratando == 2) {
	?><form id="formulario" action="contrato_plan_sel.php" method="post"><?php
		?><input id="boton_s" name="boton_s" class="buy-btn" type="submit" value="Pagar" disabled /><?php
		include 'check_terminos.php';
}

?>

		<input id="id" name="id" type="text" value="<?php echo "$iid" ?>" hidden />
		<input id="carpeta" name="carpeta" type="text" value="<?php echo "$ccarpeta" ?>" hidden />
		<input id="codigo_cliente" name="codigo_cliente" type="text" value="<?php echo "$ccodigo_cliente" ?>" hidden />
		<input id="contrasena" name="contrasena" type="text" value="<?php echo "$ccontrasena" ?>" hidden />
		<input id="email" name="email" type="text" value="<?php echo "$eemail" ?>" hidden />
		<input id="plan" name="plan" type="text" value="<?php echo "$plan" ?>" hidden />

	</form>