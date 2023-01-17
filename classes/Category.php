<?php
class Category
{
    protected $name;
    protected $icon;
    public function __construct($name)
    {
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
}
