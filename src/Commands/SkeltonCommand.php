<?php

namespace VendorName\Skelton\Commands;

use Illuminate\Console\Command;

class SkeltonCommand extends Command
{
    public $signature = 'Skelton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
