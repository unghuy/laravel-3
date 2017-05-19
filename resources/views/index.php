<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Connection: Keep-Alive'
]);

// Thực thi CURL
$result['content'] = curl_exec($ch);

// Ngắt CURL, giải phóng
curl_close($ch);
?>
