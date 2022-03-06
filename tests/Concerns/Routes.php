<?php

declare(strict_types=1);

namespace Tests\Concerns;

use Illuminate\Routing\Router;
use Tests\Http\Controllers\ApiResourceController;
use Tests\Http\Controllers\Controller;
use Tests\Http\Controllers\RestorableResourceController;
use Tests\Http\Controllers\WebResourceController;

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

        $router->get('simple/edit/{id}', [Controller::class, 'simpleEditFoo']);
        $router->post('simple/edit/{id}', [Controller::class, 'simpleEditBar']);
        $router->put('simple/edit/{id}', [Controller::class, 'simpleEditBaz']);
        $router->delete('simple/edit/{id}', [Controller::class, 'simpleEditBaq']);
        $router->patch('simple/edit/{id}', [Controller::class, 'simpleEditBaw']);
        $router->options('simple/edit/{id}', [Controller::class, 'simpleEditBae']);

        $router->get('simple/update/{id}', [Controller::class, 'simpleUpdateFoo']);
        $router->post('simple/update/{id}', [Controller::class, 'simpleUpdateBar']);
        $router->put('simple/update/{id}', [Controller::class, 'simpleUpdateBaz']);
        $router->delete('simple/update/{id}', [Controller::class, 'simpleUpdateBaq']);
        $router->patch('simple/update/{id}', [Controller::class, 'simpleUpdateBaw']);
        $router->options('simple/update/{id}', [Controller::class, 'simpleUpdateBae']);

        $router->get('simple/destroy/{id}', [Controller::class, 'simpleDestroyFoo']);
        $router->post('simple/destroy/{id}', [Controller::class, 'simpleDestroyBar']);
        $router->put('simple/destroy/{id}', [Controller::class, 'simpleDestroyBaz']);
        $router->delete('simple/destroy/{id}', [Controller::class, 'simpleDestroyBaq']);
        $router->patch('simple/destroy/{id}', [Controller::class, 'simpleDestroyBaw']);
        $router->options('simple/destroy/{id}', [Controller::class, 'simpleDestroyBae']);
    }

    protected function collisionRoutes(Router $router): void
    {
        $router->get('collision/get/{id}', [Controller::class, 'collisionGet']);
        $router->post('collision/post/{id}', [Controller::class, 'collisionPost']);
        $router->put('collision/put/{id}', [Controller::class, 'collisionPut']);
        $router->delete('collision/delete/{id}', [Controller::class, 'collisionDelete']);
        $router->patch('collision/patch/{id}', [Controller::class, 'collisionPatch']);
        $router->options('collision/options/{id}', [Controller::class, 'collisionOptions']);
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
        $router->get('mIxEd-CaSe/{id}/case', [Controller::class, 'caseFoo']);
        $router->post('mIxEd-CaSe/{id}/case', [Controller::class, 'caseBar']);
        $router->put('mIxEd-CaSe/{id}/case', [Controller::class, 'caseBaz']);
        $router->delete('mIxEd-CaSe/{id}/case', [Controller::class, 'caseBaq']);
        $router->patch('mIxEd-CaSe/{id}/case', [Controller::class, 'caseBaw']);
        $router->options('mIxEd-CaSe/{id}/case', [Controller::class, 'caseBae']);
    }

    protected function resourceRoutes(Router $router): void
    {
        $router->resource('resources/photos', WebResourceController::class);

        $router->apiResource('resources/comments', ApiResourceController::class);

        $router->apiRestorableResource('resources/pages', RestorableResourceController::class);
    }

    protected function protectedRoutes(Router $router): void
    {
        $router->get('routes', [Controller::class, 'prettyRoutesList'])->name('pretty-routes.list');
        $router->get('routes', [Controller::class, 'prettyRoutesClear'])->name('pretty-routes.clear');

        $router->get('telescope/{view?}', [Controller::class, 'telescopeShow'])->name('telescope');
        $router->get('telescope/telescope-api/views/{telescopeEntryId}', [Controller::class, 'telescopeViewsShow']);
    }
}
