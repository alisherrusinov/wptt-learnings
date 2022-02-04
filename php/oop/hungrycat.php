<?php

namespace hungrycat;
class HungryCat {
    function __construct(public $name, public $color, public $favFood)
    {
        $this->name = $name;
        $this->color = $color;
        $this->favFood = $favFood;
    }
    public function eat($food){
        echo "Голодный код $this->name, особые приметы: цвет - $this->color, съел $food";
        if($food == $this->favFood){
            echo "  и замурчал 'мррррр' от своей любимой еды";
        }
        echo '<br>';
    }
}

$cat1 = new HungryCat('барсик', 'черный', 'рыба');
$cat2 = new HungryCat('мурзик', 'белый', 'мясо');

$cat1->eat('каша');
$cat2->eat('каша');

$cat1->eat('мясо');
$cat2->eat('мясо');

$cat1->eat('рыба');
$cat2->eat('рыба');

?>