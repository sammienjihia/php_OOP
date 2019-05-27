<?php

// using a namespace
// use First;

require_once('human.php');
include 'name_space.php';

class User extends Human 
{
    // demonstrating encapsulation
    private $name;

    private $age;

    public function setName($name){
        $this->name = $name;

    }

    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function getRace(){
        return $this->race;
    }
}

echo \First\PrintSth::sayHello();

$sam = new User("black");
$sam->setName("Sammy");
echo $sam->getName();
$sam->setAge(5);
echo $sam->getAge();
echo $sam->getRace();