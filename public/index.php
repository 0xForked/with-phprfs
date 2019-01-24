<?php

    if (!function_exists('base_path')) {
        /**
         * Get the path to the base folder
         *
         * @return string
         */
        function base_path()
        {
            return dirname(__DIR__);
        }
    }

/*
|-----------------------------------------------------
| Register Bootstrap File
|-----------------------------------------------------
*/
    require_once  __DIR__ . ("/../src/Core/App.php");

/*
|-----------------------------------------------------
| Run This Application
|-----------------------------------------------------
*/
    $app->run();
