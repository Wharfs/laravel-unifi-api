<?php

namespace Wharfs\UnifiApiClient\Commands;

use Illuminate\Console\Command;

class UnifiApiClientCommand extends Command
{
    public $signature = 'unifi-api-client';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
