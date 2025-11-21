<?php

		$result999 = mysqli_query($connect, "SELECT * FROM servicios_detalles where precio>0 order by id");
		while ($row999 = mysqli_fetch_array($result999)) {

			switch ($row999[id]) {

	    			case 3:	$precio_redessociales 		= $row999[precio];
					$ppprecio_redessociales 	= $precio_redessociales 	* $duracion;
	        			break;
		    		case 4: $precio_chatvivo 		= $row999[precio];
					$ppprecio_chatvivo 		= $precio_chatvivo 		* $duracion;
        				break;
		    		case 2:	$precio_contenidoinformativo 	= $row999[precio];
					$ppprecio_contenidoinformativo 	= $precio_contenidoinformativo 	* $duracion;
        				break;
	    			case 5: $precio_registrodominio   	= $row999[precio];
					$ppprecio_registrodominio 	= $precio_registrodominio 	* $duracion;
	        			break;
		    		case 17:$result88 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_tarifa");
					$row88 = mysqli_fetch_array($result88);
					$precio_propiedadintelectual 	= $row999[precio] / 160 * $row88[horas_wm];
					$ppprecio_propiedadintelectual 	= $precio_propiedadintelectual 	* $duracion;
	        			break;
		    		case 34:$result88 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_tarifa");
					$row88 = mysqli_fetch_array($result88);
					$precio_webmaster10	  	= $row999[precio] / 160 * $row88[horas_wm];
					$ppprecio_webmaster10 	  	= $precio_webmaster10 		* $duracion;
	        			break;

			}

		}

		$result999 = mysqli_query($connect, "SELECT * FROM planes_tarifas where id=$id_tarifa");
		$row999 = mysqli_fetch_array($result999);
		$MatrizMontosWSI[0]  = $row999[id];
		$MatrizMontosWSI[1]  = $row999[t1];  //plan básico
		$MatrizMontosWSI[2]  = $row999[t2] * $precio_redessociales;
		$MatrizMontosWSI[3]  = $row999[t3] * $precio_chatvivo;
		$MatrizMontosWSI[4]  = $row999[t4] * $precio_contenidoinformativo;
		$MatrizMontosWSI[5]  = $row999[t5] * $precio_propiedadintelectual;
		$MatrizMontosWSI[6]  = $row999[t6] * $precio_webmaster10;
		$MatrizMontosWSI[7]  = $row999[t10]* $precio_registrodominio;

		$subtotal 		= $MatrizMontosWSI[1] * $duracion;
		$precio_redessociales 	= $MatrizMontosWSI[2] * $duracion;
		$precio_chatvivo 	= $MatrizMontosWSI[3] * $duracion;
		$precio_contenidoinf 	= $MatrizMontosWSI[4] * $duracion;
		$precio_propiedadint 	= $MatrizMontosWSI[5] * $duracion;
		$precio_webmaster10 	= $MatrizMontosWSI[6] * $duracion;
		$precio_dominio 	= $MatrizMontosWSI[7] * $duracion;

		$total_plan    = $subtotal + $precio_redessociales + $precio_chatvivo + $precio_contenidoinf + $precio_dominio + $precio_propiedadint + $precio_webmaster10;

		$total_mensual = $MatrizMontosWSI[1] + $MatrizMontosWSI[2] + $MatrizMontosWSI[3] + $MatrizMontosWSI[4] + $MatrizMontosWSI[5] + $MatrizMontosWSI[6] + $MatrizMontosWSI[7];

?>