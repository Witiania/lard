<?php

namespace App\Service\Interface;

use App\DTO\RequestDTO;
use App\DTO\RequestUpdateDTO;
use App\Entity\Contractor;

interface UpdateContractorInterface
{
    public function update(int $id, RequestUpdateDTO $request): Contractor;
}