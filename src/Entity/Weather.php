<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\WeatherRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: WeatherRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['weather:read']],denormalizationContext: ['groups' => ['weather:write']])]
class Weather
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['city:read', 'weather:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups(['city:read', 'weather:read'])]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['city:read', 'weather:read'])]
    private ?float $temperature = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['city:read', 'weather:read'])]
    private ?float $clouds = null;

    #[ORM\ManyToOne(inversedBy: 'weather')]
    #[Groups(['weather:read'])]
    private ?City $city = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['city:read', 'weather:read'])]
    private ?int $visibility = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['city:read', 'weather:read'])]
    private ?int $pop = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(?float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getClouds(): ?float
    {
        return $this->clouds;
    }

    public function setClouds(?float $clouds): self
    {
        $this->clouds = $clouds;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getVisibility(): ?int
    {
        return $this->visibility;
    }

    public function setVisibility(?int $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getPop(): ?int
    {
        return $this->pop;
    }

    public function setPop(?int $pop): self
    {
        $this->pop = $pop;

        return $this;
    }
}
