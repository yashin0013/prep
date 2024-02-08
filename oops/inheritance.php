<?php
class class1{
    function __construct() {
        echo "Yes working.";
    }

}

// Case 1: If we have constructor in child class it will call the constructor of child class.
// Case 2: If we have not constructor in child class then it will call from parent class.
// Case 3: If we want to call the parent class constructor in child class then we can use parent::__construct(); in child class.


class class2 extends class1{
function __construct() {
    parent::__construct();
        echo "Yes working again.";
    }
    
}

$obj = new class2();



?>