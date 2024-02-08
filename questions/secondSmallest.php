<?php

function secondSmallest($numbers) {
    $count = count($numbers);
    if ($count < 3) {
        return null;
    }

    for ($i=0; $i < $count; $i++) { 
        
        for ($j=0; $j < $count-1; $j++) { 
            if($numbers[$j]>$numbers[$j+1]){
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temp;
            }
        }

    }
    return $numbers[1];
}

$array1 = [5, 2, 8, 1, 7];
$array2 = [3, 3, 3, 3, 3, 3];
$array3 = [10, 4, 6, 8];

$result1 = secondSmallest($array1);
$result2 = secondSmallest($array2);
$result3 = secondSmallest($array3);


?>
<h2>
    Question from chatgpt
</h2>

<p>
Second smallest element in array1:- <?php echo ($result1 ?? "null") ?>
</p>

<p>
Second smallest element in array2:- <?php echo ($result2 ?? "null") ?>
</p>

<p>
Second smallest element in array3:- <?php echo ($result3 ?? "null") ?>
</p>