<?php
// Многомерные массивы

// 1. Создайте массив $matrix, состоящих из целых чисел от 1 до 9 в виде матрицы 3х3
$matrix = [[1,2,3],[4,5,6],[7,8,9]];

// 2. Выведите центральный элемент (на строке 2 в столбце 2) из этой матрицы

print $matrix[1][1];
// 3. Выведите последний элемент в первой строке из этой матрицы

print $matrix[0][2];
// 4. Посчитайте и выведите сумму элементов из этой матрицы, расположенных ниже и левее диагонали 1 5 9

print $matrix[1][0] + $matrix[2][0] + $matrix[2][1];

// 5. Создайте массив, $users описывающий следующих пользователей
// - Никита, 29 лет, плотник
// - Вася, 13 лет, футболист
// - Николай Николаевич, 77 лет, профессиональный игрок в DotA
// Массив должен быть ассоциативным, каждый элемент должен содержать поля: имя, возраст, профессия

$users = [];
$users[0] = ['name'=> 'Никита', 'age'=> '29', 'profession'=>'плотник'];
$users[1] = ['name'=> 'Вася', 'age'=> '13', 'profession'=>'футболист'];
$users[2] = ['name'=> 'Николай Николаевич', 'age'=> '77', 'profession'=>'профессиональный игрок в DotA'];


// 6. Добавьте в массив $users еще одного участника: Виталий, 30 лет, программист
$users[3] = ['name'=> 'Виталий', 'age'=> '30', 'profession'=>'программист'];


// 7. Создайте массив, описывающий загадочного пользователя ($mysteriousUser) - с тем же набором полей, что и в массиве $users
$users[4] = ['name'=> 'Николай Николаевич', 'age'=> '29', 'profession'=>'футболист'];

// В качестве имени укажите ему имя 3-го пользователя из массива $users
// В качестве возраста, выберите ему возраст первого пользователя из массива $users
// Профессию укажите из 2-го пользователя
// И выведите его на экран с помощью функции var_dump
var_dump($users[4]);
	