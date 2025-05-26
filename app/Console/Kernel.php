<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // Aquí registras tus comandos
        \App\Console\Commands\FetchGitHubActivity::class,
        Commands\TestCommand::class
    ];

    protected function schedule(Schedule $schedule)
    {
        // Definir programaciones aquí
    }

    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
