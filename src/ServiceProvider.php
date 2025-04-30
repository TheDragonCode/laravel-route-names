<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames;

use DragonCode\LaravelRouteNames\Routing\Router;
use Illuminate\Routing\Router as BaseRouter;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->publishConfig();
    }

    public function register(): void
    {
        $this->registerConfig();
        $this->extendRouter();
    }

    protected function publishConfig(): void
    {
        $this->publishes([
            $this->getPath() => config_path('route.php'),
        ], 'config');
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(
            $this->getPath(),
            'route'
        );
    }

    protected function getPath(): string
    {
        return __DIR__ . '/../config/route.php';
    }

    protected function extendRouter(): void
    {
        $this->app->booting(function (): void {
            $this->app->extend(
                'router',
                static fn (
                    BaseRouter $router,
                    $app
                ): Router => ! $router instanceof Router ? new Router($app['events'], $app) : $router
            );
        });
    }
}
