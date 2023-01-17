<?php
class Category
{
    protected $name;
    protected $icon;
    public function __construct($name)
    {
        $this->setName($name);
        if ($name === "dog") {
            $this->icon = "<i class='fa-solid fa-dog'></i>";
        } else {
            $this->icon = "<i class='fa-solid fa-cat'></i>";
        }
    }

    /**
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * @return  self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
