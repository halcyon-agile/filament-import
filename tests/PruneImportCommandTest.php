<?php

declare(strict_types=1);

use HalcyonAgile\FilamentImport\Commands\PruneImportCommand;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function Pest\Laravel\freezeTime;
use function Pest\Laravel\travelTo;

it('prune import', function (bool $expired) {
    freezeTime();

    config([
        'filament-import.expires_in_minute' => 5,
        'filament-import.temporary_files.disk' => 'test-disk',
    ]);

    Storage::fake(config('filament-import.temporary_files.disk'));

    $importsDirectory = config('filament-import.temporary_files.base_directory');

    Storage::disk(config('filament-import.temporary_files.disk'))
        ->put($importsDirectory.'/test-import.csv', '');

    $minutes = config('filament-import.expires_in_minute');

    if ($expired) {
        $minutes++;
    }

    travelTo(now()->addMinutes($minutes));

    artisan(PruneImportCommand::class)
        ->assertSuccessful();

    if ($expired) {
        Storage::disk(config('filament-import.temporary_files.disk'))
            ->assertDirectoryEmpty($importsDirectory);
    } else {
        Storage::disk(config('filament-import.temporary_files.disk'))
            ->assertExists($importsDirectory.'/test-import.csv');
    }
})
    ->with([
        'expired' => true,
        'not expired' => false,
    ]);
