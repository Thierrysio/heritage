<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class ComplexProductSTI extends Products
{
    #[ORM\Column(length: 255)]
    private ?string $composant = null;

    public function getComposant(): ?string
    {
        return $this->composant;
    }

    public function setComposant(string $composant): static
    {
        $this->composant = $composant;

        return $this;
    }
}
