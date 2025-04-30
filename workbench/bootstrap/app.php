<?php

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
