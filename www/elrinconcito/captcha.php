<html>
<head>

	<script type="text/javascript">
		function onSubmit(token) {
			$("#aceptar_off").prop('hidden', true);
			$("#boton_s").prop('hidden', false);
			$("#boton_s2").prop('hidden', false);
			$("#boton").prop('disabled', false);
		};
	</script>

	<script src="https://hcaptcha.com/1/api.js" async defer></script>

</head>

<body>

	<?php 
	if ($so == 'movil') {
		$modo_captcha = 'compact';
	}else{
		$modo_captcha = 'normal';
	}
	?>

	<table width='100%'>
		<tr>

			<td align='center'>

				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

				<div class="h-captcha" id="captcha" name="captcha" data-callback="onSubmit" data-size="<?php echo $modo_captcha; ?>" data-sitekey="0346af94-f897-4908-90a2-dddffbb0d985" /></div>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			</td>

		</tr>
	</table>

</body>
</html>