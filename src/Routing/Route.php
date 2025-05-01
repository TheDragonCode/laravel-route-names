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

use DragonCode\LaravelRouteNames\Facades\Name;
use Illuminate\Routing\Route as BaseRoute;
use Illuminate\Support\Str;

class Route extends BaseRoute
{
    public function getName(): ?string
    {
        if ($this->isProtectedRouteName()) {
            return $this->getProtectedRouteName();
        }

        return app()->call($this->getRouteNamesExtender(), [
            'name'  => Name::get($this->methods(), $this->uri()),
            'route' => $this,
        ]);
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

    /**
     * @return (callable(string, self): string)|string
     */
    protected function getRouteNamesExtender(): callable|string|null
    {
        return config('route.names.extender') ?: static fn (string $name): string => $name;
    }
}
