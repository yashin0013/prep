<?php

function smallestMissingInteger($array) {
    sort($array);

    $smallestMissingInteger = 1;

    foreach ($array as $value) {
        if ($value <= 0) {
            continue;
        }

        if ($value == $smallestMissingInteger) {
            $smallestMissingInteger++;
        } else {
            break;
        }
    }

    return $smallestMissingInteger;
}

$array = [5, -3, 0, 2, -1, -2, 3];
$result = smallestMissingInteger($array);

echo "The smallest missing positive integer is: " . $result;

?>
