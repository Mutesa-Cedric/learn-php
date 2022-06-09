<?php

/*Create a class Shape and mention the protected property area and method printMessage which
print the message I am a shape in a file shape.php
a. Create Triangle, Rectangle and Square classes which inherit the class shape and respective
properties like width, length and side in triangle.php, rectangle.php and square.php
respectively.
b. Add a constructor in each shape.
c. Add a method calculatearea in each shape to calculate the specific area
d. Add a tostring object which print I am a triangle, I am a Rectangle, I am a square
respectively.
e. Create init.php class to to make objects of Triangle, Rectangle and Square
*/
namespace Shapes;

class Shape
{
    protected $area;
    public function printMessage()
    {
        echo "I am a shape";
    }
}

class Triangle extends Shape
{
    public $base;
    public $height;
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea()
    {
        $this->area = ($this->base * $this->height) / 2;
    }
    public function printMessage()
    {
        echo "I am a triangle";
    }
}

class Rectangle extends Shape
{
    public $width;
    public $length;
    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function calculateArea()
    {
        $this->area = $this->width * $this->length;
    }
    public function printMessage()
    {
        echo "I am a rectangle";
    }
}

class Square extends Shape
{
    public $side;
    public function __construct($side)
    {
        $this->side = $side;
    }
    public function calculateArea()
    {
        $this->area = $this->side * $this->side;
    }
    public function printMessage()
    {
        echo "I am a square";
    }
}



?>