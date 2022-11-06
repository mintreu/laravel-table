<?php

namespace Mintreu\LaravelTable\Commands;

use Illuminate\Console\Command;

class LaravelTableCommand extends Command
{
    public $signature = 'laravel-table';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
