<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\IssueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IssueRepository::class)]
#[ApiResource]
class Issue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $storyPoint = null;

    #[ORM\Column(nullable: true)]
    private ?int $spentTime = null;

    #[ORM\ManyToMany(targetEntity: Sprint::class, inversedBy: 'issues')]
    private Collection $sprint;

    public function __construct()
    {
        $this->sprint = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStoryPoint(): ?int
    {
        return $this->storyPoint;
    }

    public function setStoryPoint(?int $storyPoint): self
    {
        $this->storyPoint = $storyPoint;

        return $this;
    }

    public function getSpentTime(): ?int
    {
        return $this->spentTime;
    }

    public function setSpentTime(?int $spentTime): self
    {
        $this->spentTime = $spentTime;

        return $this;
    }

    /**
     * @return Collection<int, Sprint>
     */
    public function getSprint(): Collection
    {
        return $this->sprint;
    }

    public function addSprint(Sprint $sprint): self
    {
        if (!$this->sprint->contains($sprint)) {
            $this->sprint->add($sprint);
        }

        return $this;
    }

    public function removeSprint(Sprint $sprint): self
    {
        $this->sprint->removeElement($sprint);

        return $this;
    }
}
