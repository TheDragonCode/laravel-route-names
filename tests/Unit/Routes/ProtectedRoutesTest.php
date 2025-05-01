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

it('pretty routes', function () {
    expect(routeName('prettyRoutesList'))->toBe('pretty-routes.list');
    expect(routeName('prettyRoutesClear'))->toBe('pretty-routes.clear');
});

it('telescope', function () {
    expect(routeName('telescopeShow'))->toBe('telescope');
    expect(routeName('telescopeViewsShow'))->toBe('telescope.telescope-api.views.show');
});
