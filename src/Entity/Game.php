<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Univer;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 */
class Game
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @ManyToOne(targetEntity="Univer")
     */
    private $univer;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_master;

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

    public function getUniver(): ?string
    {
        return $this->univer;
    }

    public function setUniver(string $univer): self
    {
        $this->univer = $univer;

        return $this;
    }

    public function getIdMaster(): ?int
    {
        return $this->id_master;
    }

    public function setIdMaster(int $id_master): self
    {
        $this->id_master = $id_master;

        return $this;
    }
}
