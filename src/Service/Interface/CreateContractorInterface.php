<?php

namespace App\Service\Interface;

use App\DTO\RequestDTO;
use App\Entity\Contractor;

interface CreateContractorInterface
{
    public function createContractor(RequestDTO $requestDTO): Contractor;
}