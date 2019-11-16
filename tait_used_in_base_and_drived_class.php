<?php

declare(strict_types=1);


trait LoadEnv
{
    /**
     * Get env
     *
     * @return void
     */
    public function getEnv()
    {
        return new static;
    }

}

class WebApp
{
    use LoadEnv;
}

class CliApp
{
    use LoadEnv;
}

// No errors
