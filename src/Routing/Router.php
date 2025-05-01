<?php

/**
 * This file is part of the "dragon-code/laravel-route-names" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2025 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/TheDragonCode/laravel-route-names
 */

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Routing;

use DragonCode\LaravelRouteNames\Helpers\Name;
use Illuminate\Routing\Router as BaseRouter;

use function app;

class Router extends BaseRouter
{
    public function newRoute(
        $methods, // @pest-ignore-type
        $uri, // @pest-ignore-type
        $action // @pest-ignore-type
    ): Route {
        return (new Route($methods, $uri, $action, app(Name::class)))
            ->setRouter($this)
            ->setContainer($this->container);
    }
}
