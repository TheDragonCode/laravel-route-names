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
        Route::get('mIxEd-CaSe/{id}/case', 'caseFoo');
        Route::post('mIxEd-CaSe/{id}/case', 'caseBar');
        Route::put('mIxEd-CaSe/{id}/case', 'caseBaz');
        Route::delete('mIxEd-CaSe/{id}/case', 'caseBaq');
        Route::patch('mIxEd-CaSe/{id}/case', 'caseBaw');
        Route::options('mIxEd-CaSe/{id}/case', 'caseBae');
    });
