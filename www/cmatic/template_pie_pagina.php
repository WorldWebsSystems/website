<?php

	include 'template_ruta_sitio.php';

	$pagina_sitio = $menu_inicio_planes_tarifas;
	include $pagina_sitio.'_planes.php';

	$resultado = mysqli_query($connect, "SELECT * FROM clientes where id=$id_empresa");
	$row = mysqli_fetch_array($resultado);

	include 'valores_cliente.php';

?>

<br><hr>

<font size=3 color='white'>

<section id="footer" class="footer">

	<footer id="footer">

		<div class="container">

			<div class="copyright">

				<?php
				include 'fecha_hora.php';
				?>
				<br>

				<script language="JavaScript" type="text/javascript">
					TrustLogo("https://worldwebs.net/imagenes/positivessl_trust_seal_lg_222x54.png", "CL1", "none");
				</script>
				<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>

				<br><br>

				Copyright (<?php echo $ano; ?>) <?php echo $descripcion_cliente . " " . $pais; ?>.<br>
				<font size=1>Se prohibe la repoducción total o parcial del contenido de este sitio web, sin el consentimiento de sus propietarios.</font><br>
				Todos los derechos reservados.<br><br>
				Empresa integrante de la<br>
				<strong><span><a href="<?php echo $link_cmatic; ?>" target="_blank"><?php echo $menu05_desc; ?> &copy;</a></span></strong><br><br>
				Proyecto patrocinado por la<br>
				<strong><span><a href="<?php echo $link_fundatics; ?>" target="_blank"><?php echo $menu06_desc; ?> &copy;</a></span></strong><br><br>
				
       				<!-- All the links in the footer should remain intact. -->
       				<!-- You can delete the links only if you purchased the pro version. -->
       				<!-- Licensing information: https://bootstrapmade.com/license/ -->
       				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
       				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br><br>

      			</div>

		</div>

		</font>

	</footer>

</section>