<?php


/**
 * final keyword
 *
 * PHP Fatal error:  Cannot declare property Test::$var final,
 * the final modifier is allowed only for methods and classes
 */

class Test
{
    public final $var;
}

$a = new Test();

