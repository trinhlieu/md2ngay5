<?php
include "cicrle.php";
include "cylinder.php";

$circle = new Circle(5, 'orange');
$circle->toString();
echo "<br>";
echo "Circle area: " . $circle->calculateArea() . "(m2) <br>";
echo "Circle perimeter: " . $circle->calculatePerimeter() . "(m) <br>";

$cylinder = new Cylinder(5, 'green', 10);
echo "<br>";
$cylinder->toString();
echo "Cylinder area: " . $cylinder->calculateArea() . "(m2) <br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() . "(m) <br>";
