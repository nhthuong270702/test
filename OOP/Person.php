<?php

namespace OOP;

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function showData()
    {
        echo "name: " . $this->name . ", age: " . $this->age;
    }
}

$student = new Person("Huu Thuong", 21);
$student->showData();
