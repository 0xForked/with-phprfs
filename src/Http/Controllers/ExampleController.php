<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ExampleRepository;

class ExampleController extends Controller
{

    use ExampleRepository;

    public function index($request, $response)
    {
        return $response->withJson([
            "code" => 200,
            "message" => "OK",
            "service" => $this->test()
        ], 200);
    }

    public function show($request, $response) { }

    public function create($request, $response) { }

    public function store($request, $response) { }

    public function edit($request, $response) { }

    public function update($request, $response) { }

    public function destroy($request, $response) { }

}