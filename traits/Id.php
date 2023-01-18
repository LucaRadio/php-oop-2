<?php
trait Id
{

    protected $id;




    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId()
    {
        $this->id = uniqid();

        return $this;
    }
}
