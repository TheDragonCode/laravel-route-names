<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames;

use DragonCode\LaravelRouteNames\Providers\RoutingServiceProvider;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Foundation\Application as BaseApplication;
use Illuminate\Log\Context\ContextServiceProvider;
use Illuminate\Log\LogServiceProvider;

class Application extends BaseApplication
{
    protected function registerBaseServiceProviders(): void
    {
        $this->register(new EventServiceProvider($this));
        $this->register(new LogServiceProvider($this));
        $this->register(new RoutingServiceProvider($this));

        if (class_exists(ContextServiceProvider::class)) {
            $this->register(new ContextServiceProvider($this));
        }
    }
}
