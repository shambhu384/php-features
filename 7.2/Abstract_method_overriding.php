<?php

/* Abstract method overriding
 *
 * Abstract methods can now be overridden when an abstract class extends another abstract class.
 */

abstract class A
{
    abstract function test(string $s);
}
abstract class B extends A
{
    // overridden - still maintaining contravariance for parameters and covariance for return
    abstract function test($s) : int;
}
