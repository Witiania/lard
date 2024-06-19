<?php

namespace App\Service\Interface;

use Symfony\Component\HttpFoundation\JsonResponse;

interface DeleteContractorInterface
{
    public function delete(int $id): JsonResponse;
}