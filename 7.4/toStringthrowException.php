<?php

declare(strict_types=1);


class Test
{
    public function __tostring()
    {
        throw new Exception();
    }
}

// this not possible in below 7.4 
