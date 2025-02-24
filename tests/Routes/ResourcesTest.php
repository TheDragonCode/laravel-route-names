<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\Http\Controllers\ApiResourceController;
use Tests\Http\Controllers\WebResourceController;
use Tests\TestCase;

class ResourcesTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('api.resources.photos.index', $this->getRouteName('index', WebResourceController::class));
        $this->assertSame('api.resources.photos.create', $this->getRouteName('create', WebResourceController::class));
        $this->assertSame('api.resources.photos.store', $this->getRouteName('store', WebResourceController::class));
        $this->assertSame('api.resources.photos.show', $this->getRouteName('show', WebResourceController::class));
        $this->assertSame('api.resources.photos.edit', $this->getRouteName('edit', WebResourceController::class));
        $this->assertSame('api.resources.photos.update', $this->getRouteName('update', WebResourceController::class));
        $this->assertSame('api.resources.photos.destroy', $this->getRouteName('destroy', WebResourceController::class));
    }

    public function testApi(): void
    {
        $this->assertSame('api.resources.comments.index', $this->getRouteName('index', ApiResourceController::class));
        $this->assertSame('api.resources.comments.store', $this->getRouteName('store', ApiResourceController::class));
        $this->assertSame('api.resources.comments.show', $this->getRouteName('show', ApiResourceController::class));
        $this->assertSame('api.resources.comments.update', $this->getRouteName('update', ApiResourceController::class));
        $this->assertSame('api.resources.comments.destroy', $this->getRouteName('destroy', ApiResourceController::class));
    }
}
