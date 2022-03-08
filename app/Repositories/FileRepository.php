<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

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

	public function calculateTotalRevenue(int $id): float
	{
		$totalRevenue = DB::table('files')
			->join('sales', 'files.id', '=', 'sales.file_id')
			->select(DB::raw('sum(price * quantity) as totalRevenue'))
			->where('files.id', $id)->pluck('totalRevenue')->first();

		return $totalRevenue;
    }
}
