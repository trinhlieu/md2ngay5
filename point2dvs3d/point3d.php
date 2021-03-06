<?php
class Point3D extends Point2D {
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ() {
        return $this->z;
    }

    public function setZ($z) {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z) {
        parent::setXY($x, $y);
        $this->z = $z;
    }

    public function getXYZ() {
        $xyz = [$this->x, $this->y, $this->z];
        return ", " . $xyz[2] . ")";
    }

    public function toString()
    {
        parent::toString(); // TODO: Change the autogenerated stub
        echo $this->getXYZ() . '<br>';
    }
}
