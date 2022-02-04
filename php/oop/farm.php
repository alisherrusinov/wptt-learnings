<?php

class Animal
{
    public function __construct(public $name)
    {
        $this->name = $name;
    }
    final public function getName()
    {
        return $this->name;
    }
    public function isBird()
    {
        return false;
    }
}

class Bird extends Animal
{
    public function isBird()
    {
        return true;
    }
}

class Farm
{
    function __construct()
    {
        $this->animals = [];
    }
    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }
    public function rollCall()
    {
        foreach ($this->animals as $key => $value) {
            echo 'На ферме обитает' .  $value->getName();
        }
    }
}

class BirdFarm extends Farm
{
    public function rollCall()
    {
        echo 'Птиц на птицеферме: ' . count($this->animals);
        parent::rollCall();
    }
}

class Farmer
{
    public function addAnimal(Farm $farm, Animal $animal)
    {
        $farm->addAnimal($animal);
    }
    public function rollCall(Farm $farm)
    {
        $farm->rollCall();
    }
}

class Cow extends Animal
{
}

class Horse extends Animal
{
}

class Crow extends Bird
{
}

class Hen extends Bird
{
}

$farm1 = new Farm();
$farm2 = new BirdFarm();
$farmer = new Farmer();

$animals = [new Cow('корова 1'), new Horse('лошадь 1'), new Crow('ворона'), new Hen('курица')];

foreach ($animals as $key => $value) {
    if ($value->isBird()) {
        $farmer->addAnimal($farm2, $value);
    } else {
        $farmer->addAnimal($farm1, $value);
    }
}

$farmer->rollCall($farm1);
$farmer->rollCall($farm2);
