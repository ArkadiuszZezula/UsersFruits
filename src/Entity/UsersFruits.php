<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersFruitsRepository")
 */
class UsersFruits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $users_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $fruits_id;

    public function getId()
    {
        return $this->id;
    }

    public function getUsersId(): ?int
    {
        return $this->users_id;
    }

    public function setUsersId(int $users_id): self
    {
        $this->users_id = $users_id;

        return $this;
    }

    public function getFruitsId(): ?int
    {
        return $this->fruits_id;
    }

    public function setFruitsId(int $fruits_id): self
    {
        $this->fruits_id = $fruits_id;

        return $this;
    }
}
