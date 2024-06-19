<?php

namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;

class RequestUpdateDTO
{
    #[Assert\Type('int')]
    public ?int $id;

    #[Assert\Type('string')]
    public ?string $name;

    #[Assert\Type('string')]
    #[Assert\Length(min: 10, max: 12)]
    #[Assert\Regex("/^\d+$/", message: 'Only numbers are allowed')]
    public ?string $inn;

    #[Assert\Type('string')]
    #[Assert\Email(message: 'The email {{ value }} is not a valid email.')]
    public ?string $email;
}