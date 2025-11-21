<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div id="div-cookies" style="display: none;">
	<font size=2>Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros usuarios, a fin de mejorar nuestros servicios. <a href='politicas.php' target="_blank">Leer más información</a><br><br>
	<font size=1><button type="button" class="btn btn-sm btn-primary" onclick="acceptCookies()">Aceptar</button>&nbsp;&nbsp;&nbsp;
	<font size=1><button type="button" class="btn btn-sm btn-primary" onclick="javascript:history.back()\">Rechazar</button>
</div>

<style>
	#div-cookies 
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

	function checkAcceptCookies() {
		$('#div-cookies').show();
	}

	function acceptCookies() {
		$('#div-cookies').hide();
	}

	$(document).ready(function() {
    	checkAcceptCookies();
	});

</script>