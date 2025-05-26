<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

class FetchGitHubActivity extends Command
{
    protected $signature = 'User.activity {username}'; //comando para inciar la busqueda

    protected $description = 'Fetch GitHub activity for a given username';

    public function handle()
    {
        $username = $this->ask('Mostrar actividad del usuario :');

        $this->info('Fetching GitHub activity...');
        $username = $this->argument('username');
        $this->info("Username: {$username}");

        $client = new Client();
        $response = $client->get("https://api.github.com/users/{$username}/events");
        $events = json_decode($response->getBody()->getContents());
        $this->info('Events fetched.');

        foreach ($events as $event) {
            $this->info("Event: {$event->type} at {$event->created_at}");
        }
    }
}
