<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Helpers;

use Fig\Http\Message\RequestMethodInterface;
use Illuminate\Support\Arr;

class Action
{
    protected $aliases = [
        'index'   => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
        'store'   => [RequestMethodInterface::METHOD_POST],
        'update'  => [RequestMethodInterface::METHOD_PUT],
        'destroy' => [RequestMethodInterface::METHOD_DELETE],
        'patch'   => [RequestMethodInterface::METHOD_PATCH],
        'options' => [RequestMethodInterface::METHOD_OPTIONS],
    ];

    protected $collision = [
        'show' => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
        'edit' => [RequestMethodInterface::METHOD_GET, RequestMethodInterface::METHOD_HEAD],
    ];

    protected $default = 'index';

    public function get(array $methods, string $uri): string
    {

        return $this->default;
    }

    protected function hasMethods(array $route, array $aliases): bool
    {
        return Arr::has($aliases, $route);
    }
}
