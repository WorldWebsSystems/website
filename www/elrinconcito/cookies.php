<?php

	$idioma = $_GET['idioma'];

	If (isset ($_COOKIE["cookie"])) {

	}else{

		setcookie("cookie", $idioma, time()+60);

	}

?>