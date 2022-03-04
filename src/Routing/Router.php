<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Routing;

use Illuminate\Routing\Router as BaseRouter;

class Router extends BaseRouter
{
    public function newRoute($methods, $uri, $action): Route
    {
        return (new Route($methods, $uri, $action))
            ->setRouter($this)
            ->setContainer($this->container);
    }
}
