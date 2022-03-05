<?php
/*
 * This file is part of the "dragon-code/support" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/TheDragonCode/support
 */

namespace Tests;

use DragonCode\LaravelRouteNames\Application;
use DragonCode\LaravelRouteNames\ServiceProvider;
use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Support\Facades\Route as RouteFacade;
use Orchestra\Testbench\Bootstrap\LoadConfiguration as OrchestraLoadConfiguration;
use Orchestra\Testbench\Foundation\PackageManifest;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Tests\Concerns\Routes;
use Tests\Http\Controllers\Controller;

abstract class TestCase extends BaseTestCase
{
    use Routes;

    protected function getPackageProviders($app): array
    {
        return [ServiceProvider::class];
    }

    protected function resolveApplication()
    {
        return tap(new Application($this->getBasePath()), function ($app) {
            $app->bind(LoadConfiguration::class, OrchestraLoadConfiguration::class);

            PackageManifest::swap($app, $this);
        });
    }

    protected function defineRoutes($router)
    {
        $router
            ->middleware('api')
            ->prefix('api')
            ->group(function () use ($router) {
                $this->resourceRoutes($router);
            });
    }

    protected function defineWebRoutes($router)
    {
        $this->basicRoutes($router);
        $this->collisionRoutes($router);
        $this->mixedCases($router);
        $this->protectedRoutes($router);
        $this->routesWithMultiParameters($router);
        $this->routesWithParameters($router);
    }

    protected function getRouteName(string $action, string $controller = Controller::class): string
    {
        return RouteFacade::getRoutes()->getByAction($controller . '@' . $action)->getName();
    }
}
