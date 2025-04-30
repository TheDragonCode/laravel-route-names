<?php

declare(strict_types=1);

namespace Tests\Extenders;

use DragonCode\LaravelRouteNames\Routing\Route;
use Illuminate\Support\Str;

final class RouteNameExtender
{
    public function __invoke(string $name, Route $route): string
    {
        return Str::of($route->uri())->startsWith('api/v1')
            ? Str::replaceFirst('api.v1', 'api.v2', $name)
            : $name;
    }
}
