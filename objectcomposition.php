<?php

class Subscription {

    protected $gateway;

    public function __construct(Gateway $gateway) {

        $this->gateway = $gateway; // Dependency Injection

    }

    public function create() {

        var_dump('subscribing');
        
    }

    public function cancel() {

        $this->gateway->findCustomer();

    }

    public function invoice() {

    }

}

interface Gateway {
    
        public function findCustomer();
        public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway {


    public function findCustomer() {


    }

    public function findSubscriptionByCustomer() {

    }
}

new Subscription(new StripeGateway());