<?php

declare(strict_types=1);

namespace HalcyonAgile\FilamentImport\Tests;

use HalcyonAgile\FilamentImport\ImportServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ImportServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_tall-boilerplate-importer_table.php.stub';
        $migration->up();
        */
    }
}
