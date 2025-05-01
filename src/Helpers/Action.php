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

namespace DragonCode\LaravelRouteNames\Helpers;

use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Request;

use function in_array;

class Action
{
    protected array $aliases = [
        'index'   => [Request::METHOD_GET, Request::METHOD_HEAD],
        'store'   => [Request::METHOD_POST],
        'update'  => [Request::METHOD_PUT],
        'destroy' => [Request::METHOD_DELETE],
        'patch'   => [Request::METHOD_PATCH],
        'options' => [Request::METHOD_OPTIONS],
    ];

    protected array $collision = [
        'create'  => [Request::METHOD_GET, Request::METHOD_HEAD],
        'show'    => [Request::METHOD_GET, Request::METHOD_HEAD],
        'edit'    => [Request::METHOD_GET, Request::METHOD_HEAD],
        'destroy' => [Request::METHOD_DELETE],
        'delete'  => [Request::METHOD_DELETE],
        'trashed' => [Request::METHOD_GET, Request::METHOD_HEAD],
        'restore' => [Request::METHOD_POST],
    ];

    protected array $show = [
        Request::METHOD_GET,
        Request::METHOD_HEAD,
    ];

    protected string $default = 'index';

    public function get(array $methods, string $uri): string
    {
        return $this->show($methods, $uri)
            ?? $this->collision($methods, $uri)
            ?? $this->alias($methods)
            ?? $this->default;
    }

    protected function collision(array $methods, string $uri): ?string
    {
        foreach ($this->collision as $alias => $httpMethods) {
            if ($this->hasMethods($methods, $httpMethods) && $this->hasAlias($uri, $alias)) {
                return $alias;
            }
        }

        return null;
    }

    protected function alias(array $methods): ?string
    {
        foreach ($this->aliases as $method => $httpMethods) {
            if ($this->hasMethods($methods, $httpMethods)) {
                return $method;
            }
        }

        return null;
    }

    protected function show(array $methods, string $uri): ?string
    {
        if ($this->hasMethods($methods, $this->show) && Str::of($uri)->rtrim(' /')->endsWith('}')) {
            return 'show';
        }

        return null;
    }

    protected function hasMethods(array $route, array $aliases): bool
    {
        foreach ($route as $value) {
            if (in_array($value, $aliases, true)) {
                return true;
            }
        }

        return false;
    }

    protected function hasAlias(string $uri, string $alias): bool
    {
        return Str::of($uri)->lower()->endsWith($alias);
    }
}
