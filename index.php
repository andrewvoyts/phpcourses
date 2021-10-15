<?php
/*
 * 1) Создать родительский (главный класс)
 * Класс должен содержать 2 свойства
 * Каждое свойство должно иметь геттеры и сеттеры
*/


class Animals
{
    public $name  = "";
    public $weight = 0;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }
}

/*
 *2)Создать 3 наследника родительского класса
Каждый наследник должен содержать одно свойство
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными
родителя и своими данными
Один наследник не должен быть наследуемым
Один из наследников должен содержать абстрактную функцию возведения в степен
 *
 */
class Dogs extends Animals
{
    public $dogsAttribute = 54;

    public function getDogsAttribute()
    {
        return $this->dogsAttribute;
    }

    public function setDogsAttribute($dogsAttribute): void
    {
        $this->dogsAttribute = $dogsAttribute;
    }

    public function attributesSum() : void
    {
        echo $this->dogsAttribute + $this->getWeight();
    }
}

abstract class Cats extends Animals
{
    public $catsAttribute = 42;

    public function getCatsAttribute()
    {
        return $this->catsAttribute;
    }

    public function setCatsAttribute($catsAttribute): void
    {
        $this->catsAttribute = $catsAttribute;
    }

    public function attributesSum() : void
    {
        echo $this->catsAttribute + $this->getWeight();
    }

    abstract function raiseToPower($value,$power);

}

final class Birds extends Animals
{
    public $birdsAttribute = 26;

    public function getBirdsAttribute()
    {
        return $this->birdsAttribute;
    }

    public function setBirdsAttribute($birdsAttribute): void
    {
        $this->birdsAttribute = $birdsAttribute;
    }

    public function attributesSum() : void
    {
        echo $this->birdsAttribute + $this->getWeight();
    }
}

/*
 * 3) Создать по 2 наследника от наследников первого уровня
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который выполняет
одно математическое действие с данными родителя и своими данными
И по одному методу который выполняет любое
математическое действие со свойством корневого класса и своим свойством
 */

class Dogfood extends Dogs
{
    public $price=10;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function priceSum() : void
    {
       echo $this->dogsAttribute + $this->price;
    }

    public function calculateSmthDogFood() : void
    {
       echo $this->price*$this->weight;
    }
}


class Catfood extends Cats
{
    public $price=8;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function raiseToPower($value, $power)
    {
        echo pow(3,2);
    }

    public function calculateSmthCatFood() : void
    {
       echo $this->price*$this->weight;
    }
}

Class Cathouses extends Cats
{

    public $price=3;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function raiseToPower($value, $power) : void
    {
        echo pow(5,2);
    }

    public function calculateSmthCathouses() : void
    {
        echo $this->price*$this->weight;
    }

}

class Doghouses extends Dogs
{
    public $price=6;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    public function priceDifference() : void
    {
        echo $this->dogsAttribute - $this->price;
    }

    public function calculateSmthDoghouses(): void
    {
        echo $this->price*$this->weight;
    }
}
