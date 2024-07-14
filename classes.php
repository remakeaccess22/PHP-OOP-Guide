<?php

class AchievementBadge { // Classes are like nouns, it is also like a blueprint or tempalate

    public $title;
    public $description; // Properties are like adjectives.
    public $points;

    public function awardTo($user) { // Methods are like verbs, this is also a behavior
        // Give the user this badge
        file_put_contents('badges.txt', "$user earned the {$this->title}" . PHP_EOL, FILE_APPEND);
    }
}