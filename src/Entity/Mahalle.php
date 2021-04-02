<?php

namespace App\Entity;

use App\Repository\MahalleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MahalleRepository::class)
 */
class Mahalle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Bolgeler::class, inversedBy="mahalles")
     */
    private $semt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $isim;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemt(): ?Bolgeler
    {
        return $this->semt;
    }

    public function setSemt(?Bolgeler $semt): self
    {
        $this->semt = $semt;

        return $this;
    }

    public function getIsim(): ?string
    {
        return $this->isim;
    }

    public function setIsim(string $isim): self
    {
        $this->isim = $isim;

        return $this;
    }
}
