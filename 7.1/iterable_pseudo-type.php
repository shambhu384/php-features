<?php

/**
 * iterable pseudo-type
 *
 * A new pseudo-type (similar to callable) called iterable has been introduced. It may be used in parameter and return types, where it accepts either arrays or objects that implement the Traversable interface. With respect to subtyping, parameter types of child classes may broaden a parent's declaration of array or Traversable to iterable. With return types, child classes may narrow a parent's return type of iterable to array or an object that implements Traversable.
 *
 * Iterable is a pseudo-type introduced in PHP 7.1.
 * It accepts any array or object implementing the Traversable interface.
 * Both of these types are iterable using foreach and can be used with yield from within a generator.
 */

// Example #1 Iterable parameter type example

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    }
}

// Note: Parameters declared as iterable may use NULL or an array as a default value.


// Example #2 Iterable parameter default value example


function foos(iterable $iterable = []) {
    // ...
}


/**
 * Iterable can also be used as a return type to indicate a function will return an iterable value.
 * If the returned value is not an array or instance of Traversable, a TypeError will be thrown.
 */

function bar(): iterable {
    return [1, 2, 3];
}

// Functions declaring iterable as a return type may also be generators.


function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

