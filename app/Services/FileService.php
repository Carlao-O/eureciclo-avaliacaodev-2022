<?php

namespace App\Services;

use App\Repositories\FileRepository;

class FileService
{
    public function __construct(FileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): array
    {
    	$files = $this->repository->all();
        $files = $files->sortByDesc('created_at')->toArray();
    	return compact(['files']);
    }
    
    public function store(string $fileName, array $sales): void
    {    
        $this->repository->store(['title' => $fileName], $sales);
    }

    public function show(int $id): array
    {    
        $file = $this->repository->find($id);
        $sales = $file->sales;
        
        $totalRevenue = $this->repository->calculateTotalRevenue($id);

        return compact(['file', 'sales', 'totalRevenue']);
    }
}
