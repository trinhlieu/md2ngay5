<?php
include "point2d.php";
include "point3d.php";

$point2D = new Point2D(3, 4);
$point2D->toString();
echo ")" . '<br>';

$point3D = new Point3D(5, 6, 7);
$point3D->toString();
