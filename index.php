<?php

require_once 'Classes/Rectangle.php';
require_once 'Classes/Circle.php';

$rectangle = new Classes\Rectangle(4, 2);
printShapeDetails($rectangle);

$circle = new Classes\Circle(4, 2, 3);
printShapeDetails($circle);

function printShapeDetails(Classes\Shape $shape): void {
    echo sprintf('%s area: %d', $shape->name, $shape->getArea());
    echo "\n";
    echo sprintf('%s properties: %s', $shape->name, json_encode($shape->getProps()));
    echo "\n";
}