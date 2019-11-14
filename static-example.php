<?php

class Counter{

    private $count;

    public static $instance;

    public function __construct($count = 0){
        $this->count = $count;
        self::$instance++;
    }

    public function count(){
        $this->count++;
        return $this;

    }

    public function __toString(){
        return (string)$this->count;
    }

    public static function countInstance(){
        return self::$instance;
    }
}

$c1 = new Counter();
$c1->count()
    ->count();
echo 'Counter 1 value: '. $c1 . '<br/>';

$c2 = new Counter();
$c2->count()
    ->count()
    ->count();

echo 'Counter 2 value: '. $c2 . '<br/>';

echo 'The number of counter instances:'
    . Counter::countInstance()
    . '<br/>';
