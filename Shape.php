<?php


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
     * @var string
     */
    private $id;

    /**
     * Shape constructor
     *
     * @param float $width
     * @param float $length
     */
    public function __construct(float $width, float $length) {
        $this->width = $width;
        $this->length = $length;
        $this->id = uniqid();
    }

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