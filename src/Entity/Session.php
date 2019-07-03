<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Game;
use Doctrine\ORM\Mapping\ManyToOne;


abstract class Session
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @ManyToOne(targetEntity="Game")
     */
    protected $id_game;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $private_key;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdGame(): ?int
    {
        return $this->id_game;
    }

    public function setIdGame(int $id_game): self
    {
        $this->id_game = $id_game;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getPrivateKey(): ?string
    {
        return $this->private_key;
    }

    public function setPrivateKey(string $private_key): self
    {
        $this->private_key = $private_key;

        return $this;
    }

}
