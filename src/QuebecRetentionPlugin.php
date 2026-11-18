<?php

namespace JeffersonGoncalves\Filament\QuebecRetention;

use Filament\Panel;
use JeffersonGoncalves\Filament\QuebecRetention\Resources\Tombstones\TombstoneResource;
use JeffersonGoncalves\FilamentPluginCore\BasePlugin;

class QuebecRetentionPlugin extends BasePlugin
{
    protected ?string $navigationGroup = null;

    protected ?int $navigationSort = null;

    protected string $navigationIcon = 'heroicon-o-clock';

    protected string $slug = 'data-retention';

    public function getId(): string
    {
        return 'filament-quebec-retention';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            TombstoneResource::class,
        ]);
    }

    public function navigationGroup(?string $group): static
    {
        $this->navigationGroup = $group;

        return $this;
    }

    public function getNavigationGroup(): ?string
    {
        return $this->navigationGroup;
    }

    public function navigationSort(?int $sort): static
    {
        $this->navigationSort = $sort;

        return $this;
    }

    public function getNavigationSort(): ?int
    {
        return $this->navigationSort;
    }

    public function navigationIcon(string $icon): static
    {
        $this->navigationIcon = $icon;

        return $this;
    }

    public function getNavigationIcon(): string
    {
        return $this->navigationIcon;
    }

    public function slug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
