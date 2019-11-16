<?php

/**
 *  Abstract methods can now be overridden when an abstract class extends another abstract class.
 */

abstract class AbstractParent
{
   abstract public function get();
}

abstract class AbstractChild extends AbstractParent
{
   abstract public function get() {}
}

