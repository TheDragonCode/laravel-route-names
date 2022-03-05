<?php

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Routing;

use DragonCode\LaravelRouteNames\Facades\Name;
use Illuminate\Routing\Route as BaseRoute;

class Route extends BaseRoute
{
    public function getName(): ?string
    {
        return Name::get($this->methods(), $this->uri());
    }
}
