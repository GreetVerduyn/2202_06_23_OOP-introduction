<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage {
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(float $price, string $color) {
        $this->price= $price;
        $this->color= $color;
        $this->temperature ="cold";
    }
    public function get_info(): void {
        echo "This beverage is $this->temperature and $this->color";
    }
    public function newPrice($price): void {
        if ($price<0){
            $this->price = 0;
        }else {$this->price = $price;}
    }
    public function showPrice(): void
    {
        echo "Price is $this->price";
    }

}
$cola=new Beverage(2,"pink");
$cola->newPrice(3.5);
$cola->showPrice();
