<?php 

class CoffeeMaker {
    
        public function brew() {
    
            var_dump('Brewing the coffee');
    
        }
}


// "is a" relationship with Coffee maker

class SpecialtyCoffeMaker extends CoffeeMaker {
        
            public function brewLatte() {
        
                var_dump('Brewing a latte');
        
            }
}

(new CoffeeMaker())->brew();
(new SpecialtyCoffeMaker())->brewLatte();

class Collection {

    protected $array;

    public function __construct(array $items) {

        $this->array = $items;

    }

    public function sum($key) {

        return array_sum(array_column($this->array, $key));

    }

}

class VideoCollections extends Collection {

    public function length() {

        return $this->sum('length');

    }

}

class Videos {
    
        public $title;
    
        public $length;
    
        public function __construct($title, $length) {
    
            $this->title = $title;
            $this->length = $length;
    
        }
}

new VideoCollections([
    new Videos('Some Video', 100),
    new Videos('Some Video 2', 200),
    new Videos('Some Video 3', 300),
]);

var_dump($videos->length());