<?php

namespace App\Entity;

use App\Repository\ScenarioModelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScenarioModelRepository::class)]
class ScenarioModel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $campaignId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    public function setCampaignId(int $campaignId): static
    {
        $this->campaignId = $campaignId;

        return $this;
    }
}
