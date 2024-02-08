<?php
echo "Question from Chat Gpt <br>";

// Approch: Take a variable called sum and 
function sumOfEvenNumbers($numbers) {
    $length = count($numbers);
    $sum = 0;
    for ($i=0; $i < $length; $i++) { 
        if ($numbers[$i] % 2 == 0) {
            $sum += $numbers[$i];
        }
}
return $sum;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = sumOfEvenNumbers($numbers);
echo "Sum of even numbers: $result"; // Output should be 30 (2 + 4 + 6 + 8 + 10)



?>