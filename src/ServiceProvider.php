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

namespace DragonCode\LaravelRouteNames;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->publishConfig();
    }

    public function register(): void
    {
        $this->registerConfig();
    }

    protected function publishConfig(): void
    {
        $this->publishes([
            __DIR__ . '/../config/route.php' => config_path('route.php'),
        ], 'config');
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/route.php',
            'route'
        );
    }
}
