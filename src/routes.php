<?php

/*
|----------------------------------------------------
| Routing sytem                                      |
|----------------------------------------------------
*/


    $app->get('/', function($request, $response) {
        return $response->withHeader('Content-Type', 'text/plain')->write('Hello from with-phprfs');
    });

    $app->get('/ping', function($request, $response) {
        return $response->withHeader('Content-Type', 'text/plain')->write('PONG');
    });

    $app->get('/test', 'ExampleController:index');