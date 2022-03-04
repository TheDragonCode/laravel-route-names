<?php

declare(strict_types=1);

namespace Tests\Foundation;

use DragonCode\LaravelRouteNames\ServiceProvider;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Foundation\Application as BaseApplication;
use Illuminate\Log\LogServiceProvider;

class Application extends BaseApplication
{
    protected function registerBaseServiceProviders()
    {
        $this->register(new EventServiceProvider($this));
        $this->register(new LogServiceProvider($this));
        $this->register(new ServiceProvider($this));
    }
}
