<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FixtureRepository")
 */
class Fixture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text")
     */
    private $nom ;
    /**
     * @ORM\Column(type="text")
     */
    private $chef ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getChef()
    {
        return $this->chef;
    }
    public function __toString() {
        return $this->nom;
    }

}
