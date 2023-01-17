<?php
class GameProduct extends Product
{
    protected $category;
    protected $weight;


    public function __construct($name, $price, $description, Category $category, $image, $weight)
    {
        $this->setCategory($category);
        $this->setWeight($weight);
        parent::__construct($name, $price, $description, $category, $image, $weight);
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
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
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
