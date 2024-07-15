<?php

class Team {// Class is some sort of like a blueprint, it reperesents something in real life that we can describe

    protected $name;
    protected $members = []; 

    public function __construct($name, $members = []) { //Objects are each implementation of a class, they are the actual thing that we can interact with


        $this->name = $name;
        $this->members = $members;

    }

    public function name() {
        
        return $this->name;
        
    }

    public function members() {

        return $this->members;

    }

    public function add($members) {

        $this->members[] = $members;

    }

    public function cancel() {

    }

    public static function create(...$params) {

        return new static(...$params);

    }

}

class Member {
    
        protected $name;
    
        public function __construct($name) {
    
            $this->name = $name;
    
        }

        public function lastViewed() {


    
        }
}

$acme = Team::create("Acme", [
    "John Doe",
    "Jane Doe"
]);



var_dump($acme->members());
