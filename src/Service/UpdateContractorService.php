<?php

namespace App\Service;

use App\DTO\RequestDTO;
use App\Entity\Contractor;
use App\Service\Interface\UpdateContractorInterface;

class UpdateContractorService implements UpdateContractorInterface
{

    public function update(int $id, RequestDTO $request): Contractor
    {
        // TODO: Implement update() method.
    }
}