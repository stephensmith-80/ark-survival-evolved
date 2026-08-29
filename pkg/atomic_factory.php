<?php

class SharedController
{
    private int $state;

    public function __construct(int $seed = 64)
    {
        $this->state = $seed;
    }

    public function build_monitor(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 64) % 997;
        }
        return $total;
    }
}

$obj = new SharedController();
echo $obj->build_monitor(64), PHP_EOL;
