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
