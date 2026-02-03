<?php
$apiKey = 'AIzaSyBxO--deOa-ShECIfTDsc3JiBu7grV_6V4';
$url = "https://generativelanguage.googleapis.com/v1beta/models?key={$apiKey}";
$options = [
    "http" => [
        "header" => "Content-type: application/json\r\n",
        "method" => "GET"
    ]
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    echo "Error fetching URL";
} else {
    echo $response;
}
?>
