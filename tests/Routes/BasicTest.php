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

        $this->assertSame('simple.edit.show', $this->getRouteName('simpleEditFoo'));
        $this->assertSame('simple.edit.store', $this->getRouteName('simpleEditBar'));
        $this->assertSame('simple.edit.update', $this->getRouteName('simpleEditBaz'));
        $this->assertSame('simple.edit.destroy', $this->getRouteName('simpleEditBaq'));
        $this->assertSame('simple.edit.patch', $this->getRouteName('simpleEditBaw'));
        $this->assertSame('simple.edit.options', $this->getRouteName('simpleEditBae'));

        $this->assertSame('simple.update.show', $this->getRouteName('simpleUpdateFoo'));
        $this->assertSame('simple.update.store', $this->getRouteName('simpleUpdateBar'));
        $this->assertSame('simple.update', $this->getRouteName('simpleUpdateBaz'));
        $this->assertSame('simple.update.destroy', $this->getRouteName('simpleUpdateBaq'));
        $this->assertSame('simple.update.patch', $this->getRouteName('simpleUpdateBaw'));
        $this->assertSame('simple.update.options', $this->getRouteName('simpleUpdateBae'));

        $this->assertSame('simple.destroy.show', $this->getRouteName('simpleDestroyFoo'));
        $this->assertSame('simple.destroy.store', $this->getRouteName('simpleDestroyBar'));
        $this->assertSame('simple.destroy.update', $this->getRouteName('simpleDestroyBaz'));
        $this->assertSame('simple.destroy', $this->getRouteName('simpleDestroyBaq'));
        $this->assertSame('simple.destroy.patch', $this->getRouteName('simpleDestroyBaw'));
        $this->assertSame('simple.destroy.options', $this->getRouteName('simpleDestroyBae'));
    }
}
