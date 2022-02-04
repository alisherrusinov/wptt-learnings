<?php
namespace zoo;

class Cat{
    function __construct(public $name)
    {
        $this->name = $name;
    }
}

class Dog{
    function __construct(public $name)
    {
        $this->name = $name;
    }
}

class Fish{
    function __construct(public $name)
    {
        $this->name = $name;
    }
}

$cat1 = new Cat('Cat1');
$cat2 = new Cat('Cat2');
$dog1 = new Dog('Dog1');
$dog2 = new Dog('Dog2');
$fish1 = new Fish('Fish');

$animals = [$cat1, $cat2, $dog1, $dog2, $fish1];

foreach ($animals as $key => $value) {
    echo $value->name;
}

?>