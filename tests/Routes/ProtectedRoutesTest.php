<?php

declare(strict_types=1);

namespace Tests\Routes;

use Tests\TestCase;

class ProtectedRoutesTest extends TestCase
{
    public function testWeb(): void
    {
        $this->assertSame('pretty-routes.list', $this->getRouteName('prettyRoutesList'));
        $this->assertSame('pretty-routes.clear', $this->getRouteName('prettyRoutesClear'));

        $this->assertSame('telescope', $this->getRouteName('telescopeShow'));
        $this->assertSame('telescope.telescope-api.views.show', $this->getRouteName('telescopeViewsShow'));
    }
}
