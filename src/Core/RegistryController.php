<?php

/*
|----------------------------------------------------
| Controller                                        |
|----------------------------------------------------
*/

    $container['BookController'] = function ($container) {
        return new \App\Http\Controllers\BookController($container);
    };

    $container['CategoryController'] = function ($container) {
        return new \App\Http\Controllers\CategoryController($container);
    };
