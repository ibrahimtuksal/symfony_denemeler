<?php

namespace App\Entity;

use App\Repository\BolgelerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BolgelerRepository::class)
 */
class Bolgeler
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $isim;

    /**
     * @ORM\OneToMany(targetEntity=Mahalle::class, mappedBy="semt_id")
     */
    private $mahalles;

    public function __construct()
    {
        $this->mahalles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Mahalle[]
     */
    public function getMahalles(): Collection
    {
        return $this->mahalles;
    }

    public function addMahalle(Mahalle $mahalle): self
    {
        if (!$this->mahalles->contains($mahalle)) {
            $this->mahalles[] = $mahalle;
            $mahalle->setSemtId($this);
        }

        return $this;
    }

    public function removeMahalle(Mahalle $mahalle): self
    {
        if ($this->mahalles->removeElement($mahalle)) {
            // set the owning side to null (unless already changed)
            if ($mahalle->getSemtId() === $this) {
                $mahalle->setSemtId(null);
            }
        }

        return $this;
    }
}
