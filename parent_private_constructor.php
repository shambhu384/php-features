<?php

class A
{
    public $i = 6;
    private function __construct(int $i) {}
    public function hello(){ echo 'hello'; }
}

class B extends A{

//    public function __construct() {}
}

$a = new B();
echo $a->i;
$a->hello();

var_dump($a);
