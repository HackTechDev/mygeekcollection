<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 */
class Movie
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
    private $id_omdb;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_wikipedia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOmdb(): ?int
    {
        return $this->id_omdb;
    }

    public function setIdOmdb(int $id_omdb): self
    {
        $this->id_omdb = $id_omdb;

        return $this;
    }

    public function getIdWikipedia(): ?int
    {
        return $this->id_wikipedia;
    }

    public function setIdWikipedia(int $id_wikipedia): self
    {
        $this->id_wikipedia = $id_wikipedia;

        return $this;
    }
}
