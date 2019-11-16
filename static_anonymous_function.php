<?php

/**
 * PHP Warning:  Cannot bind an instance to a static closure
 */
$func = static function() {
    // function body
};
$func = $func->bindTo(new StdClass);
$func();


