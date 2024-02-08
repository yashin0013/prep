<?php
/*
class class1{
    public $x = 1;

    function fun1(){
        return $this->x++;
    }


}


$obj1 = new class1();
$obj1->fun1();

$obj2 = new class1();

echo $obj1->x;

echo "<br>";

echo $obj2->x;

echo "<br>";

*/

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

// A destructor is called when the object is destructed or the script is stopped or exited. 

class test{
    function __construct($y) {
        $this->x=$y;
    }

    function incval() {
         $this->x++;
    }

    function getX() {
        return $this->x;
    }
    
    // function __destruct() {
    //     echo "end";
    // }
}

$objTest = new test(15);

$objTest->incval();
$objTest->incval();
$objTest->incval();


echo $objTest->getX();




?>