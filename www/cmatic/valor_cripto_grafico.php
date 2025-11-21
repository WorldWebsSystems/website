<?php

	$operar = $_GET[grafico];
	$so = $_GET[so];

	include 'dimensiones.php';

?>

<div align='center'>

<script async src="https://static.coinstats.app/widgets/coin-chart-widget.js"></script>
<coin-stats-chart-widget type="medium" coin-id="<?php echo $operar; ?>" width="<?php echo $ancho * 2; ?>" chart-height="<?php echo $alto; ?>" currency="USD" locale="en" bg-color="#FFFFFF" text-color="#1C1B1B" status-up-color="#4F8A5B" status-down-color="#FE4747" buttons-color="#FFFFFF" chart-color="#E47103" chart-gradient-from="#FFFFFF" chart-gradient-to="#EFEFEF" chart-label-background="#FFFFFF" candle-grids-color="rgba(0,0,0,0.1)" border-color="rgba(28,27,27,0.15)" font="Roboto, Arial, Helvetica" style="max-width: 435px; width: 100%;"></coin-stats-chart-widget>

</div>