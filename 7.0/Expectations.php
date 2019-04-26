<?php

/**
 * Expectations are a backwards compatible enhancement to the older assert() function. They allow for zero-cost assertions in production code, and provide the ability to throw custom exceptions when the assertion fails.
 *
 * While the old API continues to be maintained for compatibility, assert() is now a language construct, allowing the first parameter to be an expression rather than just a string to be evaluated or a boolean value to be tested.
 */

//ini_set('assert.exception', 1);

class CustomError extends AssertionError {}

echo assert(false, new CustomError('Some error message'));
