<?php

interface Newsletter { // Formal Contract between two classes

    public function subscribe($email); // Two classes should have the same method

}


class CampaignMonitor implements Newsletter {

    protected $email = [];

    public function subscribe($email) {

        // Subscribe the user with the email
        die('Subscribing with Campaign Monitor');

    }

}

class Drip implements Newsletter {
    
    protected $email = [];

    public function subscribe($email) {

        // Subscribe the user with the email
        die('Subscribing with Drip');

    }

}

/* Handshakes are informal agreements between two classes that define a common interface between them. 
This allows classes to interact with each other without having to know the details of each other's implementation.*/


class NewsLetterSubscriptionController {
    
    public function store(Newsletter $newsletter) { /*Duck typing is a concept related to dynamic typing, where the type or the class of an object is less important than the methods it defines. 
                                        When you use duck typing, you do not check an object's type to determine if it has the right methods; 
                                        instead, you check if an object can be used for a specific purpose.*/

        $email = 'email@gmail.com';
        $newsletter->subscribe($email);
        
    }

}

$controller = new NewsLetterSubscriptionController();
$controller->store(new Drip());