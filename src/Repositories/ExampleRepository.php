<?php

namespace App\Repositories;

use App\Entity\Example;

class ExampleRepository
{

    protected $example;

	public function __construct(Example $example)
	{
	    $this->example = $example;
    }

    public function all()
    {

    }

    public function allPaginate()
    {

    }

    public function find($id)
    {
        return $this->example->find($id);
    }

    public function findBy(Array $key, Array $value )
    {

    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
