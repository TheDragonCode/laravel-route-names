<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Routing;

use DragonCode\LaravelRouteNames\Facades\Name;
use Illuminate\Routing\Route as BaseRoute;
use Illuminate\Support\Str;

class Route extends BaseRoute
{
    public function getName(): ?string
    {
        return $this->isProtectedRouteName()
            ? $this->getProtectedRouteName()
            : Name::get($this->methods(), $this->uri());
    }

    protected function isProtectedRouteName(): bool
    {
        if ($name = $this->getProtectedRouteName()) {
            return Str::is($this->getProtectedRouteNames(), $name);
        }

        return false;
    }

    protected function getProtectedRouteName(): ?string
    {
        return parent::getName();
    }

    protected function getProtectedRouteNames(): array
    {
        return config('route.names.exclude');
    }
}
