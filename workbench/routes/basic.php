<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\SomeController;

Route::controller(SomeController::class)
    ->group(static function () {
        Route::get('/', 'foo');
        Route::post('/', 'bar');
        Route::put('/', 'baz');
        Route::delete('/', 'baq');
        Route::patch('/', 'baw');
        Route::options('/', 'bae');

        Route::get('simple/', 'simpleFoo');
        Route::post('simple/', 'simpleBar');
        Route::put('simple/', 'simpleBaz');
        Route::delete('simple/', 'simpleBaq');
        Route::patch('simple/', 'simpleBaw');
        Route::options('simple/', 'simpleBae');

        Route::get('simple/edit/{id}', 'simpleEditFoo');
        Route::post('simple/edit/{id}', 'simpleEditBar');
        Route::put('simple/edit/{id}', 'simpleEditBaz');
        Route::delete('simple/edit/{id}', 'simpleEditBaq');
        Route::patch('simple/edit/{id}', 'simpleEditBaw');
        Route::options('simple/edit/{id}', 'simpleEditBae');

        Route::get('simple/update/{id}', 'simpleUpdateFoo');
        Route::post('simple/update/{id}', 'simpleUpdateBar');
        Route::put('simple/update/{id}', 'simpleUpdateBaz');
        Route::delete('simple/update/{id}', 'simpleUpdateBaq');
        Route::patch('simple/update/{id}', 'simpleUpdateBaw');
        Route::options('simple/update/{id}', 'simpleUpdateBae');

        Route::get('simple/destroy/{id}', 'simpleDestroyFoo');
        Route::post('simple/destroy/{id}', 'simpleDestroyBar');
        Route::put('simple/destroy/{id}', 'simpleDestroyBaz');
        Route::delete('simple/destroy/{id}', 'simpleDestroyBaq');
        Route::patch('simple/destroy/{id}', 'simpleDestroyBaw');
        Route::options('simple/destroy/{id}', 'simpleDestroyBae');
    });
