<?php

echo "OOPs concept of Encapsulation in PHP means, enclosing the internal details of the object to protect from external sources. It describes, combining the class, data variables and member functions that work on data together within a single unit to form an object. Otherwise, its the bundling of properties and behavior in a single class unit. </br></br>";

// PHP program to implements encapsulation 
class GFG { 

	private $userId; 
	private $pwd; 
	
	// Update GFG password 
	public function updatePwd($userId, $pwd) { 
		
		// Write function body 
		echo("Function to update password '"
				. $pwd . "' for user " . $userId); 
		
		echo "<br>"; 
	} 

	// Check account balance 
	public function courseName($userId) { 
		
		// Write function body 
		echo("Function to check course name of user "
				. $userId); 
		
		echo "<br>"; 
	} 
} 

$obj = new GFG(); 
$obj -> updatePwd('GFG12', 'geeks54321'); 
$obj -> courseName('GFG06'); 


echo "<br>";

echo "Example 2:";
echo "<br>";

class bank{
    private $acc = 678934;

    function getAccount() {
        echo $this->acc;
    }
}

$obj2 = new bank();
$obj2->getAccount();

?>