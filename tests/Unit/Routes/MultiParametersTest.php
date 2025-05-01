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

    expect(routeName('multiFoo'))->toBe('multi.foo.bar.qwerty.index');
    expect(routeName('multiBar'))->toBe('multi.foo.bar.qwerty.store');
    expect(routeName('multiBaz'))->toBe('multi.foo.bar.qwerty.update');
    expect(routeName('multiBaq'))->toBe('multi.foo.bar.qwerty.destroy');
    expect(routeName('multiBaw'))->toBe('multi.foo.bar.qwerty.patch');
    expect(routeName('multiBae'))->toBe('multi.foo.bar.qwerty.options');

    expect(routeName('multiEndWithFoo'))->toBe('multi.simple.foo.bar.qwerty.index');
    expect(routeName('multiEndWithBar'))->toBe('multi.simple.foo.bar.qwerty.store');
    expect(routeName('multiEndWithBaz'))->toBe('multi.simple.foo.bar.qwerty.update');
    expect(routeName('multiEndWithBaq'))->toBe('multi.simple.foo.bar.qwerty.destroy');
    expect(routeName('multiEndWithBaw'))->toBe('multi.simple.foo.bar.qwerty.patch');
    expect(routeName('multiEndWithBae'))->toBe('multi.simple.foo.bar.qwerty.options');
})->with('cache routes');
