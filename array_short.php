<?php
echo "Unshorted ";
// $array=array('2','4','8','5','1','7','6','9','10','3');
// $array=array(5,3,7,9,1);

$array= array("Volvo", "BMW", "Toyota", "Tata");


echo "<pre>";
print_r($array);

$lenght = count($array);
for ($i=0; $i <$lenght; $i++) { 
    for ($j=0; $j < $lenght-1; $j++) { 
        if ($array[$j] > $array[$j+1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}


echo "<br>";
echo "<br>";
echo "Shorted ";
print_r($array)
?>