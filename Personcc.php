<?php

class Person {
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother, $father)
    {
$this->name = $name;
$this->lastname = $lastname;
$this->age = $age;
$this->mother = $mother;
$this->father = $father;
$this->hp = 100;


    }
function sayHi($name) {
    return "Hi $name, I'm " . $this->name;

}
// $this->hp = $this->hp +$hp;

function setHp($hp) {
    if ($this->hp + $hp >100) $this->hp = 100;
    else $this->hp = $this->hp +$hp;
    
}
function getHp() {
    return $this->hp;
}
function getName() {
    return $this->name;
}
function getLastname() {
    return $this->lastname;
}
function getAge() {
    return $this->age;
}
function getMother() {
    return $this->mother;
}
function getFather() {
    return $this->father;
}
function getInfo() {
    return "
    <h2>Несколько слов о моих родственниках: </h2><br>" . "Меня зовут - " . $this->getName() . "<br>Моя фамилия - " . $this->getLastname() . "<br>Мне - " . $this->getAge() . " лет" . "<br>Мою маму зовут - " . $this->getMother()->getName()
     . "<br>Моего папу зовут -" . $this->getFather()->getName()
     . "<br>Моего дедушку по маминой линии зовут - " . $this->getMother()->getFather()->getName()
     . "<br>Мою бабушку по маминой линии зовут - " . $this->getMother()->getMother()->getName()
     . "<br>Моего дедушку по папиной линии зовут - " . $this->getFather()->getFather()->getName()
     . "<br>Мою бабушку по папиной линии зовут - " . $this->getFather()->getMother()->getName()
     ;

}
}
$igor = new Person("Igor", "Petrov", 68, null, null);
$inna = new Person("Inna", "Petrova", 67, null, null);
$vera = new Person("Vera", "Ivanova", 70, null, null);
$andrey = new Person("Andrey", "Ivanov", 70, null, null);


$alex = new Person("Alex", "Ivanov", 32, $vera, $andrey);
$olga = new Person("Olga", "Ivanova", 30, $inna, $igor);
$valera = new Person("Valera", "Ivanov", 7, $olga, $alex);

echo $valera->getInfo();


// echo $olga->getInfo();

// echo $valera->getMother()->getFather()->getName();


// $medKit = 50;

// $alex->setHp(-30);
// echo $alex->getHp() . "<br>";

// $alex->setHp($medKit);
// echo $alex->getHp();

// $alex->hp = $alex->hp - 30;

// echo $alex->hp . "<br>";
// $alex->hp = $alex->hp + $medKit;
// echo $alex->hp;

// echo $alex->sayHi($igor->name);
// $alex = new person();

// alex->name = "Alex";