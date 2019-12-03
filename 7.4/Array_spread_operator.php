<?php


$languages = [10 => 'PHP', 9 => 'JAVA', 8 => '.Net'];

$boostLanguages = ['10' => 'PHP', ...$languages];

var_dump($boostLanguages);

$languages = ['first' => 'PHP', 'second' => 'JAVA', 'third' => '.Net'];

$boostLanguages = ['first' => 'PHP', ...$languages]; // PHP Fatal error:  Uncaught Error: Cannot unpack array with string keys in $boostLanguages

// it will only work with index array so key will be auto incremented if you keys are same
