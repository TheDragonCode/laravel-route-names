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

use DragonCode\LaravelRouteNames\Application;

return Application::configure(basePath: dirname(__DIR__))
    ->withExceptions()
    ->withMiddleware()
    ->withRouting(
        web: [
            __DIR__ . '/../routes/basic.php',
            __DIR__ . '/../routes/collision.php',
            __DIR__ . '/../routes/extended.php',
            __DIR__ . '/../routes/mixed_case.php',
            __DIR__ . '/../routes/parameters.php',
            __DIR__ . '/../routes/protected.php',
        ],
        api: __DIR__ . '/../routes/api.php',
    )
    ->create();
