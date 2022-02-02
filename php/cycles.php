<?php

// 1. Выведите числа от 0 до 9

for ($i=0; $i < 10 ; $i++) { 
	# code...
	print $i;
}

// 2. Выведите 10 случайных чисел от 1 до 10

for ($i=0; $i < 10 ; $i++) { 
	# code...
	print random_int(1, 10);
}

// 3. Создайте массив $items из 10 случайных целых значений от 0 до 9
$items = [];

for ($i=0; $i < 10 ; $i++) { 
	# code...
	$items[$i] = random_int(0, 9);
}

// 4. Добавляйте случайные целые числа от 1 до 9 в массив $numbers до тех пор, пока сумма всех элементов этого массива меньше 100
// А затем выведите сколько числе всего в массиве: "Длинна массива numbers = {}"
$numbers = [];

while(array_sum($numbers)<100){
	$numbers[] = random_int(1, 9);
}
print(count($numbers));

// 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
// Выведите следующие строки (как всегда вместо {} подставив нужные значения):
// Общая сумма массива numbers = {}
// Из нее часть, которая приходится на четные числа = {}
// И часть из нечетных чисел = {}
$numbersSumEven = 0;
foreach ($numbers as $key => $value) {
	if($value%2 ==0){
		$numbersSumEven+=$value;
	}
}
$numbersLen = count($numbers);
$numbersSumFull = array_sum($numbers);
$numbersSumNotEven = array_sum($numbers)-$numbersSumEven;
print "Общая сумма массива numbers = $numbersSumFull";
print "Из нее часть, которая приходится на четные числа = $numbersSumEven";
print "И часть из нечетных чисел = $numbersSumNotEven";