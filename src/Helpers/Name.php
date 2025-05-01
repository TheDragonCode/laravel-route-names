<?php

/**
 * This file is part of the "dragon-code/laravel-route-names" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2025 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/TheDragonCode/laravel-route-names
 */

declare(strict_types=1);

namespace DragonCode\LaravelRouteNames\Helpers;

use DragonCode\LaravelRouteNames\Facades\Action;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Name
{
    public function get(array $methods, string $uri): string
    {
        $resolved = $this->resolve($uri);
        $suffix   = $this->getMethodSuffix($methods, $uri);

        return $resolved
            ->when($this->doesntSame($resolved, $suffix), static fn (Collection $items) => $items->push($suffix))
            ->implode('.');
    }

    protected function resolve(string $uri): Collection
    {
        return Str::of($uri)
            ->rtrim(' /')
            ->explode('/')
            ->filter(fn (string $value) => $this->has($value))
            ->map(fn (string $value) => $this->map($value));
    }

    protected function getMethodSuffix(array $methods, string $uri): string
    {
        return Action::get($methods, $uri);
    }

    protected function has(string $value): bool
    {
        return ! empty($value) && ! Str::contains($value, '{');
    }

    protected function map(string $value): string
    {
        return (string) Str::of($value)->lower()->kebab();
    }

    protected function doesntSame(Collection $haystack, string $needle): bool
    {
        return $needle !== $haystack->last();
    }
}
