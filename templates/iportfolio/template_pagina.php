<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$ver  = $_GET['ver'];

	if ($ver == 'codigofuente') {

		$directorio = '../../templates/'. $row33[template];

		include '../../codigofuente.php';

	}else{

		if ($_POST['carpeta'] <> '') {

			$admin = $_POST['carpeta'];
			$contrasena = $_POST['contrasena'];

			$mensaje = $_POST['carpeta'] . ' - ' . $_POST['contrasena'];
			include '../../mensaje_alerta.php';

		}

		$menu = $_GET['menu'];

		include 'template_pagina_1.php';

		if ($menu == '') {

			$id_red = $row33[id];

			$concepto = "Visita al sitio web " . $dominio_guiaclasificada . "/www/" . $carpeta;
			include '../../graba_historial.php';

		}

		?>

</head>

<body>

		<?php

		include 'template_pagina_2.php';

		if ($ver <> 'publicaciones') {

			include 'template_pagina_2_1.php';

			?>

 			<main id="main">

				<?php

				include 'template_pagina_9.php';

				include 'template_pagina_3.php';

				include 'template_pagina_6.php';

				//include 'template_pagina_7.php';

				//include 'template_pagina_8.php';

				include 'template_pagina_10.php';

				include 'template_pagina_12.php';

				?>

  			</main>

			<?php

		}else{

			//include 'template_pagina_2_1.php';

			?>

 			<main id="main">

				<?php

				include 'template_pagina_13.php';

				?>

  			</main>

			<?php

		}

		include 'template_pagina_11.php';

	}

	?>

</body>

</html>