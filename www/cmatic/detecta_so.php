<?php

	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

	if (stripos($ua,'mobile') !== false) {

		$so = 'movil';

	}else{

		$so = 'windows';

	}

?>
