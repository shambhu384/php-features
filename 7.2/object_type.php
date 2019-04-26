<?php

/**
 * object type
 *
 * A new type, object, has been introduced that can be used for (contravariant) parameter typing
 * and (covariant) return typing of any objects.
 */

function test(object $obj) : object
{
        return new SplQueue();
}

test(new StdClass());


$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously


$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'
