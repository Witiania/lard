<?php

namespace App\Service\Interface;

use App\Entity\Contractor;

interface GetContractorInterface
{
    public function get(int $id):Contractor;
}