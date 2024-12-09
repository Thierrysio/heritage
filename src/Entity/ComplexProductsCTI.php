<?php

namespace App\Entity;

use App\Repository\ComplexProductsCTIRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class ComplexProductsCTI  extends ProductsCTI
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
