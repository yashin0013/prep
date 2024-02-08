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
    if ($count > 1) {
        return false;
    }
    return true;
}

$str = "This is a string";

var_dump(check($str));

?>