<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://gemalto.easyvista.com/api/v1/50005/requests/C210521_000002',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'{
    "E_AVAILABLE_FIELD_46": "test"
}',
  CURLOPT_HTTPHEADER => array(
    'Access-Control-Request-Headers: origin-list',
    'Authorization: Basic d3N1c2VyOjFfRWFzeTAzMTU=',
    'Content-Type: application/json',
    'Cookie: GEMALTOCookie=LDBGEMALTO1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
