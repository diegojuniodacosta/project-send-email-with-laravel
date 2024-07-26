<?php

namespace App\Interface;

use App\Models\Transport;

interface TransportRepositoryInterface
{
    public function create($request): Transport;
}
