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

it('default', function (bool $withCache) {
    cacheRoutes($withCache);

    expect(routeName('parameterFoo'))->toBe('id.show');
    expect(routeName('parameterBar'))->toBe('id.store');
    expect(routeName('parameterBaz'))->toBe('id.update');
    expect(routeName('parameterBaq'))->toBe('id.destroy');
    expect(routeName('parameterBaw'))->toBe('id.patch');
    expect(routeName('parameterBae'))->toBe('id.options');

    expect(routeName('parameterSimpleFoo'))->toBe('parameters.simple.show');
    expect(routeName('parameterSimpleBar'))->toBe('parameters.simple.store');
    expect(routeName('parameterSimpleBaz'))->toBe('parameters.simple.update');
    expect(routeName('parameterSimpleBaq'))->toBe('parameters.simple.destroy');
    expect(routeName('parameterSimpleBaw'))->toBe('parameters.simple.patch');
    expect(routeName('parameterSimpleBae'))->toBe('parameters.simple.options');
})->with('cache routes');
