<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Master;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SessionRepository")
 */
class SessionMaster extends Session
{

    /**
     * @ORM\Column(type="integer")
     * @ManyToOne(targetEntity="Master")
     */
    protected $id_user;

}
