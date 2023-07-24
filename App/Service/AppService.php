<?php

namespace App\Service;

class AppService
{
    public function __construct(
        private DatabaseService $databaseService, private array $config
        )
    {}

    public function sendResponse()
    {
        return $this->databaseService->getGenres();
    }
}