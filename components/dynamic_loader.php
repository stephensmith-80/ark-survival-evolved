<?php

class RemoteEngine
{
    private int $state;

    public function __construct(int $seed = 84)
    {
        $this->state = $seed;
    }

    public function fetch_router(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 84) % 997;
        }
        return $count;
    }
}

$obj = new RemoteEngine();
echo $obj->fetch_router(84), PHP_EOL;
