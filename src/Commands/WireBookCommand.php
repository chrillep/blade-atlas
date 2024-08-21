<?php

namespace Arrgh11\WireBook\Commands;

use Illuminate\Console\Command;

class WireBookCommand extends Command
{
    public $signature = 'livewire-storybook';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
