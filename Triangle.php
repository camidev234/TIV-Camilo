<?php

include_once 'asbtractClass.php';

class Triangle extends Figure{
    private int $base;
    private int $height;

    public function __construct(int $nLados, string $name, float $base, float $height) {
        parent::__construct($nLados, $name);
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase() {
        return $this->base;
    }

    public function setBase(float $base) {
        $this->base = $base;
    }   

    public function getHeight() {
        return $this->height;
    }   
    
    public function setHeight(float $height) {
        $this->height = $height;
    }   

    public function getArea() {
        return $this->base * $this->height / 2;
    }
}

$triangleOne = new Triangle(3, 'Triangle', 15, 30);

echo 'Area del triangulo Uno' . $triangleOne->getArea();