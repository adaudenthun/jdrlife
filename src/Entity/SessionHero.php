<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Hero;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SessionRepository")
 */
class SessionHero extends Session
{

    /**
     * @ORM\Column(type="integer")
     * @ManyToOne(targetEntity="Hero")
     */
    protected $id_user;


}
