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
    expect(routeName('caseFoo'))->toBe('mixed-case.case.index');
    expect(routeName('caseBar'))->toBe('mixed-case.case.store');
    expect(routeName('caseBaz'))->toBe('mixed-case.case.update');
    expect(routeName('caseBaq'))->toBe('mixed-case.case.destroy');
    expect(routeName('caseBaw'))->toBe('mixed-case.case.patch');
    expect(routeName('caseBae'))->toBe('mixed-case.case.options');
});
