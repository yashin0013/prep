<?php
// $array=array('2','4','8','5','1','7','6','9','10','3');

$array= array("Volvo", "BMW", "Toyota", "Tata");

$search = "Volvo";

$result = $search." Not Found in array.";

foreach ($array as $key => $value) {
    if ($value == $search) {
        $result = $search ." Found in array on ".$key. " position.";
    }
}

echo $result;
?>