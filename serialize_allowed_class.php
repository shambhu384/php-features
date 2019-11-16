<?php

class B{}

class App extends B{

    private $a = 5;
    public $b = 6;
    protected $c = 9;
}

$a = new App;
$x =  serialize($a);
$a = null;

$t = str_replace(5, 1, $x);

echo $t;

$t = unserialize($t, ["allowed_classes" => true]);

var_dump($t);

var_dump($a instanceof $t);
