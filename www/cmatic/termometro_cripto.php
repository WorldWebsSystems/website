<?php

//investigar como recibir una tasa actualizada constantemente para mover el icono en la posición que le corresponda

$resultado2 = mysqli_query($connect, "SELECT * FROM cuentas_trading where empresa='$empresa' and moneda='$operar' order by id desc limit 1");
$row2 	    = mysqli_fetch_array($resultado2);

$moneda = $row2[moneda];
$tasa = $row2[tasa];

$algoritmo = '4W';

//include 'ia_asistente_virtual_audio.php';

$url="termometro_cripto_2.php?icono=" . $num_icono . "&moneda=" . $moneda. "&tasa=" . $tasa . "&decimales=" . $decimales;

$refresh = 15000;

?>

<script language="JavaScript">

	function reload(){location.reload(true);}

	setInterval("frames['iframeicono<?php echo $num_icono; ?>'].location.href = '<?php echo $url; ?>'", <?php echo $refresh; ?>);

</script>

<iframe id='iframeicono<?php echo $num_icono; ?>' name='iframeicono<?php echo $num_icono; ?>' width="30" height="30" src="<?php echo $url; ?>" frameborder="0" scrolling = "no" allowfullscreen style="border:none;"></iframe>