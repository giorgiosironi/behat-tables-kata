<?php

class Cart
{
    private $total = 0;

    public function add($name, $price)
    {
        $this->total += $price;
    }

    public function total()
    {
        return $this->total;
    }
}
