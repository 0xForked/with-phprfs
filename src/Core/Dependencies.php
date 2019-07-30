<?php

use Illuminate\Database\Capsule\Manager as Eloquent;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Monolog\Handler\StreamHandler;

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
        $logger->pushHandler(new StreamHandler($log_setting['path'], $log_setting['level']));
        return $logger;
    };


/*
|----------------------------------------------------
| Mailer                                            |
|----------------------------------------------------
*/
    $container['mailer'] = function ($container) {
        $mailer = new PHPMailer();
        //$mailer->SMTPDebug = 3;
        $mailer->isSMTP();
        $mailer->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //$mailer->Host = 'tsl://smtp.gmail.com:587';
        $mailer->Host = 'ssl://smtp.gmail.com:465';
        $mailer->SMTPAuth = true;
        $mailer->Username = env('MAIL_ADR', 'no-reply@fpslogic.com');
        $mailer->Password = env('MAIL_PWD', 'password');
        $mailer->setFrom('no-reply@fpslogic.com', 'fpslogic');
        $mailer->isHtml(true);
        return new \App\Core\Mailer\Mail($container->view, $mailer);
    };


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
                "service" => "with-phprfs"
            ], 404);
        };
    };
