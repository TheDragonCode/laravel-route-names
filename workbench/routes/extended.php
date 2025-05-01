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

use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\SomeController;

Route::controller(SomeController::class)
    ->group(static function () {
        Route::get('api/v1/extended/', 'extendedFoo');
        Route::post('api/v1/extended/', 'extendedBar');
        Route::put('api/v1/extended/', 'extendedBaz');
        Route::delete('api/v1/extended/', 'extendedBaq');
        Route::patch('api/v1/extended/', 'extendedBaw');
        Route::options('api/v1/extended/', 'extendedBae');
    });
