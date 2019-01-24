<?php

/*
|----------------------------------------------------
| Middleware                                        |
|----------------------------------------------------
*/

    $app->add(new \App\Http\Middlewares\AccessLogMiddleware($container));
    // $app->add(new \App\Http\Middlewates\AccessAuthMiddleware($container));
