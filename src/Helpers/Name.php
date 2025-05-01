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

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Name
{
    protected string $default = 'main';

    public function __construct(
        protected Action $action
    ) {}

    public function get(array $methods, string $uri): string
    {
        $resolved = $this->resolve($uri);
        $suffix   = $this->getMethodSuffix($methods, $uri);

        return $resolved
            ->when(
                fn (Collection $items) => $items->isEmpty(),
                fn (Collection $items) => $items->push($this->fallback($uri))
            )
            ->when($this->needSuffix($resolved, $suffix), static fn ($items) => $items->push($suffix))
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
        return $this->action->get($methods, $uri);
    }

    protected function has(string $value): bool
    {
        return ! empty($value) && Str::doesntContain($value, '{');
    }

    protected function map(string $value): string
    {
        return (string) Str::of($value)->lower()->kebab();
    }

    protected function needSuffix(Collection $haystack, string $needle): bool
    {
        return $haystack->count() <= 2 || $needle !== $haystack->last();
    }

    protected function fallback(string $uri): string
    {
        if (Str::startsWith($uri, '{') && Str::endsWith($uri, '}') && Str::doesntContain($uri, '/')) {
            return Str::of($uri)->after('{')->before('}')->value();
        }

        return $this->default;
    }
}
