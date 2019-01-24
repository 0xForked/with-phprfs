<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index($request, $response)
    {
        return $response->withJson([
            "code" => 200,
            "message" => "OK",
            "service" => "Category"
        ], 200);
    }

}