<?php

namespace App\Service;

use App\Entity\Contractor;
use App\Service\Interface\DeleteContractorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteContractorService implements DeleteContractorInterface
{
    public function __construct(
        private readonly EntityManagerInterface $em
    )
    {
    }

    public function delete(int $id): JsonResponse
    {
        $contractor = $this->em->getRepository(Contractor::class)->find($id);

        if (null === $contractor) {
            return new JsonResponse('Contractor not found', 404);
        }

        $this->em->remove($contractor);
        $this->em->flush();

        return new JsonResponse('Contractor deleted', 200);
    }
}