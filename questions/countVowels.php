<?php
class countVowels{

    protected $count = 0;

    function countVowels($str) {
        $arr = ['a','e','i','o','u', 'A', 'E', 'I', 'O', 'U'];
        $length = strlen($str);
        for ($i=0; $i < $length; $i++) { 
            if (in_array($str[$i],$arr)) {
                $this->count++;
            }
        }
        return $this->count;
    }

}

$input1 = "Hello World";
$input2 = "PHP is awesome";
$input3 = "Programming";

$obj = new countVowels();
$obj2 = new countVowels();
$obj3 = new countVowels();



$result1 = $obj->countVowels($input1);
$result2 = $obj2->countVowels($input2);
$result3 = $obj3->countVowels($input3);

echo "Number of vowels in '$input1': $result1 <br>";
echo "Number of vowels in '$input2': $result2 <br>";
echo "Number of vowels in '$input3': $result3 <br>";

?>
