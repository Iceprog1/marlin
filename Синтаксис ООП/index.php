<?php

//Это создание класса, оно начинается со слова class
class Person {
    // У класса бывают свойства, они создаются так
    // Свойства это информация, методы это действия
    public $name;
    public $age;

    // Значение константы пока не меняется
    const ID = 10;


    // Чтобы создать методы мы пишем
    // В скобках наш метод принимает параметр из вызова методов ниже в которые мы передали значение параметров
    // Чтобы что-то вернуть отсюда мы пишем return
    public function sayHello(){
        return 'Hi, i am' . $this->name . '' . $this->setName('derk');
    }

    // То имя которое внизу мы передали как параметр, здесь мы присваиваем свойству текущего нижнего объекта
    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    // Если у нашей функции мы ставим солов static, что внизу можем вызывать этот метод, просто указав имя класса
    public static function saySomthing(){
        echo 'bla-bla';
        // в статичной функции нельзя использовать $this
    }
}



// При помощи такого класса, мы можем создать объект
// Чтобы создать объект мы пишем
$myPerson = new Person();

Person::saySomthing();
// Чтобы вызвать метод из объекта $myPerson дописываем вот это
//$myPerson->sayHello();

// Также можно обращаться к методам объекта вот так
//$myPerson->name = 'Adam';

// После создания такого объекта
// Этот объект уже считается отдельным объектом
// Мы можем передавать разные параметры в метод из объекта при этом вызывая один и тот же объект
$myPerson2 = new Person();

//$myPerson->sayHello(' Adam');
//echo '<pre>';
//$myPerson2->sayHello(' Derk');

//$myPerson2->setName('Alisa');
//$myPerson2->setAge('11');

$myPerson2->sayHello();

echo $myPerson2->name;
echo $myPerson2->age;


echo $myPerson2::ID;
