<?php

/**
 * Support for anonymous classes was added in PHP 7.
 * Anonymous classes are useful when simple, one-off objects need to be created.
 *
 *
 * An anonymous class might be used over a named class:
 *
 * when the class does not need to be documented
 * when the class is used only once during execution
 *
 * Note:
 *
 * # Typed structs: instead of using arrays everywhere, we can now create inline typed objects with specific properties and pass them around.
 *  Much less verbose than having a file and a class name for every type of them.
 *
 * #
 */


interface Logger {
    public function log(string $msg);
}

class Application {
    private $logger;

    public function getLogger(): Logger {
        return $this->logger;
    }

    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}

$app = new Application;
$app->setLogger(new class implements Logger {
    public function log(string $msg) {
        echo $msg;
    }
});

var_dump($app->getLogger());

