<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Routing;

use DragonCode\LaravelRouteNames\Facades\Name;
use DragonCode\Support\Facades\Helpers\Str;
use Illuminate\Routing\Route as BaseRoute;

class Route extends BaseRoute
{
    protected array $protected_routes_names = [
        '_debugbar.*',
        '_ignition.*',
        'horizon.*',
        'pretty-routes.*',
        'telescope.*',
    ];

    public function getName(): ?string
    {
        return $this->isProtectedRouteName()
            ? $this->getProtectedRouteName()
            : Name::get($this->methods(), $this->uri());
    }

    protected function isProtectedRouteName(): bool
    {
        if ($name = $this->getProtectedRouteName()) {
            return Str::is($this->protected_routes_names, $name);
        }

        return false;
    }

    protected function getProtectedRouteName(): ?string
    {
        return parent::getName();
    }
}
