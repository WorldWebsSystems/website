<!DOCTYPE html>
<html lang="es">

<head>

	<?php

	$url_ia = $url;

	include 'template_encabezado.php';
	include 'template_estilo.php';

	?>


</head>

<body>

<div align='center'>

<font face = 'arial' size = 3>

	<section id="titulo" class="titulo">

		<div class="container" data-aos="fade-up">

			<div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">
	
				<br>

				<?php 
				$titulo = $menu02_desc;
				include 'worldwebs_titulo.php';
				?>

				<div class="section-title">
	
					<b>Acceso a Chat de Inteligencia Artificial (IA)</b><br>
					<h1><b><?php echo $pagina_sitio; ?> <sup><font size = 2>&copy;</font></sup></b></h1>
					<font size = 1 color ='red'><b>"Sitio web de terceros con derechos reservados de uso propios de su propietario"</b></font><br>

					<br><br>

					<form id="formulario" action="ia_goin_auth.php" method="post">

						<input id="email" name="email" type="text" size="40" placeholder="Su correo electrónico" required />

						<input id="url" name="url" type="text" value="<?php echo $url_ia; ?>" required hidden />

						<input id="chat_ia" name="chat_ia" type="text" value="<?php echo $pagina_sitio; ?>" required hidden />

						<br><br><br>

						<?php include 'captcha.php'; ?>

						<br>

						<input id="boton" name="boton" class="buy-btn" type="submit" value="Entrar a <?php echo $pagina_sitio; ?>" disabled />

					</form>

				</div>

			</div>

			<div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay=100">

				<div class="section-title">

					<font size = 3>

					<h1><b>Todos los chats disponibles:</b></h1><br><br>

					<a href='ia_claudeia.php' target='_blank'>Anthropic © | Claude AI </a><br><br>

					<a href='ia_dbrx.php' target='_blank'>Databricks © | HuggingChat </a><br><br>

					<a href='ia_gemini.php' target='_blank'>Google © | Gemini </a><br><br>

					<a href='ia_haiper.php' target='_blank'>Haiper © | HaiperAI </a><br><br>

					<a href='ia_llama.php' target='_blank'>Meta © | Llama 3 AI </a><br><br>

					<a href='ia_copilot.php' target='_blank'>Microsoft © | Copilot </a><br><br>

					<a href='ia_chatgpt.php' target='_blank'>OpenAI © | ChatGPT-3.5 / 4 </a><br><br>

					<a href='ia_arena.php' target='_blank'>OpenAI © | ChatGPT2 </a><br><br>

					<a href='ia_perplexityai.php' target='_blank'>Perplexity AI © | Perplexity Chatbot</a><br><br>

					<a href='ia_grok.php' target='_blank'>xAI | Grok </a><br><br>

					</font>

					<?php include 'donaciones.php'; ?>

				</div>

			</div>

		</div>

	</section>

	</div>

</font>

</div>

</body>

</html>