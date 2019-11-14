<?php

abstract class A{

    static function create(){

        //return new self();  //Fatal error: Cannot instantiate abstract class A

        return new static(); //this is the correct way

    }

}

class B extends A{
}

$obj=B::create();
var_dump($obj);

