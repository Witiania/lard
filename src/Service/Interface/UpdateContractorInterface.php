<?php

namespace App\Service\Interface;

use App\DTO\RequestDTO;
use App\Entity\Contractor;

interface UpdateContractorInterface
{
    public function update(int $id, RequestDTO $request): Contractor;
}