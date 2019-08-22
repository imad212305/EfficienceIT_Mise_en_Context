<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FicheRepository")
 */
class Fiche
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
    private $nom;
    /**
     * @ORM\Column(type="text")
     */
    private $prenom ;
    /**
     * @ORM\Column(type="text")
     */
    private $mail ;
    /**
     * @ORM\Column(type="text")
     */
    private $msg ;

    /**
     * @ORM\Column(type="text")
     */

    private $dept ;

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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function getDept()
    {
        return $this->dept;
    }
    public function getChef()
    {
        return $this->chef;
    }

    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        return $this->prenom = $prenom;
    }
    public function setMail($mail)
    {
        return $this->mail = $mail;
    }
    public function setMsg($msg)
    {
        return $this->msg = $msg;
    }
    public function setDept($dept)
    {
        return $this->dept = $dept;
    }
    public function setChef($chef)
    {
        return $this->chef = $chef;
    }
}
