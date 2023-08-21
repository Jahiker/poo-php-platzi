<?php

class Person
{
    public $name;

    public function greet()
    {
        return "Hello $this->name";
    }
}
