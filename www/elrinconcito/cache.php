<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div id="div-CookiesCache" style="display: none;">
	<font size=1>POLÍTICA DE PRIVACIDAD Y MANEJO DE COOKIES:<br>Al utilizar steviewonderland.com, aceptas el uso de «cookies» en este dispositivo.</font><br>
	<button type="button" class="btn btn-sm btn-primary" onclick="acceptCookiesCache()">Acepto el uso de CookiesCache</button>
</div>

<style>
	#div-CookiesCache 
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

	function checkAcceptCookiesCache() {
		if (localStorage.acceptCookiesCache == 'true') {} else {
			$('#div-CookiesCache').show();
		}
	}

	function acceptCookiesCache() {
		localStorage.acceptCookiesCache = 'true';
		$('#div-CookiesCache').hide();
	}

	$(document).ready(function() {
    	checkAcceptCookiesCache();
	});

</script>