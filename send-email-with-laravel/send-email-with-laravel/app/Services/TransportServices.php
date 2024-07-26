<?php

namespace App\Services;

use App\Interface\TransportRepositoryInterface;
use App\Interface\TransportServiceInterface;

class TransportServices implements TransportServiceInterface
{
    public function __construct(
        protected TransportRepositoryInterface $repository,
    )
    {}

    public function createTransport($request)
    {
        return $this->repository->create($request);
    }
}
