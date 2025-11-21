<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://apimbu.mercantilbanco.com/mercantil-banco/prod/v1/payment/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "REPLACE_BODY",
  CURLOPT_HTTPHEADER => [
    "X-IBM-Client-Id: clientId",
    "accept: application/json",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>