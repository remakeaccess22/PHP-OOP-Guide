<?php

class Person {

    public $name;

    public function __construct($name) {

        $this->name = $name;

    }
    
    public function job() {

        return "Software Developer";

    }

    public function favoriteTeam() {

        return "Arsenal";

    }

    public function thingsThatKeepUpAtNight() { // Public, Private and Protected are access modifiers

        return "We are all going to die and that is terryfying";

    }

}

$bob = new Person('Bob');


class TennisMatch {

    public $player1;
    public $player2;

    public function __construct($player1, $player2) {

        $this->player1 = $player1;
        $this->player2 = $player2;

    }

    public function score() { 

        return "7-6";

    }
     protected function hasWinner() {

        return true;

    }

     protected function hasAdvantage() {

        return true;

    }

     protected function inDeuce() { // Protected methods can only be accessed within the class or its child classes, it is for ecnapsulation

        return false;

    }
}
