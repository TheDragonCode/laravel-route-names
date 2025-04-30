<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Workbench\App\Http\Controllers\SomeController;

Route::controller(SomeController::class)
    ->group(static function () {
        Route::get('routes', 'prettyRoutesList')->name('pretty-routes.list');
        Route::get('routes/clear', 'prettyRoutesClear')->name('pretty-routes.clear');

        Route::get('telescope/{view?}', 'telescopeShow')->name('telescope');
        Route::get('telescope/telescope-api/views/{telescopeEntryId}', 'telescopeViewsShow');
    });
