<?php

/**
 * Classes, functions and constants being imported from the same namespace can now be grouped together in a single use statement.
 */

// PHP 7+ code
use Vendor\App\{ClassA, ClassB, ClassC as C};

use function Vendor\App\{fn_a, fn_b, fn_c};

use const Vendor\App\{ConstA, ConstB, ConstC};
