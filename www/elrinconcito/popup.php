<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php

if ($so <> 'movil') {

	?>
	<div id="div-cookies" style="display: none;">
		<font size=6><b><?php echo $texto; ?>:<br></b>
		<font size=4><b>stevie.wonder.land@hotmail.de, <a href="contact.php"><img src='../images/icono-whatsapp.png' height=30>(+58) 424 8740741</a>, <img src='../images/icono_telefono.png' height=30>(+58) 414 7905050, <img src='../images/icono_telefono.png' height=30>(+58) 414 3291300</b><br>
		<font size=1><button type="button" class="btn btn-sm btn-primary" onclick="acceptCookies()"><?php echo $texto_cerrar; ?></button>
	</div>
	<?php

}else{

	?>
	<div id="div-cookies" style="display: none;">
		<font size=3><b><?php echo $texto; ?>:</b><br><font size=2><b>stevie.wonder.land@hotmail.de<br><a href="contact.php"><img src='../images/icono-whatsapp.png' height=20>(+58) 4248740741</a><br><img src='../images/icono_telefono.png' height=20>(+58) 4147905050<br><img src='../images/icono_telefono.png' height=20>(+58) 4143291300</b><br>
		<font size=1><button type="button" class="btn btn-sm btn-primary" onclick="acceptCookies()"><?php echo $texto_cerrar; ?></button>
	</div>
	<?php

}

?>

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