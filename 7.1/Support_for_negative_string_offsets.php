<?php

/**
 * Support for negative string offsets
 *
 * Support for negative string offsets has been added to the string manipulation functions accepting offsets, as well as to string indexing with [] or {}. In such cases, a negative offset is interpreted as being an offset from the end of the string.
 */

var_dump("abcdef"[-2]);
var_dump(strpos("aabbcc", "b", -3));
