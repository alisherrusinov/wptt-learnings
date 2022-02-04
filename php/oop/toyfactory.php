<?php
namespace toyfactory;

class Toy{
    public function __construct(public $name, public $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }
}


class ToyFactory{
    public function createToy($name){
        return new Toy($name, random_int(1,100));
    }
}

$factory = new ToyFactory();

$toys = [];
$toyNames = ['игрушка1', 'игрушка2', 'игрушка3', 'игрушка4', 'игрушка5'];
for ($i=0; $i < random_int(1,20); $i++) { 
    $toys[] = $factory->createToy($toyNames[random_int(0,4)]);
}

$totalSum = 0;

foreach ($toys as $key => $value) {
    echo "$value->name - $value->cost";
    echo '<br>';
    $totalSum+=$value->cost;
}
echo "Итого - $totalSum";

?>
