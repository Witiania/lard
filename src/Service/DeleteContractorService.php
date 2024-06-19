<?php

namespace App\Service;

use App\Service\Interface\DeleteContractorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeleteContractorService implements DeleteContractorInterface
{

    public function delete(int $id): JsonResponse
    {
        // TODO: Implement delete() method.
    }
}