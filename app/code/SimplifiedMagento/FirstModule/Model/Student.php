<?php

namespace SimplifiedMagento\FirstModule\Model;

class Student
{
    protected $name;

    protected $age;

    protected $scores;

    public function __construct (
        $name = "Akshay",
        $age = 28,
        array $scores = ['Maths' => 92, "Science" => 85]
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;
    }
    public function getColor ()
    {
        return "Green";
    }
}