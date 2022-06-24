<?php

declare(strict_types=1);

// class Beverage

class Beverage {
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(float $price, string $color) {
        $this->price= $price;
        $this->color= $color;
        $this->temperature ="cold";
    }

    public function get_info(): void {
    echo "This beverage is $this->temperature and $this->color";
    }
}
$cola=new Beverage(2,"pink");
$cola->get_info();




