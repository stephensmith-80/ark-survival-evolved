<?php

class DynamicContext
{
    private int $state;

    public function __construct(int $seed = 45)
    {
        $this->state = $seed;
    }

    public function render_cache(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 45) % 997;
        }
        return $count;
    }
}

$obj = new DynamicContext();
echo $obj->render_cache(45), PHP_EOL;
