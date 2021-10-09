<?php

require_once 'Classes/Rectangle.php';
require_once 'Classes/Circle.php';

$obj = new Classes\Rectangle(4, 2);

echo sprintf('%s area: %d', $obj->name, $obj->getArea());
echo "\n";
echo sprintf('%s properties: %s', $obj->name, json_encode($obj->getProps()));
echo "\n";

$obj = new Classes\Circle(4, 2, 3);

echo sprintf('%s area: %d', $obj->name, $obj->getArea());
echo "\n";
echo sprintf('%s properties: %s', $obj->name, json_encode($obj->getProps()));
echo "\n";