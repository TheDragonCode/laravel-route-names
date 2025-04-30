<?php

declare(strict_types=1);

/*
 * This file is part of the "dragon-code/support" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/TheDragonCode/support
 */

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
