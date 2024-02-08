<?php
function revstr($n){
    $len = strlen($n);
    $word = " ";
    $revstr = " ";

    for ($i=0; $i < $len; $i++) { 
        if ($n[$i] !== " ") {
            $word .= $n[$i];
        }else{
            $revstr = $word." ".$revstr;
            $word = '';
        }
    }

    $revstr = $word." ".$revstr;
    return $revstr;
}

$str = "This is a string which will be reveresed";

echo $result = revstr($str);

?>