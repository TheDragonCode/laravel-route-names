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

use Illuminate\Routing\Route as RouteCore;
use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\SomeController;

function routeAction(string $action, string $controller = SomeController::class): ?RouteCore
{
    return Route::getRoutes()->getByAction($controller . '@' . $action);
}

function routeName(string $action, string $controller = SomeController::class): string
{
    if ($route = routeAction($action, $controller)) {
        return $route->getName();
    }

    throw new RuntimeException(sprintf('Unknown route action: %s@%s.', $controller, $action));
}
