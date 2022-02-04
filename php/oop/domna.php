<?php

class BlueFlame
{
    public function getFlame()
    {
        return 'Горит синим пламенем';
    }
}

class RedFlame
{
    public function getFlame()
    {
        return 'Ярко горит';
    }
}

class Smoke
{
    public function getFlame()
    {
        return 'Лишь задымился';
    }
}


class Forge
{
    public function burn($object)
    {
        $flames = [new BlueFlame(), new RedFlame(), new Smoke()];
        $flame = $flames[array_rand($flames)];
        $object->burnWith($flame);
    }
}

class September
{
    public $name = 'Сентябрь';
    public function burnWith($flame)
    {
        echo $this->name . ' ' . $flame->getFlame();
    }
}

class Paper
{
    public $name = 'Бумага';
    public function burnWith($flame)
    {
        echo $this->name . ' ' . $flame->getFlame();
    }
}

class Methan
{
    public $name = 'Метан';
    public function burnWith($flame)
    {
        echo $this->name . ' ' . $flame->getFlame();
    }
}

$forge = new Forge();

$paper = new Paper();
$sept = new September();
$meth = new Methan();

$forge->burn($paper);
$forge->burn($sept);
$forge->burn($meth);
