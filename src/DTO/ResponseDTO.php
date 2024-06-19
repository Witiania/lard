<?php

namespace App\DTO;

use App\Entity\Contractor;

class ResponseDTO
{
    public int $id;

    public string $name;
    public string $inn;
    public string $email;

    public function __construct(Contractor $contractor)
    {
        $this->id = $contractor->getId();
        $this->name = $contractor->getName();
        $this->inn = $contractor->getInn();
        $this->email = $contractor->getEmail();
    }
}