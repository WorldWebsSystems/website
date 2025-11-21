<?php
$result2 = mysqli_query($connect, "SELECT * FROM loc_paises where id = 188");
$row2 = mysqli_fetch_array($result2);

$result3 = mysqli_query($connect, "SELECT * FROM loc_paises where id <> 188 and status = 1 order by pais asc");
?>

<option value="">Seleccione</option>

	<option value="<?php echo $row2[id]; ?>"><?php echo $row2[pais] . " [+" . $row2[cod_telefono] . "]"; ?></option>

<?php

while ($row3 = mysqli_fetch_array($result3)) {

	?>

	<option value="<?php echo $row3[id]; ?>"><?php echo $row3[pais] . " [+" . $row3[cod_telefono] . "]"; ?></option>

	<?php

}