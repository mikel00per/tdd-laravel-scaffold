<?php

namespace Core\Console\Commands;

use Illuminate\Console\Command;

class MigrateTranslations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:translations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->call('translation:sync-translations', [
            'from' => 'file',
            'to' => 'database',
            'language' => 'all'
        ]);
    }
}
