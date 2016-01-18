<?php

namespace App\Console\Command;

use Illuminate\Console\Command;

class RebuildRelationshipsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crm:rebuild:relationships';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Обновление связей метаданных и удаление связей из кеша';

    public function handle()
    {
        include_once MODPATH . 'Administration' . DIRECTORY_SEPARATOR . 'RebuildRelationship' . EXT;
    }
}