<?php

use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\SomeController;

Route::controller(SomeController::class)
    ->group(static function () {
        Route::get('{id}', 'parameterFoo');
        Route::post('{id}', 'parameterBar');
        Route::put('{id}', 'parameterBaz');
        Route::delete('{id}', 'parameterBaq');
        Route::patch('{id}', 'parameterBaw');
        Route::options('{id}', 'parameterBae');

        Route::get('parameters/simple/{id}', 'parameterSimpleFoo');
        Route::post('parameters/simple/{id}', 'parameterSimpleBar');
        Route::put('parameters/simple/{id}', 'parameterSimpleBaz');
        Route::delete('parameters/simple/{id}', 'parameterSimpleBaq');
        Route::patch('parameters/simple/{id}', 'parameterSimpleBaw');
        Route::options('parameters/simple/{id}', 'parameterSimpleBae');
    });

Route::controller(SomeController::class)
    ->group(static function () {
        Route::get('multi/{category}/foo/bar/{id}/qwerty', 'multiFoo');
        Route::post('multi/{category}/foo/bar/{id}/qwerty', 'multiBar');
        Route::put('multi/{category}/foo/bar/{id}/qwerty', 'multiBaz');
        Route::delete('multi/{category}/foo/bar/{id}/qwerty', 'multiBaq');
        Route::patch('multi/{category}/foo/bar/{id}/qwerty', 'multiBaw');
        Route::options('multi/{category}/foo/bar/{id}/qwerty', 'multiBae');

        Route::get('multi/simple/{category}/foo/bar/{id}/qwerty', 'multiEndWithFoo');
        Route::post('multi/simple/{category}/foo/bar/{id}/qwerty', 'multiEndWithBar');
        Route::put('multi/simple/{category}/foo/bar/{id}/qwerty', 'multiEndWithBaz');
        Route::delete('multi/simple/{category}/foo/bar/{id}/qwerty', 'multiEndWithBaq');
        Route::patch('multi/simple/{category}/foo/bar/{id}/qwerty', 'multiEndWithBaw');
        Route::options('multi/simple/{category}/foo/bar/{id}/qwerty', 'multiEndWithBae');
    });
