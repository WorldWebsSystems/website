<?php

	$result2 = mysqli_query($connect, "SELECT * FROM servicios order by orden asc");

	while ($row2 = mysqli_fetch_array($result2)){

		if ($row2[tipo] == $tipo) {

			if ($tipo == 1) {

				?><li><a href="<?php echo $link_servicios_vps_catalogo; ?>?contratar=<?php echo $row2[link]; ?>"><?php echo $row2[servicio]; ?></a></li><?php

			}else{

				?><li><a href="<?php echo $link_servicios_proxies_catalogo; ?>?contratar=<?php echo $row2[link]; ?>"><?php echo $row2[servicio]; ?></a></li><?php

			}

		}

	}


?>