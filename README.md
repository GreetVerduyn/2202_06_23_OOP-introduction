# OOP introduction

- Repository: `oop-introduction`
- Type of Challenge: `Learning`
- Duration: `1 day`
- Team challenge : `solo with some team spirit added`

## The introduction

OOP - `Object Orientated Programming` - focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. 
This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

## The objective

> Lost for a second? Have a look at [this example](#an-example)

### 🌱 Must haves - the basics

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

### 🌱 Must haves - digging deeper
-
/* EXERCISE 3

[x] Copy the code of exercise 2 to here and delete everything related to cola.
[x] Make all properties private.
[x] Make all the other prints work without error. 
      I had to make $color "protected" ipv "private".
[x] After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
      VOID !!!!
[x] Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

[x] Print this method on the screen on a new line.
      I had to make a public function te call the private function

USE TYPEHINTING EVERYWHERE!
*/
- [Exercise 4](exercise_4_protected.php)
- [Exercise 5](exercise_5_public.php)

### 🌼 Nice to haves
- [Exercise 6](exercise_6_const.php)
- [Exercise 7](exercise_7_static.php)

## An example

Let's say we have a list of animals from the zoo:
```js
const listOfAnimals = [
    {
        animalType : 'monkey',
        order : 'mammal',
        amount : 25
    },
    {
        animalType : 'donkey',
        order : 'mammal',
        amount : 3
    },
    {
        animalType : 'turkey',
        order : 'bird',
        amount : 500
    }
]
```

Instead of having to create this data ourselves in the format above, we can make use of OOP structures.
With OOP we would create a class `Animal`, that class will serve as some sort of "blueprint" for creating animals.
Think of it as similar to an object, but on steroids.

#### Step one: the blueprint (class)

This class has 3 important parts:
1. the public strings
   - the properties that your class will use.
2. The Constructor
    - The constructor is where your class will receive the data and apply it to the properties mentioned above
3. The functions
    - You can use functions to manipulate the data and have any result you want.

```php
<?php

class Animal = 
{
    // The Properties
    public $animalType;
    public $order;
    public $amount;
    
    // The Constructor with incoming parameters in the brackets
    public function __construct($animalType, $order, $amount)
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->animalType = $animalType;
        $this->order = $order;
        $this->amount = $amount;
    };
    
    // The functions
    public function sayHelloToAnimal()
    {
        echo "Hello, $this->animalType";
    };
}
```
#### Step two: instantiating the object

For every object you want to create, you just need to instantiate a **new** object.

```php
<?php

$animal1 = new Animal("monkey", "mammal", 25);
$animal2 = new Animal("donkey", "mammal", 3);
$animal3 = new Animal("turkey", "bird", 500);
```
#### Step 3: use it!

Now that we created 3 animal objects. we can also start to use them in our code!

```php
<?php

$animal1->sayHelloToAnimal(); // Will result in: "Hello, monkey"
$animal2->sayHelloToAnimal(); // Will result in: "Hello, donkey"
$animal3->sayHelloToAnimal(); // Will result in: "Hello, turkey"
```

### Have fun!

![](https://c.tenor.com/CyzTOF-I6hIAAAAC/clone-twin.gif)