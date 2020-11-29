<?php

namespace App\Entity;

use App\Repository\CostumeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CostumeRepository::class)
 */
class Costume
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity=Model::class, inversedBy="costumes")
     */
    private $models;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getModels(): ?Model
    {
        return $this->models;
    }

    public function setModels(?Model $models): self
    {
        $this->models = $models;

        return $this;
    }
}
