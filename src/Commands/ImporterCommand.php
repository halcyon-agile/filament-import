<?php

declare(strict_types=1);

namespace HaclyonAgile\TallBoilerplate\Importer\Commands;

use Illuminate\Console\Command;

class ImporterCommand extends Command
{
    public $signature = 'tall-boilerplate-importer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
