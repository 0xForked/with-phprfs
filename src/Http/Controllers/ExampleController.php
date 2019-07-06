<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ExampleRepository;

class ExampleController extends Controller
{

    protected $repository;

    public function __construct(ExampleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($request, $response)
    {
        return $response->withJson([
            "code" => 200,
            "message" => "OK",
            "service" => "Category"
        ], 200);
    }

    public function show($request, $response)
    {

    }

    public function create($request, $response)
    {

    }

    public function store($request, $response)
    {

    }

    public function edit($request, $response)
    {

    }

    public function update($request, $response)
    {

    }

    public function destroy($request, $response)
    {

    }

}