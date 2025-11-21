<marquee>

		<?php

			$operar = $_GET[operar];

			include 'abre_bd_query_sitios.php';

			$resultado3  = mysqli_query($connect, "SELECT * FROM formas_pago where moneda<>'$operar' and operar=1 and status=1 order by moneda asc");

			while ($row3 = mysqli_fetch_array($resultado3)) {

				$resultado31 = mysqli_query($connect, "SELECT * FROM historico_criptos where moneda='$row3[moneda]' order by id desc limit 1");
				$row31 = mysqli_fetch_array($resultado31);

				$vvalor_moneda = $row31[tasa];


				if ($vvalor_moneda >= 100000) {

					$ddecimales = 0;

				}else if ( ($vvalor_moneda >= 10000) and ($vvalor_moneda < 100000) ) {

					$ddecimales = 0;

				}else if ( ($vvalor_moneda >= 1000) and ($vvalor_moneda < 10000) ) {

					$ddecimales = 1;

				}else if ( ($vvalor_moneda >= 10) and ($vvalor_moneda < 1000) ) {

					$ddecimales = 2;

				}else if ( ($vvalor_moneda >= 1) and ($vvalor_moneda < 10) ) {

					$ddecimales = 2;

				}else{

					$ddecimales = 8;

				}

				?>

				<img src='imagenes/<?php echo $row3[imagen_mini]; ?>' height='15'>

				<font size='2' face='arial'>

				<b>
				<?php echo $row3[formapago] . ": $ "; ?>
				<input type="text" name="marquee_<?php echo $row31[moneda]; ?>" id="marquee_<?php echo $row31[moneda]; ?>" value='<?php echo number_format($vvalor_moneda, $ddecimales, '.', ','); ?>' size="3" style="border:none; text-align:left;" readonly />
				</b>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				</font>

				<?php

			}

		?>

</marquee>