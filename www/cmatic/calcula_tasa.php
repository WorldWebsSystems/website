<?php

			$website = 'https://www.coincarp.com/es/currencies/notcoin/';
			$match = '|<span class="h2 mr-2 mb-2 price" id="coin-lastticker" data-usd="0.006785" data-btc="0.0000001014432">(.*?)</span>|is'; //binance

		$data = file_get_contents($website);

		if ( preg_match($match , $data , $cap ) ) {

			$ttasa = $cap[1];

			$valor_moneda = "";

			for ($ii = 0; $ii <= strlen($ttasa); $ii++) {

				if ( (substr($ttasa, $ii, 1) <> '$') and (substr($ttasa, $ii, 1) <> ',') ) {

					$valor_moneda = $valor_moneda . substr($ttasa, $ii, 1);

				}

			}

		}

echo "Tasa: ".$valor_moneda . "<br>";

?>