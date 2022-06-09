<?php

//main class
class Shape{
    public $color;
    public function getColor() { return $this->color; }
    public function setColor($color) { $this->color = $color;}
}

//all those classes below are derived from Shape class
//we use extends for inheritance

class Square extends Shape{
    public $width;
    public $height;
}

class Circle extends Shape{
    public $radius;
    
}

class Triangle extends Shape{
    public $base;
    public $height;
}

//you can create an instance from extended class

// $square1 = new Square();
// $square1->setColor("red");
// $square1->width = 10;
// $square1->height = 10;

echo $square1->color;
echo "<br>";
?>