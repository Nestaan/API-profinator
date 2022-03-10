<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    private $intitule;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prop1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prop2;

    #[ORM\OneToOne(targetEntity: self::class, cascade: ['persist', 'remove'])]
    private $question1;

    #[ORM\OneToOne(targetEntity: self::class, cascade: ['persist', 'remove'])]
    private $question2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getProp1(): ?string
    {
        return $this->prop1;
    }

    public function setProp1(?string $prop1): self
    {
        $this->prop1 = $prop1;

        return $this;
    }

    public function getProp2(): ?string
    {
        return $this->prop2;
    }

    public function setProp2(?string $prop2): self
    {
        $this->prop2 = $prop2;

        return $this;
    }

    public function getQuestion1(): ?self
    {
        return $this->question1;
    }

    public function setQuestion1(?self $question1): self
    {
        $this->question1 = $question1;

        return $this;
    }

    public function getQuestion2(): ?self
    {
        return $this->question2;
    }

    public function setQuestion2(?self $question2): self
    {
        $this->question2 = $question2;

        return $this;
    }
}
