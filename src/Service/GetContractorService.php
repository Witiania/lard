<?php

namespace App\Service;

use App\Entity\Contractor;
use App\Service\Interface\GetContractorInterface;

class GetContractorService implements GetContractorInterface
{

    public function get(int $id): Contractor
    {
        // TODO: Implement get() method.
    }
}