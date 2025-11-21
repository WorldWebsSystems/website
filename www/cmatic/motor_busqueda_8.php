<?php

	$bcv = "";

	$data = file_get_contents("https://es.exchange-rates.org/converter/USD/VES/1");

	if ( preg_match('|1 USD = (.*?) VES|is' , $data , $cap ) ) {

    		$bbcv = $cap[1];

		$bcv = "";
		$l = strlen($bbcv)-1;

		for ($i=0; $i <= $l; $i++) {
			$numero = substr($bbcv,$i,1);
			if ($numero <> ',') {
				if ($numero == '.') {$numero = ',';}
				$bcv = $bcv.$numero;
			}
		}

		$bcv = $bcv / 1000;

	}

?>