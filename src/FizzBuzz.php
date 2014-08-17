<?php

class FizzBuzz
{
    private $input;
    
    public static function on($input)
    {
        return new self($input);
    }
    
    private function __construct($input)
    {
        $this->input = $input;
    }

    public function value()
    {
        return 'Fizz';
    }
}
