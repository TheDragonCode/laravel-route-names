<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Routing;

use DragonCode\LaravelRouteNames\Facades\Action;
use Illuminate\Routing\Route as BaseRoute;
use Illuminate\Support\Str;

class Route extends BaseRoute
{
    public function getName(): ?string
    {
        return Str::of($this->uri())
            ->explode('/')
            ->map(function (string $value): string {
                return Str::of($value)->lower()->snake()->toString();
            })
            ->push($this->getMethodSuffix())
            ->filter()
            ->implode('.');
    }

    protected function splitUri(): array
    {
        return explode('/', $this->uri());
    }

    protected function getMethodSuffix(): string
    {
        return Action::get($this->methods(), $this->uri());
    }
}
