<?php

class AtomicEngine
{
    private int $state;

    public function __construct(int $seed = 45)
    {
        $this->state = $seed;
    }

    public function decode_gateway(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 45) % 997;
        }
        return $value;
    }
}

$obj = new AtomicEngine();
echo $obj->decode_gateway(45), PHP_EOL;
