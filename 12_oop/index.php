<?php

// What is class and instance

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter


class Fruit
{
    public $name;
    private $color;
    protected $weight;
    static $numbers;

    public function __construct($name, $color, $weight, $numbers)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        $this->$numbers;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }

    public function hello()
    {
        echo "Hello from parent class";
    }
}

class Strawberry extends Fruit
{
    public $amount;

    public function __construct($name, $color, $weight, $numbers, $amount)
    {
        parent::__construct($name, $color, $weight, $numbers);
        $this->amount = $amount;
    }

    public function msg()
    {
        echo "Hello from child class";
    }

    static function newMsg()
    {
        echo "this is static method";
    }
}

Strawberry::newMsg();

$strawberry1 = new Strawberry("name", "red", 5, 10, 30);

$strawberry1->msg();
