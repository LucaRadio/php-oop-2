<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";

class FoodProduct extends Product
{
    private $ingredient;
    private $weight;

    public function __construct($name, $ingredient, $price, $description, Category $category, $image, $weight)
    {
        $this->setIngredient($ingredient);
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

    /**
     * Get the value of ingredient
     */
    public function getIngredient()
    {
        $this->ingredient = implode("<br>", $this->ingredient);
        return $this->ingredient;
    }

    /**
     * Set the value of ingredient
     *
     * @return  self
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }
}
