<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class ResourcesTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('api.resources.photos.index', $this->getRouteName('foo'));
        $this->assertSame('api.resources.photos.create', $this->getRouteName('foo'));
        $this->assertSame('api.resources.photos.store', $this->getRouteName('foo'));
        $this->assertSame('api.resources.photos.show', $this->getRouteName('foo'));
        $this->assertSame('api.resources.photos.edit', $this->getRouteName('foo'));
        $this->assertSame('api.resources.photos.update', $this->getRouteName('foo'));
        $this->assertSame('api.resources.photos.destroy', $this->getRouteName('foo'));
    }

    public function testApi(): void
    {
        $this->assertSame('api.resources.comments.index', $this->getRouteName('foo'));
        $this->assertSame('api.resources.comments.create', $this->getRouteName('foo'));
        $this->assertSame('api.resources.comments.store', $this->getRouteName('foo'));
        $this->assertSame('api.resources.comments.show', $this->getRouteName('foo'));
        $this->assertSame('api.resources.comments.edit', $this->getRouteName('foo'));
        $this->assertSame('api.resources.comments.update', $this->getRouteName('foo'));
        $this->assertSame('api.resources.comments.destroy', $this->getRouteName('foo'));
    }
}
