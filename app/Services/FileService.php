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
}
