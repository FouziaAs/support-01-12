<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnimalRepository::class)
 */
class Animal
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $specie;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    private array $buddies;

    public function __construct(
        string $name = 'unnamed animal',
        string $specie = 'unknown specie',
        int $age = 0
    ) {
        $this->name = $name;
        $this->specie = $specie;
        $this->age = $age;
        $this->buddies = [];
    }

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

    public function getSpecie(): ?string
    {
        return $this->specie;
    }

    public function setSpecie(string $specie): self
    {
        $this->specie = $specie;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getBuddies(): array
    {
        return $this->buddies;
    }

    public function addBuddy(Animal $animal): self
    {
        if (!in_array($animal, $this->buddies)) {
            $this->buddies[] = $animal;
        }

        return $this;
    }
}
