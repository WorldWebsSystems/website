<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$menu = $_GET['menu'];

	include 'template_pagina_1.php';

	if ($menu == '') {

		$id_red = $row33[id];

		$concepto = "Visita al sitio web " . $dominio_guiaclasificada . "/www/" . $carpeta;
		include '../../graba_historial.php';

	}

	?>

</head>
	
<body style="background-color:#cdd0d3;">

	<?php

	include 'template_pagina_2.php';

	if ($menu <> 'tienda') {

		include 'template_pagina_3.php';

		include 'template_pagina_4.php';

	}

	if (($menu == '') or ($menu == 'suscripcion_exitosa')) {

		include 'template_pagina_5.php';

		include 'template_pagina_7.php';

	}else

	if ($menu == 'nosotros') {

		include 'nosotros.php';

	}else

	if ($menu == 'tienda') {

		include 'tiendavirtual.php';

	}else

	if ($menu == 'consulta') {

		include 'consulta.php';

		include 'template_pagina_5.php';

	}

	//include 'servicios.php';

	//include 'imagenes.php';

	include 'template_pagina_8.php';

	?>
        
</body>
	
</html>