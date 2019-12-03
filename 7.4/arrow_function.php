<?php



$years = [2011, 2012, 2013, 2015, 2016];

$step = 2;


$updateYears = array_map(function($value) use ($step) {
    return $value + $step;
}, $years);

var_dump($updateYears);



$updateYears = array_map(fn($value) => $value + $step, $years);

var_dump($updateYears);
