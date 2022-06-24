<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/



class Beverage {
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(float $price, string $color) {
        $this->price= $price;
        $this->color= $color;
        $this->temperature ="cold";
    }
    public function get_info(): void {
        echo "This beverage is $this->temperature and $this->color";
    }
}


class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage, float $price, string $color)
    {
        parent:: __construct($price, $color);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    private function beerInfo(): void
    {
        echo "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }

    function infoBeer()
    {
        $this->beerInfo();
    }
}

$duvel=new Beer("Duvel", 8.5,3.5, "blond");
$duvel->get_info();
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getcolor();
echo "<br>";
$duvel->setcolor("light");
echo $duvel->getcolor();
echo "<br>";
$duvel->infoBeer();
