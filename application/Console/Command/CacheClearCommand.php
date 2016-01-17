<?php

namespace App\Console\Command;

use DirectoryIterator;
use Illuminate\Console\Command;

require_once('include/dir_inc.php');

class CacheClearCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cache:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Очистка кеша';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    protected function handle()
    {
        $directories = new DirectoryIterator(STORAGE . 'cache');

        foreach($directories as $directory)
        {
            if (! $directory->isDir()) {
                continue;
            }

            if ($directory->isDot()) {
                continue;
            }

            $this->info('Deleting directory ' . $directory->getRealPath());
            rmdir_recursive($directory->getRealPath());
        }
    }
}