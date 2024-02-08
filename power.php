<?php
// Calculate the power using loop.
function power($x,$y) {
    $power = $x;
    $num = $y;

    if($y == 0){
        return 1;
    }

    if ($y<0) {
     $num =-$num;
    }

    for ($i=1; $i < $num; $i++) { 
         $power = $power*$x;
    }

    if ($y<0) {
        return (1/$power);
    }

    return $power;
}

$x = 5;
$y = 5;

$result = power($x,$y);

echo "Power of {$x}^{$y} = $result";

// echo "<br>";
// echo 0321;

?>