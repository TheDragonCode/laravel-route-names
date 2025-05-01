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
    expect(routeName('foo'))->toBe('index');
    expect(routeName('bar'))->toBe('store');
    expect(routeName('baz'))->toBe('update');
    expect(routeName('baq'))->toBe('destroy');
    expect(routeName('baw'))->toBe('patch');
    expect(routeName('bae'))->toBe('options');
});

it('simple', function () {
    expect(routeName('simpleFoo'))->toBe('simple.index');
    expect(routeName('simpleBar'))->toBe('simple.store');
    expect(routeName('simpleBaz'))->toBe('simple.update');
    expect(routeName('simpleBaq'))->toBe('simple.destroy');
    expect(routeName('simpleBaw'))->toBe('simple.patch');
    expect(routeName('simpleBae'))->toBe('simple.options');
});

it('edit', function () {
    expect(routeName('simpleEditFoo'))->toBe('simple.edit.show');
    expect(routeName('simpleEditBar'))->toBe('simple.edit.store');
    expect(routeName('simpleEditBaz'))->toBe('simple.edit.update');
    expect(routeName('simpleEditBaq'))->toBe('simple.edit.destroy');
    expect(routeName('simpleEditBaw'))->toBe('simple.edit.patch');
    expect(routeName('simpleEditBae'))->toBe('simple.edit.options');
});

it('update', function () {
    expect(routeName('simpleUpdateFoo'))->toBe('simple.update.show');
    expect(routeName('simpleUpdateBar'))->toBe('simple.update.store');
    expect(routeName('simpleUpdateBaz'))->toBe('simple.update');
    expect(routeName('simpleUpdateBaq'))->toBe('simple.update.destroy');
    expect(routeName('simpleUpdateBaw'))->toBe('simple.update.patch');
    expect(routeName('simpleUpdateBae'))->toBe('simple.update.options');
});

it('destroy', function () {
    expect(routeName('simpleDestroyFoo'))->toBe('simple.destroy.show');
    expect(routeName('simpleDestroyBar'))->toBe('simple.destroy.store');
    expect(routeName('simpleDestroyBaz'))->toBe('simple.destroy.update');
    expect(routeName('simpleDestroyBaq'))->toBe('simple.destroy');
    expect(routeName('simpleDestroyBaw'))->toBe('simple.destroy.patch');
    expect(routeName('simpleDestroyBae'))->toBe('simple.destroy.options');
});
