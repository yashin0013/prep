<?php

class ParentClass {
    protected function myProtectedFunction() {
        echo "This is a protected function in the ParentClass.\n";
    }
}

class ChildClass extends ParentClass {
    public function useProtectedFunction() {
        // Accessing the protected function from the parent class
        $this->myProtectedFunction();
    }
}

// Creating an object of the child class
$childObject = new ChildClass();

// Calling the method from the child class, which internally calls the protected method from the parent class
$childObject->useProtectedFunction();


?>
