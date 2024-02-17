<?php

namespace App\Entity;

use App\Repository\ManagmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ManagmentRepository::class)]
class Managment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $portfolio = null;

    #[ORM\Column]
    private ?int $win = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPortfolio(): ?string
    {
        return $this->portfolio;
    }

    public function setPortfolio(string $portfolio): static
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function getWin(): ?int
    {
        return $this->win;
    }

    public function setWin(int $win): static
    {
        $this->win = $win;

        return $this;
    }
}
