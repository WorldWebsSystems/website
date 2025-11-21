<?php

	function Crear_SEO($texto) {

		$texto = str_replace([':', ';', '.'], ',', $texto);

		return $texto;

	}


	$resumen =  '';

	$resultado4 = mysqli_query($connect, "SELECT * FROM cv_detalles where seo <> '' order by prioridad asc");

	while ($row4 = mysqli_fetch_array($resultado4)) {

		$resultado41 = mysqli_query($connect, "SELECT * FROM cv where id = $row4[id_cv] group by id_red");

		$row41 = mysqli_fetch_array($resultado41);

		if ($row41[id_red] == $row33[id]) {

			$resumen = $resumen . $row4[seo] . '; ';

		}

	}

	$seo = Crear_SEO($resumen);

	if ($seo <> $row33[meta_keywords]) {

		$resultado888 = mysqli_query($connect, "UPDATE red SET meta_keywords = '$seo' WHERE carpeta = '$row33[carpeta]'");

	}

?>
