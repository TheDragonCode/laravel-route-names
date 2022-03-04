<?php

declare(strict_types=1);

namespace Tests\Concerns;

use Illuminate\Routing\Router;
use Tests\Http\Controllers\Controller;

trait Routes
{
    protected function basicRoutes(Router $router): void
    {
        $router->get('/', [Controller::class, 'foo']);
        $router->post('/', [Controller::class, 'bar']);
        $router->put('/', [Controller::class, 'baz']);
        $router->delete('/', [Controller::class, 'baq']);
        $router->patch('/', [Controller::class, 'baw']);
        $router->options('/', [Controller::class, 'bae']);

        $router->get('simple/', [Controller::class, 'simpleFoo']);
        $router->post('simple/', [Controller::class, 'simpleBar']);
        $router->put('simple/', [Controller::class, 'simpleBaz']);
        $router->delete('simple/', [Controller::class, 'simpleBaq']);
        $router->patch('simple/', [Controller::class, 'simpleBaw']);
        $router->options('simple/', [Controller::class, 'simpleBae']);
    }

    protected function routesWithParameters(Router $router): void
    {
        $router->get('{id}', [Controller::class, 'parameterFoo']);
        $router->post('{id}', [Controller::class, 'parameterBar']);
        $router->put('{id}', [Controller::class, 'parameterBaz']);
        $router->delete('{id}', [Controller::class, 'parameterBaq']);
        $router->patch('{id}', [Controller::class, 'parameterBaw']);
        $router->options('{id}', [Controller::class, 'parameterBae']);

        $router->get('parameters/simple/{id}', [Controller::class, 'parameterSimpleFoo']);
        $router->post('parameters/simple/{id}', [Controller::class, 'parameterSimpleBar']);
        $router->put('parameters/simple/{id}', [Controller::class, 'parameterSimpleBaz']);
        $router->delete('parameters/simple/{id}', [Controller::class, 'parameterSimpleBaq']);
        $router->patch('parameters/simple/{id}', [Controller::class, 'parameterSimpleBaw']);
        $router->options('parameters/simple/{id}', [Controller::class, 'parameterSimpleBae']);
    }

    protected function routesWithMultiParameters(Router $router): void
    {
        $router->get('multi/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiFoo']);
        $router->post('multi/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiBar']);
        $router->put('multi/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiBaz']);
        $router->delete('multi/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiBaq']);
        $router->patch('multi/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiBaw']);
        $router->options('multi/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiBae']);

        $router->get('multi/simple/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiEndWithFoo']);
        $router->post('multi/simple/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiEndWithBar']);
        $router->put('multi/simple/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiEndWithBaz']);
        $router->delete('multi/simple/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiEndWithBaq']);
        $router->patch('multi/simple/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiEndWithBaw']);
        $router->options('multi/simple/{category}/foo/bar/{id}/qwerty', [Controller::class, 'multiEndWithBae']);
    }

    protected function mixedCases(Router $router): void
    {
        $router->get('mIxEd-CaSe/{id}', [Controller::class, 'caseFoo']);
        $router->post('mIxEd-CaSe/{id}', [Controller::class, 'caseBar']);
        $router->put('mIxEd-CaSe/{id}', [Controller::class, 'caseBaz']);
        $router->delete('mIxEd-CaSe/{id}', [Controller::class, 'caseBaq']);
        $router->patch('mIxEd-CaSe/{id}', [Controller::class, 'caseBaw']);
        $router->options('mIxEd-CaSe/{id}', [Controller::class, 'caseBae']);
    }

    protected function resourceRoutes(Router $router): void
    {
        $router->resource('resources/photos', Controller::class);

        $router->apiResource('resources/comments', Controller::class);
    }
}
