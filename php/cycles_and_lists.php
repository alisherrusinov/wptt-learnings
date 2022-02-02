<?php

// Циклы для данных в массивах

// 1. Создайте массив скучных игрушек - $boringToys. Создайте в нем случайное количество элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000
$boringToys = [];

$toysCount = random_int(1, 10);

for ($i=1; $i <= $toysCount; $i++) { 
    $boringToys[$i] = ['Название'=> "Игрушка $i", 'Цена'=> random_int(100, 1000)];
}


// Дан массив $cars. Состоящий из трех машин со следующими данными: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
$cars = [
    [
        'name' => 'Мерседес',
        'price' => 10000,
        'colors' => [],
    ],
    [
        'name' => 'BMW',
        'price' => 9999,
        'colors' => [],
    ],
    [
        'name' => 'Автобус',
        'price' => 20000,
        'colors' => [],
    ],
];


// 2. Посчитайте и выведите стоимость стоимость всех машин
$allCarsSum = 0;

foreach ($cars as $key => $value) {
    $allCarsSum+=$value['price'];
}
print $allCarsSum;

// 3. Для каждой машины заполните поле colors. В этом поле должны хранится все возможные варианты цветов для этой машины, при чем для каждого этого цвета, есть своя надбавка к стоимости (разная для разных машин)
// Создайте массив colors с цветами доступными для каждой машины. И случайным образом выберите из этого массива по 3 цвета для каждой машины. Эти цвета добавьте в массив $cars в поле colors. Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
// Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности.
$colors = [
    'Мерседес' => ['black', 'white', 'gray', 'green', 'blue'],
    'BMW' => ['black', 'white', 'gray', 'green', 'blue'],
    'Автобус' => ['yellow', 'white', 'gray'],
];

foreach ($cars as $key => $value) {
    for ($i=0; $i <= 2 ; $i++) { 
        $availableColors = $colors[$value['name']];
        $colorIndex = random_int(0, count($availableColors));
        $value['colors'][] = ['color'=>$colors[$value['name']][$colorIndex], 'priceAdd'=>random_int(0, 100)];
        $cars[$key] = $value; 
    }
}

var_dump($cars);



// 4. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде:
// "Купите автомобиль {} цвета {} всего за: {} руб"
foreach ($cars as $key => $value) {
    foreach ($value['colors'] as $color_key => $color_value) {
        $carName = $value['name'];
        $currentColor = $color_value['color'];
        $currPriceAdd = $color_value['priceAdd'];
        $currPrice = $value['price'];
        $newPrice = $currPrice + $currPriceAdd;
        print "Купите автомобиль $carName цвета $currentColor  всего за: $newPrice руб\n";
    }
}
// вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете.