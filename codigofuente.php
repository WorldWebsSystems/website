<!DOCTYPE html>
<html lang="es">

<head>

</head>

<body>

	<?php

	$archivo = $_GET[archivo];
	$carpeta = $_GET[carpeta];

       	echo "<h2>Código fuente del sitio web: https://tuww.net/www/" . $carpeta . "</h2>";

	echo "<h3>(Licencia Pública General de GNU GPL)</h3>";

	if ($archivo == '') {

		// Verifica si la ruta es un directorio válido

		if (is_dir($directorio)) {

    			if ($dh = opendir($directorio)) {

        			echo "<ul>";

        			while (($archivo = readdir($dh)) !== false) {

            				if ($archivo != "." && $archivo != "..") {

                				$rutaCompleta = $directorio .'/'. $archivo;

                				if (is_dir($rutaCompleta)) {

                    					echo "<li><strong>/</strong> <a href='?ver=codigofuente&carpeta=".$archivo."'>$archivo</a></li>";

                				} else {

                    					echo "<li><a href='?ver=codigofuente&archivo=".$archivo."'>$archivo</a></li>";

                				}
            				}
       				 }

        			echo "</ul>";

        			closedir($dh);

    			} else {

        			echo "No se pudo abrir el directorio.";

    			}

		} else {

   			echo "La ruta especificada no es un directorio válido.";

		}

	}else{

		echo "<h3>Archivo: " . $archivo . ":</h3>";

		$arc = fopen($archivo,"r");

		while(! feof($arc))  {

    			$linea = fgets($arc);
    			echo "Nombre: ".substr($linea, 0, 100000);

		}

		fclose($arc);

		// Abrir el archivo en modo de sólo lectura:
		$arc = fopen($archivo,"r");

		// Recorremos el archivo mostando el contenido de cada línea:
		echo file_get_contents($archivo,null,null,2,18);

		fclose($arc);	

	}

	?>

</body>

</html>