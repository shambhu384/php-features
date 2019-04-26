<?php

/**
 * Parameter type widening
 *
 * Parameter types from overridden methods and from interface implementations may now be omitted.
 * This is still in compliance with LSP, since parameters types are contravariant
 */

interface A
{
    public function Test(array $input);
}

class B implements A
{
    public function Test($input){} // type omitted for $input
}
