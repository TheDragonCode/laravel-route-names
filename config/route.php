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

return [
    /*
    |--------------------------------------------------------------------------
    | Names
    |--------------------------------------------------------------------------
    |
    | This option determines the handling of route names.
    |
    */

    'names' => [
        /*
        |--------------------------------------------------------------------------
        | Exclude Names
        |--------------------------------------------------------------------------
        |
        | This option specifies the names of the routes that will be excluded
        | from the conversion.
        |
        */

        'exclude' => [
            '__clockwork*',
            '_debugbar*',
            '_ignition*',
            'horizon*',
            'pretty-routes*',
            'sanctum*',
            'telescope*',
        ],

        /*
        |--------------------------------------------------------------------------
        | Extender
        |--------------------------------------------------------------------------
        |
        | This option specifies the callback that will be used to extend route names.
        |
        */

        'extender' => null,
    ],
];
