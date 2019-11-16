<?php

class Runner
{
    private $queue;

    /**
     * undocumented function
     *
     * @return void
     */
    public function __construct(array $queue)
    {
        $this->queue = $queue;
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function __invoke(Request $request, Response $response)
    {
        $middleware = array_shift($this->queue);
        if (null == $middleware) {
            // Default
            return function(Request $request, Response $response, Callable $next) {
                return $response;
            };
        }

        $callable = $middleware($request, $response, $this);


        if ($callable instanceof Response) {
            return $callable;
        }

        return $callable;
    }
}
