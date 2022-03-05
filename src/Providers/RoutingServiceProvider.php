<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Providers;

use DragonCode\LaravelRouteNames\Routing\Router;
use Illuminate\Routing\RoutingServiceProvider as BaseRoutingServiceProvider;

class RoutingServiceProvider extends BaseRoutingServiceProvider
{
    protected function registerRouter(): void
    {
        $this->app->singleton('router', function ($app) {
            return new Router($app['events'], $app);
        });
    }
}
