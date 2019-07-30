<?php

namespace App\Repositories;

use App\Entity\Example;

trait ExampleRepository
{

    protected $example;

	public function __construct()
	{
	    $this->example = new Example;
    }

    public function test()
    {
        return "with-phprfs-{Controller-Repository-Model}-test";
    }

    public function all() { }

    public function allPaginate() { }

    public function find($id) { }

    public function findBy(Array $key, Array $value) { }

    public function insert() { }

    public function update() { }

    public function delete() { }

}
