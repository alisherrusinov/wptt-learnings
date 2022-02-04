<?php 
namespace shop;
require 'notifier.php';
class Order{
    public function __construct(public $basket, public $deliveryCost)
    {
        $this->basket = $basket;
        $this->deliveryCost = $deliveryCost;
    }

    public function getBasket(){
        return $this->basket;
    }
    
    public function getPrice(){
        return $this->basket->getPrice() + $this->deliveryCost;
    }
}

class Basket{
    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct(Product $product, $quantity){
        for ($i=0; $i < $quantity; $i++) { 
            $this->products[] = $product;
        }
    }

    public function getPrice(){
        $totalPrice = 0;
        foreach ($this->products as $key => $value) {
            $totalPrice+=$value->getPrice();
        }
        return $totalPrice;
    }

    

}


class BasketPosition{
    public function __construct(public $product, public $number)
    {

        $this->product = $product;
        $this->number = $number;
    }
    public function getProduct(){
        return $this->product->getName();
    }

    public function getQuantity(){
        return $this->number;
    }

    public function getPrice(){
        /**
         * Функция которая формирует цену продуктов в данной позиции
         */
        return $this->product->getPrice()*$this->number;
    }
}



class Product{
    public function __construct(public $name, public $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getPrice(){
        return $this->price;
    }
}

$product1 = new Product('товар1', 100);
$product2 = new Product('товар2', 200);

$pos1 = new BasketPosition($product1, 6);
$pos2 = new BasketPosition($product2, 3);

$basket = new Basket();
$basket->addProduct($product1, $pos1->getQuantity());
$basket->addProduct($product2, $pos2->getQuantity());

$order = new Order($basket, '500');

echo 'Заказ на сумму: '. $order->getPrice(). 'Состав: ';
foreach ($basket->products as $key => $value) {
    echo $value->getName() . ' ';
}

$message = 'Для вас создан заказ, на сумму: ' . $order->getPrice() . ' Состав: ';
foreach ($basket->products as $key => $value) {
    $message = $message . $value->getName() . ' ';
}

use notifier;
use function notifier\notify;

$user1 = new notifier\User('Николай Николаича', 'azaza@gmail.com', 54, '+79998887766');

notify($user1, $message);
