<! DOCTYPE html>
<html lang="es">

<head> 

<title>Intranet del Sitio Web</title>

</head>

<body>

<body style="background-color:#4472C4;">

<font face="arial" color="white">

<div align="center">

<form id="formulario" action="index.php" method="post">

	<br><br>
	<img src="imagenes/logo_worldwebs.png" width=100><br><br>
	<?php Echo "ACCESO RESTRINGIDO";?>
	<br><br><br>

	<table border=0>
		<tr> 
    			<td align="center"> 
        			<table border=0> 
					<tr>
						<td>
			        			<table border=0> 
								<tr style="font-size:30px">
									<td>
										<label><font  color='white'><?php echo utf8_encode("Código de autorización:")?></font></label>
									</td>
									<td>
										<input id="cod_aut" name="cod_aut" type="password" size="1" style="font-size:30px" required/>
									</td>
								</tr>
							</table> 
						</td>
					</tr>
        			</table> 
	    		</td> 
		</tr> 
	</table>


	<br><br><br>

	<?php
	include 'abre_bd_query.php';
	include 'captcha.php'; 
	?>

	<br><br><br>
	<input id="boton" name="boton" type="submit" style="font-size:30px" value="Entrar" disabled />

	</font>

</form>

</div>

</body>

</html>