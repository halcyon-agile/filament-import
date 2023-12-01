<?php

declare(strict_types=1);

use HalcyonAgile\FilamentImport\Commands\PruneImportCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(PruneImportCommand::class)
        ->assertSuccessful();
});
