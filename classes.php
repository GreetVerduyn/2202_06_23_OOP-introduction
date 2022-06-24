<?php

declare(strict_types=1);

/*
### EXERCISE 1

- [x] Create a class beverage `a class starts with a capital!!!`
- [x] Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
- [x] Have a default value "cold" in the construct for temperature.

_Remember for now we will use properties and methods that can be accessed from everywhere._

 - [x] Make a getInfo function which returns "This beverage is <temperature> and <color>."
 - [x] Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
    print the getInfo on the screen.
- [x]Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!*/

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




