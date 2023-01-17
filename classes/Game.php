<?php
class GameProduct extends Product
{
    private $material = [];
    private $weight;

    public function __construct($name, $material, $price, $description, Category $category, $image, $weight)
    {
        $this->setMaterial($material);
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
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        $this->material = implode(",<br>", $this->material);
        return $this->material;
    }
}
