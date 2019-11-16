<?php

require 'runner.php';


class Request extends stdClass{};
class Response extends stdClass{};

interface Middleware
{
    /**
     * Invokable
     *
     * @param Request $request
     * @param Response $response
     * @param Callable $next
     */
    public function __invoke(Request $request, Response $response, Callable $next);
}


class Route implements Middleware{

    public function __invoke(Request $request, Response $response, Callable $next)
    {
        switch ($request->path) {
        case '/':
            return new class extends Response {
                public function __toString() {
                    return 'Welcome homepage';
                }
            };
            break;
        case '/hello':
            return new class extends Response {
                public function __toString() {
                    return 'Welcome User';
                }
            };
            break;
        case '/json':
            sleep(2);
            return new class extends Response {
                public function __toString() {
                    return 'json response';
                }
            };
            break;
        default:
            throw new Exception("route not found");
            break;
        }


        return $next($request, $response);
    }
 }

class Cache implements Middleware{

    private $file =  'app.cache';
    public function __invoke(Request $request, Response $response, Callable $next)
    {
        $cachedReponse = file_get_contents($this->file);
        $cachedReponse = unserialize($cachedReponse);
        if (!$cachedReponse) {
            $cachedReponse = $next($request, $response);
            $cache =  serialize($response);
            file_put_contents($this->file, $cache);
        }

        return $cachedReponse;
    }
}


set_exception_handler(function($exception) {
    echo $exception->getMessage();
});



$middlewares = [
    new Cache(),
    new Route()
];

$runner = new Runner($middlewares);

$request = new Request();

$request->path = $_SERVER['PATH_INFO'];

$response = $runner($request, new Response());

echo $response;

