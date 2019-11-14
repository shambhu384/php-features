<?php

interface Foo {

    abstract public function bar();

}

abstract class FooBar implements Foo {

    abstract function bar(); // just for making clear, that this
    // method has to be implemented

}


echo 'hellp';


<?php
class Bar {
    public static function test() {
        var_dump(static::class);
    }
}

class Foo extends Bar {

}

Foo::test();
Bar::test();
?>

Output:

string(3) "Foo"
string(3) "Bar"Access type for interface method Foo::bar() must be omitted
