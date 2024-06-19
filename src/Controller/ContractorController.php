<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ContractorController extends AbstractController
{
    #[Route('/', name: 'add_contractor', methods: ['POST'])]
    public function create():JsonResponse
    {

    }

    #[Route('/{id}', name: 'update_contractor', methods: ['PUT'])]
    public function update():JsonResponse
    {

    }

    #[Route('/{id}', name: 'delete_contractor', methods: ['DELETE'])]
    public function delete():JsonResponse
    {

    }

    #[Route('/{id}', name: 'get_contractor', methods: ['GET'])]
    public function get():JsonResponse
    {

    }

    #[Route('/list', name: 'get_contractors', methods: ['GET'])]
    public function getAll():JsonResponse
    {

    }
}