<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$menu = $_GET['menu'];

	include 'template_pagina_1.php';

	if ($menu == '') {

		$concepto = "Visita al sitio web " . $dominio_guiaclasificada . "/www/" . $carpeta;
		include '../../graba_historial.php';

		$visitas = $row33[visitas] + 1;

		$resultado331 = mysqli_query($connect, "UPDATE red SET visitas=$visitas WHERE carpeta = '$carpeta'");

	}

	?>

</head>

<body>

	<?php

	include 'template_pagina_2.php';

	?>

 	<main id="main">

		<?php

		include 'template_pagina_9.php';

		include 'template_pagina_3.php';

		//include 'template_pagina_5.php';

		include 'template_pagina_6.php';

		include 'template_pagina_7.php';

		//include 'template_pagina_8.php';

		include 'template_pagina_10.php';

		include 'template_pagina_12.php';

		?>

  	</main>

	<?php

	include 'template_pagina_11.php';

	?>

</body>

</html>