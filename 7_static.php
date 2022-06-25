<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.


Use typehinting everywhere!
*/
class Beverage {
    private string $color;
    private float $price;
    private string $temperature;
    const BARNAME = "Het Vervolg";
    public static string $adress="Melkmarkt 9, 2000 Antwerpen";

    public function __construct(float $price, string $color) {
        $this->price= $price;
        $this->color= $color;
        $this->temperature ="cold";
    }
    public function get_info(): void {
        echo "This beverage is $this->temperature and $this->color";
    }
    public function showPlace():void {
        echo  self::BARNAME . "\n";
    }
    public static function adress():string {
        return self::$adress;
    }
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
    public function place(): void{
        echo $this->showPlace();

    }

}

echo Beverage::BARNAME;
echo "<br>";
$soda =new Beverage(3, 'white');
$soda -> showPlace();
echo "<br>";
$jupiler = new Beer('Jupiler', 8, 3.5, 'orange');
$jupiler -> place();
echo "<br>";
echo Beverage::$adress;
echo "<br>";
echo Beverage::adress();