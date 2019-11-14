<?php declare(strict_types=1);
/**
 * Closure Container
 */
class Container
{
    private $services = [];

    /**
     * Register service
     */
    public function add($serviceName, $service = null)
    {
        if(array_key_exists($serviceName, $this->services)) {
            throw new \LogicException(sprintf('Service %s already instantiated', $serviceName));
        }

        if (is_callable($service)) {
            $this->services[$serviceName] = $service();
            return;
        }

        if (is_object($service)) {
            $this->services[$serviceName] = $service;
            return;
        }

       $this->services[$serviceName] = new $serviceName();
    }

    /**
     * Get service
     *
     * @return void
     */
    public function get($serviceName)
    {
        if (!isset($this->services[$serviceName])) {
            throw new \Exception(sprintf('Service %s not found', $serviceName));
        }

        return $this->services[$serviceName];
    }
}

class Foo{}
class FooBar{
    private $logger;
    public function setLogger($logger) { $this->logger = $logger; }
    public function getLogger() { return $this->logger; }
}

$container = new Container();

$container->add(Foo::class);

// Register your complex services using closure
$container->add(FooBar::class, function () {
    $fooBar = new FooBar();
    $fooBar->setLogger(new class() {
        public function info($message) {  echo sprintf('Info: %s', $message); }
    });
    return $fooBar;
});

var_dump($container->get(Foo::class) instanceof Foo); // true
$container->get(FooBar::class)->getLogger()->info('vim + tmux + zsh = Awesome');


