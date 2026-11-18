<?php

namespace JeffersonGoncalves\Filament\QuebecRetention\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\QuebecRetention\QuebecRetentionPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                QuebecRetentionPlugin::make(),
            ]);
    }
}
