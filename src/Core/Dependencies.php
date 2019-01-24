<?php

use Illuminate\Database\Capsule\Manager as Eloquent;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Monolog\Handler\StreamHandler;
use App\Core\Helper\ImageHelper;


/*
|----------------------------------------------------
| Slim Container                                    |
|----------------------------------------------------
*/
    $container = $app->getContainer();

/*
|----------------------------------------------------
| Eloquent ORM                                      |
|----------------------------------------------------
*/
    $capsule =  new Eloquent();
    $db_setting = $container->get('settings')['db'];
    $capsule->addConnection($db_setting);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

/*
|----------------------------------------------------
| Monolog Logger                                    |
|----------------------------------------------------
*/
    $container['logger'] = function ($c) {
        $log_setting = $c->get('settings')['logger'];
        $logger = new Logger($log_setting['name']);
        $logger->pushProcessor(new UidProcessor());
        $logger->pushHandler(new StreamHandler($log_setting['path'], Logger::DEBUG));
        return $logger;
    };

/*
|----------------------------------------------------
|  Helper                                           |
|----------------------------------------------------
*/
    $container['imageHelper'] = function ($container) {
        return new ImageHelper;
    };

    $container['uploadDirectory'] = __DIR__ . '/../../public/assets/img/uploads/';


/*
|----------------------------------------------------
|  Handler                                          |
|----------------------------------------------------
*/

    $container['notFoundHandler'] = function ($container)
    {
        return function ($request, $response) use ($container)
        {
            return $response->withJson([
                "code" => 404,
                "message" => "Not Found",
                "service" => "product"
            ], 404);
        };
    };