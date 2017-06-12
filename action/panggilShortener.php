<?php
$url = $_GET['url'];
$postData = array('longUrl' => $url);
$jsonData = json_encode($postData);

$curlObj = curl_init('https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyBOqZo49CZIlgwNHLX5yYZMPNL0InJ9KvY');

curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($curlObj);
$json = json_decode($response);

curl_close($curlObj);
echo $json->id;
?>