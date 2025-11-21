<?php

$pagina_web = basename($_SERVER['PHP_SELF']);

?>

<style type="text/css">

	.social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	left: 10; /* Establecemos la barra en la izquierda */
	top: <?php echo $distancia_top; ?>px; /* Bajamos la barra $distancia px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
	}

	.social ul {
		list-style: none;
	}

	.social ul li a {
		display: inline-block;
		color:#fff;
		background: #000;
		padding: 3px 3px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}

	.social ul li a:hover {
		background: #FF0000; /* Cambiamos el fondo cuando el usuario pase el mouse */
		padding: 3px 10px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
	}

	.social ul li .icon-guia {background: transparent;}
	.social ul li .icon-direccion {background: transparent;}
	.social ul li .icon-telefono {background: transparent;}
	.social ul li .icon-email {background: transparent;}
	.social ul li .icon-whatsapp {background: transparent;}
	.social ul li .icon-sitioweb {background: transparent;}
	.social ul li .icon-instagram {background: transparent;}
	.social ul li .icon-facebook {background: transparent;}
	.social ul li .icon-x {background: transparent;}
	.social ul li .icon-tiktok {background: transparent;}
	.social ul li .icon-linkedin {background: transparent;}
	.social ul li .icon-tienda {background: transparent;}

