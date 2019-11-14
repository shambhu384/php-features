<?php

interface Plugable
{
    public static function name();
    public function run();
}

class Usb implements Plugable{

    const NAME = 'USB';

    public static function name()
    {
        return self::NAME;
    }

    public function run()
    {
        return rand(1, 10);
    }
}


class Drive implements Plugable{

    const NAME = 'DRIVE';

    public static function name()
    {
        return self::NAME;
    }

    public function run()
    {
        return rand(1, 10);
    }
}

class Moniter implements Plugable{

    const NAME = 'Moniter';

    public static function name()
    {
        return self::NAME;
    }

    public function run()
    {
        return rand(1, 10);
    }
}



class PluginManager
{
    private $plugins;

    public function __construct(...$plugins) {
        $this->plugins = $plugins;
    }

    public function run()
    {
        foreach($this->plugins as $plugin)
        {
            $class = get_class($plugin);
            echo $class::name() . ' : ' . $plugin->run() . "\n";
        }
    }
}

/**
 * // Little Heck
 *
 * $plugables = [
 *   new Usb(),
 *   new Drive()
 * ];
 */

$plugables = [];
foreach(get_declared_classes() as $class) {
   $reflect = new ReflectionClass($class);
   if($reflect->implementsInterface('Plugable')) {
       $plugables[] = new $class;
    }
}


$pluginManager = new PluginManager(...$plugables);


