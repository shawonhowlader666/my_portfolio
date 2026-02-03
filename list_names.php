<?php
$json = file_get_contents('models.json');
$data = json_decode($json, true);
if (isset($data['models'])) {
    foreach($data['models'] as $m) {
        echo $m['name'] . "\n";
    }
} else {
    echo "Could not decode JSON or no models found.\n";
}
?>
