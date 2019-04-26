<?php

/**
 * session_start() now accepts an array of options that override the session configuration directives normally set in php.ini.
*
* These options have also been expanded to support session.lazy_write, which is on by default and causes PHP to only overwrite any session file if the session data has changed, and read_and_close, which is an option that can only be passed to session_start() to indicate that the session data should be read and then the session should immediately be closed unchanged.
*
* For example, to set session.cache_limiter to private and immediately close the session after reading it:
 */

session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);
