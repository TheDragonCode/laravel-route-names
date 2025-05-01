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

    expect(routeName('collisionGet'))->toBe('collision.get.show');
    expect(routeName('collisionPost'))->toBe('collision.post.store');
    expect(routeName('collisionPut'))->toBe('collision.put.update');
    expect(routeName('collisionDelete'))->toBe('collision.delete.destroy');
    expect(routeName('collisionPatch'))->toBe('collision.patch.patch');
    expect(routeName('collisionOptions'))->toBe('collision.options.options');
})->with('cache routes');
