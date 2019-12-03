<?php

declare(strict_types=1);



class Test{}


class Feature
{

    private int $id = 1;

    private string $name = 'Scott';

    private float $tax = 3.4;

    /**
     * Still not alloweded, anyways
     * private Test $test = new Test();
     */
    private ?Test $test = null;

    public function __construct()
    {
        $this->id = "5"; // this works because PDO or resource are returning "4" strings

        $this->test  = new Test(); // this works
    }
}
