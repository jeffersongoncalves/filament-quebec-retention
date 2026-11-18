<?php

namespace JeffersonGoncalves\Filament\QuebecRetention;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecRetentionServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec-retention';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
