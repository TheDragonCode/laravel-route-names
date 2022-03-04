<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Facades;

use DragonCode\LaravelRouteNames\Helpers\Action as Helper;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string get(array $methods, string $uri)
 */
class Action extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Helper::class;
    }
}
