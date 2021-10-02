<?php

namespace Elsayed85\Skelton\Commands;

use Illuminate\Console\Command;

class SkeltonCommand extends Command
{
    public $signature = 'skelton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
