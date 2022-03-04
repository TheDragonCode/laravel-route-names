<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class BasicTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('index', $this->getRouteName('foo'));
        $this->assertSame('store', $this->getRouteName('bar'));
        $this->assertSame('update', $this->getRouteName('baz'));
        $this->assertSame('destroy', $this->getRouteName('baq'));
        $this->assertSame('patch', $this->getRouteName('baw'));
        $this->assertSame('options', $this->getRouteName('bae'));

        $this->assertSame('simple.index', $this->getRouteName('simpleFoo'));
        $this->assertSame('simple.store', $this->getRouteName('simpleBar'));
        $this->assertSame('simple.update', $this->getRouteName('simpleBaz'));
        $this->assertSame('simple.destroy', $this->getRouteName('simpleBaq'));
        $this->assertSame('simple.patch', $this->getRouteName('simpleBaw'));
        $this->assertSame('simple.options', $this->getRouteName('simpleBae'));
    }
}
