<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;
use Workbench\App\Http\Controllers\ApiController;
use Workbench\App\Http\Controllers\WebController;

class ResourcesTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('api.resources.photos.index', $this->getRouteName('index', WebController::class));
        $this->assertSame('api.resources.photos.create', $this->getRouteName('create', WebController::class));
        $this->assertSame('api.resources.photos.store', $this->getRouteName('store', WebController::class));
        $this->assertSame('api.resources.photos.show', $this->getRouteName('show', WebController::class));
        $this->assertSame('api.resources.photos.edit', $this->getRouteName('edit', WebController::class));
        $this->assertSame('api.resources.photos.update', $this->getRouteName('update', WebController::class));
        $this->assertSame('api.resources.photos.destroy', $this->getRouteName('destroy', WebController::class));
    }

    public function testApi(): void
    {
        $this->assertSame('api.resources.comments.index', $this->getRouteName('index', ApiController::class));
        $this->assertSame('api.resources.comments.store', $this->getRouteName('store', ApiController::class));
        $this->assertSame('api.resources.comments.show', $this->getRouteName('show', ApiController::class));
        $this->assertSame('api.resources.comments.update', $this->getRouteName('update', ApiController::class));
        $this->assertSame('api.resources.comments.destroy', $this->getRouteName('destroy', ApiController::class));
    }
}
