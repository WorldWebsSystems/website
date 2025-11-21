<font face='arial'>

	<?php

		$pagina_web = $_GET[pagina];

		$len = strlen($pagina_web);

		$pagina_web = substr($pagina_web, 0, $len - 4) . "_contenido.php";

		echo "WorldWebs Open Source (2024).";

		echo "<br>";

		echo "Licencia Pública General de GNU (GPL) GPLv3:";

		echo "<br>";

		echo "Archivo: " . $pagina_web;

		echo "<br><br><hr><br><br>";

		ob_start();

			include $pagina_web;
		
		$html = ob_get_clean();

		//echo $html;

	?>

</font>