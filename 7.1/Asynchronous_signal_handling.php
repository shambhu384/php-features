<?php

/**
 *  Asynchronous signal handling
 *
 * A new function called pcntl_async_signals() has been introduced to enable asynchronous signal handling without using ticks (which introduce a lot of overhead).
 */

pcntl_async_signals(true); // turn on async signals

pcntl_signal(SIGHUP,  function($sig) {
        echo "SIGHUP\n";
});

posix_kill(posix_getpid(), SIGHUP);
