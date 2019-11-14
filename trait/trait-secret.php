<?php

trait HelloWorld {

    public function sayHello() {
        echo 'Hello World!';
    }
}

class MyClass1 {
    use HelloWorld;

    public function fo(){}
}

class MyClass2 {
    use HelloWorld;
}


