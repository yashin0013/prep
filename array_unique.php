<?php
$a = array("a" => "red", "b" => "green", "c" => "red", "d" => "Yashin", "e" => "Tata");
$uniqueValues = array();

foreach ($a as $key => $value) {
    $isUnique = true;
    
    foreach ($uniqueValues as $val) {
        if ($value == $val) {
            $isUnique = false;
            break;
        }
    }

    if ($isUnique) {
        $uniqueValues[$key] = $value;
    }
}

echo "<pre>";
print_r($uniqueValues)

?>