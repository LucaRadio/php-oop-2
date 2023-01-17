<?php
class AnimalBedProduct extends Product
{
    private $size = [];
    private $weight;

    public function __construct($name, $size, $price, $description, Category $category, $image, $weight)
    {
        $this->setSize($size);
        $this->setWeight($weight);
        parent::__construct($name, $price, $description, $category, $image, $weight);
    }


    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        $this->size = implode("cm X", $this->size);
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}
