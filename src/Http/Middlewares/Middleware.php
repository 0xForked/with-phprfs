<?php

namespace App\Http\Middlewares;

class Middleware
{

    protected $container;

    public function __construct($container) {

        $this->container = $container;

    }

}