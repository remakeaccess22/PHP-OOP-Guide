<?php

abstract class AchievementType { //Remove the ability to instantiate the class, we can only extend it
    
        public function name() {
    
            $class = (new ReflectionClass($this))->getShortName();
    
            return trim(preg_replace('/[A-Z]/', ' $0', $class));
    
        }
    
        public function icon() {
    
            return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    
        }

        abstract public function qualifier($user); // This method must be implemented in the child class, it cannot be implemented directly in the parent class
}

class FirstThousandPoints extends AchievementType {
    
        public function qualifier($user) {
    
            return $user->points > 1000;
    
        }
}

class FirstBestAnswer extends AchievementType {
    
        public function qualifier($user) {
    
            return $user->best_answer_id;
    
        }
}

class ReachTop50 extends AchievementType {
        
            public function qualifier($user) {
        
                return $user->rank <= 50;
        
            }
}

$achievement = new FirstThousandPoints();