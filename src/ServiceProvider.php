<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames;

use DragonCode\LaravelRouteNames\Routing\Router;
use Illuminate\Routing\RoutingServiceProvider;

class ServiceProvider extends RoutingServiceProvider
{
    protected function registerRouter(): void
    {
        $this->app->singleton('router', function ($app) {
            return new Router($app['events'], $app);
        });
    }
}