</style>

	<div align='left'>

	<div class="social">

		<ul>

			<font size='2' face='arial'>

			<li><a href="https://www.<?php echo $dominio_guiaclasificada; ?>/sitiosweb.php" class="icon-guia" target="_blank"><img src='../../imagenes/directorio.png' width='30' title='Guía Clasificada - <?php echo $dominio_guiaclasificada; ?> | Directorio Mundial de Sitios Web'></b></a></li>

			<?php if ($row33[direccion] <> '') { ?>

				<li><a href="#muestradireccion" class="icon-email"><img src='../../imagenes/icono_ubicacion.png' width='30' title='Dirección del domicilio fiscal'></b></a></li>

				<div id="muestradireccion" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono_ubicacion.png' width='80'><br><br>
						<h1><b><font color='black'>DOMICILIO FISCAL:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[direccion] . ', ' . $ciudad . ', municipio ' . $municipio . ', estado ' . $estado . ', ' . $pais; ?></font><br><br><br>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[telefono] <> '') { ?>

				<li><a href="#muestratelefonos" class="icon-telefono"><img src='../../imagenes/logo_telefono.png' width='30' title='Contactos telefónicos'></b></a></li>

				<div id="muestratelefonos" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../../imagenes/logo_telefono.png' width = '80'><br><br>
						<h1><b><font color='black'>TELÉFONOS DE CONTACTO:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[telefono]; ?></font><br><br>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[celular] <> '') { ?>

				<li><a href="#muestrawhatsapp" class="icon-whatsapp"><img src='../../imagenes/logo_whatsapp.png' width='30' title='Mensaje vía WhatsApp'></b></a></li>

				<div id="muestrawhatsapp" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/logo_whatsapp.png' width='80'><br><br>
						<h1><b><font color='black'>WHATSAPP:</b></h1><br><br>
						<font size = '5' color='black'>+<?php echo $cod_telefono; ?> <?php echo $row33[celular]; ?></font><br><br><br>
						<a href="https://wa.me/+<?php echo $cod_telefono; ?><?php echo $celular; ?>" target="_blank">Enviar mensaje</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[email] <> '') { ?>

				<li><a href="#muestraemail" class="icon-email"><img src='../../imagenes/icono-email.png' width='30' title='Correo electrónico'></b></a></li>

				<div id="muestraemail" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono-email.png' width='80'><br><br>
						<h1><b><font color='black'>CORREO ELECTRÓNICO:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[email]; ?></font><br><br><br>
						<a href="mailto:<?php echo $row33[email]; ?>" target="_blank">Enviar mensaje</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[email] <> '') { ?>

				<li><a href="#muestrasitioweb" class="icon-sitioweb"><img src='../../imagenes/icono_websites.png' width='30' title='Correo electrónico'></b></a></li>

				<div id="muestrasitioweb" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono_websites.png' width='80'><br><br>
						<h1><b><font color='black'>SITIO WEB:</b></h1><br><br>
						<font size = '5' color='black'>http://<?php echo $url; ?></font><br><br><br>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[instagram] <> '') { ?>

				<li><a href="#muestrainstagram" class="icon-instagram"><img src='../../imagenes/logo_instagram.png' width='30' title='Red social Instagram'></b></a></li>

				<div id="muestrainstagram" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/logo_instagram.png' width='80'><br><br>
						<h1><b><font color='black'>INSTAGRAM:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[instagram]; ?></font><br><br><br>
						<a href="https://www.instagram.com/<?php echo $row33[instagram]; ?>" target="_blank">Abrir Instagram</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[facebook] <> '') { ?>

				<li><a href="#muestrafacebook" class="icon-facebook"><img src='../../imagenes/icono-facebook.png' width='30' title='Red social Facebook'></b></a></li>

				<div id="muestrafacebook" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono-facebook.png' width='80'><br><br>
						<h1><b><font color='black'>FACEBOOK:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[facebook]; ?></font><br><br><br>
						<a href="https://www.facebook.com/<?php echo $row33[facebook]; ?>" target="_blank">Abrir Facebook</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[x] <> '') { ?>

				<li><a href="#muestrax" class="icon-x"><img src='../../imagenes/icono_x.png' width='30' title='Red social X'></b></a></li>

				<div id="muestrax" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono_x.png' width='80'><br><br>
						<h1><b><font color='black'>X:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[x]; ?></font><br><br><br>
						<a href="https://www.x.com/<?php echo $row33[x]; ?>" target="_blank">Abrir X</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[tiktok] <> '') { ?>

				<li><a href="#muestratiktok" class="icon-tiktok"><img src='../../imagenes/icono_tiktok.png' width='30' title='Red social TikTok'></b></a></li>

				<div id="muestratiktok" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono_tiktok.png' width='80'><br><br>
						<h1><b><font color='black'>TIKTOK:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[tiktok]; ?></font><br><br><br>
						<a href="https://www.tiktok.com/<?php echo $row33[tiktok]; ?>" target="_blank">Abrir TikTok</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[linkedin] <> '') { ?>

				<li><a href="#muestralinkedin" class="icon-linkedin"><img src='../../imagenes/icono_linkedin.png' width='30' title='Red social LinkedIn'></b></a></li>

				<div id="muestralinkedin" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono_linkedin.png' width='80'><br><br>
						<h1><b><font color='black'>LINKEDIN:</b></h1><br><br>
						<font size = '5' color='black'><?php echo $row33[linkedin]; ?></font><br><br><br>
						<a href="https://www.linkedin.com/in/<?php echo $row33[linkedin]; ?>" target="_blank">Abrir LinkedIn</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			<?php if ($row33[tienda] <> 0) { ?>

				<li><a href="https://tuww.net/tiendasvirtuales.php?menu=<?php echo $carpeta; ?>" class="icon-tienda"><img src='../../imagenes/icono_tienda.png' width='30' title='Tienda virtual On Line'></b></a></li>

				<div id="muestratienda" class="modalDialog">
					<div>
						<div align='center'>
						<a href="#close" title="Close" class="close">X</a>
						<br><img src='../../imagenes/icono_tienda.png' width='80'><br><br>
						<h1><b><font color='black'>TIENDA VIRTUAL <i>ON LINE</i>:</b></h1><br><br>
						<a href="https://tuww.net/tiendasvirtuales.php?menu=<?php echo $carpeta; ?>" target="_blank">Ver Tienda</b></a>
						</div>
					</div>
				</div>

			<?php } ?>

			</font>

		</ul>

	</div>

	</div>
