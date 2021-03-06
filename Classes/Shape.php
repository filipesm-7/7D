<?php

/*
 * Namespaces cannot be taken full advantage of without Composer autoloader
 */
namespace Classes;

/**
 * Class Shape
 */
abstract class Shape
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $length;

    /**
     * @var int
     */
    const X = 1;

    /**
     * changed visibility to allow custom implementation on child classes
     * @var mixed
     */
    protected $id;

    /**
     * Shape constructor
     *
     * @param float $width
     * @param float $length
     */
    public function __construct(float $width, float $length) {
        $this->width = $width;
        $this->length = $length;
        $this->name = (new \ReflectionClass($this))->getShortName();
        $this->id = $this->generateId();
    }

    /**
     * @return mixed
     */
    abstract public function generateId();

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    abstract public function getArea();

    /**
     * @return mixed
     */
    public function getProps() {
        return get_object_vars($this);
    }
}