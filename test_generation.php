<?php

$apiKey = 'AIzaSyBxO--deOa-ShECIfTDsc3JiBu7grV_6V4';
// We will try multiple models to see which one works
$models = [
    'gemini-1.5-flash',
    'gemini-2.5-flash',
    'gemini-pro',
    'gemini-1.5-pro'
];

echo "Starting Diagnostic Test...\n";
echo "API Key: " . substr($apiKey, 0, 5) . "...\n\n";

foreach ($models as $model) {
    echo "------------------------------------------------\n";
    echo "Testing Model: $model\n";
    
    $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";
    
    $data = [
        'contents' => [
            [
                'parts' => [
                    ['text' => 'Hello, say hi only.']
                ]
            ]
        ]
    ];
    
    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
            'ignore_errors' => true // Capture error response
        ]
    ];
    
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    
    // Check HTTP headers for status code
    $status_line = $http_response_header[0];
    echo "Status: $status_line\n";
    
    if (strpos($status_line, '200') !== false) {
        echo "SUCCESS! Response:\n";
        echo substr($response, 0, 200) . "...\n"; // Show first 200 chars
        echo "------------------------------------------------\n";
        echo "RECOMMENDATION: Use model '$model'\n";
        exit; // Stop after first success
    } else {
        echo "FAILED. Error Response:\n";
        echo $response . "\n";
    }
}

echo "------------------------------------------------\n";
echo "All models failed. Please check API Key billing or permissions.\n";
?>
