<?php

/*
|----------------------------------------------------
| Controller                                        |
|----------------------------------------------------
*/

    $container['ExampleController'] = function ($container) {
        return new \App\Http\Controllers\ExampleController($container);
    };


/*
|----------------------------------------------------
| Middleware                                        |
|----------------------------------------------------
*/

$app->add(new \App\Http\Middlewares\AccessLogMiddleware($container));
// $app->add(new \App\Http\Middlewates\AccessAuthMiddleware($container));
