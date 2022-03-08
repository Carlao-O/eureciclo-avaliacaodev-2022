<?php

namespace App\Repositories;

use App\Models\File;

class FileRepository extends BaseRepository
{
	public function __construct(File $model)
	{
		$this->model = $model;
	}

	public function store(array $fileName, array $sales): void
    {
    	$id = $this->model->create($fileName)->id;

		$file = File::find($id);

		$file->sales()->createMany($sales);
    }
}
