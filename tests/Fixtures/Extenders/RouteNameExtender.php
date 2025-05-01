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

namespace Tests\Fixtures\Extenders;

use DragonCode\LaravelRouteNames\Routing\Route;
use Illuminate\Support\Str;

class RouteNameExtender
{
    public function __invoke(string $name, Route $route): string
    {
        if ($this->has($route->uri())) {
            return $this->replace($name);
        }

        return $name;
    }

    protected function has(string $uri): bool
    {
        return Str::of($uri)->startsWith('api/v1');
    }

    protected function replace(string $name): string
    {
        return Str::replaceFirst('api.v1', 'api.v2', $name);
    }
}
