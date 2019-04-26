<?php

/**
 * Allow a trailing comma for grouped namespaces
 *
 * A trailing comma can now be added to the group-use syntax introduced in PHP 7.0.
 */

use Foo\Bar\{
    Foo,
    Bar,
    Baz,
};
