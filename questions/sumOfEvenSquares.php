<?php

function sumOfEvenSquares($numbers) {
    $count = count($numbers);
    $sum = 0;
    for ($i=0; $i < $count; $i++) { 
        if ($numbers[$i]%2 ==0) {
            $sum += $numbers[$i]*$numbers[$i];
        }
    }
    return $sum;
}

$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [2, 4, 6, 8, 10];
$numbers3 = [3, 5, 7, 9, 11];

$result1 = sumOfEvenSquares($numbers1);
$result2 = sumOfEvenSquares($numbers2);
$result3 = sumOfEvenSquares($numbers3);

echo "Sum of squares of even numbers in array1: $result1 <br>" ;
echo "Sum of squares of even numbers in array2: $result2 <br>";
echo "Sum of squares of even numbers in array3: $result3 <br>";

?>
