<?php

namespace Tests\Routes;

use Tests\TestCase;

class CollisionTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('collision.get.show', $this->getRouteName('collisionGet'));
        $this->assertSame('collision.post.store', $this->getRouteName('collisionPost'));
        $this->assertSame('collision.put.update', $this->getRouteName('collisionPut'));
        $this->assertSame('collision.delete.destroy', $this->getRouteName('collisionDelete'));
        $this->assertSame('collision.patch', $this->getRouteName('collisionPatch'));
        $this->assertSame('collision.options', $this->getRouteName('collisionOptions'));
    }
}
