<?php

namespace App\Service;

use App\Entity\Contractor;
use App\Repository\ContractorRepository;
use App\Service\Interface\GetContractorInterface;

class GetContractorService implements GetContractorInterface
{
    public function __construct(
        private readonly ContractorRepository $repository
    )
    {
    }

    /**
     * @throws \Exception
     */
    public function get(int $id): Contractor
    {
       $constructor = $this->repository->find($id);
       if (null === $constructor) {
           throw new \Exception('Contractor not found');
       }

       return $constructor;
    }
}