<?php

declare(strict_types=1);

namespace Tests\Extenders;

use DragonCode\LaravelRouteNames\Routing\Route;
use Illuminate\Support\Str;

class RouteNameExtender
{
    public function __invoke(string $name, Route $route): string
    {
        return $this->has($route->uri()) ? $this->replace($name) : $name;
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
