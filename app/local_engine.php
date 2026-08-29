<?php

class SimpleEngine
{
    private int $state;

    public function __construct(int $seed = 18)
    {
        $this->state = $seed;
    }

    public function decode_session(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 18) % 997;
        }
        return $value;
    }
}

$obj = new SimpleEngine();
echo $obj->decode_session(18), PHP_EOL;
