<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Workbench\App\Http\Controllers\SomeController;

abstract class TestCase extends BaseTestCase
{
    public static function applicationBasePathUsingWorkbench(): ?string
    {
        return __DIR__ . '/../workbench';
    }

    protected function getRouteName(string $action, string $controller = SomeController::class): string
    {
        return Route::getRoutes()->getByAction($controller . '@' . $action)->getName();
    }
}
