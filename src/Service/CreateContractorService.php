<?php

namespace App\Service;

use App\DTO\RequestDTO;
use App\Entity\Contractor;
use App\Service\Interface\CreateContractorInterface;
use Doctrine\ORM\EntityManagerInterface;

class CreateContractorService implements CreateContractorInterface
{

    public function __construct(
        private readonly EntityManagerInterface $em)
    {
    }

    /**
     * @throws \Exception
     */
    public function create(RequestDTO $requestDTO): Contractor
    {
        $contractor = new Contractor();
        $contractor->setName($requestDTO->name);
        $contractor->setInn($requestDTO->inn);
        $contractor->setEmail($requestDTO->email);

        if(null!== $this->em->getRepository(Contractor::class)->findOneBy(['email' => $requestDTO->email])){
            throw new \Exception('Email already exists', 400);
        }
        if(null!== $this->em->getRepository(Contractor::class)->findOneBy(['inn' => $requestDTO->inn])){
            throw new \Exception('INN already exists', 400);
        }

        $this->em->persist($contractor);
        $this->em->flush();

        return $contractor;
    }
}