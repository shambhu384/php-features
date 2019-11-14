<?php

class Person
{

    private $ssn;

    private $firstName;

    private $lastName;

    public function __construct($ssn, $firstName, $lastName)
    {
        $this->ssn = $ssn;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    private function __clone()
    {
        unset($this->ssn);
    }
}

$person1 = new Person(123, 'Scott', 'dev');
var_dump($person1);

$person2 = new Person(345, 'Alex', 'dev');
var_dump($person2);

$person3 = clone $person2;
var_dump($person3);

$person3 = &$person3;
var_dump($person3);
