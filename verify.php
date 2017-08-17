<?php
$access_token = 'CtXrADZriOGsn+N+LI5fyD4utzZsMVhc9Y4X9x8WKWqLXto4otoc6GTtel2i1xPXRW0Znh4gHxLnRtVRwhKa7pFJi99hPAmwog9XbvrtIt36x1J9RE38YLz/vH34Isr5ov5Uc0pxa9a3dwUlmXUYLQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
