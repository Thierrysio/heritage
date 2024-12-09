<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class SimpleProductSTI extends Products
{
    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;
        return $this;
    }
}
