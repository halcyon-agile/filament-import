<?php

declare(strict_types=1);

namespace HaclyonAgile\TallBoilerplate\Importer;

use HaclyonAgile\TallBoilerplate\Importer\Commands\ImporterCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ImporterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tall-boilerplate-importer')
            ->hasConfigFile()
            ->hasCommand(ImporterCommand::class);
    }
}
