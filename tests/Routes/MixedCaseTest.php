<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class MixedCaseTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('mixed_case.index', $this->getRouteName('caseFoo'));
        $this->assertSame('mixed_case.store', $this->getRouteName('caseBar'));
        $this->assertSame('mixed_case.update', $this->getRouteName('caseBaz'));
        $this->assertSame('mixed_case.destroy', $this->getRouteName('caseBaq'));
        $this->assertSame('mixed_case.patch', $this->getRouteName('caseBaw'));
        $this->assertSame('mixed_case.options', $this->getRouteName('caseBae'));
    }
}
