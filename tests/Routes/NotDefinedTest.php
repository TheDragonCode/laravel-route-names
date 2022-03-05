<?php

declare(strict_types=1);

namespace Tests\Routes;

use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Tests\TestCase;

class NotDefinedTest extends TestCase
{
    public function testName()
    {
        $this->expectException(RouteNotFoundException::class);
        $this->expectExceptionMessage('Route [my_pages] not defined.');

        route('my_pages');
    }
}
