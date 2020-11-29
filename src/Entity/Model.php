<?php

namespace App\Entity;

use App\Repository\ModelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModelRepository::class)
 */
class Model
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
    private $num_model;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quantity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_date;


    /**
     * @ORM\ManyToOne(targetEntity=Company::class, inversedBy="models")
     */
    private $companies;

    /**
     * @ORM\OneToMany(targetEntity=Costume::class, mappedBy="models")
     */
    private $costumes;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="models", cascade={"persist"})
     */
    private $images;

    public function __construct()
    {
        $this->costumes = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumModel(): ?string
    {
        return $this->num_model;
    }

    public function setNumModel(string $num_model): self
    {
        $this->num_model = $num_model;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeInterface $create_date): self
    {
        $this->create_date = $create_date;

        return $this;
    }


    public function getCompanies(): ?Company
    {
        return $this->companies;
    }

    public function setCompanies(?Company $companies): self
    {
        $this->companies = $companies;

        return $this;
    }

    /**
     * @return Collection|Costume[]
     */
    public function getCostumes(): Collection
    {
        return $this->costumes;
    }

    public function addCostume(Costume $costume): self
    {
        if (!$this->costumes->contains($costume)) {
            $this->costumes[] = $costume;
            $costume->setModels($this);
        }

        return $this;
    }

    public function removeCostume(Costume $costume): self
    {
        if ($this->costumes->removeElement($costume)) {
            // set the owning side to null (unless already changed)
            if ($costume->getModels() === $this) {
                $costume->setModels(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setModels($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getModels() === $this) {
                $image->setModels(null);
            }
        }

        return $this;
    }
}
