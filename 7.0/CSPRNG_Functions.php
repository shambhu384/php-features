<?php

/**
 * Two new functions have been added to generate cryptographically secure integers and strings in a cross platform way: random_bytes() and random_int().
 */

// random_int — Generates cryptographically secure pseudo-random integers

var_dump(random_int(100, 999));
var_dump(random_int(-1000, 0));



// random_bytes — Generates cryptographically secure pseudo-random bytes
$bytes = random_bytes(16);
var_dump(bin2hex($bytes));


