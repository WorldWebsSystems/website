<?php

	$result11     	   = mysqli_query($connect, "SELECT * FROM formas_pago where id=$forma_pago");
	$row11 	     	   = mysqli_fetch_array($result11);

	$id_formapago  	   = $row11[id];
	$formapago   	   = $row11[formapago];
	$id_name   	   = $row11[id_name];
	$moneda	     	   = $row11[moneda];
	$red	     	   = $row11[red];
	$imagen	     	   = $row11[imagen];
	$cuenta	     	   = $row11[cuenta];
	$datos_adicionales = $row11[datos_adicionales];
	$nota	     	   = $row11[nota];
	$codigo_qr  	   = $row11[codigo_qr];
	$tipo 	     	   = $row11[tipo];
	$orden  	   = $row11[orden];
	$status  	   = $row11[status];

?>