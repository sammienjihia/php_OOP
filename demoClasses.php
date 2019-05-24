<?php

class printSth{
    
    // Below variables demonstrates the class's properties
    var $first_name;
    var $last_name;

    // The below function demonstrates the class's method
    function greetings(){
        echo "Hello ".$this->first_name." ".$this->last_name;
    }

    // Below function demonstrates the class's constructor. This can allow an object to be instantiated with initial values
    function __construct($firstname, $lastname){

        $this->first_name = $firstname;
        $this->last_name = $lastname;
        
    }

    
}

// greetings is an object of the printSth class
$greetings = new printSth("sammy", "njihia");
$greetings->greetings();

?>