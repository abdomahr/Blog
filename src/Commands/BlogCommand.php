<?php

namespace BlogLaravel\Blog\Commands;

use Illuminate\Console\Command;

class BlogCommand extends Command
{
    public $signature = 'laravel-blog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
