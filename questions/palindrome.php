<?php
echo "Second Question of chatgpt.<br><br>";


function isPalindrome($str) {
    // $str = str_replace(' ', '', preg_replace("/[^a-zA-Z0-9]/", "", $str))
    $len = strlen($str);
    $rev = "";

    for ($i=$len-1; $i  >=0; $i--) {
        if ($str[$i] !== " ") {
            $rev .= $str[$i];
        }
    }

  return $rev == $str;
}

$input1 = "Madam, in Eden, I'm Adam";
$input2 = "php";
$input3 = "racecar";

$result1 = isPalindrome($input1);
$result2 = isPalindrome($input2);
$result3 = isPalindrome($input3);

echo "$input1 is " . ($result1 ? "a palindrome" : "not a palindrome") . PHP_EOL;
 echo "<br>";
echo "$input2 is " . ($result2 ? "a palindrome" : "not a palindrome") . PHP_EOL;
echo "<br>";
echo "$input3 is " . ($result3 ? "a palindrome" : "not a palindrome") . PHP_EOL;



?>