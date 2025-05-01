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

namespace Tests\Unit\Routes;

use DragonCode\LaravelRouteNames\Routing\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Tests\Fixtures\Extenders\RouteNameExtender;

it('default', function () {
    expect(routeName('extendedFoo'))->toBe('api.v1.extended.index');
    expect(routeName('extendedBar'))->toBe('api.v1.extended.store');
    expect(routeName('extendedBaz'))->toBe('api.v1.extended.update');
    expect(routeName('extendedBaq'))->toBe('api.v1.extended.destroy');
    expect(routeName('extendedBaw'))->toBe('api.v1.extended.patch');
    expect(routeName('extendedBae'))->toBe('api.v1.extended.options');
});

it('closure extender', function () {
    Config::set(
        'route.names.extender',
        static function (string $name, Route $route): string {
            return Str::of($route->uri())->startsWith('api/v1')
                ? Str::replaceFirst('api.v1', 'api', $name)
                : $name;
        }
    );

    expect(routeName('extendedFoo'))->toBe('api.extended.index');
    expect(routeName('extendedBar'))->toBe('api.extended.store');
    expect(routeName('extendedBaz'))->toBe('api.extended.update');
    expect(routeName('extendedBaq'))->toBe('api.extended.destroy');
    expect(routeName('extendedBaw'))->toBe('api.extended.patch');
    expect(routeName('extendedBae'))->toBe('api.extended.options');
});

it('extender class', function () {
    Config::set('route.names.extender', RouteNameExtender::class);

    expect(routeName('extendedFoo'))->toBe('api.v2.extended.index');
    expect(routeName('extendedBar'))->toBe('api.v2.extended.store');
    expect(routeName('extendedBaz'))->toBe('api.v2.extended.update');
    expect(routeName('extendedBaq'))->toBe('api.v2.extended.destroy');
    expect(routeName('extendedBaw'))->toBe('api.v2.extended.patch');
    expect(routeName('extendedBae'))->toBe('api.v2.extended.options');
});
