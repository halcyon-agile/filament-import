<?php

declare(strict_types=1);

use HaclyonAgile\TallBoilerplate\Importer\Commands\ImporterCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(ImporterCommand::class)
        ->assertSuccessful();
});
