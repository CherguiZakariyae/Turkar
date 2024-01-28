<?php

class Location
{
    private $id;
    private $name;
    private $enable;
    private $dateCreate;

    /**
     * Location constructor.
     * @param $id
     * @param $name
     * @param $enable
     * @param $dateCreate
     */
    public function __construct($id, $name, $enable, $dateCreate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->enable = $enable;
        $this->dateCreate = $dateCreate;
    }

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
    public function setId($id)
    {
        $this->id = $id;

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

    /**
     * Get the value of enable
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set the value of enable
     *
     * @return  self
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get the value of dateCreate
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set the value of dateCreate
     *
     * @return  self
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }
}
