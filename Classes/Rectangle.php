<?php


/**
 * Class Rectangle
 */
abstract class Rectangle extends Shape
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