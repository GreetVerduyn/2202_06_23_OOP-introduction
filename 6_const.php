<?php

declare(strict_types=1);
/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.

TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
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
    function showName() {
        echo  self::BARNAME . "\n";
    }
const BARNAME = "Het Vervolg";

}

class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage, float $price, string $color) {
        parent:: __construct($price, $color);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage():float {
        return $this->alcoholPercentage;
    }

}

echo Beverage::BARNAME;
