<?php

function EnglishSeries($str) {
    $cleanedStr = preg_replace('/[^\w\s]/', '', strtolower($str));
$len = strlen($cleanedStr);

for ($i=0; $i < $len; $i++) { 
    for ($j=0; $j < $len-1; $j++) { 
        if ($cleanedStr[$j] > $cleanedStr[$j+1]) {
            $temp = $cleanedStr[$j];
            $cleanedStr[$j] = $cleanedStr[$j+1];
            $cleanedStr[$j+1] = $temp;
        }
    }

}
return $cleanedStr;

}


$inputString = "Great";
$result = EnglishSeries($inputString);
echo $result; 

?>
