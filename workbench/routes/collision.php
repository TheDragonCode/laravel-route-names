<?php

use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\SomeController;

Route::controller(SomeController::class)
    ->group(static function () {
        Route::get('collision/get/{id}', 'collisionGet');
        Route::post('collision/post/{id}', 'collisionPost');
        Route::put('collision/put/{id}', 'collisionPut');
        Route::delete('collision/delete/{id}', 'collisionDelete');
        Route::patch('collision/patch/{id}', 'collisionPatch');
        Route::options('collision/options/{id}', 'collisionOptions');
    });
