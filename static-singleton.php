<?php

class Singleton {

    public static $objInstance;

    public static function &getInstance() {

        if (self::$objInstance == null) {
            $strClass = static::getClass();
            self::$objInstance = new $strClass;
        }

        return self::$objInstance;
    }

    public static function getClass() {
        return __CLASS__;
    }

}

class Foo extends Singleton {

    public $intBar;

    public function __construct() {
        $this->intBar = 1;
    }

    public static function getClass() {
        return __CLASS__;
    }

}


$objFooTwo = Foo::getInstance();
$objFooTwo->intBar = 2;

$objFooOne = new Foo();

if ($objFooOne->intBar == $objFooTwo->intBar) {
    echo 'it is a singleton';
} else {
    echo 'it is not a singleton';
}
