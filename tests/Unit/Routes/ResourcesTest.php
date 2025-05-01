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

use Workbench\App\Http\Controllers\ApiController;
use Workbench\App\Http\Controllers\WebController;

it('web resources', function () {
    expect(routeName('index', WebController::class))->toBe('api.resources.photos.index');
    expect(routeName('create', WebController::class))->toBe('api.resources.photos.create');
    expect(routeName('store', WebController::class))->toBe('api.resources.photos.store');
    expect(routeName('show', WebController::class))->toBe('api.resources.photos.show');
    expect(routeName('edit', WebController::class))->toBe('api.resources.photos.edit');
    expect(routeName('update', WebController::class))->toBe('api.resources.photos.update');
    expect(routeName('destroy', WebController::class))->toBe('api.resources.photos.destroy');
});

it('api resources', function () {
    expect(routeName('index', ApiController::class))->toBe('api.resources.comments.index');
    expect(routeName('store', ApiController::class))->toBe('api.resources.comments.store');
    expect(routeName('show', ApiController::class))->toBe('api.resources.comments.show');
    expect(routeName('update', ApiController::class))->toBe('api.resources.comments.update');
    expect(routeName('destroy', ApiController::class))->toBe('api.resources.comments.destroy');
});
