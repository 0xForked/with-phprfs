<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller
{

    public function index($request, $response)
    {
        return $response->withJson([
            "code" => 200,
            "message" => "OK",
            "service" => "Product"
        ], 200);
    }

}