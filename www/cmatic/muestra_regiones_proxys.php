<?php

	$result912 = mysqli_query($connect, "SELECT * FROM isp where status=1 order by isp");

	$regiones = "";

	while ($row912 = mysqli_fetch_array($result912)){

		$regiones = $regiones . $row912[isp] . "<br>";

	}

?>

			<li>

				<a data-toggle="collapse" class="collapsed" href="#accordion-list-2">ISP's disponibles 
				<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
				<div id="accordion-list-2" class="collapse" data-parent=".accordion-list">

					<?php echo $regiones; ?>

       	     			</div>

			</li>

		</ul>

	</div>

</section>