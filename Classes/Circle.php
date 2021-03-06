<?php

namespace Classes;
require_once 'Shape.php';

/**
 * Class Circle
 */
class Circle extends Shape
{
    /**
     * @var int
     */
    const Y = 3;

    /**
     * @var float
     */
    protected $radius;

    /**
     * Circle constructor
     *
     * @param float $width
     * @param float $length
     * @param float $radius
     */
    public function __construct(float $width, float $length, float $radius) {
        parent::__construct($width, $length);

        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function generateId(): int {
        return time();
    }

    /**
     * @return float
     */
    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    /**
     * Override parent method with custom props
     *
     * @return mixed
     */
    public function getProps() {
        return [
            'name' => $this->name,
            'radius' => $this->radius,
            'id' => $this->getId(),
        ];
    }
}