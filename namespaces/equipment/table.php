<?php

namespace Furniture;

class Table{
    private $name;
    private $brand;
    private $cost;
    public function __construct($name, $brand, $cost){
        $this->name = $name;
        $this->brand = $brand;
        $this->cost = $cost;
    }
    public function calculateTax(){
        return $this->cost*0.18;
    }
}

?>