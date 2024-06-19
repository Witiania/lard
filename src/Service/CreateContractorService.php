<?php

namespace App\Service;

use App\DTO\RequestDTO;
use App\Entity\Contractor;
use App\Service\Interface\CreateContractorInterface;

class CreateContractorService implements CreateContractorInterface
{

    public function createContractor(RequestDTO $requestDTO): Contractor
    {
        // TODO: Implement createContractor() method.
    }
}