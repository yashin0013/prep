<?php

$string = "This is a string";

$characterCounts = [];

for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];

    if(isset($characterCounts[$char])) {
        $characterCounts[$char]++;
    } else {
        $characterCounts[$char] = 1;
    }
}

echo "<pre>";
print_r($characterCounts);
?>