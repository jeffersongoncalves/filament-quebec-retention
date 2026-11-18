<?php

namespace JeffersonGoncalves\Filament\QuebecRetention;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuebecRetentionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-quebec-retention')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
