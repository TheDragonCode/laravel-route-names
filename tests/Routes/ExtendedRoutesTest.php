<?php

declare(strict_types=1);

namespace Tests\Routes;

use DragonCode\LaravelRouteNames\Routing\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Tests\Extenders\RouteNameExtender;
use Tests\TestCase;

final class ExtendedRoutesTest extends TestCase
{
    public function testWebDefault(): void
    {
        $this->assertSame('api.v1.extended.index', $this->getRouteName('extendedFoo'));
        $this->assertSame('api.v1.extended.store', $this->getRouteName('extendedBar'));
        $this->assertSame('api.v1.extended.update', $this->getRouteName('extendedBaz'));
        $this->assertSame('api.v1.extended.destroy', $this->getRouteName('extendedBaq'));
        $this->assertSame('api.v1.extended.patch', $this->getRouteName('extendedBaw'));
        $this->assertSame('api.v1.extended.options', $this->getRouteName('extendedBae'));
    }

    public function testWebCallback(): void
    {
        Config::set(
            'route.names.extender',
            static function (string $name, Route $route): string {
                return Str::of($route->uri())->startsWith('api/v1')
                    ? Str::replaceFirst('api.v1', 'api', $name)
                    : $name;
            }
        );

        $this->assertSame('api.extended.index', $this->getRouteName('extendedFoo'));
        $this->assertSame('api.extended.store', $this->getRouteName('extendedBar'));
        $this->assertSame('api.extended.update', $this->getRouteName('extendedBaz'));
        $this->assertSame('api.extended.destroy', $this->getRouteName('extendedBaq'));
        $this->assertSame('api.extended.patch', $this->getRouteName('extendedBaw'));
        $this->assertSame('api.extended.options', $this->getRouteName('extendedBae'));
    }

    public function testWebSpecialCallback(): void
    {
        Config::set('route.names.extender', RouteNameExtender::class);

        $this->assertSame('api.v2.extended.index', $this->getRouteName('extendedFoo'));
        $this->assertSame('api.v2.extended.store', $this->getRouteName('extendedBar'));
        $this->assertSame('api.v2.extended.update', $this->getRouteName('extendedBaz'));
        $this->assertSame('api.v2.extended.destroy', $this->getRouteName('extendedBaq'));
        $this->assertSame('api.v2.extended.patch', $this->getRouteName('extendedBaw'));
        $this->assertSame('api.v2.extended.options', $this->getRouteName('extendedBae'));
    }
}
