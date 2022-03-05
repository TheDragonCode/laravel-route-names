<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class MixedCaseTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('mixed-case.case.index', $this->getRouteName('caseFoo'));
        $this->assertSame('mixed-case.case.store', $this->getRouteName('caseBar'));
        $this->assertSame('mixed-case.case.update', $this->getRouteName('caseBaz'));
        $this->assertSame('mixed-case.case.destroy', $this->getRouteName('caseBaq'));
        $this->assertSame('mixed-case.case.patch', $this->getRouteName('caseBaw'));
        $this->assertSame('mixed-case.case.options', $this->getRouteName('caseBae'));
    }
}
