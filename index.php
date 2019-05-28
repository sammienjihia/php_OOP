<?php

require_once __DIR__. '/vendor/autoload.php';
use Acme\Human;
use Acme\PrintSth;
use Acme\EmployeeSalary;
use Acme\User;

$human = new Human('Asian');

$greetings = new PrintSth("sammy", "njihia");

$pay = new EmployeeSalary(200000, 1200, 2500);

$sam = new User("black");
$sam->setName("Sammy");
echo $sam->getName();
$sam->setAge(5);
echo $sam->getAge();
echo $sam->getRace();




var_dump($human);
var_dump($greetings);
var_dump($pay);

// Demonstrating using a trait
echo $greetings->printHello();