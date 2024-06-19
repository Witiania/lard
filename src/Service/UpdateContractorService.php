<?php

namespace App\Service;

use App\DTO\RequestDTO;
use App\DTO\RequestUpdateDTO;
use App\Entity\Contractor;
use App\Service\Interface\UpdateContractorInterface;
use Doctrine\ORM\EntityManagerInterface;

class UpdateContractorService implements UpdateContractorInterface
{

    public function __construct(

        private readonly EntityManagerInterface $em
    )
    {
    }

    /**
     * @throws \Exception
     */
    public function update(int $id, RequestUpdateDTO $request): Contractor
    {

        $contractor = $this->em->getRepository(Contractor::class)->find($id);
        if(null === $contractor){
            throw new \Exception('Contractor not found', 404);
        }

        if ($request->name !== null) {
            $contractor->setName($request->name);
        }
        if ($request->inn !== null) {
            $contractor->setInn($request->inn);
        }
        if ($request->email !== null) {
            $contractor->setEmail($request->email);
        }

        $this->em->flush();
        return $contractor;
    }
}