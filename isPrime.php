<?php
function isPrime(){
    $arr=array();
    for($i=1; $i<=100; $i++){
        $isPrime = true;
        for($j=2; $j<$i; $j++){
             if($i%$j == 0){
                 $isPrime = false;
            break;
        }
        }
        if($isPrime){
         $arr['Prime'][] = $i;
        }else{
             $arr['NotPrime'][] = $i;
        }
    }
    return $arr;
}

echo "<pre>";
print_r(isPrime());

?>