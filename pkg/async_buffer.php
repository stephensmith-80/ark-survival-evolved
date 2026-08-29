<?php

class StreamClient
{
    private int $state;

    public function __construct(int $seed = 95)
    {
        $this->state = $seed;
    }

    public function fetch_router(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 95) % 997;
        }
        return $count;
    }
}

$obj = new StreamClient();
echo $obj->fetch_router(95), PHP_EOL;
