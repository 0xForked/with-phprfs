<?php

/*
|----------------------------------------------------
| Routing sytem                                      |
|----------------------------------------------------
*/


    $app->get('/', function($request, $response) {
        return $response->withHeader('Content-Type', 'text/plain')->write('Hello from product-service');
    });

    $app->get('/ping', function($request, $response) {
        return $response->withHeader('Content-Type', 'text/plain')->write('PONG');
    });