<?php

namespace App\Repository;

use App\Interface\TransportRepositoryInterface;
use App\Models\Transport;

class TransportRepository implements TransportRepositoryInterface
{
    public function __construct(
        protected Transport $model
    )
    {}

    public function create($request): Transport
    {
        return $this->model->create($request);
    }
}
