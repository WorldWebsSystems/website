<?php

$playlist[0] = 'n_dolares';

for ($i=0; $i <= strlen(round($valor_moneda, $decimales)); $i++) {

	$letra = substr(round($valor_moneda, $decimales), $i, 1);

	switch ($letra) {

    		case '0':
			$playlist[$i+1] = "audios/" . "n_0";
        		break;

    		case '1':
			$playlist[$i+1] = "audios/" . "n_1";
        		break;

    		case '2':
			$playlist[$i+1] = "audios/" . "n_2";
        		break;

    		case '3':
			$playlist[$i+1] = "audios/" . "n_3";
        		break;

    		case '4':
			$playlist[$i+1] = "audios/" . "n_4";
        		break;

    		case '5':
			$playlist[$i+1] = "audios/" . "n_5";
        		break;

    		case '6':
			$playlist[$i+1] = "audios/" . "n_6";
        		break;

    		case '7':
			$playlist[$i+1] = "audios/" . "n_7";
        		break;

    		case '8':
			$playlist[$i+1] = "audios/" . "n_8";
        		break;

    		case '9':
			$playlist[$i+1] = "audios/" . "n_9";
        		break;

    		case '.':
			$playlist[$i+1] = "audios/" . "n_punto";
        		break;

	}

}

?>