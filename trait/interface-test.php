<?php


interface inter1 {

    const interface1 = "I am from interface 1";

    function foo1();

    function bar1();
}

interface inter2 extends inter1 {

    function foo2();

    function bar2();
}

interface inter3 {

    function foo3();

    function bar3();
}

interface inter4 {

    function foo4();

    function bar4();
}

abstract class AbsClass implements inter2, inter1 {

}

class Test  extends AbsClass implements inter3, inter4 {

    const interface1 = "I am from test class";

    public function foo1() {

    }

    public function foo2() {

    }

    public function foo3() {

    }

    public function foo4() {

    }

    public function bar1() {

    }

    public function bar2() {

    }

    public function bar3() {

    }

    public function bar4() {

    }

    public function display() {
        echo inter1::interface1;
        echo PHP_EOL;
        echo Test::interface1;
    }

}

$Obj = new Test();
$Obj->display(); //I am from interface 1 \n I am from test class
