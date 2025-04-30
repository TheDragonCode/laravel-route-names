<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Providers;

use DragonCode\LaravelRouteNames\Routing\Router;
use Illuminate\Foundation\Application;
use Illuminate\Routing\RoutingServiceProvider as BaseRoutingServiceProvider;

class RoutingServiceProvider extends BaseRoutingServiceProvider
{
    protected function registerRouter(): void
    {
        $this->app->singleton('router', static fn (Application $app) => new Router($app['events'], $app));
    }
}
