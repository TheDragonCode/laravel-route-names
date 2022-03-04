<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class WithParametersTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('index', $this->getRouteName('parameterFoo'));
        $this->assertSame('store', $this->getRouteName('parameterBar'));
        $this->assertSame('update', $this->getRouteName('parameterBaz'));
        $this->assertSame('destroy', $this->getRouteName('parameterBaq'));
        $this->assertSame('patch', $this->getRouteName('parameterBaw'));
        $this->assertSame('options', $this->getRouteName('parameterBae'));

        $this->assertSame('parameters.simple.index', $this->getRouteName('parameterSimpleFoo'));
        $this->assertSame('parameters.simple.store', $this->getRouteName('parameterSimpleBar'));
        $this->assertSame('parameters.simple.update', $this->getRouteName('parameterSimpleBaz'));
        $this->assertSame('parameters.simple.destroy', $this->getRouteName('parameterSimpleBaq'));
        $this->assertSame('parameters.simple.patch', $this->getRouteName('parameterSimpleBaw'));
        $this->assertSame('parameters.simple.options', $this->getRouteName('parameterSimpleBae'));
    }
}
