<?php

namespace App\Controller;

use App\DTO\RequestDTO;
use App\DTO\RequestUpdateDTO;
use App\DTO\ResponseDTO;
use App\DTO\ResponseListDTO;
use App\Service\Interface\CreateContractorInterface;
use App\Service\Interface\DeleteContractorInterface;
use App\Service\Interface\GetContractorInterface;
use App\Service\Interface\ListContractorInterface;
use App\Service\Interface\UpdateContractorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

class ContractorController extends AbstractController
{
    #[Route('/', name: 'add_contractor', methods: ['POST'])]
    public function create(
        #[MapRequestPayload] RequestDTO $request,
        CreateContractorInterface       $createContractor
    ): JsonResponse
    {
        $contractor = $createContractor->create($request);

        $validResponse = new ResponseDTO($contractor);

        return $this->json($validResponse);
    }

    #[Route('/update/{id}', name: 'update_contractor', methods: ['PUT'])]
    public function update(
        #[MapRequestPayload] RequestUpdateDTO $request,
        int                             $id,
        UpdateContractorInterface       $updateContractor): JsonResponse
    {
        $contractor = $updateContractor->update($id, $request);

        $validResponse = new ResponseDTO($contractor);

        return $this->json($validResponse);
    }

    #[Route('/delete/{id}', name: 'delete_contractor', methods: ['DELETE'])]
    public function delete(DeleteContractorInterface $deleteContractor, int $id): JsonResponse
    {
        return $deleteContractor->delete($id);
    }

    #[Route('/{id}', name: 'get_contractor', methods: ['GET'])]
    public function get(GetContractorInterface $getContractor, int $id): JsonResponse
    {
        $contractor = $getContractor->get($id);

        $validResponse = new ResponseDTO($contractor);

        return $this->json($validResponse);
    }

    #[Route('/list', name: 'list_contractor', methods: ['POST'])]
    public function list(ListContractorInterface $listContractor): JsonResponse
    {
        $contractor = $listContractor->list();

        $validResponse = new ResponseListDTO($contractor);

        return $this->json($validResponse);
    }
}