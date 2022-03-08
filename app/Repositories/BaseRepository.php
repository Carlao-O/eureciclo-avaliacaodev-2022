<?php

namespace App\Repositories;

class BaseRepository
{
	protected $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function all()
	{
		return $this->model->all();
	}

	public function find(int $id)
	{
        return $this->model->find($id);
    }
}