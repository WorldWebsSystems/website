<?php

	include 'abre_bd_query_sitios.php';

	$i = 0;

	$result = mysqli_query($connect, "SELECT * FROM suscripciones where informado=0 order by email asc");
	while ($row 	= mysqli_fetch_array($result)) {

		$email      = $row[email];
		$vps 	    = $row[vps];
		$webhosting = $row[webhosting];
		$websites   = $row[websites];
		$ingenieria = $row[ingenieria];

		$i++;

		?>
		<a href="enviar_suscripcion.php?email=<?php echo $email; ?>"><?php echo $i."-".$email; ?></a><br>
		<?php

	}

?>