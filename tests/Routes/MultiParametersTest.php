<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class MultiParametersTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('multi.foo.bar.qwerty.index', $this->getRouteName('multiFoo'));
        $this->assertSame('multi.foo.bar.qwerty.store', $this->getRouteName('multiBar'));
        $this->assertSame('multi.foo.bar.qwerty.update', $this->getRouteName('multiBaz'));
        $this->assertSame('multi.foo.bar.qwerty.destroy', $this->getRouteName('multiBaq'));
        $this->assertSame('multi.foo.bar.qwerty.patch', $this->getRouteName('multiBaw'));
        $this->assertSame('multi.foo.bar.qwerty.options', $this->getRouteName('multiBae'));

        $this->assertSame('multi.simple.foo.bar.qwerty.index', $this->getRouteName('multiEndWithFoo'));
        $this->assertSame('multi.simple.foo.bar.qwerty.store', $this->getRouteName('multiEndWithBar'));
        $this->assertSame('multi.simple.foo.bar.qwerty.update', $this->getRouteName('multiEndWithBaz'));
        $this->assertSame('multi.simple.foo.bar.qwerty.destroy', $this->getRouteName('multiEndWithBaq'));
        $this->assertSame('multi.simple.foo.bar.qwerty.patch', $this->getRouteName('multiEndWithBaw'));
        $this->assertSame('multi.simple.foo.bar.qwerty.options', $this->getRouteName('multiEndWithBae'));
    }
}
