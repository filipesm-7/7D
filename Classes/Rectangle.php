<?php

namespace Classes;
require_once 'Shape.php';

/**
 * Class Rectangle
 */
class Rectangle extends Shape
{
    /**
     * @var int
     */
    const Y = 2;

    /**
     * @return float
     */
    public function getArea(): float {
        return $this->width * $this->length;
    }
}