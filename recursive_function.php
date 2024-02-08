<?php
// Calculate the power using recursive funtion.

function power($base, $exponent) {
    // Base case: if the exponent is 0, return 1
    if ($exponent === 0) {
        return 1;
    }

    if ($exponent < 0) {
        return 1 / ($base * power($base, -$exponent - 1));
    }
   
    // Recursive case: calculate power using recursion
    return $base * power($base, $exponent - 1);
}

// Example usage
$base = 2;
$exponent = -2;
$result = power($base, $exponent);

echo "{$base}^{$exponent} = {$result}";
?>
