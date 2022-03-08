<?php

namespace App\Services;

use App\Repositories\FileRepository;

class FileService
{
    public function __construct(FileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(string $fileName): void
    {    
        $this->repository->store(['title' => $fileName]);
    }

    public function index(): array
    {
    	$files = $this->repository->all();
        $files = $files->sortByDesc('created_at')->toArray();
    	return compact(['files']);
    }
}
