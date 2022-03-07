<?php

namespace App\Services;

use App\Repositories\FileRepository;

class FileService
{
    public function __construct(FileRepository $repository)
    {
        $this->repository = $repository;
    }
}