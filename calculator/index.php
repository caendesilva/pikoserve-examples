<?php

require_once 'Piko.php';

class Main extends App
{
    public $x;
    public $y;

    public function handle(): Response
    {
        $request = Request::get();

        $this->x = $request->x;
        $this->y = $request->y;

        if (! $this->validate($this->x, $this->y)) {
            return new Response(422, 'Invalid arguments');
        }

        $result = $this->calculate($this->x, $this->y);

        return new Response(200, 'OK', [
            'result' => $result,
        ]);
    }

    private function validate($x, $y): bool
    {
        return (is_numeric($x) && is_numeric($y)) && 
        (($x < 2147483647) && ($x > -2147483648)) &&
        (($y < 2147483647) && ($y > -2147483648));
    }

    private function calculate(int $x, int $y): int
    {
        return $x + $y;
    }
}

Piko::boot(new Main());
