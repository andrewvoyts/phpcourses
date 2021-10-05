<?php

//получить остаток деления 7 на 3

echo (7 % 3)."<br />";

// Вывести целую часть сложения 7 и 7.15

echo (integer) (7+7.15)."<br />";

// Получить корень из 25

echo sqrt(25)."<br />";

// Получить 4-е слово из фразы - "Десять негритят пошли купаться в море"

$stringArr = explode($separator=" ", "Десять негритят пошли купаться в море");
echo $stringArr[3],"<br />";

// Получить 17-й символ из фразы - "Десять негритят пошли купаться в море"

echo mb_substr('Десять негритят пошли купаться в море', 16,1)."<br />";

// Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
// Первая попытка была через ucwords, но как оказалось - он не работает с русским(только с однобайтовыми)

echo $phrase = mb_convert_case('Десять негритят пошли купаться в море', MB_CASE_TITLE, "UTF-8")."<br />";

// Посчитать длину строки - Десять негритят пошли купаться в море

echo mb_strlen('Десять негритят пошли купаться в море')."<br />";

//  Правильно ли утверждение что true = 1

$containTrue=true;
$containOne=1;

if($containOne==$containTrue)
    echo 'True is equal to 1'."<br />";
else
    echo 'True is not equal to 1'."<br />";

//Правильно ли утверждение false тождественно 0

$containTrue=false;
$containOne=0;

if($containOne===$containTrue)
    echo 'False is identical to 0'."<br />";
else
    echo 'False is not identical to 0'."<br />";

// Какая строка длиннее: "three" или "три"

$ruString='три';
$enString='three';
$ruStringLength=mb_strlen($ruString);
$enStringLength=mb_strlen($enString);
If ($ruStringLength==$enStringLength)
    echo'"three" is equal to "три"'."<br />";
elseif ($ruStringLength<$enStringLength)
    echo'"three" is longer than "три"'."<br />";
elseif ($ruStringLength>$enStringLength)
    echo'"три" is longer than "three"'."<br />";

//Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2

$a=125*13+7;
$b=223+28*2;
If ($a==$b)
    echo "$a is equal to $b."."<br />";
elseif ($a<$b)
    echo "$b is bigger than $a."."<br />";
elseif ($a>$b)
    echo "$a is bigger $b."."<br />";

