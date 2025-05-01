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

it('default', function () {
    expect(routeName('parameterFoo'))->toBe('show');
    expect(routeName('parameterBar'))->toBe('store');
    expect(routeName('parameterBaz'))->toBe('update');
    expect(routeName('parameterBaq'))->toBe('destroy');
    expect(routeName('parameterBaw'))->toBe('patch');
    expect(routeName('parameterBae'))->toBe('options');
});

it('parameters', function () {
    expect(routeName('parameterSimpleFoo'))->toBe('parameters.simple.show');
    expect(routeName('parameterSimpleBar'))->toBe('parameters.simple.store');
    expect(routeName('parameterSimpleBaz'))->toBe('parameters.simple.update');
    expect(routeName('parameterSimpleBaq'))->toBe('parameters.simple.destroy');
    expect(routeName('parameterSimpleBaw'))->toBe('parameters.simple.patch');
    expect(routeName('parameterSimpleBae'))->toBe('parameters.simple.options');
});
