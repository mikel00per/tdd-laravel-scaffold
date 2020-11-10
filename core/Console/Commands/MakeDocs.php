<?php

namespace Core\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MakeDocs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:docs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera la documentación necesaria para laravel';

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
        $this->call('ide-helper:generate');
        $this->call('ide-helper:models');
        $this->call('ide-helper:meta');
    }
}
