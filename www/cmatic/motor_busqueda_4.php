<?php

$motor = 5;
include 'motor_busqueda.php';

?>

<script language='javascript'>

	function nav1(value) {

		var id_servicio = '<?php echo $iid_servicio; ?>';

		document.getElementById('plan').value = value;

		if (value != "" ) {

			if (id_servicio != "1") {

				var MatrizAreas		= <?php echo json_encode($MatrizAreas); ?>;
				var MatrizMontosWSI	= <?php echo json_encode($MatrizMontosWSI); ?>;
				var MatrizPagos		= <?php echo json_encode($MatrizPagos); ?>;
				var plan 		= $("#plan").val();
				var totalplan		= <?php echo $total_plan; ?>;

				var iva  	= <?php echo $iva; ?>;
				var statusso 	= '';

				$("#area").prop('disabled', false);
				$('#area option').remove();
				$('#area').append("<option value=''>Seleccione</option>");

	    			for(var c=0; c < MatrizAreas.length; c++) {

					if (MatrizAreas[c][2] > 0) {

		                		$('#area').append("<option value="+MatrizAreas[c][0]+">"+MatrizAreas[c][1]+"</option>");

					}

				}

		    		for(var c=0; c < MatrizMontosWSI.length; c++) {

					if (plan == MatrizMontosWSI[0]) {

						$("#monto").prop('disabled', false);

						var subtotal = totalplan;
						document.getElementById('monto').value = Moneda(totalplan);
						$("#monto").prop('disabled', true);

						var montoiva = subtotal * iva / 100;
						$("#iva").prop('disabled', false);
						document.getElementById('iva').value = Moneda(montoiva);
						$("#iva").prop('disabled', true);

						$("#total").prop('disabled', false);
						var montototal = parseFloat(subtotal) + montoiva;
						document.getElementById('total').value = Moneda(montototal);
						$("#total").prop('disabled', true);

						c = MatrizMontosWSI.length + 1;

					}

				}

				LimpiaTemplates();

			}else{

				var MatrizRegionCiudad=<?php echo json_encode($MatrizRegionCiudad); ?>;
				var statusciudad = '';

				$("#regionciudad").prop('disabled', false);
				$('#regionciudad option').remove();
				$('#regionciudad').append("<option value=''>Seleccione</option>");
					
    				for(var c=0; c < MatrizRegionCiudad.length; c++) {

					if (MatrizRegionCiudad[c][2] == "1") {
						status = "";
					}else{
						status = " X";
					}

                    			$('#regionciudad').append("<option value="+MatrizRegionCiudad[c][0]+">"+MatrizRegionCiudad[c][1]+status+"</option>");

				}

			}

			LimpiaAutorenovable();
			DesactivaBotones();
			OcultaComprar();

		}

	}

	function nav11(value, adicional) {

		var id_servicio 		= '<?php echo $iid_servicio; ?>';
		var precio_redessociales	= <?php echo $ppprecio_redessociales; ?>;
		var precio_chatvivo		= <?php echo $ppprecio_chatvivo; ?>;
		var precio_contenidoinformativo = <?php echo $ppprecio_contenidoinformativo; ?>;
		var precio_registrodominio	= <?php echo $ppprecio_registrodominio; ?>;
		var TarifasAnuales		= <?php echo json_encode($TarifasAnuales); ?>;
		var subtotal 			= $("#monto").val();
		var iva  			= <?php echo $iva; ?>;

		if (value == true) {

			$("#monto").prop('disabled', false);

			if (adicional == 1) { var subtotal = parseFloat(subtotal) + parseFloat(precio_redessociales); }
			if (adicional == 2) { var subtotal = parseFloat(subtotal) + parseFloat(precio_chatvivo); }
			if (adicional == 3) { var subtotal = parseFloat(subtotal) + parseFloat(precio_contenidoinformativo); }
			if (adicional == 4) { var subtotal = parseFloat(subtotal) + parseFloat(precio_registrodominio); }

			document.getElementById('monto').value = Moneda(subtotal);

			$("#monto").prop('disabled', true);

			var montoiva = subtotal * iva / 100;
			$("#iva").prop('disabled', false);
			document.getElementById('iva').value = Moneda(montoiva);
			$("#iva").prop('disabled', true);

			$("#total").prop('disabled', false);
			var montototal = parseFloat(subtotal) + montoiva;
			document.getElementById('total').value = Moneda(montototal);
			$("#total").prop('disabled', true);

		}else{

			$("#monto").prop('disabled', false);

			if (adicional == 1) { var subtotal = parseFloat(subtotal) - parseFloat(precio_redessociales); }
			if (adicional == 2) { var subtotal = parseFloat(subtotal) - parseFloat(precio_chatvivo); }
			if (adicional == 3) { var subtotal = parseFloat(subtotal) - parseFloat(precio_contenidoinformativo); }
			if (adicional == 4) { var subtotal = parseFloat(subtotal) - parseFloat(precio_registrodominio); }

			document.getElementById('monto').value = Moneda(subtotal);

			$("#monto").prop('disabled', true);

			var montoiva = subtotal * iva / 100;
			$("#iva").prop('disabled', false);
			document.getElementById('iva').value = Moneda(montoiva);
			$("#iva").prop('disabled', true);

			$("#total").prop('disabled', false);
			var montototal = parseFloat(subtotal) + montoiva;
			document.getElementById('total').value = Moneda(montototal);
			$("#total").prop('disabled', true);

		}

	}

	function nav2(value) {

		var id_servicio = '<?php echo $iid_servicio; ?>';
		var MatrizPagos	= <?php echo json_encode($MatrizPagos); ?>;

		if (value != "" ) {

			if (id_servicio != 1) {

				var MatrizTemplates = <?php echo json_encode($MatrizTemplates); ?>;
				var MatrizTemplates = <?php echo json_encode($MatrizTemplates); ?>;
				var i = 0;

				$("#template").prop('disabled', false);
				$('#template option').remove();
				$('#template').append("<option value=''>Seleccione</option>");
					
		    		for (var c=0; c < MatrizTemplates.length; c++) {

					if (MatrizTemplates[c][2] == value) {

						$('#template').append("<option value="+MatrizTemplates[c][0]+">"+MatrizTemplates[c][1]+"</option>");
						i = i + 1;

					}

				}

				if (i == 0) {

					$("#template").prop('disabled', true);

				}

			}else{

				var MatrizSistemasOperativos=<?php echo json_encode($MatrizSistemasOperativos); ?>;
				var MatrizPagos = <?php echo json_encode($MatrizPagos); ?>;
				var statusso = '';

				$("#sistemaoperativo").prop('disabled', false);
				$('#sistemaoperativo option').remove();
				$('#sistemaoperativo').append("<option value=''>Seleccione</option>");
					
		    		for (var c=0; c < MatrizSistemasOperativos.length; c++) {

					$('#sistemaoperativo').append("<option value="+MatrizSistemasOperativos[c][0]+">"+MatrizSistemasOperativos[c][1]+statusso+"</option>");

				}

				LimpiaMontos();

				LimpiaAutorenovable();
				LimpiaTipoFormato();
				DesactivaBotones();
				OcultaComprar();


			}

		}else{

			if (id_servicio != 1) {

				LimpiaTemplates();

			}else{

				LimpiaSistemaOperativo();
				LimpiaMontos();

			}

		}

		for(var c=0; c < MatrizPagos.length; c++) {

			$("#"+MatrizPagos[c][2]).prop('disabled', true);

		}
		LimpiaAutorenovable();
		DesactivaBotones();
		OcultaComprar();
			
	}

	function nav3(value) {

		var id_servicio = '<?php echo $iid_servicio; ?>';
		var MatrizPagos	= <?php echo json_encode($MatrizPagos); ?>;

		if (value != "" ) {

			if (id_servicio != 1) {

				var MatrizAutorenovableWS=<?php echo json_encode($MatrizAutorenovableWS); ?>;

				$("#autorenovable").prop('disabled', false);
				$('#autorenovable option').remove();

		    		for(var c=0; c < MatrizAutorenovableWS.length; c++) {

		                   		$('#autorenovable').append("<option value="+MatrizAutorenovableWS[c][0]+">"+MatrizAutorenovableWS[c][1]+"</option>");

				}

			}else{

				var MatrizAutorenovable=<?php echo json_encode($MatrizAutorenovable); ?>;
				var MatrizSistemasOperativos=<?php echo json_encode($MatrizSistemasOperativos); ?>;
				var MatrizMontos=<?php echo json_encode($MatrizMontos); ?>;
				var MatrizPagos=<?php echo json_encode($MatrizPagos); ?>;
				var plan = $("#plan").val();
				var iva  = <?php echo $iva; ?>;
				var statusso = '';

		    		for(var c=0; c < MatrizMontos.length; c++) {

					if (plan == MatrizMontos[c][0]) {

						var sistemaoperativo = $("#sistemaoperativo").val();

						$("#monto").prop('disabled', false);
						if (MatrizSistemasOperativos[sistemaoperativo-1][1].substr(0, 1) == 'W') {
							var subtotal = MatrizMontos[c][1];
							document.getElementById('monto').value = (parseFloat(subtotal)).toFixed(2);
						}else{
							var subtotal = MatrizMontos[c][2];
							document.getElementById('monto').value = (parseFloat(subtotal)).toFixed(2);
						}
						$("#monto").prop('disabled', true);

						var montoiva = subtotal * iva / 100;
						$("#iva").prop('disabled', false);
						document.getElementById('iva').value = (parseFloat(montoiva)).toFixed(2);
						$("#iva").prop('disabled', true);

						$("#total").prop('disabled', false);
						var montototal = parseFloat(subtotal) + montoiva;
						document.getElementById('total').value = (parseFloat(montototal)).toFixed(2);
						$("#total").prop('disabled', true);

						if (montototal == 0) {

							alert('En este momento el servicio de VPS con el sistema operativo indicado, no se encuentra disponible.\n\nPor favor reintente mas tarde.');

							LimpiaAutorenovable();

							$("#sistemaoperativo").prop('disabled', false);
							$('#sistemaoperativo option').remove();
							$('#sistemaoperativo').append("<option value=''>Seleccione</option>");

			    				for (var c=0; c < MatrizSistemasOperativos.length; c++) {

								$('#sistemaoperativo').append("<option value="+MatrizSistemasOperativos[c][0]+">"+MatrizSistemasOperativos[c][1]+statusso+"</option>");

							}

						}else{

							$("#autorenovable").prop('disabled', false);
							$('#autorenovable option').remove();

				    			for(var c=0; c < MatrizAutorenovable.length; c++) {

				                    		$('#autorenovable').append("<option value="+MatrizAutorenovable[c][0]+">"+MatrizAutorenovable[c][1]+"</option>");

							}

						}

						c = MatrizMontos.length + 1;

					}

				}

			}

		}else{

			if (id_servicio != 1) {

				LimpiaAutorenovable();

			}else{

				LimpiaMontos();
				LimpiaAutorenovable();

			}

		}

		for(var c=0; c < MatrizPagos.length; c++) {

			$("#"+MatrizPagos[c][2]).prop('disabled', true);

		}
		DesactivaBotones();
		OcultaComprar();
			
	}

	function nav4(value) {

		var id_servicio = '<?php echo $iid_servicio; ?>';
		var MatrizPagos = <?php echo json_encode($MatrizPagos); ?>;

		if (value != "" ) {

			if (id_servicio != 1) {

				var total       = $("#total").val();
				var plan    	= $("#plan").val();

				if (total != 0) {

			    		for(var c=0; c < MatrizPagos.length; c++) {

						if ((MatrizPagos[c][4] == 1) && (MatrizPagos[c][5] != '')) {

							$("#"+MatrizPagos[c][2]).prop('disabled', false);

						}

					}

				}

			}else{

				var MatrizPagos = <?php echo json_encode($MatrizPagos); ?>;
				var total       = $("#total").val();
				var plan    	= $("#plan").val();

				if (total != 0) {

		    			for(var c=0; c < MatrizPagos.length; c++) {

						if (MatrizPagos[c][4] == 1) {

							$("#"+MatrizPagos[c][2]).prop('disabled', false);

						}

					}

				}

			}

		}else{

			if (id_servicio != 1) {

				for(var c=0; c < MatrizPagos.length; c++) {

					$("#"+MatrizPagos[c][2]).prop('disabled', true);

				}

			}

			DesactivaBotones();
			OcultaComprar();

		}


	}

</script>

<?php

	switch ($iid_servicio) {

		case 1:
			$link = $link_vps;
			break;

		case 2:
			$link = $link_websites;
			break;

		case 3:
			$link = $link_webhosting;
			break;

		case 6:
			$link = $link_ingenieria;
			break;

	}

?>