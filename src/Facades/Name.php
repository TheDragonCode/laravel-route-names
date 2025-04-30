<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Facades;

use DragonCode\LaravelRouteNames\Helpers\Name as Helper;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string get(array $methods, string $uri)
 */
class Name extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Helper::class;
    }
}
