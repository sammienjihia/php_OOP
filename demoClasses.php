<?php

class printSth{
    
    var $first_name;
    var $last_name;

    function greetings(){
        echo "Hello ".$this->first_name." ".$this->last_name;
    }

    function __construct($firstname, $lastname){

        $this->first_name = $firstname;
        $this->last_name = $lastname;
        
    }


    
}

$greetings = new printSth("sammy", "njihia");
$greetings->greetings();

?>