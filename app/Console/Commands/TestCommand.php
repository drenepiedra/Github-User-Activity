<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';
    protected $description = 'A test command to check basic functionality';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Test command executed successfully!');
    }
}
