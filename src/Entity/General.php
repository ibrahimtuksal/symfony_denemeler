<?php

namespace App\Entity;

use App\Repository\GeneralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GeneralRepository::class)
 * @ORM\Table(name="`general`")
 */
class General
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $light_color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dark_color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keyword;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slogan;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $whatsapp_no;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLightColor(): ?string
    {
        return $this->light_color;
    }

    public function setLightColor(string $light_color): self
    {
        $this->light_color = $light_color;

        return $this;
    }

    public function getDarkColor(): ?string
    {
        return $this->dark_color;
    }

    public function setDarkColor(string $dark_color): self
    {
        $this->dark_color = $dark_color;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(string $slogan): self
    {
        $this->slogan = $slogan;

        return $this;
    }

    public function getWhatsappNo(): ?string
    {
        return $this->whatsapp_no;
    }

    public function setWhatsappNo(string $whatsapp_no): self
    {
        $this->whatsapp_no = $whatsapp_no;

        return $this;
    }
}
