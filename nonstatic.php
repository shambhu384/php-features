<?php
class A {
    public static function foo() {
        echo 'I am in foo of A'. "\n";
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {
        echo 'I am in test of C'."\n";
        //A::foo();
        //C::foo();
        //self::foo();
        static::foo();
    }

}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

B::test();
