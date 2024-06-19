<?php

namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;

class RequestDTO
{
    #[Assert\Type('int')]
    public ?int $id;

    #[Assert\NotBlank(message: 'Please enter your name')]
    #[Assert\Type('string')]
    public string $name;

    #[Assert\NotBlank(message: 'Please enter your INN')]
    #[Assert\Type('string')]
    #[Assert\Length(min: 10, max: 12)]
    #[Assert\Regex("/^\d+$/", message: 'Only numbers are allowed')]
    public string $inn;

    #[Assert\NotBlank(message: 'Please enter your email')]
    #[Assert\Type('string')]
    #[Assert\Email(message: 'The email {{ value }} is not a valid email.')]
    public string $email;
}