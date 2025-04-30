<?php

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
