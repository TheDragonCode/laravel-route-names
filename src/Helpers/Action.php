<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Helpers;

use Fig\Http\Message\RequestMethodInterface;
use Illuminate\Support\Str;

class Action
{
    protected array $aliases = [
        'index'   => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
        'store'   => [RequestMethodInterface::METHOD_POST],
        'update'  => [RequestMethodInterface::METHOD_PUT],
        'destroy' => [RequestMethodInterface::METHOD_DELETE],
        'patch'   => [RequestMethodInterface::METHOD_PATCH],
        'options' => [RequestMethodInterface::METHOD_OPTIONS],
    ];

    protected array $collision = [
        'create'  => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
        'show'    => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
        'edit'    => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
        'destroy' => [RequestMethodInterface::METHOD_DELETE],
        'delete'  => [RequestMethodInterface::METHOD_DELETE],
    ];

    protected array $show = [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD];

    protected string $default = 'index';

    public function get(array $methods, string $uri): string
    {
        if ($value = $this->show($methods, $uri)) {
            return $value;
        }

        if ($value = $this->collision($methods, $uri)) {
            return $value;
        }

        if ($value = $this->alias($methods)) {
            return $value;
        }

        return $this->default;
    }

    protected function collision(array $methods, string $uri): ?string
    {
        foreach ($this->collision as $alias => $http_methods) {
            if ($this->hasMethods($methods, $http_methods) && $this->hasAlias($uri, $alias)) {
                return $alias;
            }
        }

        return null;
    }

    protected function alias(array $methods): ?string
    {
        foreach ($this->aliases as $method => $http_methods) {
            if ($this->hasMethods($methods, $http_methods)) {
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
            if (in_array($value, $aliases)) {
                return true;
            }
        }

        return false;
    }

    protected function hasAlias(string $uri, string $alias): bool
    {
        //dump([$uri, $alias, Str::of($uri)->lower()->endsWith($alias)]);

        return Str::of($uri)->lower()->endsWith($alias);
    }
}
