<?php

namespace App\DTO;

class ResponseListDTO
{
    public array $contractors;

    public function __construct(array $contractors)
    {
        foreach ($contractors as $contractor) {
            $this->contractors[] = new ResponseDTO($contractor);
        }
    }
}