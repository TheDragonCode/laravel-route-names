<?php

use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\ApiController;
use Workbench\App\Http\Controllers\WebController;

Route::resource('resources/photos', WebController::class);
Route::apiResource('resources/comments', ApiController::class);
