<?php

namespace App\Service;

use App\Repository\ContractorRepository;
use App\Service\Interface\ListContractorInterface;

class ListContractorService implements ListContractorInterface
{

    public function __construct(
        private readonly ContractorRepository $contractorRepository
    ){}
    public function list(): array
    {
       return $this->contractorRepository->findAll();
    }
}