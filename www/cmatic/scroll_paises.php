<?php

	$result4 = mysqli_query($connect, "SELECT * FROM loc_paises order by orden desc, pais asc");

	?><option value=>País</option><?php

	while ($row4 = mysqli_fetch_array($result4)){

		$id = $row4[id];
		$pais = $row4[pais];

		?><option value=<?php echo $id; if ($id==$pais_conexion) {echo " selected";} ?>><?php echo $pais; ?></option> <?php

	}

?>