<?php

namespace App\Entity;

use App\Repository\CampaignRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CampaignRepository::class)]
#[Broadcast]
class Campaign
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $emailFrom = null;

    #[ORM\Column(length: 255)]
    private ?string $aliasFrom = null;

    #[ORM\Column(length: 255)]
    private ?string $emailReplyTo = null;

    #[ORM\Column(length: 255)]
    private ?string $aliasReplyTo = null;

    #[ORM\Column(length: 255)]
    private ?string $subject = null;

    #[ORM\Column(length: 255)]
    private ?string $preheader = null;

    #[ORM\Column(length: 255)]
    private ?string $teams = null;

    #[ORM\Column(length: 255)]
    private ?string $kind = null;

    #[ORM\Column(length: 255)]
    private ?string $smsFrom = null;

    #[ORM\Column(length: 255)]
    private ?string $smsContent = null;

    #[ORM\Column(length: 255)]
    private ?string $requestedSendDate = null;

    #[ORM\Column(length: 255)]
    private ?string $blacklistIds = null;

    #[ORM\Column]
    private ?int $listId = null;

    #[ORM\Column]
    private ?int $sendId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmailFrom(): ?string
    {
        return $this->emailFrom;
    }

    public function setEmailFrom(string $emailFrom): static
    {
        $this->emailFrom = $emailFrom;

        return $this;
    }

    public function getAliasFrom(): ?string
    {
        return $this->aliasFrom;
    }

    public function setAliasFrom(string $aliasFrom): static
    {
        $this->aliasFrom = $aliasFrom;

        return $this;
    }

    public function getEmailReplyTo(): ?string
    {
        return $this->emailReplyTo;
    }

    public function setEmailReplyTo(string $emailReplyTo): static
    {
        $this->emailReplyTo = $emailReplyTo;

        return $this;
    }

    public function getAliasReplyTo(): ?string
    {
        return $this->aliasReplyTo;
    }

    public function setAliasReplyTo(string $aliasReplyTo): static
    {
        $this->aliasReplyTo = $aliasReplyTo;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getPreheader(): ?string
    {
        return $this->preheader;
    }

    public function setPreheader(string $preheader): static
    {
        $this->preheader = $preheader;

        return $this;
    }

    public function getTeams(): ?string
    {
        return $this->teams;
    }

    public function setTeams(string $teams): static
    {
        $this->teams = $teams;

        return $this;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getSmsFrom(): ?string
    {
        return $this->smsFrom;
    }

    public function setSmsFrom(string $smsFrom): static
    {
        $this->smsFrom = $smsFrom;

        return $this;
    }

    public function getSmsContent(): ?string
    {
        return $this->smsContent;
    }

    public function setSmsContent(string $smsContent): static
    {
        $this->smsContent = $smsContent;

        return $this;
    }

    public function getRequestedSendDate(): ?string
    {
        return $this->requestedSendDate;
    }

    public function setRequestedSendDate(string $requestedSendDate): static
    {
        $this->requestedSendDate = $requestedSendDate;

        return $this;
    }

    public function getBlacklistIds(): ?string
    {
        return $this->blacklistIds;
    }

    public function setBlacklistIds(string $blacklistIds): static
    {
        $this->blacklistIds = $blacklistIds;

        return $this;
    }

    public function getListId(): ?int
    {
        return $this->listId;
    }

    public function setListId(int $listId): static
    {
        $this->listId = $listId;

        return $this;
    }

    public function getSendId(): ?int
    {
        return $this->sendId;
    }

    public function setSendId(int $sendId): static
    {
        $this->sendId = $sendId;

        return $this;
    }
}
