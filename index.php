<?php

$arr=[1,2,3,7,31,4,1,8,6];
// посчитать длину массива
echo count($arr)."<br />";

// переместить первые 4 элемента массива в конец массива
for($i=1; $i<=4; $i++)
array_push($arr,array_shift($arr));
print_r($arr);
echo "<br />";

// получить сумму 4,5,6 элементов
echo $arr[3]+$arr[4]+$arr[5]."<br />";

//-------------------------------------------------------------------------------//

$firstArr=[
    'one'=>1,
    'two'=>2,
    'three'=>3,
    'four'=>5,
    'five'=>12,
    ];

$secondArr=[
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
    ];

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
print_r(array_diff_key($secondArr, $firstArr));
echo "<br/>";

//найти все элементы которые присутствую в первом и отсутствуют во втором
print_r(array_diff_key($firstArr,$secondArr));
echo "<br/>";

//найти все элементы значения которых совпадают
print_r(array_uintersect($firstArr, $secondArr, "strcasecmp"));
echo "<br/>";

//найти все элементы значения которых отличаются
print_r(array_udiff($firstArr, $secondArr, "strcasecmp"));
echo "<br/>";

$bigArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],

];

//получить сумму всех значений в массиве
$sum = 0;
array_walk_recursive($bigArr, function($number) use (&$sum) {
    $sum += $number;
});
echo $sum."<br />";

//получить общее количество элементов в массиве
echo count($bigArr, COUNT_RECURSIVE)."<br />";

//получить все вторые элементы вложенных массивов
$secondElements = [];
foreach ($bigArr as $key => $value) {
    if (is_array($value) && count($value) > 1) {
        $secondElements[] = array_values($value)[1];
    }
}

print_r($secondElements);

