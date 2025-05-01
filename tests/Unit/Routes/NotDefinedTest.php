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

use Symfony\Component\Routing\Exception\RouteNotFoundException;

it('default', function () {
    route('my_pages');
})->throws(RouteNotFoundException::class, 'Route [my_pages] not defined.');
