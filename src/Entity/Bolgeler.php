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

    /**
     * @ORM\OneToMany(targetEntity=Content::class, mappedBy="bolge")
     */
    private $contents;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->mahalles = new ArrayCollection();
        $this->contents = new ArrayCollection();
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
            $mahalle->setSemt($this);
        }

        return $this;
    }

    public function removeMahalle(Mahalle $mahalle): self
    {
        if ($this->mahalles->removeElement($mahalle)) {
            // set the owning side to null (unless already changed)
            if ($mahalle->getSemt() === $this) {
                $mahalle->setSemt(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Content[]
     */
    public function getContents(): Collection
    {
        return $this->contents;
    }

    public function addContent(Content $content): self
    {
        if (!$this->contents->contains($content)) {
            $this->contents[] = $content;
            $content->setBolge($this);
        }

        return $this;
    }

    public function removeContent(Content $content): self
    {
        if ($this->contents->removeElement($content)) {
            // set the owning side to null (unless already changed)
            if ($content->getBolge() === $this) {
                $content->setBolge(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
