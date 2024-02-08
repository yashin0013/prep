<?php
$array1 = array("a", "b", "c", "d");
echo "array1 = ";
print_r($array1);
echo "<br>";

$array2 = array("b", "d", "e", "f");
echo "array2 = ";
print_r($array2);

$result = array();
$count = 0;

foreach ($array1 as $key => $value) {
    $result[] = $value;
}

foreach ($array2 as $key => $value) {
    $isValue = false;

    foreach ($result as $res) {
        if ($res == $value) {
            $isValue = true;
            $count++;
            break;
        }
    }

    if (!$isValue) {
        $result[] = $value;
    }
}

echo "<br>";
echo "count of duplicate values are ". $count;
echo "<br>";


echo "Result ";
print_r($result)
?>