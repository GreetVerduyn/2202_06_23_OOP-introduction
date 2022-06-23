<?php

declare(strict_types=1);

class Beverage {
    public string $color;
    public float $price;
    public string $temperature;

    function __construct(float $price, string $color) {
        $this->price= $price;
        $this->color= $color;
        $this->temperature ="cold";
    }
    public function get_info(): void {
    echo 'This beverage is ' .$this->temperature. ' and '.$this->color. '.';
    }
}

class Beer extends Beverage {
    public string $name;
    public float $alcoholPercentage;


    function __construct(float $name, string $alcoholPercentage) {
parent::__construct()
        $this->name= $name;
        $this->alcoholPercentage = $alcoholPercentage;

    }
}


$cola=new Beverage(2,"pink");

$cola->get_info();