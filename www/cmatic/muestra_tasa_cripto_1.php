<?php

$moneda = 'WLD';
include 'calcula_criptomoneda.php';

?>

<div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

	<div class="box featured">

		<?php echo "<br><font size=1>CriptoWatch: <b>".$moneda. ': ' . $valor_moneda."</b></font><br><br>"; ?>

	</div>

</div>