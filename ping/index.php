<?php

require_once 'Piko.php';

class Main extends App
{
    public function handle(): Response
    {
        return new Response(200, 'OK', [
            'message' => 'Pong!',
            'version' => Piko::VERSION,
            'time'    => time(),
        ]);
    }
}

Piko::boot(new Main());
