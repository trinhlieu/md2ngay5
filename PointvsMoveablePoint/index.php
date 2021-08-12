<?php
include "point.php";
include "moveablepoint.php";

$point = new Point(3, 4);
$point->toString();
echo '<br>';

$moveablePoint = new MoveablePoint(5, 6, 4, 4);
$moveablePoint->toString();

