<?php

// 1. Создайте переменную $errorCode, положите в нее случайное значение от 1 до 3
// для каждого отдельного кода ошибки выведите сообщение:
// 1 - "Что-то пошло не так"
// 2 - "Все прошло так как надо, но мы этого совсем не ждали"
// 3 - "Я в домике"
$errorCode = random_int(1, 3);

switch($errorCode){
	case 1:
		print 'Что-то пошло не так';
		break;
	case 2:
		print 'Все прошло так как надо, но мы этого совсем не ждали';
		break;
	case 3:
		print 'Я в домике';
		break;
	}


// 2. Четный не с нами. Создайте переменную $myNumber - в которую поместите случайное значение от 0 до 10
// Если это число четное (2, 4, 6, 8, 10) - то выведите сообщение: "Четный. Ты не с нами!", если это нечетное или 0 - то выведите "Добро пожаловать!"
// Для решения задачи применяйте switch, даже если очень хочется решить с if
$myNumber = random_int(0, 10);
print $myNumber;
switch ($myNumber) {
	case 0:
		print 'Добро пожаловать';
		break;

	default:
		$isEven = $myNumber%2;

		switch ($isEven) {
			case 0:
				print 'Четный. Ты не с нами!';
				break;
			
			default:
				print 'Добро пожаловать';
				break;
		}
		break;
}

// 3. Создайте массив $foods с продуктами питания: Яблоко, Клубника, Апельсин, Кабачок, Патиссон, Банан, Арбуз, Картошка, Лягушачие лапки
// Создайте переменную $foodItem - случайное число от 0 до 8 (количество продуктов - 1)
// Определите к какому виду относится продукт из массива $foods под индексов $foodItem: "Ягода", "Фрукт", "Овощ", "Что-то не вегетарианское"
// Выведите сообщение: "Выбранный продукт {} - это {}", вместо {} подставьте соответственно название продукта и его вид
// # Создайте дополнительную переменную для вида продукта, а вывод сделайте в конце скрипта. Кстати, если вы слышите это название первый раз, то патиссоны на вкус как кабачки, и с вампирами ничего общего не имеют)
$foods = ['Яблоко', 'Клубника', 'Апельсин', 'Кабачок', 'Патиссон', 'Банан', 'Арбуз', 'Картошка', 'Лягушачие лапки'];
$berries = ['Клубника', 'Арбуз'];
$fruits = ['Яблоко', 'Апельсин', 'Банан'];
$vegetables = ['Картошка', 'Патиссон', 'Кабачок'];
$other = ['Лягушачие лапки'];
$foodItem = random_int(0, 8);

switch ($foods[$foodItem]) {
	case in_array($foods[$foodItem], $fruits):
		print("Выбранный продукт $foods[$foodItem]  - это Фрукт");
		break;
		case in_array($foods[$foodItem], $berries):
		print("Выбранный продукт $foods[$foodItem]  - это Ягода");
		break;
		case in_array($foods[$foodItem], $vegetables):
		print("Выбранный продукт $foods[$foodItem]  - это Овощ");
		break;
		case in_array($foods[$foodItem], $other):
		print("Выбранный продукт $foods[$foodItem]  - это Что-то не вегетарианское");
		break;

}
// $foodItem = ...;