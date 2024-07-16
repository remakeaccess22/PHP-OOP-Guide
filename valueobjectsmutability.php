<?php

class Age {

    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

}

function register(string $name, Age $age) {
    
 
}

register('John Doe', new Age(30)); // This will work