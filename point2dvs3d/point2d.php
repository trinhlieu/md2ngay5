<?php
class Point2D {
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function setXY($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY() {
        $xy = [$this->x, $this->y];
        return "(" . $xy[0] . ", " . $xy[1];
    }

    public function toString() {
        echo "info: " .$this->getXY();
    }
}