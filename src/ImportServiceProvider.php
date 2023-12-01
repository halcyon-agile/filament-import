<?php

declare(strict_types=1);

namespace HalcyonAgile\FilamentImport;

use HalcyonAgile\FilamentImport\Commands\ImporterCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ImportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-import')
            ->hasConfigFile()
            ->hasCommand(ImporterCommand::class);
    }
}
