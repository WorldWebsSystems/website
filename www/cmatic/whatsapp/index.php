<?php
//TOKEN QUE NOS DA FACEBOOK
$token = 'EAAQU14gLmqYBO1dZAMnD3cVP2HYMbq7CwzvWjPOhFhyfw3fM9ZAQSyQbrQMYjgIfHnZAQtC6Wyi3tZAEuiPD4C2H63TZBeKtT8BWk2A7uGts4fC62sECiqS3TpsgyKldBqeuaWlwmmPfYpuQ3ZBbflmV0WsZBi2ykRMR2gYxgZCvSNNoJUdvRjqZA7gIjFZA0UhFWUJ1okFllCOOSK9UlDJfbtyeoHZAUAlpirY7T8ZD';
//NUESTRO TELEFONO
$telefono = '584247756630';
//URL A DONDE SE MANDARA EL MENSAJE
$url = 'https://graph.facebook.com/v18.0/207120049157206/messages';
//CONFIGURACION DEL MENSAJE
$mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telefono.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "hello_world",'
        . '     "language":{ "code": "en_US" } '
        . '} '
        . '}';
//DECLARAMOS LAS CABECERAS
$header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
//INICIAMOS EL CURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
$response = json_decode(curl_exec($curl), true);
//IMPRIMIMOS LA RESPUESTA 
print_r($response);
//OBTENEMOS EL CODIGO DE LA RESPUESTA
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//CERRAMOS EL CURL
curl_close($curl);
?>