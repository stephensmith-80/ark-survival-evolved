<?php

class BatchManager
{
    private int $state;

    public function __construct(int $seed = 28)
    {
        $this->state = $seed;
    }

    public function handle_registry(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 28) % 997;
        }
        return $value;
    }
}

$obj = new BatchManager();
echo $obj->handle_registry(28), PHP_EOL;
