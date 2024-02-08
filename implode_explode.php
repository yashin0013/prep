<?php
$str = "This is a str";
$arr = explode(" ", $str);
echo "<pre>";
print_r($arr);

$string = implode("*", $arr);

echo $string;


?>