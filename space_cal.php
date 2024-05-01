<?php
// function that check the string space.
function check($n) {
    $length = strlen($n);
    $count = 0;
    for ($i=0; $i <$length ; $i++) {
        if ($n[$i] == ' ') {
            $count++;
        }
        //  $n[$i];
    }
    return $count;
}

$str = "This is a string";

echo "Space in the string is ".check($str);

?>