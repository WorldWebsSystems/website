<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div id="div-cookies" style="display: none;">
	<font size=1><?php echo $cookies; ?>
	<a hreflang="es" href="<?php echo $link_acerca; ?>" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;"><br>Aviso Legal</a>
	y la <a hreflang="es" href="privacidad.php" target="_blank" onclick="window.open(this.href, this.target, 'top=120,left=300,width=750,height=430'); return false;">Política de Privacidad</a>. </font><br><br>
	<button type="button" class="btn btn-sm btn-primary" onclick="acceptCookies()">Acepto el uso de cookies</button>
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
		if (localStorage.acceptCookies == 'true') {} else {
			$('#div-cookies').show();
		}
	}

	function acceptCookies() {
		localStorage.acceptCookies = 'true';
		$('#div-cookies').hide();
	}

	$(document).ready(function() {
    	checkAcceptCookies();
	});

</script>