<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";

class FoodProduct extends Product
{
    private $weight;

    public function __construct($name, $price, $description, Category $category, $image, $weight)
    {
        $this->setWeight($weight);
        parent::__construct($name, $price, $description, $category, $image);
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
}
