<?php

/**
 * This feature builds upon the generator functionality introduced into PHP 5.5. It enables for a return statement to be used within a generator to enable for a final expression to be returned (return by reference is not allowed). This value can be fetched using the new Generator::getReturn() method, which may only be used once the generator has finished yielding values.
 */


$gen = (function() {
    yield 1;
    yield 2;

    return 5;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL; // 1, 2 output
}

echo $gen->getReturn(), PHP_EOL; // 3 output
