<script language='javascript'>

	function Moneda(moneda) {

		var moneda = new Intl.NumberFormat('en-US', { currency: 'USD', style: 'decimal', minimumFractionDigits: 2 }).format(moneda);

		return moneda;

	}

	function LimpiaAutorenovable() {

		$("#autorenovable").prop('disabled', true);
		$('#autorenovable option').remove();
		$('#autorenovable').append('<option value="">Seleccione</option>');

	}

	function LimpiaMontos() {

		$("#monto").prop('disabled', false);
		document.getElementById('monto').value = "0.00";
		$("#monto").prop('disabled', true);

		$("#iva").prop('disabled', false);
		document.getElementById('iva').value = "0.00";
		$("#iva").prop('disabled', true);

		$("#total").prop('disabled', false);
		document.getElementById('total').value = "0.00";
		$("#total").prop('disabled', true);

	}

	function DesactivaBotones() {

		$("#aceptar_off").prop('hidden', false);
		$("#boton_s").prop('hidden', true);

	}

	function OcultaComprar() {

		$("#comprar_off").prop('hidden', false);
		$("#btn-abrir-popup").prop('hidden', true);

	}

</script>

<?php

if ($iid_servicio <> 1) {

	$result2 = mysqli_query($connect, "SELECT * FROM areas order by area");
	$c = 0;
	while ($row2 = mysqli_fetch_array($result2)){
		$result21 = mysqli_query($connect, "SELECT count(*) as cantidad FROM templates where idarea=$row2[id]");
		$row21 = mysqli_fetch_array($result21);
		$MatrizAreas[$c][0] = $row2[id];
		$MatrizAreas[$c][1] = $row2[area] . " (" . $row21[cantidad] . ")";
		$MatrizAreas[$c][2] = $row21[cantidad];
		$c++;
	}

	$result2 = mysqli_query($connect, "SELECT * FROM templates order by template");
	$c = 0;
	while ($row2 = mysqli_fetch_array($result2)){
		$MatrizTemplates[$c][0] = $row2[id];
		$MatrizTemplates[$c][1] = $row2[template]." by ".$row2[creador];
		$MatrizTemplates[$c][2] = $row2[idarea];
		$c++;
	}

	$MatrizAutorenovableWS[0][0] = "";
	$MatrizAutorenovableWS[0][1] = "Seleccione";
	$MatrizAutorenovableWS[1][0] = "1";
	$MatrizAutorenovableWS[1][1] = "Sí";
	$MatrizAutorenovableWS[2][0] = "2";
	$MatrizAutorenovableWS[2][1] = "No";

	?>

	<script language='javascript'>

	function LimpiaTemplates() {

		$("#template").prop('disabled', true);
		$('#template option').remove();
		$('#template').append('<option value="">Seleccione</option>');

	}

	</script>

	<?php

}else{

	$result2 = mysqli_query($connect, "SELECT * FROM localizaciones where id_servicio=$iid_servicio order by localizacion");
	$c = 0;
	while ($row2 = mysqli_fetch_array($result2)){
		$MatrizRegionCiudad[$c][0] = $row2[id];
		$MatrizRegionCiudad[$c][1] = $row2[localizacion];
		$MatrizRegionCiudad[$c][2] = $row2[status];
		$c++;
	}

	$result2 = mysqli_query($connect, "SELECT * FROM sistemasoperativos order by sistemaoperativo");
	$c = 0;
	while ($row2 = mysqli_fetch_array($result2)){
		$MatrizSistemasOperativos[$c][0] = $row2[id];
		$MatrizSistemasOperativos[$c][1] = $row2[sistemaoperativo];
		$c++;
	}

	$MatrizAutorenovable[0][0] = "";
	$MatrizAutorenovable[0][1] = "Seleccione";
	$MatrizAutorenovable[1][0] = "1";
	$MatrizAutorenovable[1][1] = "Sí, formatear al vencer";
	$MatrizAutorenovable[2][0] = "2";
	$MatrizAutorenovable[2][1] = "Sí, no formatear";
	$MatrizAutorenovable[3][0] = "3";
	$MatrizAutorenovable[3][1] = "No";

	$result2 = mysqli_query($connect, "SELECT * FROM planes_tarifas order by id");
	$c = 0;
	while ($row2 = mysqli_fetch_array($result2)){
		$MatrizMontos[$c][0] = $row2[id];
		$MatrizMontos[$c][1] = $row2[tarifa_w] * $row2[status_w];
		$MatrizMontos[$c][2] = $row2[tarifa_l] * $row2[status_l];
		$c++;
	}

	?>

	<script language='javascript'>

	function LimpiaRegionCiudad() {

		$("#regionciudad").prop('disabled', true);
		$('#regionciudad option').remove();
		$('#regionciudad').append('<option value="">Seleccione</option>');

	}

	function LimpiaSistemaOperativo() {

		$("#sistemaoperativo").prop('disabled', true);
		$('#sistemaoperativo option').remove();
		$('#sistemaoperativo').append('<option value="">Seleccione</option>');

	}

	</script>

	<?php

}

$result2 = mysqli_query($connect, "SELECT * FROM formas_pago order by id");
$c = 0;
while ($row2 = mysqli_fetch_array($result2)){
	$MatrizPagos[$c][0] = $row2[id];
	$MatrizPagos[$c][1] = $row2[formapago];
	$MatrizPagos[$c][2] = $row2[id_name];
	$MatrizPagos[$c][3] = $row2[imagen];
	$MatrizPagos[$c][4] = $row2[status];
	$MatrizPagos[$c][5] = $row2[cuenta];
	$MatrizPagos[$c][6] = $row2[datos_adicionales];
	$c++;
}


$motor = 3;
include 'motor_busqueda.php';

?>