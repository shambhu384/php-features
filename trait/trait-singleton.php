<?php

trait Singleton {

    private static $instance;

    final public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new static;
        }

        return self::$instance;
    }

    private function __construct() {/** Restirct object creation using new keyword */}
    final private function __clone() {/** Shouldn't clone using clone keyword  */}

}

class MySingleton {
    use Singleton;
}

class Digit extends MySingleton
{
    use Singleton;
}

$obj = MySingleton::getInstance();
$obj2 = MySingleton::getInstance();

$digit =  Digit::getInstance();
$digit2 = Digit::getInstance();

var_dump($obj == $digit); // false

var_dump($obj == $obj2); //true
var_dump($digit == $digit2); //true
