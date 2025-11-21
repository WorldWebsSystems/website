<!DOCTYPE html>
<html lang='es'>

<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style>

		#div-descripcion<?php echo $ffuncionDescripcion; ?> 
		{
			position: fixed;
			bottom: 0px;
			left: 0px;
			width: 100%;
			background-color: white;
			box-shadow: 0px -5px 15px gray;
			padding: 15px;
			text-align: center;
			z-index: 99;
		}

	</style>

	<script language='javascript'>

		function <?php echo $funcionDescripcion; ?> {

			var titulo = $("#plan<?php echo $numero_descripcion - 1; ?>").val();
			var texto = $("#detalle_amplio<?php echo $numero_descripcion - 1; ?>").val();

			$("#descripcion_titulo<?php echo $ffuncionDescripcion; ?>").prop('disabled', false);
			document.getElementById('descripcion_titulo<?php echo $ffuncionDescripcion; ?>').value = titulo;
			$("#descripcion_titulo<?php echo $ffuncionDescripcion; ?>").prop('disabled', true);

			$("#descripcion_texto<?php echo $ffuncionDescripcion; ?>").prop('disabled', false);
			document.getElementById('descripcion_texto<?php echo $ffuncionDescripcion; ?>').value = texto;
			$("#descripcion_texto<?php echo $ffuncionDescripcion; ?>").prop('disabled', true);

			$('#div-descripcion<?php echo $ffuncionDescripcion; ?>').show();

		}


		function aceptarDescripcion<?php echo $ffuncionDescripcion; ?>() {

			$('#div-descripcion<?php echo $ffuncionDescripcion; ?>').hide();

		}

	</script>

</head>

<body>

	<div id="div-descripcion<?php echo $ffuncionDescripcion; ?>" style="display: none;">

		<?php include 'template_titulos.php'; ?>
		<font size=<?php echo $fuente; ?>><textarea id="descripcion_titulo<?php echo $ffuncionDescripcion; ?>" rows="1"  style="border:none; text-align:center; width: 100%; heigth: 100%" /></textarea></font><br><br>
		<font size=3><textarea id="descripcion_texto<?php echo $ffuncionDescripcion; ?>" rows="7"  style="border:none; text-align:center; width: 100%; heigth: 100%" /></textarea></font><br><br>
		
		<font size=3><button type="button<?php echo $ffuncionDescripcion; ?>" class="btn btn-sm btn-primary" onclick="aceptarDescripcion<?php echo $ffuncionDescripcion; ?>()">Aceptar</button></font>

	</div>

</body>

</html>