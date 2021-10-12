<?php

//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан
// параметром во всех вложенных массивах.

$bigArr = [
    'one' => 1,
    'two' => [
        'one' => 1, 'seven' => 22,
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
        'six' => [
            'one'=> 101,
            'ten'=> 421,
            'nine'=>[1,4,6,1,88]
        ]
    ],
];

function displayElementsByNumber($array,$index)
{
    $result =[];

    if(count($array) >= $index + 1){
        $result[] = array_values($array)[$index];
    }

    foreach ($array as $item) {
        if(is_array($item)){
            $result = array_merge($result,displayElementsByNumber($item,$index));
        }
    }
    return $result;
}
echo '<pre>';
echo print_r(displayElementsByNumber($bigArr,2));

//Создать функцию которая считает все буквы b в переданной строке,
//в случае если передается не строка функция должна возвращать false

$phrase='Snail Bob can eat a lot of beans';
$invalidPhrase=25;
function countB($string)
{
    if (is_string($string)) {
        return substr_count(strtolower($string), 'b');
    } else {
        echo '<pre>'.'Input is invaid';
        return false;
    }
}

echo '<pre>'.countB($phrase);
echo '<pre>'.countB($invalidPhrase);

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
function countSum($array)
{
    $result=0;
    $result = $result + array_sum($array);

    foreach ($array as $item) {
        if(is_array($item)){
            $result= $result + countSum($item);
        }
    }
    return $result;
}

echo countSum($bigArr);

//Создать функцию которая определит сколько квадратов меньшего
//размера можно вписать в квадрат большего размера размер возвращать в float

function howMuchSquaresFit($bigOne,$littleOne)
{
    $bigOneArea=pow($bigOne,2);
    $littleOneArea=pow($littleOne,2);
    return $bigOneArea/$littleOneArea;
}
echo '<pre>'.howMuchSquaresFit(7,3);
