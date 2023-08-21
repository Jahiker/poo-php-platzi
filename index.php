<?php 

class Person {
    public $name;
    
    public function greet() {
        return "Hello $this->name";
    }
}

class User {
    public $type;
}

class Admin extends Person {
    public $name = 'admin';
}