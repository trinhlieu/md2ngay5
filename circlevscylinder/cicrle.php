<?php
class Circle {
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getColor() {
        return $this->color;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function calculateArea() {
        return M_PI * ($this->radius ** 2);
    }

    public function calculatePerimeter() {
        return M_PI * $this->radius * 2;
    }

    public function toString() {
        echo "Info: radius= ". $this->getRadius() . ", color: " . $this->getColor() . ', ';
    }
}