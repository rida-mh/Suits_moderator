<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $name_res;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @ORM\Column(type="integer")
     */
    private $size_pants;

    /**
     * @ORM\Column(type="integer")
     */
    private $length_pant;

    /**
     * @ORM\Column(type="integer")
     */
    private $size_jacket;

    /**
     * @ORM\Column(type="integer")
     */
    private $size_shoe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color_shoe;

    /**
     * @ORM\Column(type="boolean")
     */
    private $type_crav_pap;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_tele;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_cart;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $advanced;

    /**
     * @ORM\Column(type="integer")
     */
    private $rest;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameRes(): ?string
    {
        return $this->name_res;
    }

    public function setNameRes(string $name_res): self
    {
        $this->name_res = $name_res;

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

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getSizePants(): ?int
    {
        return $this->size_pants;
    }

    public function setSizePants(int $size_pants): self
    {
        $this->size_pants = $size_pants;

        return $this;
    }

    public function getLengthPant(): ?int
    {
        return $this->length_pant;
    }

    public function setLengthPant(int $length_pant): self
    {
        $this->length_pant = $length_pant;

        return $this;
    }

    public function getSizeJacket(): ?int
    {
        return $this->size_jacket;
    }

    public function setSizeJacket(int $size_jacket): self
    {
        $this->size_jacket = $size_jacket;

        return $this;
    }

    public function getSizeShoe(): ?int
    {
        return $this->size_shoe;
    }

    public function setSizeShoe(int $size_shoe): self
    {
        $this->size_shoe = $size_shoe;

        return $this;
    }

    public function getColorShoe(): ?string
    {
        return $this->color_shoe;
    }

    public function setColorShoe(string $color_shoe): self
    {
        $this->color_shoe = $color_shoe;

        return $this;
    }

    public function getTypeCravPap(): ?bool
    {
        return $this->type_crav_pap;
    }

    public function setTypeCravPap(bool $type_crav_pap): self
    {
        $this->type_crav_pap = $type_crav_pap;

        return $this;
    }

    public function getNumTele(): ?string
    {
        return $this->num_tele;
    }

    public function setNumTele(string $num_tele): self
    {
        $this->num_tele = $num_tele;

        return $this;
    }

    public function getNameClient(): ?string
    {
        return $this->name_client;
    }

    public function setNameClient(string $name_client): self
    {
        $this->name_client = $name_client;

        return $this;
    }

    public function getIdCart(): ?string
    {
        return $this->id_cart;
    }

    public function setIdCart(string $id_cart): self
    {
        $this->id_cart = $id_cart;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAdvanced(): ?int
    {
        return $this->advanced;
    }

    public function setAdvanced(int $advanced): self
    {
        $this->advanced = $advanced;

        return $this;
    }

    public function getRest(): ?int
    {
        return $this->rest;
    }

    public function setRest(int $rest): self
    {
        $this->rest = $rest;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }
}
