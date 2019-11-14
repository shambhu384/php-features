<?php

class A {

    public function __construct() {
        echo self::class , "\n";
    }

}

class B extends A {

    private $test =5;

    public function __construct() {
    }

    public function __get($name)
    {
        parent::__construct();
        return $this->$name;
    }

}

$b = new B;
echo $b->test;
echo $b->__get('test');
//$b->__construct();
//
/* Can i call magic method
 *
 * Can i call construtor from magic method
 */
