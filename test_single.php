<?php
$apiKey = 'AIzaSyBxO--deOa-ShECIfTDsc3JiBu7grV_6V4';
// Only test gemini-1.5-flash-latest
$model = 'gemini-1.5-flash-latest';

echo "Testing $model... ";
$url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";

$data = ['contents' => [['parts' => [['text' => 'Hello']]]]];
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
        'ignore_errors' => true
    ]
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$status_line = $http_response_header[0];

echo "HTTP Status: $status_line\n";
echo "Response Body: $response\n";
?>
