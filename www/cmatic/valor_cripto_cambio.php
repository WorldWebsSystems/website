<?php

if ($tipo == 1) {

	$titulo_cambio = 'Recomendación: Cambiar USD$ a ' . $operar;

}else{

	$titulo_cambio = 'Recomendación: Cambiar ' . $operar . ' a USD$';

}

?>

<label id='carrito<?php echo $carrito; ?>' name='carrito<?php echo $carrito; ?>' onclick='Trading(<?php echo $tipo; ?>, <?php echo $carrito; ?>);' hidden / >
<img src='imagenes/icono_alerta.png' width='25' title='<?php echo $titulo_cambio; ?>'></label>